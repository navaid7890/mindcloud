<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends MY_Controller
{

    /**
     * Contact US Controller
     */

    public function __construct()
    {
        // Call the Model constructor latest_product
        parent::__construct();
    }

    public function index()
    {
        global $config;
        // $this->cms_page_id = 5;
        $data = array();

        //TAB TITLE
        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;

        //INNER BANNER
        $b = $this->get_ibanner(2);
        $data['ititle'] = $b['ititle'];
        $data['ibanner_img'] = $b['ibanner_img'];


        //CONTENT
        $conts = $this->model_cms_page->get_page(110);
        $data['con1'] = $conts['child'][0];


        $this->load_view("index", $data);
    }


    public function send()
    {

        if (array_filled($_POST)) {
            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_inquiry")) {
                    $data = $_POST['inquiry'];
                    $data['inquiry_status'] = 1;

                    $this->model_inquiry->set_attributes($data);
                    $inserted_id = $this->model_inquiry->save();
                    // debug($data,1);

                    $form_data = $this->model_inquiry->find_by_pk($inserted_id);

                    parent::inquiry($data);
                  
                  //  $this->model_email->contactInquiry($form_data);

                    // debug($this->model_email);

                    $this->json_param['status'] = true;
                    $this->json_param['msg']['title'] = 'Inquiry Send';
                    $this->json_param['msg']['desc'] = 'We appreciate that you’ve taken the time to write us. We\'ll get back to you very soon.';
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }


    public function ajax_send_online_consultation()
    {
        if (array_filled($_POST)) {
            $i = false;
            //if(isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response']))
            if ($i) {
                $param['status'] = 1;
                $param['txt'] = 'Please prove you\'re not a robot'; //'The secret parameter is invalid';
                echo json_encode($param);
            } else {

                if ($this->validate("model_online_consultation")) {
                    $data = $_POST['online_consultation'];
                    $data['oc_status'] = 1;

                    $this->model_online_consultation->set_attributes($data);
                    $inserted_id = $this->model_online_consultation->save();


                    $this->model_email->contactInquiry_online_consultation($data);


                    $this->json_param['status'] = true;
                    $this->json_param['msg']['title'] = '';
                    $this->json_param['msg']['desc'] = 'We appreciate that you’ve taken the time to write us. We\'ll get back to you very soon.';
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }

                echo json_encode($this->json_param);
            }
        }
    }

    public function ajax_product_inquiry()
    {
        if (count($_POST) > 0) {
            if ($this->validate("model_product_inquiry")) {

                $form_name = 'product_inquiry';
                $model_name = "model_" . $form_name;
                $model_obj = $this->$model_name;

                $data = array();
                $data = $_POST[$form_name];
                $data[$model_obj->get_status_field()] = 1;
                $model_obj->set_attributes($data);
                $inserted_id = $model_obj->save();

                if ($inserted_id > 0) {
                    // Send email to Admin for product Inquiry
                    $this->model_email->product_inquiry_mail($inserted_id);


                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = 'product_inquiry successfully added';
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = 'Fields are not correct';
                }
            } else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }

            echo json_encode($this->json_param);
        }
    }



    public function ajax_contact_us3()
    {
        if (count($_POST) > 0) {

            if ($this->validate("model_build_your_trip_inquiry")) {

                $form_name = 'build_your_trip_inquiry';
                $model_name = "model_" . $form_name;
                $model_obj = $this->$model_name;

                $data = array();
                $data = $_POST[$form_name];
                $data['b_is_onway'] = isset($data['b_is_onway']) ? $data['b_is_onway'] : 0;
                $data['b_is_roundtrip'] = isset($data['b_is_roundtrip']) ? $data['b_is_roundtrip'] : 0;
                $data['b_multiple_destination'] = isset($data['b_multiple_destination']) ? $data['b_multiple_destination'] : 0;

                $data[$model_obj->get_status_field()] = 1;
                $model_obj->set_attributes($data);
                $inserted_id = $model_obj->save();

                if ($inserted_id > 0) {
                    // Send email to Admin for product Inquiry
                    //$this->model_email->product_inquiry_mail($inserted_id);


                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = 'We appreciate that you’ve taken the time to write us. We\'ll get back to you very soon.';
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = 'Fields are not correct';
                }
            } else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }

            echo json_encode($this->json_param);
        }
    }
    public function review()
    {
        if (array_filled($_POST)) {


            //$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
            if ($this->validate("model_learning_journey_course_review")) {
                $data = $_POST['learning_journey_course_review'];
                $data['learning_journey_course_review_status'] = 1;


                $this->model_learning_journey_course_review->set_attributes($data);
                $inserted_id = $this->model_learning_journey_course_review->save();


                $form_data = $this->model_learning_journey_course_review->find_by_pk($inserted_id);
                // $this->model_email->contactInquiry($form_data);  

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Review Send';
                $this->json_param['msg']['desc'] = 'We appreciate that you’ve taken the time to write us your Review.';
            } else {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
            }


            echo json_encode($this->json_param);
        }
    }
    public function tutorial_review()
    {
        if (array_filled($_POST)) {


            //$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
            if ($this->validate("model_expert_tutorial_review")) {
                $data = $_POST['expert_tutorial_review'];
                $data['tutorial_review_status'] = 1;


                $this->model_expert_tutorial_review->set_attributes($data);
                $inserted_id = $this->model_expert_tutorial_review->save();


                $form_data = $this->model_expert_tutorial_review->find_by_pk($inserted_id);
                // $this->model_email->contactInquiry($form_data);  

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Review Send';
                $this->json_param['msg']['desc'] = 'We appreciate that you’ve taken the time to write us your Review.';
            } else {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
            }


            echo json_encode($this->json_param);
        }
    }
    public function content_review()
    {
        if (array_filled($_POST)) {


            //$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
            if ($this->validate("model_learning_journey_content_review")) {
                $data = $_POST['learning_journey_content_review'];
                $data['learning_journey_content_review_status'] = 1;


                $this->model_learning_journey_content_review->set_attributes($data);
                $inserted_id = $this->model_learning_journey_content_review->save();


                $form_data = $this->model_learning_journey_content_review->find_by_pk($inserted_id);
                // $this->model_email->contactInquiry($form_data);  

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Review Send';
                $this->json_param['msg']['desc'] = 'We appreciate that you’ve taken the time to write us your Review.';
            } else {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
            }


            echo json_encode($this->json_param);
        }
    }
    public function learing_startup()
    {
        if (array_filled($_POST)) {

            $param = array();
            $param['order'] = "startup_id DESC";
            $param['where']['startup_user_id'] = $this->userid;
            $tool = $this->model_startup->find_one_active($param);

            if (!empty($tool)) {

                //   debug($tool, 1);

                $id = $tool['startup_id'];

                $data = array();
                $data = $_POST['startup'];

                $data['startup_user_id'] = $tool['startup_user_id'];
                $this->model_startup->update_by_pk($id, $data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Updated';
                $this->json_param['msg']['desc'] = 'Start Up Updated';
            } 

         
            else if ($this->validate("model_startup")) {

                $data = $_POST['startup'];
                $data['startup_status'] = 1;


                $this->model_startup->set_attributes($data);
                $inserted_id = $this->model_startup->save();


                $form_data = $this->model_startup->find_by_pk($inserted_id);
                // $this->model_email->contactInquiry($form_data);  

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Review Send';
                $this->json_param['msg']['desc'] = 'You’ve successfully added your Startup name.';
            
            
        
    }
            
            
            else {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
            }


            echo json_encode($this->json_param);
        }
    }
    public function exp_tutorial_vid_percent()
    {
        
        
        if (array_filled($_POST)) {

// debug($_POST);
            //$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
            // if ($this->validate("model_mytutorial")) {
            //     $data = $_POST['mytutorial'];
            //     $data['mytutorial_status'] = 1;

            //     $this->model_mytutorial->set_attributes($data);
            //     $inserted_id = $this->model_mytutorial->save();

            //     $form_data = $this->model_mytutorial->find_by_pk($inserted_id);

            //     $this->json_param['status'] = true;
            //     $this->json_param['msg']['title'] = 'Marked As Completed';
            //     $this->json_param['msg']['desc'] = 'Marked As Completed';
            // } else {
            //     $this->json_param['status'] = false;
            //     $this->json_param['msg']['title'] = 'Error Occurred';
            //     $this->json_param['msg']['desc'] = validation_errors();
            // }

            $param = array();
            // $param['order'] = "mytutorial_id DESC";
            $param['where']['mytutorial_user_id'] = $this->userid;
            $param['where']['mytutorial_tutorial_id'] = $_POST['courseid'];
            // debug($param['where']['mytutorial_tutorial_id']);
            $mytutorial = $this->model_mytutorial->find_one_active($param);

            if ($this->validate("model_mytutorial")) {

                // debug("there");
                if (!empty($mytutorial)) {

                //    debug($mytutorial);

                    $id = $mytutorial['mytutorial_id'];

                    $data = array();
                    $data = $_POST['mytutorial'];

                    $data['mytutorial_total_percent'] = $mytutorial['mytutorial_total_percent'] + 1;
                    $this->model_mytutorial->update_by_pk($id, $data);

                    $this->json_param['status'] = true;
                    $this->json_param['msg']['title'] = 'Proceeding...';
                    $this->json_param['msg']['desc'] = 'Go to Next Step';
                } else {

                    //    debug($_POST['tool_builder_vp_step_id']);
                    $data = $_POST['mytutorial'];
                    $data['mytutorial_status'] = 1;


                    $data['mytutorial_user_id'] = $this->userid;
                    $data['mytutorial_total_percent'] = 1;

                    $this->model_mytutorial->set_attributes($data);
                    $inserted_id = $this->model_mytutorial->save();


                    $this->json_param['status'] = true;
                    $this->json_param['msg']['title'] = 'Saved';
                    $this->json_param['msg']['desc'] = 'Go to Next Step';
                }
            } else {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
            }


            echo json_encode($this->json_param);
        }
    }
    public function learing_transcript()
    {
        if (array_filled($_POST)) {
            //$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
            if ($this->validate("model_learning_journey_transcript")) {
                $data = $_POST['learning_journey_transcript'];
                $data['learning_journey_transcript_status'] = 1;

                $transcript = array();
                $transcript['where']['learning_journey_transcript_user_id'] = $data['learning_journey_transcript_user_id'];
                $transcript['where']['learning_journey_transcript_content_id'] = $data['learning_journey_transcript_content_id'];
                $transcript['where']['learning_journey_transcript_percent'] = $data['learning_journey_transcript_percent'];
                $dataTrans = $this->model_learning_journey_transcript->find_all_active($transcript);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Marked Complete';
                $this->json_param['msg']['desc'] = '';

                if (count($dataTrans) == 0) {
                    $this->model_learning_journey_transcript->set_attributes($data);
                    $inserted_id = $this->model_learning_journey_transcript->save();


                    $form_data = $this->model_learning_journey_transcript->find_by_pk($inserted_id);
                    // $this->model_email->contactInquiry($form_data);  

                    $this->json_param['msg']['percentage'] = 34;
                } else {
                    $this->json_param['msg']['percentage'] = 0;
                }
            } else {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
            }


            echo json_encode($this->json_param);
        }
    }


    public function get_transcript_percent()
    {
        $data = $_POST['learning_journey_transcript'];
        $transcript = array();
        $transcript['where']['learning_journey_transcript_user_id'] = $data['learning_journey_transcript_user_id'];
        $transcript['where']['learning_journey_transcript_content_id'] = $data['learning_journey_transcript_content_id'];
        $dataTrans = $this->model_learning_journey_transcript->find_all_active($transcript);
        if (count($dataTrans)) {
            $this->json_param['status'] = true;
            $this->json_param['percent'] = 34;
        } else {
            $this->json_param['percent'] = 0;
        }
        echo json_encode($this->json_param);
    }

    public function get_toolbuilder_percent()
    {
        $data = $_POST['learning_journey_transcript'];
        $transcript = array();
        $transcript['where']['learning_journey_transcript_user_id'] = $data['learning_journey_transcript_user_id'];
        $transcript['where']['learning_journey_transcript_content_id'] = $data['learning_journey_transcript_content_id'];
        $dataTrans = $this->model_learning_journey_transcript->find_all_active($transcript);
        if (count($dataTrans)) {
            $this->json_param['status'] = true;
            $this->json_param['percent'] = 34;
        } else {
            $this->json_param['percent'] = 0;
        }
        echo json_encode($this->json_param);
    }



    // public function ajax_formsend()
    // {


    //     if(array_filled($_POST)) 
    //     {
    //     $i = false;

    //                  if ($this->form_validation->run() == FALSE) {
    //             $this->json_param['status'] = false;
    //             $this->json_param['msg']['title'] = 'Error Occurred';
    //             $this->json_param['msg']['desc'] = validation_errors();
    //              }
    //           else
    //           {

    //             // debug($_POST);
    //             $data= array();
    //             $data=$_POST['tool_builder'];
    //             $data['tool_builder_user_id'] = $this->userid;
    //             $data['tool_builder_step_id'] = 1;
    //             // debug($data);
    //             $this->model_tool_builder->set_attributes($data);
    //             $inserted_id = $this->model_tool_builder->save();


    //             $this->json_param['status'] = true;
    //             $this->json_param['msg']['title'] = 'Saved';
    //             $this->json_param['msg']['desc'] = 'Go to Next Step';
    //           //  $this->json_param['msg']['url'] = l('step-1').'?query-id='.$inserted_id.'&key='.md5($inserted_id);

    //           }

    //             echo json_encode($this->json_param);

    //     }
    // }




    public function ajax_formsend()
    {


        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_id DESC";
            $param['where']['tool_builder_user_id'] = $this->userid;
            $tool = $this->model_tool_builder->find_one_active($param);


            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_tool_builder")) {


                    if (!empty($tool)) {



                        $id = $tool['tool_builder_id'];

                        $data = array();
                        $data = $_POST['tool_builder'];

                        

                        $data['tool_builder_step_id'] = $tool['tool_builder_step_id'] + 1;
                        // $data['tool_builder_percent'] = 1;
                        $this->model_tool_builder->update_by_pk($id, $data);

                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {

                        $data = $_POST['tool_builder'];
                        $data['tool_builder_status'] = 1;
                        $data['tool_builder_percent'] = 1;

                        $data['tool_builder_user_id'] = $this->userid;
                        $data['tool_builder_step_id'] = 1;
                        

                        $this->model_tool_builder->set_attributes($data);
                        $inserted_id = $this->model_tool_builder->save();


                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }



    public function tool_business_multi_formsend()
    {


        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_id DESC";
            $param['where']['tool_builder_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_bmc_multi->find_one_active($param);


            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_tool_builder_bmc_multi")) {


                    if (!empty($tool)) {



                        $id = $tool['tool_builder_id'];

                        $data = array();
                        $data = $_POST['tool_builder_bmc_multi'];

                        $data['tool_builder_step_id'] = $tool['tool_builder_step_id'] + 1;
                        $this->model_tool_builder_bmc_multi->update_by_pk($id, $data);

                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {

                        //    debug($_POST['tool_builder_bmc_multi']);
                        $data = $_POST['tool_builder_bmc_multi'];
                        $data['tool_builder_status'] = 1;


                        $data['tool_builder_user_id'] = $this->userid;
                        $data['tool_builder_step_id'] = 1;

                        $this->model_tool_builder_bmc_multi->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_bmc_multi->save();


                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }



    public function tool_vp_formsend()
    {


        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_vp_id DESC";
            $param['where']['tool_builder_vp_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_vp->find_one_active($param);


            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_tool_builder_vp")) {


                    if (!empty($tool)) {

                        //   debug($tool, 1);

                        $id = $tool['tool_builder_vp_id'];

                        $data = array();
                        $data = $_POST['tool_builder_vp'];

                        $data['tool_builder_vp_step_id'] = $tool['tool_builder_vp_step_id'] + 1;
                        $this->model_tool_builder_vp->update_by_pk($id, $data);

                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {

                        //    debug($_POST['tool_builder_vp_step_id']);
                        $data = $_POST['tool_builder_vp'];
                        $data['tool_builder_vp_status'] = 1;


                        $data['tool_builder_vp_user_id'] = $this->userid;
                        $data['tool_builder_vp_step_id'] = 1;

                        $this->model_tool_builder_vp->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_vp->save();


                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }



    public function tool_smp_formsend()
    {


        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_strg_mkt_id DESC";
            $param['where']['tool_builder_strg_mkt_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_strg_mkt->find_one_active($param);


            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_tool_builder_strg_mkt")) {


                    if (!empty($tool)) {

                        //   debug($tool, 1);

                        $id = $tool['tool_builder_strg_mkt_id'];

                        $data = array();
                        $data = $_POST['tool_builder_strg_mkt'];

                        $data['tool_builder_strg_mkt_step_id'] = $tool['tool_builder_strg_mkt_step_id'] + 1;
                        $this->model_tool_builder_strg_mkt->update_by_pk($id, $data);

                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {

                        //    debug($_POST['tool_builder_vp_step_id']);
                        $data = $_POST['tool_builder_strg_mkt'];
                        $data['tool_builder_strg_mkt_status'] = 1;


                        $data['tool_builder_strg_mkt_user_id'] = $this->userid;
                        $data['tool_builder_strg_mkt_step_id'] = 1;

                        $this->model_tool_builder_strg_mkt->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_strg_mkt->save();


                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }



    public function tool_cjdg_formsend()
    {


        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_cj_dg_id DESC";
            $param['where']['tool_builder_cj_dg_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_cj_dg->find_one_active($param);


            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_tool_builder_cj_dg")) {


                    if (!empty($tool)) {

                        //   debug($tool, 1);

                        $id = $tool['tool_builder_cj_dg_id'];

                        $data = array();
                        $data = $_POST['tool_builder_cj_dg'];

                        $data['tool_builder_cj_dg_step_id'] = $tool['tool_builder_cj_dg_step_id'] + 1;
                        $this->model_tool_builder_cj_dg->update_by_pk($id, $data);

                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {

                        //    debug($_POST['tool_builder_vp_step_id']);
                        $data = $_POST['tool_builder_cj_dg'];
                        $data['tool_builder_cj_dg_status'] = 1;


                        $data['tool_builder_cj_dg_user_id'] = $this->userid;
                        $data['tool_builder_cj_dg_step_id'] = 1;

                        $this->model_tool_builder_cj_dg->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_cj_dg->save();


                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }
    public function tool_pmmt_formsend()
    {
        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_id DESC";
            $param['where']['tool_builder_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_pmmt->find_one_active($param);
            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {
                if ($this->validate("model_tool_builder_pmmt")) {
                    if (!empty($tool)) {
                        //   debug($tool, 1);
                        $id = $tool['tool_builder_id'];
                        $data = array();
                        $data = $_POST['tool_builder_pmmt'];
                        $data['tool_builder_step_id'] = $tool['tool_builder_step_id'] + 1;
                        $this->model_tool_builder_pmmt->update_by_pk($id, $data);
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {
                        //    debug($_POST['tool_builder_step_id']);
                        $data = $_POST['tool_builder_pmmt'];
                        $data['tool_builder_status'] = 1;
                        $data['tool_builder_user_id'] = $this->userid;
                        $data['tool_builder_step_id'] = 1;
                        $this->model_tool_builder_pmmt->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_pmmt->save();
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }


    public function tool_beps_formsend()
    {
        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_id DESC";
            $param['where']['tool_builder_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_fm_beps->find_one_active($param);
            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {
                if ($this->validate("model_tool_builder_fm_beps")) {
                    if (!empty($tool)) {
                        //   debug($tool, 1);
                        $id = $tool['tool_builder_id'];
                        $data = array();
                        $data = $_POST['tool_builder_fm_beps'];
                        $data['tool_builder_step_id'] = $tool['tool_builder_step_id'] + 1;
                        $this->model_tool_builder_fm_beps->update_by_pk($id, $data);
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {
                        //    debug($_POST['tool_builder_step_id']);
                        $data = $_POST['tool_builder_fm_beps'];
                        $data['tool_builder_status'] = 1;
                        $data['tool_builder_user_id'] = $this->userid;
                        $data['tool_builder_step_id'] = 1;
                        $this->model_tool_builder_fm_beps->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_fm_beps->save();
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }




    public function tool_dcvm_formsend()
    {
        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_id DESC";
            $param['where']['tool_builder_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_fm_dcvm->find_one_active($param);
            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {
                if ($this->validate("model_tool_builder_fm_dcvm")) {
                    if (!empty($tool)) {
                        //   debug($tool, 1);
                        $id = $tool['tool_builder_id'];
                        $data = array();
                        $data = $_POST['tool_builder_fm_dcvm'];
                        $data['tool_builder_step_id'] = $tool['tool_builder_step_id'] + 1;
                        $this->model_tool_builder_fm_dcvm->update_by_pk($id, $data);
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {
                        //    debug($_POST['tool_builder_step_id']);
                        $data = $_POST['tool_builder_fm_dcvm'];
                        $data['tool_builder_status'] = 1;
                        $data['tool_builder_user_id'] = $this->userid;
                        $data['tool_builder_step_id'] = 1;
                        $this->model_tool_builder_fm_dcvm->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_fm_dcvm->save();
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }



    public function cancle_subscribe()
    {
        if (array_filled($_POST)) {

            $param['where']['user_id'] = $this->userid;
            $tool = $this->model_user->find_one_active($param);

            if (!empty($tool)) {

                //   debug($tool, 1);

                $id = $tool['user_id'];

                $data = array();
                $data = $_POST['user'];

                $data['user_id'] = $tool['user_id'];
                $this->model_user->update_by_pk($id, $data);
                parent::cancle_sub_email($data);
                // exit();

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Updated';
                $this->json_param['msg']['desc'] = 'Subscription canceled';
            } 

         
    //         else if ($this->validate("model_user")) {

    //             $data = $_POST['user'];
    //             $data['user_status'] = 1;


    //             $this->model_user->set_attributes($data);
    //             $inserted_id = $this->model_user->save();
    //             parent::book($data);

    //             $form_data = $this->model_user->find_by_pk($inserted_id);
    //             // $this->model_email->contactInquiry($form_data);  

    //             $this->json_param['status'] = true;
    //             $this->json_param['msg']['title'] = 'Subscription canceled';
    //             $this->json_param['msg']['desc'] = 'Subscription canceled.';
            
            
        
    // }
            
            
            else {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
            }


            echo json_encode($this->json_param);
        }
    }



    public function tool_cfs_formsend()
    {
        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_id DESC";
            $param['where']['tool_builder_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_fm_cfs->find_one_active($param);
            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {
                if ($this->validate("model_tool_builder_fm_cfs")) {
                    if (!empty($tool)) {
                        //   debug($tool, 1);
                        $id = $tool['tool_builder_id'];
                        $data = array();
                        $data = $_POST['tool_builder_fm_cfs'];
                        $data['tool_builder_step_id'] = $tool['tool_builder_step_id'] + 1;
                        $this->model_tool_builder_fm_cfs->update_by_pk($id, $data);
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {
                        //    debug($_POST['tool_builder_step_id']);
                        $data = $_POST['tool_builder_fm_cfs'];
                        $data['tool_builder_status'] = 1;
                        $data['tool_builder_user_id'] = $this->userid;
                        $data['tool_builder_step_id'] = 1;
                        $this->model_tool_builder_fm_cfs->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_fm_cfs->save();
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }



    public function tool_bss_formsend()
    {
        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_id DESC";
            $param['where']['tool_builder_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_fm_bss->find_one_active($param);
            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {
                if ($this->validate("model_tool_builder_fm_bss")) {
                    if (!empty($tool)) {
                        //   debug($tool, 1);
                        $id = $tool['tool_builder_id'];
                        $data = array();
                        $data = $_POST['tool_builder_fm_bss'];
                        $data['tool_builder_step_id'] = $tool['tool_builder_step_id'] + 1;
                        $this->model_tool_builder_fm_bss->update_by_pk($id, $data);
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {
                        //    debug($_POST['tool_builder_step_id']);
                        $data = $_POST['tool_builder_fm_bss'];
                        $data['tool_builder_status'] = 1;
                        $data['tool_builder_user_id'] = $this->userid;
                        $data['tool_builder_step_id'] = 1;
                        $this->model_tool_builder_fm_bss->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_fm_bss->save();
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }


    public function tool_income_formsend()
    {
        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_id DESC";
            $param['where']['tool_builder_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_fm_income->find_one_active($param);
            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {
                if ($this->validate("model_tool_builder_fm_income")) {
                    if (!empty($tool)) {
                        //   debug($tool, 1);
                        $id = $tool['tool_builder_id'];
                        $data = array();
                        $data = $_POST['tool_builder_fm_income'];
                        $data['tool_builder_step_id'] = $tool['tool_builder_step_id'] + 1;
                        $this->model_tool_builder_fm_income->update_by_pk($id, $data);
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {
                        //    debug($_POST['tool_builder_step_id']);
                        $data = $_POST['tool_builder_fm_income'];
                        $data['tool_builder_status'] = 1;
                        $data['tool_builder_user_id'] = $this->userid;
                        $data['tool_builder_step_id'] = 1;
                        $this->model_tool_builder_fm_income->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_fm_income->save();
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }


    public function tool_swot_formsend()
    {
        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_id DESC";
            $param['where']['tool_builder_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_swot->find_one_active($param);
            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {
                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {
                if ($this->validate("model_tool_builder_swot")) {
                    if (!empty($tool)) {
                        //   debug($tool, 1);
                        $id = $tool['tool_builder_id'];
                        $data = array();
                        $data = $_POST['tool_builder_swot'];
                        $data['tool_builder_step_id'] = $tool['tool_builder_step_id'] + 1;
                        $this->model_tool_builder_swot->update_by_pk($id, $data);
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {
                        //    debug($_POST['tool_builder_vp_step_id']);
                        $data = $_POST['tool_builder_swot'];
                        $data['tool_builder_status'] = 1;
                        $data['tool_builder_user_id'] = $this->userid;
                        $data['tool_builder_step_id'] = 1;
                        $this->model_tool_builder_swot->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_swot->save();
                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }
    public function tool_mc_formsend()
    {


        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_mc_mc_id DESC";
            $param['where']['tool_builder_mc_mc_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_mc_mc->find_one_active($param);


            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_tool_builder_mc_mc")) {


                    if (!empty($tool)) {

                        //   debug($tool, 1);

                        $id = $tool['tool_builder_mc_mc_id'];

                        $data = array();
                        $data = $_POST['tool_builder_mc_mc'];

                        $data['tool_builder_mc_mc_step_id'] = $tool['tool_builder_mc_mc_step_id'] + 1;
                        $this->model_tool_builder_mc_mc->update_by_pk($id, $data);

                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {

                        //    debug($_POST['tool_builder_vp_step_id']);
                        $data = $_POST['tool_builder_mc_mc'];
                        $data['tool_builder_mc_mc_status'] = 1;


                        $data['tool_builder_mc_mc_user_id'] = $this->userid;
                        $data['tool_builder_mc_mc_step_id'] = 1;

                        $this->model_tool_builder_mc_mc->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_mc_mc->save();


                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }
    public function tool_osf_formsend()
    {


        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_osf_id DESC";
            $param['where']['tool_builder_osf_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_osf->find_one_active($param);


            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_tool_builder_osf")) {


                    if (!empty($tool)) {

                        //   debug($tool, 1);

                        $id = $tool['tool_builder_osf_id'];

                        $data = array();
                        $data = $_POST['tool_builder_osf'];

                        $data['tool_builder_osf_step_id'] = $tool['tool_builder_osf_step_id'] + 1;
                        $this->model_tool_builder_osf->update_by_pk($id, $data);

                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {

                        //    debug($_POST['tool_builder_vp_step_id']);
                        $data = $_POST['tool_builder_osf'];
                        $data['tool_builder_osf_status'] = 1;


                        $data['tool_builder_osf_user_id'] = $this->userid;
                        $data['tool_builder_osf_step_id'] = 1;

                        $this->model_tool_builder_osf->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_osf->save();


                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }
    public function tool_lts_formsend()
    {


        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_lts_id DESC";
            $param['where']['tool_builder_lts_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_lts->find_one_active($param);


            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_tool_builder_lts")) {


                    if (!empty($tool)) {

                        //   debug($tool, 1);

                        $id = $tool['tool_builder_lts_id'];

                        $data = array();
                        $data = $_POST['tool_builder_lts'];

                        $data['tool_builder_lts_step_id'] = $tool['tool_builder_lts_step_id'] + 1;
                        $this->model_tool_builder_lts->update_by_pk($id, $data);

                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {

                        //    debug($_POST['tool_builder_vp_step_id']);
                        $data = $_POST['tool_builder_lts'];
                        $data['tool_builder_lts_status'] = 1;


                        $data['tool_builder_lts_user_id'] = $this->userid;
                        $data['tool_builder_lts_step_id'] = 1;

                        $this->model_tool_builder_lts->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_lts->save();


                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }
    public function tool_ids_formsend()
    {


        if (array_filled($_POST)) {
            $param = array();
            $param['order'] = "tool_builder_ids_id DESC";
            $param['where']['tool_builder_ids_user_id'] = $this->userid;
            $tool = $this->model_tool_builder_ids->find_one_active($param);


            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_tool_builder_ids")) {


                    if (!empty($tool)) {

                        //   debug($tool, 1);

                        $id = $tool['tool_builder_ids_id'];

                        $data = array();
                        $data = $_POST['tool_builder_ids'];

                        $data['tool_builder_ids_step_id'] = $tool['tool_builder_ids_step_id'] + 1;
                        $this->model_tool_builder_ids->update_by_pk($id, $data);

                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Proceeding...';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    } else {

                        //    debug($_POST['tool_builder_vp_step_id']);
                        $data = $_POST['tool_builder_ids'];
                        $data['tool_builder_ids_status'] = 1;


                        $data['tool_builder_ids_user_id'] = $this->userid;
                        $data['tool_builder_ids_step_id'] = 1;

                        $this->model_tool_builder_ids->set_attributes($data);
                        $inserted_id = $this->model_tool_builder_ids->save();


                        $this->json_param['status'] = true;
                        $this->json_param['msg']['title'] = 'Saved';
                        $this->json_param['msg']['desc'] = 'Go to Next Step';
                    }
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }



    public function chk_value()
    {
        echo 'sdfsf';
    }

    public function expert_send()
    {
        if (array_filled($_POST)) {
            $i = false;
            if (isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } else {

                if ($this->validate("model_inquiry")) {
                    $data = $_POST['inquiry'];
                    $data['inquiry_image'] = $_FILES['inquiry']['inquiry_image'];
                    $data['inquiry_image_path'] = 'assets/uploads/inquiry';
                    $data['inquiry_status'] = 1;

                    $this->model_inquiry->set_attributes($data);
                    $inserted_id = $this->model_inquiry->save();


                    $form_data = $this->model_inquiry->find_by_pk($inserted_id);
                    $this->model_email->contactInquiry($form_data);

                    $this->json_param['status'] = true;
                    $this->json_param['msg']['title'] = 'Inquiry Send';
                    $this->json_param['msg']['desc'] = 'We appreciate that you’ve taken the time to write us. We\'ll get back to you very soon.';
                } else {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
            }
            echo json_encode($this->json_param);
        }
    }

    public function ajax_booking()
    {
        if(array_filled($_POST)) 
        {  
            $i = 1;
          
            if($i==2)
            {
                $param['status'] = 1;
                $param['txt'] = 'Please prove you\'re not a robot';//'The secret parameter is invalid';
                echo json_encode($param);
            } 
            else
            {
             
                if($this->validate("model_booking"))
                {
                    

               
                    $data = $_POST['booking'];
                    $data['booking_expert_approval'] = 0;
                    //$data['booking_admin_approval'] = 1;
                    $data['booking_status'] = 1;
        
                    // debug($data);
                
                    $this->model_booking->set_attributes($data);
                    $inserted_id = $this->model_booking->save();

                     parent::book($data);
                    
                    //$this->model_email->bookingInquiry($data);
                    //debug($this->model_email,1);

         
        

                 //   debug(parent::book($data),1);
                    
                    $this->json_param['status'] = true;
                    $this->json_param['msg']['title'] = 'Booking Saved';
                    $this->json_param['msg']['desc'] = 'Please Wait for Expert Approval';
                
                }
                else
                {
                    $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Error Occurred';
                    $this->json_param['msg']['desc'] = validation_errors();
                }
                
                echo json_encode($this->json_param);
            }
        }
    }

    public function paid_user()
    {


        $id = $this->userid;
        $u=$this->model_user->find_by_pk($this->userid);

        $u['user_paid']=1;
        $this->model_user->update_by_pk($id, $u);

        echo json_encode($this->json_param);

        // $data = array();
        // $data['where']['user_id']=$this->userid

        // $data['tool_builder_lts_step_id'] = $tool['tool_builder_lts_step_id'] + 1;
    }

    
}

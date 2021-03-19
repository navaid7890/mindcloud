<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends MY_Controller {

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
        $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

        //INNER BANNER
         $b = $this->get_ibanner(2);
         $data['ititle'] = $b['ititle'];
         $data['ibanner_img'] = $b['ibanner_img'];
         

         //CONTENT
          $data['cont'] = $this->model_cms_page->find_by_pk(9);


        $this->load_view("index",$data);
    }


    public function send()
    {
                    // debug($_POST);
                    // // debug($_FILES);
                    // exit;
        if(array_filled($_POST)) 
        {
            $i = false;
            if(isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response']))
            {
                
                $this->json_param['status'] = false;
                    $this->json_param['msg']['title'] = 'Recaptcha Redquired';
                    $this->json_param['msg']['desc'] = 'Please prove you\'re not a robot';
            } 
            else
            {

                //$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
                if($this->validate("model_inquiry"))
                {
                    $data = $_POST['inquiry'];
                    $data['inquiry_status'] = 1;
                    // $data['inquiry_image']  = $_FILES['inquiry']['name']['inquiry_image'];

                    $this->model_inquiry->set_attributes($data);
                    $inserted_id = $this->model_inquiry->save();
                // debug( $inserted_id);

                    $form_data = $this->model_inquiry->find_by_pk($inserted_id);
                    $this->model_email->contactInquiry($form_data);  

                    $this->json_param['status'] = true;
                    $this->json_param['msg']['title'] = 'Inquiry Send';
                    $this->json_param['msg']['desc'] = 'We appreciate that you’ve taken the time to write us. We\'ll get back to you very soon.';
        
                }
                else
                {
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
        if(array_filled($_POST)) 
        {
            $i = false;
            //if(isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response']))
            if($i)
            {
                $param['status'] = 1;
                $param['txt'] = 'Please prove you\'re not a robot';//'The secret parameter is invalid';
                echo json_encode($param);
            } 
            else
            {

                if($this->validate("model_online_consultation"))
                {
                    $data = $_POST['online_consultation'];
                    $data['oc_status'] = 1;

                    $this->model_online_consultation->set_attributes($data);
                    $inserted_id = $this->model_online_consultation->save();
                    
                    
                    $this->model_email->contactInquiry_online_consultation($data);

                    
                    $this->json_param['status'] = true;
                    $this->json_param['msg']['title'] = '';
                    $this->json_param['msg']['desc'] = 'We appreciate that you’ve taken the time to write us. We\'ll get back to you very soon.';

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

    public function ajax_product_inquiry()
    {
        if(count($_POST) > 0) 
        {
            if($this->validate("model_product_inquiry"))
            {

                $form_name = 'product_inquiry';
                $model_name = "model_".$form_name;
                $model_obj = $this->$model_name ;

                $data = array();
                $data = $_POST[$form_name];
                $data[$model_obj->get_status_field()] = 1;
                $model_obj->set_attributes($data);
                $inserted_id = $model_obj->save();

                if($inserted_id > 0)
                {
                    // Send email to Admin for product Inquiry
                    $this->model_email->product_inquiry_mail($inserted_id);

                    
                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = 'product_inquiry successfully added';
                }
                else
                {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = 'Fields are not correct';
                }
            }
            else
            {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }
            
            echo json_encode($this->json_param);
        }
    }



    public function ajax_contact_us3()
    {
        if(count($_POST) > 0) 
        {

            if($this->validate("model_build_your_trip_inquiry"))
            {

                $form_name = 'build_your_trip_inquiry';
                $model_name = "model_".$form_name;
                $model_obj = $this->$model_name ;

                $data = array();
                $data = $_POST[$form_name];
                $data['b_is_onway'] = isset($data['b_is_onway']) ? $data['b_is_onway'] : 0;
                $data['b_is_roundtrip'] = isset($data['b_is_roundtrip']) ? $data['b_is_roundtrip'] : 0;
                $data['b_multiple_destination'] = isset($data['b_multiple_destination']) ? $data['b_multiple_destination'] : 0;
                
                $data[$model_obj->get_status_field()] = 1;
                $model_obj->set_attributes($data);
                $inserted_id = $model_obj->save();

                if($inserted_id > 0)
                {
                    // Send email to Admin for product Inquiry
                    //$this->model_email->product_inquiry_mail($inserted_id);

                    
                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = 'We appreciate that you’ve taken the time to write us. We\'ll get back to you very soon.';
                }
                else
                {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = 'Fields are not correct';
                }
            }
            else
            {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }
            
            echo json_encode($this->json_param);
        }
    }

}

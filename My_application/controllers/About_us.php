<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends MY_Controller
{

    /**
     * Default Controller
     */

    public function __construct()
    {
        // Call the Model constructor latest_product
        // $this->cms_page_id = 24;
        parent::__construct();
        // $this->view_pre = "cms/";

        //$this->plugin_seo();
    }

    // Default Home Page
    public function index()
    {
        global $config;
        $data = array();

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;


        //INNER BANNER
        $b = $this->get_ibanner(1);
        $data['ititle'] = $b['ititle'];
        $data['ibanner_img'] = $b['ibanner_img'];


        //BANNER
        // $b = $this->get_banner(1);
        // $data['bcontent'] = $b['bcontent'];
        // $data['bimage'] = $b['bimage'];

        // $data_cont = $this->model_cms_page->get_page(36);
        // $data1['cont1'] = $cont['child'][0];
        // $data1['cont2'] = $cont['child'][1];

        // debug($data);
        $cont = array();
        $cont = $this->model_cms_page->get_page(35);
        $data['con1'] = $cont['child'][0];
        $data['con2'] = $cont['child'][1];
        $data['con3'] = $cont['child'][2];
        $data['con4'] = $cont['child'][3];
        $data['con5'] = $cont['child'][4];
        $data['con6'] = $cont['child'][5];
        $data['con7'] = $cont['child'][6];
        $data['con8'] = $cont['child'][7];

        //  debug($data['con8']) ;

        $param = array();
        $param['order'] = "team_id DESC";
        $param['where']['team_type'] = 1;
        $param['limit'] = 3;

        $data['advisory'] = $this->model_team->find_all_active($param);

        $param = array();
        $param['order'] = "team_id DESC";
        $param['where']['team_type'] = 2;
        $param['limit'] = 3;

        $data['team'] = $this->model_team->find_all_active($param);
        // debug($data['advisory']);

        $this->load_view("index", $data);
    }

    public function terms()
    {
        $data = array();
        global $config;

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;

        //INNER BANNER
        $b = $this->get_ibanner(6);
        $data['ititle'] = $b['ititle'];
        $data['ibanner_img'] = $b['ibanner_img'];
        //BANNER
        // $b = $this->get_banner(9);
        // $data['bcontent'] = $b['bcontent'];
        // $data['bimage'] = $b['bimage'];
        $content = $this->model_cms_page->get_page(32);
        // debug($cont);
        // $data['content'] = $content;


        $cont = $this->model_cms_page->get_page(108);
        $data['terms'] = $cont['child'][0];
        // debug($data['con1']);


        $this->load_view("terms", $data);
    }

    public function become_expert()
    {
        $cont = array();
        $cont = $this->model_cms_page->get_page(44);
        $data['con1'] = $cont['child'][0];
        $data['con2'] = $cont['child'][1];
        $data['con3'] = $cont['child'][2];
        $data['con4'] = $cont['child'][3];
        $data['con5'] = $cont['child'][4];
        // debug($data['con2']);

        $this->load_view("become_expert", $data);
    }
    public function enterprise_partners()
    {
        $cont = array();
        $cont = $this->model_cms_page->get_page(50);
        $data['con1'] = $cont['child'][0];
        $data['con2'] = $cont['child'][1];
        $data['con3'] = $cont['child'][2];

        $data['con4'] = $cont['child'][3];
        $data['con5'] = $cont['child'][4];
        $data['con6'] = $cont['child'][5];
        $data['con7'] = $cont['child'][6];
        $data['con8'] = $cont['child'][7];
        $data['con9'] = $cont['child'][8];
        $data['con10'] = $cont['child'][9];
        $data['con11'] = $cont['child'][10];

        $data['con12'] = $cont['child'][11];
        $data['con13'] = $cont['child'][12];
        $data['con14'] = $cont['child'][13];
        $data['con15'] = $cont['child'][14];
        $data['con16'] = $cont['child'][15];
        $data['con17'] = $cont['child'][16];
        $data['con18'] = $cont['child'][17];
        $data['con19'] = $cont['child'][18];

        $data['con20'] = $cont['child'][19];
        $data['con21'] = $cont['child'][20];
        $data['con22'] = $cont['child'][21];
        $data['con23'] = $cont['child'][22];
        $data['con24'] = $cont['child'][23];
        $data['con25'] = $cont['child'][24];
        $data['con26'] = $cont['child'][25];
        $data['con27'] = $cont['child'][26];
        // debug($data['con21']);

        $this->load_view("enterprise_partners", $data);
    }
    public function consult_advisors()
    {
        $cont = array();
        $cont = $this->model_cms_page->get_page(80);
        $data['con1'] = $cont['child'][0];
        $data['con2'] = $cont['child'][1];
        $data['con3'] = $cont['child'][2];
        $data['con4'] = $cont['child'][3];
        $data['con5'] = $cont['child'][4];
        $data['con6'] = $cont['child'][5];
        $data['con7'] = $cont['child'][6];

        $this->load_view("consult_advisors", $data);
    }
    public function innovate()
    {
        $cont = array();
        $cont = $this->model_cms_page->get_page(88);
        $data['con1'] = $cont['child'][0];
        $data['con2'] = $cont['child'][1];
        $data['con3'] = $cont['child'][2];
        $data['con4'] = $cont['child'][3];
        $data['con5'] = $cont['child'][4];
        $data['con6'] = $cont['child'][5];
        $data['con7'] = $cont['child'][6];
        $data['con8'] = $cont['child'][7];
        $data['con9'] = $cont['child'][8];
        $data['con10'] = $cont['child'][9];
        $data['con11'] = $cont['child'][10];
        $data['con12'] = $cont['child'][11];
        $data['con13'] = $cont['child'][12];


        $this->load_view("innovate", $data);
    }
    public function cart()
    {
        $this->load_view("cart-one", $data);
    }

    public function checkout()
    {
        $this->load_view("checkout", $data);
    }



    // public function policy()
    // {
    //     $data = array();
    //     global $config;

    //     $method_title = ucwords($this->uri->segment(1));
    //     $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;

    //     //INNER BANNER
    //     $b = $this->get_ibanner(7);
    //     $data['ititle'] = $b['ititle'];
    //     $data['ibanner_img'] = $b['ibanner_img'];
    //     //BANNER
    //     // $b = $this->get_banner(10);
    //     // $data['bcontent'] = $b['bcontent'];
    //     // $data['bimage'] = $b['bimage'];

    //     $cont = $this->model_cms_page->get_page(34);

    //     $data['content'] = $cont;

    //     $this->load_view("terms", $data);
    // }

    // public function faq()
    // {
    //     global $config;
    //     $data = array();

    //      //TAB TITLE
    //     $method_title = ucwords($this->uri->segment(1));
    //     $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

    //     //INNER BANNER
    //      $b = $this->get_ibanner(2);
    //      $data['ititle'] = $b['ititle'];
    //      $data['ibanner_img'] = $b['ibanner_img'];

    //     $data['faq'] = $this->model_faq->find_all_active();

    //     $this->load_view("faq",$data);
    // }

    // public function testimonials()
    // {
    //     global $config;
    //     $data = array();

    //     //TAB TITLE
    //     $method_title = ucwords($this->uri->segment(1));
    //     $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

    //     //INNER BANNER
    //      $b = $this->get_ibanner(3);
    //      $data['ititle'] = $b['ititle'];
    //      $data['ibanner_img'] = $b['ibanner_img'];

    //      $test['where']['testimonials_top'] = 1;
    //      $test['order'] = "testimonials_id DESC";
    //     $data['test'] = $this->model_testimonials->find_one_active($test);

    //     $data['testimonials'] = $this->model_testimonials->find_all_active();

    //     $this->load_view("testimonials",$data);
    // }


    // public function showcase()
    // {
    //     global $config;
    //     $data = array();

    //       //TAB TITLE
    //     $method_title = ucwords($this->uri->segment(1));
    //     $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

    //     //INNER BANNER
    //      $b = $this->get_ibanner(4);
    //      $data['ititle'] = $b['ititle'];
    //      $data['ibanner_img'] = $b['ibanner_img'];

    //      $data['cont9'] = $this->model_cms_page->find_by_pk_active(9);
    //      $data['cont10'] = $this->model_cms_page->find_by_pk_active(10);

    //      $data['category'] = $this->model_gallery_category->find_all_active();
    //     // debug($data['category']);
    //     $this->load_view("showcase",$data);
    // }


    public function learning()
    {
        $data = array();
        global $config;

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;


        $data['professions'] = $this->model_profession->find_all_active();
        $data['states'] = $this->model_states->find_all_active();

        $param = array();
        $param['where']['tutorial_featured'] = 1;
        $data['course'] = $this->model_tutorial->find_all_active($param);


        $cont = $this->model_cms_page->get_page(2);
        // debug($cont);
        $data['cont1'] = $cont['child'][0];
        $data['cont2'] = $cont['child'][1];
        $data['cont3'] = $cont['child'][2];
        $data['cont4'] = $cont['child'][3];
        $data['cont5'] = $cont['child'][4];
        $data['cont6'] = $cont['child'][5];
        $data['cont7'] = $cont['child'][6];
        $data['cont8'] = $cont['child'][7];
        $data['cont9'] = $cont['child'][8];
        $data['cont10'] = $cont['child'][9];
        $data['cont11'] = $cont['child'][10];
        $data['cont12'] = $cont['child'][11];
        $data['cont13'] = $cont['child'][12];
        $data['cont14'] = $cont['child'][13];

        $data['banner'] = $this->model_inner_banner->find_by_pk(1);

        $data['learning'] = $this->model_learning->find_all_active();
        $data['testimonial'] = $this->model_testimonials->find_all_active();

        $param = array();
        $param['where']['category_featured'] = 1;
        $data['category'] = $this->model_category->find_all_active($param);

        $data['testi'] = $this->model_testimonials->find_all_active();
        $firststate = $this->model_states->find_one_active();
        $data['firststate'] = $firststate['states_id'];

        $exp1 = $this->model_cms_page->get_page(26);

        $data['check'] = $exp1['child'][0];

        $fa = array();
        $fa['where']['faq_category'] = 2;
        $fa['order'] = "faq_id ASC";
        $data['faq'] = $this->model_faq->find_all_active($fa);

        $contdata = $this->model_cms_page->get_page(28);
        // debug($cont);
        $data['contd'] = $contdata['child'][0];

        $data['learn_cat'] = $this->model_learning_journey_category->find_all_active();

        //  debug($data['learn_cat']);

        $this->load_view("learning", $data);
    }

    public function expert()
    {
        $data = array();
        global $config;

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;

        $cont = $this->model_cms_page->get_page(2);

        $data['cont1'] = $cont['child'][4];
        $data['cont2'] = $cont['child'][5];
        $data['cont3'] = $cont['child'][17];

        $conts = $this->model_cms_page->get_page(20);
        $data['con1'] = $conts['child'][0];

        $contss = $this->model_cms_page->get_page(20);

        $data['con2'] = $contss['child'][1];
        $data['con3'] = $contss['child'][2];
        $data['con4'] = $contss['child'][3];
        $data['con5'] = $contss['child'][4];
        $data['con6'] = $contss['child'][4];

  
        $par = array();
        $par['order'] = "category_id ASC";
        $data['main_categories'] = $this->model_category->find_all_active($par);

        $coursecat = array();
        $coursecat['where']['cp_category_id'] = intval($this->input->get('cat'));
        $cate = $this->model_course_category->find_all_active($coursecat);

  

        $categories = $this->model_category->get_category_tutorials();
        $data['main_categories'] = $categories;

        $par2 = array();
        $par2['order'] = "expert_id ASC";
        $data['ex'] = $this->model_expert->find_all_active($par2);
     

        $param = array();
        if (isset($_GET['expert']) and intval($_GET['expert']) > 0) {
            $param['where']['tutorial_expert_id'] = intval($this->input->get('expert'));
        }
        if (isset($_GET['search'])) {
    
            $param['where_like'][] = array('column' => 'tutorial_name', 'value' => $_GET['search']);
        }

        foreach ($cate as $key => $value) {
            $all[] = $value['cp_course_id'];
        }

        $param['order'] = "tutorial_id ASC";
        $param['where_in']['tutorial_id'] = $all;

        $art = $this->model_tutorial->get_details($param);

        $product_data = $this->_pagination('tutorial',$art);
        $data['art'] = $product_data['data'];
        $data['links'] = $product_data['links']; 
      
     
        $pop = array();
        $pop['where']['category_featured'] = 1;
        $data['popular'] = $this->model_category->find_all_active($pop);

        $fa = array();
        $fa['where']['faq_category'] = 1;
        $fa['order'] = "faq_id ASC";
        $data['faq'] = $this->model_faq->find_all_active($fa);


        $param = array();
        $param['where']['category_featured'] = 1;
        $data['category'] = $this->model_category->find_all_active($param);

        $exp1 = $this->model_cms_page->get_page(26);

        $data['check'] = $exp1['child'][0];

        $this->load_view("expert", $data);
    }

    public function course_detail($slug = '')
    {
        global $config;
        $data = array();

        $contss = $this->model_cms_page->get_page(30);
        $data['con1'] = $contss['child'][0];
        $data['con2'] = $contss['child'][1];
        $data['con3'] = $contss['child'][2];

        $fa = array();
        $fa['where']['faq_category'] = 1;
        $fa['order'] = "faq_id ASC";
        $data['faq'] = $this->model_faq->find_all_active($fa);

        $ck = array();
        $ck['where']['tutorial_slug'] = $slug;

        $course = $this->model_tutorial->get_details($ck);
        // debug($course[0]['course_id']);

        $par7 = array();
        $par7['where']['cp_course_id'] = $course[0]['tutorial_id'];
        $coursecat = $this->model_course_category->find_all_active($par7);

        $review = array();
        $review['where']['learning_journey_course_review_course_id'] = $coursecat[0]['cp_course_id'];
        $review_data = $this->model_learning_journey_course_review->find_all_active($review);

        $data['review'] = $review_data;

        if (count($course) < 1) {
            redirect("?msgtype=error&msg=invalid url");
        }

        $data['course'] = $course;

        $pop = array();
        $pop['where']['tutorial_slug !='] = $slug;
        $pop['limit'] = 3;
        $data['popular'] = $this->model_tutorial->find_all_active($pop);

        $tut = array();
        $tut['where']['cp_course_id'] = $course[0]['tutorial_id'];
        $tutorail = $this->model_course_tutorial->find_all_active($tut);

        foreach ($tutorail as $key => $value) {
            $all[] = $value['cp_tutorial_id'];
        }
        //    $lec=array();
        //    $lec['where_in']['tutorial_id']=$all;
        //    $data['lc'] = $this->model_tutorial->find_all_active($lec);
        //   debug($data['lc']);
        $lec = array();
        $lec['where_in']['videos_id'] = $all;
        $data['lc'] = $this->model_videos->find_all_active($lec);

        $par7 = array();
        $par7['where']['cp_course_id'] = $course[0]['tutorial_id'];
        $coursecat = $this->model_course_category->find_all_active($par7);
        // debug($coursecat);

        foreach ($coursecat as $key => $value) {
            $all1[] = $value['cp_category_id'];
        }
        // debug($all1);
        $ccategory = array();
        $ccategory['where_in']['category_id'] = $all1;
        $data['ct'] = $this->model_category->find_all_active($ccategory);
        //debug(  $data['ct']);

        $this->load_view("course_detail", $data);
    }

    public function faq()
    {
        $data = array();
        global $config;

        $par1 = array();
        $par1['where']['faq_category'] = 1;
        if (isset($_GET['search'])) {

            $par1['where_like'][] = array('column' => 'faq_question', 'value' => $_GET['search']);
        }

        $data['ex'] = $this->model_faq->find_all_active($par1);

        $par2 = array();
        $par2['where']['faq_category'] = 2;
        if (isset($_GET['search'])) {

            $par2['where_like'][] = array('column' => 'faq_question', 'value' => $_GET['search']);
        }
        $data['le'] = $this->model_faq->find_all_active($par2);

        $par3 = array();
        $par3['where']['faq_category'] = 3;
        if (isset($_GET['search'])) {

            $par3['where_like'][] = array('column' => 'faq_question', 'value' => $_GET['search']);
        }
        $data['gene'] = $this->model_faq->find_all_active($par3);

        // $par4 = array();
        // $par4['where']['faq_category'] = 4;
        // if (isset($_GET['search'])) {

        //     $par4['where_like'][] = array('column' => 'faq_question', 'value' => $_GET['search']);
        // }
        // $data['cons'] = $this->model_faq->find_all_active($par4);


        $contss = $this->model_cms_page->get_page(78);
        $data['cont1'] = $contss['child'][0];


        $contdata = $this->model_cms_page->get_page(102);
        // debug($cont);
        $data['contd'] = $contdata['child'][0];





        $this->load_view("faq", $data);
    }


    public function newsfeed()
    {
        global $config;
        if ($this->userid > 0) {
            $data = array();
            $data['account_user'] = $this->layout_data['user_data'];

            //  debug($data['account_user']);

            $tab = isset($_GET['type']) ? $_GET['type'] : 'index';
            switch ($tab) {
                case 'message':
                    $active_tab = 3;
                    break;
                case 'photo':
                    $active_tab = 4;
                    break;
                case 'audio':
                    $active_tab = 5;
                    break;
                case 'video':
                    $active_tab = 6;
                    break;
                default:
                    $active_tab = 2;
                    break;
            }
            $data['active_tab'] = $active_tab;


            $data['feeds'] = $feeds = $this->model_post->find_post();


            $this->load_view("newsfeed", $data);
        } else {
            redirect(l('login?msgtype=error&msg=' . urlencode('Please login first')), true);
        }
    }



    public function ajax_post_like()
    {
        // Get user ID
        $user_id = $this->userid;
        // Get post Data
        $post_id = $this->input->post('id');

        // Success
        if ((isset($user_id)) && (isset($post_id))) {

            // Set params
            $post_params['where']['post_like_user_id'] = $user_id;
            $post_params['where']['post_like_post_id'] = $post_id;
            //$post_params['where']['post_like_post_type'] = $post_type;

            // Query
            $already_exits_data = $this->model_post_like->find_count($post_params);

            // Found
            if ($already_exits_data > 0) {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = "Already like this post";
            } else {
                // Set data
                $data_post_like = array(
                    'post_like_post_id' => $post_id,
                    'post_like_user_id' => $user_id,
                    //'post_like_post_type'=> $post_type,
                    'post_like_status' => STATUS_ACTIVE
                );

                // Set attributes and save
                $this->model_post_like->set_attributes($data_post_like);

                $likeid = $this->model_post_like->save();
                // Success
                if ($likeid) {

                    $total_like = $this->model_post_like->total_like($post_id, $post_type);

                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = "Post liked";
                    $this->json_param['count'] = $total_like;
                }
                // Fail
                else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = "Error found please try again";
                }
            }
        }
        // Error
        else {
            $this->json_param['status'] = false;
            $this->json_param['txt'] = "Error found please try again";
        }

        echo json_encode($this->json_param);
    }

    public function ajax_save_comment()
    {
        // Get user ID
        $user_id = $this->userid;
        $post_id = $this->input->post('post_comment_post_id');
        //$post_type =  $this->input->post('post_type');
        $post_comment =  $this->input->post('post_comment_user_comment');

        // Success
        if ((isset($user_id)) && (isset($post_id))) {

            // Set data
            $data_post_comment = array(
                'post_comment_post_id' => $post_id,
                //'post_comment_post_type'=> $post_type,
                'post_comment_user_id' => $user_id,
                'post_comment_user_comment' => $post_comment,
                'post_comment_status' => STATUS_ACTIVE
            );

            // Set attributes and save
            $this->model_post_comment->set_attributes($data_post_comment);

            $commentid = $this->model_post_comment->save();
            // Success
            if ($commentid) {


                // $total_comment = $this->model_post_comment->total_comment($post_id,$post_type);

                // $decode_msg = nl2br(htmlspecialchars_decode($post_comment));
                // $message = parse_smileys($decode_msg, g('base_url') . 'assets/global/smileys/');

                $this->json_param['status'] = true;
                $this->json_param['txt'] = "Comment Added";
                //$this->json_param['post_total_comment'] =$total_comment;
                $name = ucfirst($this->layout_data['user_data']['user_firstname'] . " " . $this->layout_data['user_data']['user_lastname']);
                $image = get_image($this->layout_data['user_data']['ui_profile_image'], $this->layout_data['user_data']['ui_profile_image_path']);
                $this->json_param['post_id'] = $post_id;
                $this->json_param['new_comment'] = '<div class="public-comment">
                            <div class="media">
                                <div class="media-left">
                                    <img src="' . $image . '" class="media-object" style="border-radius: 50px;height: 50px;width: 50px;">
                                </div>
                                <div class="media-body">
                                    <p> <strong class="active">' . $name . '</strong> 
                                    :' . $post_comment . '</p>
                                    <h5>Just Now</h5>
                                </div>
                                
                            </div>
                        </div>';
            }
            // Fail
            else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = "Error Found";
            }
            echo json_encode($this->json_param);
        }
    }


    public function ajax_save_post()
    {

        // Get User id
        $user_id = $this->userid;

        // Success
        if (($user_id != null)) {

            // Get Post data
            $data = $_POST['post'];
            // Set mandatory data
            $data['post_status'] = 1;
            $data['post_user_id'] = $user_id;
            // Set post type
            $type = $data['post_type'];

            // Text description

            if ($type == 1) {

                // Set rules for validation
                $this->form_validation->set_rules('post[post_description]', 'Status', 'required|trim');

                // Success
                if ($this->form_validation->run() == TRUE) {

                    // Set attributes and save
                    $this->model_post->set_attributes($data);
                    // Pass index for file upload
                    $postid = $this->model_post->save();

                    if ($postid) {

                        // save log starts
                        $action_type = 1;
                        $action_type_id = $postid;

                        $this->json_param['status'] = true;
                        $this->json_param['txt'] = "Posted";
                    } else {
                        $this->json_param['status'] = false;
                        $this->json_param['txt'] = "Something Wrong please try again";
                    }
                }
                // Validation error
                else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = validation_errors();
                }
            }
            // Photo / Video
            else if (($type == 2) || ($type == 3)) {

                $error = array();
                // Images
                if ($type == 2) {
                    $file_ext_allow = array('jpeg', 'jpg', 'png');
                    $file_ext = strtolower(pathinfo($_FILES['post']['name']['post_file'], PATHINFO_EXTENSION));
                    if (!in_array($file_ext, $file_ext_allow)) {
                        $error[] = 'not allow to ' . $file_ext . ' file extension';
                    }
                }

                // Audios
                if ($type == 3) {
                    //$file_ext_allow = array('mp3','mp4','ogg');
                    $file_ext_allow = array('mp3', 'mpeg');
                    $file_ext = strtolower(pathinfo($_FILES['post']['name']['post_file'], PATHINFO_EXTENSION));
                    if (!in_array($file_ext, $file_ext_allow)) {
                        $error[] = 'not allow to ' . $file_ext . ' file extension';
                    }
                }


                if (isset($error) and array_filled($error)) {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = implode("<br />", $error);
                } else {
                    ini_set('upload_max_filesize', '10M');
                    ini_set('post_max_size', '10M');
                    ini_set('max_input_time', 300);
                    ini_set('max_execution_time', 300);

                    // Set file
                    $data['post_file'] = $_FILES['post'];
                    // Set attributes and save
                    $this->model_post->set_attributes($data);
                    // Pass index for file upload
                    $postid = $this->model_post->save();

                    if ($postid) {


                        $this->json_param['status'] = true;
                        $this->json_param['txt'] = "Posted";
                    } else {
                        $this->json_param['status'] = false;
                        $this->json_param['txt'] = "Something Wrong please try again";
                    }
                }
            } else if ($type == 4) {
                // Set rules for validation
                $this->form_validation->set_rules('post[post_file]', "Youtube URL", 'required|trim');

                // Success
                if ($this->form_validation->run() == TRUE) {

                    $insert_id = $this->model_post->insert_record($data);
                    // Pass index for file upload
                    if ($insert_id > 0) {

                        $this->json_param['status'] = true;
                        $this->json_param['txt'] = "Posted";
                    } else {
                        $this->json_param['status'] = false;
                        $this->json_param['txt'] = "Something Wrong please try again";
                    }
                }
                // Validation error
                else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = validation_errors();
                }
            }
        }
        // Error
        else {
            $this->json_param['status'] = false;
            $this->json_param['txt'] = lang('something_wrong');
        }

        echo json_encode($this->json_param);
    }

    public function becomeexpert()
    {
        global $config;
        $data = array();


        $conts = $this->model_cms_page->get_page(104);
        $data['con1'] = $conts['child'][0];


        $this->load_view("becomeexpert", $data);
    }

    public function ajax_search_date()
    {
        $data['professional'] = $this->model_user->get_professional_list();

        $this->json_param['status'] = true;
        //$this->json_param['html'] = $this->load->view('appointment/_schedule',$data,true);
        $this->json_param['html'] = $this->load->view('appointment/_date', $data, true);
        echo json_encode($this->json_param);
    }


    public function ajax_get_date()
    {
        $this->json_param['status'] = true;
        $this->json_param['html'] = $this->load->view('appointment/_date', $data, true);
        echo json_encode($this->json_param);
    }


    public function ajax_get_timeslot()
    {  
        $data=array();

        $date = $this->input->post('date');
        $professional_id = $this->input->post('professional_id');


        
            $data['open_time'] = strtotime("11:00");
            $data['close_time'] = strtotime("18:00");
            

            // $data['booked_slot'] = $this->model_book_appointment->get_already_booked_slot($professional_id,$date);
            $data['booked_slot'] = $this->model_booking->get_already_booked_slot($professional_id,$date);
            // debug($data['booked_slot']);
            $this->json_param['status'] = true;
            $this->json_param['html'] = $this->load->view('about_us/_timesslot',$data,true);
    

        echo json_encode($this->json_param);
    }

    public function trial()
	{
        global $config;

        if($this->userid > 0){
        $data = array();
        //TAB TITLE
        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

      
        $data['testimonial'] = $this->model_testimonials->find_all_active();

        $fa = array();
        $fa['where']['faq_category'] = 1;
        $fa['order'] = "faq_id ASC";
        $data['faq'] = $this->model_faq->find_all_active($fa);


        // $id = $this->userid;

        // $pars=array(); 
        // $pars['fields'] = "user_id,user_paid";
        // $pars['where']['user_id']=$this->userid;

        // $u=$this->model_user->find_one_active($pars);


        // $u['user_paid']=1;
        // $test=$this->model_user->update_by_pk($id, $u);
        

           
            
		$this->load_view("trial",$data);

        }
        else
        { 
         redirect(l('login?msgtype=error&msg='.urlencode('Please login first')) , true);
    
    
        }
    
	}

    public function ConfirmPaymentAndAuthorize()
	{
        global $config;
        $data = array();
        $this->load_view("ConfirmPaymentAndAuthorize",$data);
   
    }

    public function SetPaymentDetails()
	{
        global $config;
        $data = array();
        $this->load_view("SetPaymentDetails",$data);
   
    }


    public function save_order()
    {
        if ($this->userid > 0) {
            $_POST['book_appointment']['ba_user_id'] = $this->userid;
            if ($this->validate("model_book_appointment")) {
                if ($_POST['book_appointment']['ba_package_id'] != 0) {

                    $package_id = $_POST['book_appointment']['ba_package_id'];
                    $pacakge_data = $this->model_package->find_by_pk($package_id);
                } else {
                    $service_id = $_POST['book_appointment']['ba_service_id'];
                    $service_data = $this->model_service->find_by_pk($service_id);
                    $pacakge_data['package_price'] = $service_data['service_price'];
                }
                $data = $_POST['book_appointment'];


                $data['ba_amount'] = $pacakge_data['package_price'];
                $data['ba_status'] = 1;
                $data['ba_payment_status'] = 0;
                $data['ba_appointment_status'] = 0;


                $this->model_book_appointment->set_attributes($data);
                $inserted_id = $this->model_book_appointment->save();

                $this->json_param['status'] = true;
                $this->json_param['id'] = $inserted_id;
                $this->json_param['txt'] = 'We appreciate that you’ve taken the time to write us. We\'ll get back to you very soon.';
            } else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }
        } else {
            $this->json_param['status'] = false;
            $this->json_param['txt'] = "Please login first";
        }

        echo json_encode($this->json_param);
    }


    public function booking()
    {
        global $config;

        if($this->userid > 0){
        $data = array();

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;


        $data['exp'] = $this->model_user->find_all();


        $ccategory = array();
        $data['category'] = $this->model_category->find_all_active($ccategory);

  
        $experts = array();
        $experts['where']['tutorial_category_id'] = 14;
        $data['experts'] = $this->model_tutorial->find_all_active($experts);




        $this->load_view("booking", $data);
        }

        else
        { 
         redirect(l('login?msgtype=error&msg='.urlencode('Please login first')) , true);
   
   
        }

    }

    function get_experts_by_category_id($category_id)
    {

        $experts =  $this->model_tutorial->get_experts_by_category($category_id);

        echo json_encode($experts);

        // debug($experts);


    }


    public function testmail()
    {
        global $config;
        $data = array();


        // $conts = $this->model_cms_page->get_page(104);
        // $data['con1'] = $conts['child'][0];


        $this->load_view("testmail", $data);
    }

    function sendMail()
    {
    //     $config = Array(
    //   'protocol' => 'smtp',
    //   'smtp_host' => 'smtp.gmail.com',
    //   'smtp_port' => 465,
    //   'smtp_user' => 'm.fazal@manageglobally.io', // change it to yours
    //   'smtp_pass' => 'Fazal786', // change it to yours
    //   'mailtype' => 'txt',
    //   'MAIL_TLS' => TRUE,
    //   'MAIL_SSL' => FALSE,
    //   'charset' => 'iso-8859-1',
    //   'wordwrap' => TRUE
    // );

    // $config = array(
    //     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    //     'smtp_host' => 'smtp.gmail.com', 
    //     'smtp_port' => 465,
    //     'smtp_user' => 'zoozledb@gmail.com',
    //     'smtp_pass' => 'admin@zoozledb',
    //     'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    //     'mailtype' => 'text', //plaintext 'text' mails or 'html'
    //     'smtp_timeout' => '4', //in seconds
    //     'charset' => 'iso-8859-1',
    //     'wordwrap' => TRUE
    // );

        $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'email-smtp.us-east-1.amazonaws.com';
        $config['smtp_user'] = 'AKIAXQ4HYQNYXG5S4GGM';
        $config['smtp_pass'] = 'BCRXy/xl0sSg8V6L80Ff6Qfb/v52SLaLZVgOsvoJrPUN';
        $config['smtp_port'] = 587;
         $config['smtp_crypto'] = 'tls';
        $config['charset']   = 'utf-8';
        $config['mailtype']  = 'html';
        $config['newline']   = "\r"; 


        
            $message = 'Dear Expert,<br> <br>
            We have received a booking in your website, detail is given below:<br><br>';
            $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('m.fazal@manageglobally.io'); // change it to yours
          $this->email->to('navaid@manageglobally.io');// change it to yours
          $this->email->subject('sending from live now for your Job posting');
          $this->email->message($this->load->view('_layout/email_template/default_template', $message , true));
          if($this->email->send())
         {
            echo "Email Sent";
         }
         else
        {
         show_error($this->email->print_debugger());
        }
    }


    public function member()
    {
        global $config;
        $data = array();

        //TAB TITLE
        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;

        //INNER BANNER

        $data['exp'] = $this->model_user->find_all();

        $this->load_view("member", $data);
    }


    public function userprofile($id = '')
    {
        global $config;
        $data = array();

        //TAB TITLE
        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;

        //INNER BANNER

        $par = array();
        $par['where']['user_id'] = $id;
        $data['profile'] = $this->model_user->find_one_active($par);

        $this->load_view("userprofile", $data);
    }
    public function privacy()
    {
        global $config;
        $data = array();

        //TAB TITLE
        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;

        //INNER BANNER

        $data['exp'] = $this->model_user->find_all();



        $cont = array();
        $cont = $this->model_cms_page->get_page(106);
        $data['privacy'] = $cont['child'][0];
        // debug($data['privacy']);

        $this->load_view("privacy_policy", $data);
    }

    public function ConfirmAndAuthorize()
    {
        global $config;
        $data = array();


        $conts = $this->model_cms_page->get_page(104);
        $data['con1'] = $conts['child'][0];


        $this->load_view("ConfirmAndAuthorize", $data);
    }

    
    public function GetDetails()
    {
        global $config;
        $data = array();


        $conts = $this->model_cms_page->get_page(104);
        $data['con1'] = $conts['child'][0];


        $this->load_view("GetDetails", $data);
    }


    
    private function _pagination($model_name='',$paginate_param)
    {
        $per_page = 12;
        $this->load->library('mypagination');

        $class_name = $this->router->fetch_class();
        // $method_name = $slug;
         $method_name = $this->router->fetch_method();

        // Model get
        $model_name = empty($model_name) ? $class_name : $model_name;
        $model_name = "model_".$model_name;
        $model_obj = $this->$model_name ;
        // Model get

        $suffix = empty($_SERVER['QUERY_STRING']) ? '' : '?'.$_SERVER['QUERY_STRING'];

      
        // $pagination["base_url"] = g('base_url')."shop-category/".$method_name."/page/";

        $pagination["base_url"] = g('base_url') . "about_us/expert/";

        $pagination["total_rows"] = $model_obj->get_pagination_total_count();
        $pagination["per_page"] = (ENVIRONMENT == 'development') ? $per_page : $per_page;
        $pagination['use_page_numbers']  = TRUE;
        $pagination["uri_segment"] = 3;
        $pagination["suffix"] = $suffix;
        $pagination['last_tag_open'] = '';
        $this->mypagination->initialize($pagination);

        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

        // $vars["data"] = $model_obj->get_pagination_data($pagination["per_page"], (($page > 0)?($page-1):($page)) * $pagination["per_page"]);
           $vars["data"] = $model_obj->get_pagination_data($pagination["per_page"], (($page > 0)?($page-2):($page)) * $pagination["per_page"],$paginate_param);

        $vars["links"] = $this->mypagination->create_links();
        
        //.debug($vars,1); 
        return $vars;
    }

    
    public function thankyou()
	{
        global $config;
        $data = array();

        $id = $this->userid;

        $pars=array(); 
        $pars['fields'] = "user_id,user_paid";
        $pars['where']['user_id']=$this->userid;

        $u=$this->model_user->find_one_active($pars);


        $u['user_paid']=1;
        $test=$this->model_user->update_by_pk($id, $u);
        
        $this->load_view("thankyou",$data);
   
    }



}

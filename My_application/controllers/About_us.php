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



    public function policy()
    {
        $data = array();
        global $config;

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;

        //INNER BANNER
        $b = $this->get_ibanner(7);
        $data['ititle'] = $b['ititle'];
        $data['ibanner_img'] = $b['ibanner_img'];
        //BANNER
        // $b = $this->get_banner(10);
        // $data['bcontent'] = $b['bcontent'];
        // $data['bimage'] = $b['bimage'];

        $cont = $this->model_cms_page->get_page(34);

        $data['content'] = $cont;

        $this->load_view("terms", $data);
    }

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

        //  debug($cont);
        $data['cont1'] = $cont['child'][4];
        $data['cont2'] = $cont['child'][5];
        $data['cont3'] = $cont['child'][17];
        // debug($data['cont3']);
        $conts = $this->model_cms_page->get_page(20);
        $data['con1'] = $conts['child'][0];

        $contss = $this->model_cms_page->get_page(20);

        $data['con2'] = $contss['child'][1];
        $data['con3'] = $contss['child'][2];
        $data['con4'] = $contss['child'][3];
        $data['con5'] = $contss['child'][4];
        $data['con6'] = $contss['child'][4];

        // $test_f = $cont['0']['0'];
        // debug($data['con4']);
        $par = array();
        $par['order'] = "category_id ASC";
        $data['main_categories'] = $this->model_category->find_all_active($par);

        $coursecat = array();
        $coursecat['where']['cp_category_id'] = intval($this->input->get('cat'));
        $cate = $this->model_course_category->find_all_active($coursecat);
        // debug($cate);
        foreach ($cate as $key => $value) {
            $all[] = $value['cp_course_id'];
        }
        // debug($all);
        $categories = $this->model_category->get_category_tutorials();
        $data['main_categories'] = $categories;

        $par2 = array();
        $par2['order'] = "expert_id ASC";
        $data['ex'] = $this->model_expert->find_all_active($par2);
        //debug($data['main_categories']);
        
        $param = array();
        if (isset($_GET['expert']) and intval($_GET['expert']) > 0) {
            $param['where']['tutorial_expert_id'] = intval($this->input->get('expert'));
        }
        if(isset($_GET['search'])){
            // debug($_GET['search']);
         $param['where_like'][] = array('column'=>'tutorial_name','value'=>$_GET['search']);
        }
        
        $param['order'] = "tutorial_id ASC";
        $param['where_in']['tutorial_id'] = $all;

        $data['art'] = $this->model_tutorial->get_details($param);
        // debug($data['art']);

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
        $data['ex'] = $this->model_faq->find_all_active($par1);

        $par2 = array();
        $par2['where']['faq_category'] = 2;
        $data['le'] = $this->model_faq->find_all_active($par2);

        $par3 = array();
        $par3['where']['faq_category'] = 3;
        $data['gene'] = $this->model_faq->find_all_active($par3);

        $par4 = array();
        $par4['where']['faq_category'] = 4;
        $data['cons'] = $this->model_faq->find_all_active($par4);


        $contss = $this->model_cms_page->get_page(78);
        $data['cont1'] = $contss['child'][0];


        $data['inner'] = $this->model_inner_banner->find_by_pk(3);

    
    
        $this->load_view("faq", $data);
    }

    

    
}

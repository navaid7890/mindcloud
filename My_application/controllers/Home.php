<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    /**
     * Default Controller
     */

    public function __construct()
    {
        // Call the Model constructor latest_product
        $this->cms_page_id = 2;
        parent::__construct();

        //$this->login_redirect_check_front();
        
        //$this->plugin_seo();
    }

    // Default Home Page
    public function index()
    {
        global $config;
        $this->cms_page_id = 2;
        
        $this->layout_data['title'] = g('db.admin.site_title');
        // $method_title = ucwords($this->uri->segment(2));
        // $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

        // SEO Module
        //$this->plugin_seo();
        // $this->register_plugins(array("slick"));

        //BANNER
        $data['banner'] = $this->model_banner->get_banners();
         // $b = $this->get_banner(1);
         // $data['bcontent'] = $b['bcontent'];
         // $data['bimage'] = $b['bimage'];

        $data['professions'] = $this->model_profession->find_all_active();            
        $data['states'] = $this->model_states->find_all_active();            
        
        $param = array();
        $param['where']['course_featured'] = 1;
        $data['course'] = $this->model_course->find_all_active($param);

        
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
        $data['cont15'] = $cont['child'][14];


        $data['learning'] = $this->model_learning->find_all_active();
        $data['testimonial'] = $this->model_testimonials->find_all_active();
        
        $ar=array(1,2);

        foreach($ar as $key => $value)
        { 
          $all[]=$value;
        }
        $param=array();
        $param['where_in']['client_type']=$all;
        $data['client'] = $this->model_client->find_all_active($param);
        debug($data['client']);




      // $data['category'] = $this->model_category->find_all_active();        
      // FEATURED CATEGORY PRODUCTS
      // $data['featured_category_pro'] = $this->model_product->get_featured_category_products();

      // FEATURED PRODUCTS
      // $param = array();
      // $param['where']['product_is_featured'] = 1;
      // $data['featured_pro'] = $this->model_product->all_products($param);

      //TESTIMONIALS
      $data['testi'] = $this->model_testimonials->find_all_active();

      //GALLERY
      // $pg = array();
      // $pg['order'] = "RAND()"; 
      // $pg['limit'] = 7; 
      // $data['gallery'] = $this->model_gallery->find_all_active($pg);
     $firststate = $this->model_states->find_one_active();            
     $data['firststate'] =$firststate['states_id'];

        // Load View
        $this->load_view("home",$data);
    }


      //HOME PAGE SEARCH
            // home page search
    public function search()
    {

      $this->layout_data['title'] = g('db.admin.site_title')." | Search";
      
        // $data['banner'] = $this->model_banner->get_banners();
          

        if(isset($_GET['state']) || !empty($_GET['category']) || !empty($_GET['keyword']))
        {
            $state = trim(htmlentities($_GET['state']));
            $profession = trim(htmlentities($_GET['category']));
            $keyword = trim(htmlentities($_GET['keyword']));
        
        if (!empty($keyword)) {
        $param['where_like'][] = array('column'=>'course_keywords','value'=>$keyword,'type'=>'both');   
        }
        if (!empty($state)) {
        $param['where_like'][] = array('column'=>'course_state_id','value'=>$state,'type'=>'both');   
        }
        if (!empty($profession)) {
        // $param['where_like'][] = array('column'=>'course_state_id','value'=>$state,'type'=>'both');   
       $param['joins'][] = array(
                            "table"=>"course_profession", 
                            "joint"=>"course_profession.cp_course_id = course.course_id and cp_profession_id = $profession"
                                );
        }
        $pro = $this->model_course->find_all_active($param);
       //  debug($pro);
       // debug( $this->db->last_query(),1);
          $data['course'] = $pro;
        }

      $data['searchfor'] = $_GET['search'];
      $data['in_banner']['inner_banner_title'] = "Search";

        $data['professions'] = $this->model_profession->find_all_active();            
        $data['states'] = $this->model_states->find_all_active(); 
        
        // unset($_POST);
        // echo json_encode(array("data"=>$this->load->view('shop/filter_brand', $data, true)));
         // debug($data['pro']);
             // Load View
      $data['state'] = $state;
      $data['profession'] = $profession;
      $data['keyword'] = $keyword;
      // debug($state);
      // debug($profession);
      // debug($keyword);

        $this->load_view("search", $data);
      }


    // public function product($slug="")
    // {
    //     global $config;
        
    //       //TAB TITLE
    //     $method_title = ucwords($this->uri->segment(1));
    //     $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

    //     //INNER BANNER
    //      $b = $this->get_ibanner(1);
    //      $data['ititle'] = $b['ititle'];
    //      $data['ibanner_img'] = $b['ibanner_img'];
        
    //     // // $header_links = array("snaps","sew-buttons");
    //     // $header_links[0] = "snaps";
    //     // $header_links[1] = "sew-buttons";
    //      $view = $slug ;

    //     // Load View
    //     $this->load_view($view,$data);
    //     // $this->load_view("snap",$data);
    // }


//     public function va()
//     {
//         $user_id = 3;
//         $this->model_email->notification_register($user_id , 'user');
//         die();

//         $this->model_user_info->update_package_event($this->userid);
        


//         // $dir    = 'docs\html';
//         // $files1 = scandir($dir);
//         // $files2 = scandir($dir, 1);

//         // debug($files1);
//         // debug($files2);
        
//         die();
//         $order_id = $id = 10;
//         $this->products_rewards($order_id);
        
//         die();
//         $data = $this->model_shop_order->find_by_pk($id);
//         debug(unserialize($data['order_payment_post']),1);

//         die();
//         $this->save_result($course_id);
//         die();

//         $id = 2;
//         $this->save_result($id);

//         die();
//         // $user_id = 4;
//         // $this->model_email->notification_register($user_id , 'admin');
//         // die();
//         // Create REST request URL
// $url = "http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=&q=https://news.google.com/news/rss/?ned=us&gl=US&hl=en";
// // Make request and get resulting JSON response
// $json_feed = file_get_contents($url);
// // Dump it to the screen so we can see it
// var_dump($json_feed);


// die();
//         for ($i=0; $i <= 22; $i++) { 
//             $year[] = DATE("Y")-$i;
//         }
//         debug($year,1);
//         $id = 9;
//         $this->model_email->job_created_notification($id);
//         //$this->model_email->factory_supplier_created($id,'user',"admin123");

//     }

    // public function test()
    // {
    //     $this->model_email->notification_invoice(11 , 'USER');

    // }

      public function notfound()
      {
        $this->load_view("notfound",$data); 
      }

}





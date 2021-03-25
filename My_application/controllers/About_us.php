<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends MY_Controller {

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
        $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;
        

        //INNER BANNER
         $b = $this->get_ibanner(1);
         $data['ititle'] = $b['ititle'];
         $data['ibanner_img'] = $b['ibanner_img'];


        //BANNER
         // $b = $this->get_banner(1);
         // $data['bcontent'] = $b['bcontent'];
         // $data['bimage'] = $b['bimage'];

         $cont = $this->model_cms_page->get_page(12);
        $data['cont1'] = $cont['child'][0];
        $data['cont2'] = $cont['child'][1];

		$this->load_view("index",$data);
	}

    public function terms()
    {
        $data = array();
        global $config;

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

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
        $data['content'] = $content;
         

        $this->load_view("terms",$data);
    }



    public function policy()
    {
        $data = array();
        global $config;

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

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

        $this->load_view("terms",$data);
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
        $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

        //INNER BANNER
        //  $b = $this->get_ibanner(7);
        //  $data['ititle'] = $b['ititle'];
        //  $data['ibanner_img'] = $b['ibanner_img'];
        //     //BANNER
        //  // $b = $this->get_banner(10);
        //  // $data['bcontent'] = $b['bcontent'];
        //  // $data['bimage'] = $b['bimage'];

        //  $cont = $this->model_cms_page->get_page(34);
         
        // $data['content'] = $cont;         

        $this->load_view("learning",$data);
    }

    public function expert()
    {
        $data = array();
        global $config;

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

        //INNER BANNER
        //  $b = $this->get_ibanner(7);
        //  $data['ititle'] = $b['ititle'];
        //  $data['ibanner_img'] = $b['ibanner_img'];
        //     //BANNER
        //  // $b = $this->get_banner(10);
        //  // $data['bcontent'] = $b['bcontent'];
        //  // $data['bimage'] = $b['bimage'];

        //  $cont = $this->model_cms_page->get_page(34);
         
        // $data['content'] = $cont;         

        $this->load_view("expert",$data);
    }



}

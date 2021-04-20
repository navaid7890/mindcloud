<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tool extends MY_Controller {

	/**
	 * Contact US Controller
	 */
	
	public function __construct()
    {
    	
        parent::__construct();
    }

    public function signup()
    {
        global $config;
        
        // SEO Module
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Sign Up";

        $concontent = $this->model_cms_page->get_page(3);
        $data['concont1'] = $concontent['child'][0];
        $data['concont2'] = $concontent['child'][1];
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(5);
            
        $this->load_view("signup",$data);

    }

    public function signin()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Sign In";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("signin",$data);
     }

    public function forgot()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Sign In";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("forgot",$data);
     }

 public function keycheck($id,$key)
{
    if($key == md5($id))
        {return true;}
    else    
        {return false;}
}

public function stepcheck($stepid,$tool_builderid)
{
    if ($tool_builderid > 0) {
    switch ($stepid) {
           // case 0:
           //  $url = l('step-one').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
           //  break;
        
        case 1:
            $url = l('step-two').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;
        
        case 2: 
            $url = l('step-three').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

        case 3: 
            $url = l('step-four').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 4: 
            $url = l('step-five').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;
   
            case 5: 
            $url = l('step-nine').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 6: 
            $url = l('step-ten').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;
            
            case 7: 
            $url = l('step-eleven').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 8: 
            $url = l('step-twelve').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 9: 
            $url = l('step-thirteen').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 10: 
            $url = l('step-fourteen').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

             case 11: 
            $url = l('step-fortysix').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 12: 
            $url = l('step-sixteen').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 13: 
            $url = l('step-seventeen').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 14: 
            $url = l('step-eighteen').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;


            case 15: 
            $url = l('step-fiftytwo').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 16: 
            $url = l('step-twenty').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 17: 
            $url = l('step-twentyone').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 18: 
            $url = l('step-twentytwo').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 19: 
            $url = l('step-fiftyone').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;


            case 20: 
            $url = l('step-twentyfour').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 21: 
            $url = l('step-twentyfive').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 22: 
            $url = l('step-twentysix').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

             case 23: 
            $url = l('step-twentyseven').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 24: 
            $url = l('step-twentyeight').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 25: 
            $url = l('step-twentynine').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 26: 
            $url = l('step-thirty').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;


            case 27: 
            $url = l('step-thirtyone').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;


            case 28: 
            $url = l('step-thirtytwo').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 29: 
            $url = l('step-thirtythree').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 30: 
            $url = l('step-thirtyfour').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

             case 31: 
            $url = l('step-thirtysix').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;
            
            case 32: 
            $url = l('step-thirtyseven').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 33: 
            $url = l('step-thirtyeight').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 34: 
            $url = l('step-forty').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 35: 
            $url = l('step-fortytwo').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 36: 
            $url = l('step-fortynine').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 37: 
            $url = l('step-fifty').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;
            
            case 38: 
            $url = l('step-fortytwo').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

             case 39: 
            $url = l('step-fortyfour').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;

            case 40: 
            $url = l('step-finish').'?query-id='.$tool_builderid.'&key='.md5($tool_builderid);
            break;
    
    //debug($url);

 
        default:
        break;
    }
    redirect($url);
  }
}

    public function stepone()
    {
        global $config;

        $logindata = $this->session->userdata("logged_in_front");
        // debug($logindata);
        $this->stepcheck($logindata['user_tool_builder_step'],$logindata['user_tool_builder_id']);

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepone",$data);
     }


     public function stepone1()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];

        }
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepone",$data);
     }


    public function steptwo()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];

        }
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwo",$data);
     }

 public function ajax_steptwo(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 2;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-three').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}

    public function stepthree()
    {   
        global $config;
        // debug($_GET);

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthree",$data);
     }

    //  public function ajax_stepthree(){

    //     if($this->keycheck($_GET['query-id'],$_GET['key']))
    //     {
    //     // debug($_GET,1);
    //             $id = $_GET['query-id'];
    //             $data['tool_builder_step_id'] = 3;
    //             $this->model_tool_builder->update_by_pk($id,$data);
    //             $url = l('step-four').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
    //             redirect($url);
    //     }
    // }

    public function ajax_stepthree()
    {
        
        if (isset($_POST)) {
              
               // $this->form_validation->set_rules('tool_builder[tool_builder_same]', 'Same as Mailing Address', 'required');
               // $this->form_validation->set_rules('tool_builder[tool_builder_trans]', 'Terms Of Use Privacy Policy', 'required');
               $this->form_validation->set_rules('tool_builder[tool_builder_same]', 'Type Of Transaction', 'trim');

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 3;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-four').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

        public function ajax_stepthree1(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
        // debug($_GET,1);
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 3;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-fortyeight').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
    }



    public function ajax_stepthree2()
    {
        
        if (isset($_POST)) {
              
               // $this->form_validation->set_rules('tool_builder[tool_builder_same]', 'Same as Mailing Address', 'required');
             //  $this->form_validation->set_rules('tool_builder[tool_builder_terms]', 'Terms Of Use Privacy Policy', 'required');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 3;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-four').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }



    public function stepfour()
    {
        global $config;
        
        
      if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfour",$data);
     }

     
    public function ajax_stepfour()
    {
        
        if (isset($_POST)) {
              
               // $this->form_validation->set_rules('tool_builder[tool_builder_same]', 'Same as Mailing Address', 'required');
               $this->form_validation->set_rules('tool_builder[tool_builder_terms]', 'Terms Of Use Privacy Policy', 'required');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 4;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-five').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

    public function stepfive()
    {
        global $config;

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfive",$data);
     }


    //  public function ajax_stepfive(){

    //     if($this->keycheck($_GET['query-id'],$_GET['key']))
    //     {
    //     // debug($_GET,1);
    //             $id = $_GET['query-id'];
    //             $data['tool_builder_step_id'] = 5;
    //             $this->model_tool_builder->update_by_pk($id,$data);
    //             $url = l('step-nine').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
    //             redirect($url);
    //     }
    // }


    public function ajax_stepfive()
    {
        
        if (isset($_POST)) {
              
               // $this->form_validation->set_rules('tool_builder[tool_builder_same]', 'Same as Mailing Address', 'required');
               //$this->form_validation->set_rules('tool_builder[tool_builder_terms]', 'Terms Of Use Privacy Policy', 'required');
                $this->form_validation->set_rules('tool_builder[tool_builder_apply_someone]', 'Apply with someone', 'trim');

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 5;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-fortyfive').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

       public function ajax_stepfive1(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
        // debug($_GET,1);
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 5;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-nine').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
    }
    public function stepsix()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepsix",$data);
     }
      public function stepseven()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepseven",$data);
     }
    public function stepeight()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepeight",$data);
     }
    
    public function stepnine()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepnine",$data);
     }

     public function ajax_stepnine(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
        // debug($_GET,1);
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 6;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-ten').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
    }
    public function stepten()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepten",$data);
     }

        public function ajax_stepten(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
        // debug($_GET,1);
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 7;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-eleven').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
    }
    public function stepeleven()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        // SEO ModuleIn
        $this->plugin_seo();


   
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepeleven",$data);
     }

    public function ajax_stepeleven()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 8;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-twelve').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }


    public function steptwelve()
    {
        global $config;

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwelve",$data);
     }

    public function ajax_steptwelve()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 9;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-thirteen').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }
     

    public function stepthirteen()
    {
        global $config;

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirteen",$data);
     }


    public function ajax_stepthirteen()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 10;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-fourteen').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }
     

    public function stepfourteen()
    {
        global $config;
        
        // SEO ModuleIn

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfourteen",$data);
     }


    public function ajax_stepfourteen()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 11;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-fortysix').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }
     

     

  public function stepfifteen()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfifteen",$data);
     }
     

    public function stepsixteen()
    {
        global $config;
        

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepsixteen",$data);
     }

      public function ajax_stepsixteen(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 13;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-seventeen').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     

    public function stepseventeen()
    {
        global $config;
           if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepseventeen",$data);
     }

    public function ajax_stepseventeen(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 14;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-eighteen').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     
     

    public function stepeighteen()
    {
        global $config;
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepeighteen",$data);
     }


    public function ajax_stepeighteen()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 15;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-fiftytwo').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
        echo json_encode($this->json_param);

    }

     

    public function stepnineteen()
    {
        global $config;
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepnineteen",$data);
     }

         public function ajax_stepnineteen(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 16;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-twenty').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     

    public function steptwenty()
    {
        global $config;

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwenty",$data);
     }


//         public function ajax_steptwenty(){

//         if($this->keycheck($_GET['query-id'],$_GET['key']))
//         {
//                 $id = $_GET['query-id'];
//                 $data['tool_builder_step_id'] = 17;
//                 $this->model_tool_builder->update_by_pk($id,$data);
//                 $url = l('step-twentyone').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
//                 redirect($url);
//         }
// }



    public function ajax_steptwenty()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 17;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-twentyone').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

     

    public function steptwentyone()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();


        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwentyone",$data);
     }

    public function ajax_steptwentyone(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 18;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-twentytwo').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     

     

    public function steptwentytwo()
    {
        global $config;

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwentytwo",$data);
     }


    public function ajax_steptwentytwo()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 19;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-fiftyone').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }


     

  public function steptwentythree()
    {
        global $config;

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwentythree",$data);
     }

         public function ajax_steptwentythree(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 20;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-twentyfour').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     
     

    public function steptwentyfour()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
         if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwentyfour",$data);
     }




    public function ajax_steptwentyfour()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 21;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-twentyfive').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

     

     public function steptwentyfive()
    {
        global $config;
        
        // SEO ModuleIn

              if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwentyfive",$data);
     }

//     public function ajax_steptwentyfive(){

//         if($this->keycheck($_GET['query-id'],$_GET['key']))
//         {
//                 $id = $_GET['query-id'];
//                 $data['tool_builder_step_id'] = 22;
//                 $this->model_tool_builder->update_by_pk($id,$data);
//                 $url = l('step-twentysix').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
//                 redirect($url);
//         }
// }

    public function ajax_steptwentyfive()
    {
        
        if (isset($_POST)) {
              
               // $this->form_validation->set_rules('tool_builder[tool_builder_same]', 'Same as Mailing Address', 'required');
               // $this->form_validation->set_rules('tool_builder[tool_builder_trans]', 'Terms Of Use Privacy Policy', 'required');
               $this->form_validation->set_rules('tool_builder[tool_builder_same]', 'Type Of Transaction', 'trim');

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 22;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-twentysix').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
       echo json_encode($this->json_param);

    }
     
     
     

  public function steptwentysix()
    {
        global $config;
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwentysix",$data);
     }


     public function ajax_steptwentysix(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 23;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-twentyseven').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     
     
     
  public function steptwentyseven()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwentyseven",$data);
     }


     public function ajax_steptwentyseven(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 24;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-twentyeight').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     
     public function steptwentyeight()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwentyeight",$data);
     }

      public function ajax_steptwentyeight()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 25;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-twentynine').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

     
     
  public function steptwentynine()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("steptwentynine",$data);
     }

    public function ajax_steptwentynine()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 26;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-thirty').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }





     
  public function stepthirty()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }


        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirty",$data);
     }

    public function ajax_stepthirty()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 27;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-thirtyone').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }
     
  public function stepthirtyone()
    {
        global $config;


        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }


        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirtyone",$data);
     }


      public function ajax_stepthirtyone(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 28;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-thirtytwo').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     
  public function stepthirtytwo()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }


        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirtytwo",$data);
     }

         public function ajax_stepthirtytwo(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 29;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-thirtythree').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     
    public function stepthirtythree()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirtythree",$data);
     }

     public function ajax_stepthirtythree()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 30;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-thirtyfour').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

    public function stepthirtyfour()
    {
        global $config;
        
          if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }



        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirtyfour",$data);
     }


    public function ajax_stepthirtyfour()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 31;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-thirtysix').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }
      

    public function stepthirtyfive()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirtyfive",$data);
     }
    

    public function stepthirtysix()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }


        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirtysix",$data);
     }

      public function ajax_stepthirtysix()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 32;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-thirtyseven').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }
         
     public function stepthirtyseven()
    {
        global $config;

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirtyseven",$data);
     }

    public function ajax_stepthirtyseven()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 33;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-thirtyeight').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }
    public function stepthirtyeight()
    {
        global $config;
        

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirtyeight",$data);
     }
 
 public function ajax_stepthirtyeight(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 34;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-forty').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     



     public function stepthirtynine()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepthirtynine",$data);
     }
    public function stepforty()
    {
        global $config;
        
        // SEO ModuleIn

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepforty",$data);
     }

      public function ajax_stepforty(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 35;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-fortytwo').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
          public function stepfortyone()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfortyone",$data);
     }
    public function stepfortytwo()
    {
        global $config;

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfortytwo",$data);
     }



     public function ajax_stepfortytwo(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 36;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-fortynine').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     

    


     public function stepfortythree()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfortythree",$data);
     }

       public function ajax_stepfortythree(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 39;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-fortyfour').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     
     



    public function stepfortyfour()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfortyfour",$data);
     }

    public function ajax_stepfortyfour(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 40;
                   $data['tool_builder_status'] = 1;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-finish').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
}
     
     


    public function finish()
    {
        global $config;

       if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("finish",$data);
     }


    public function ajax_stepfinish()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 40;
                $this->model_tool_builder->update_by_pk($id,$data);
                
                 $data['where']['tool_builder_id']=$id;
                 $tool_builder = $this->model_tool_builder->find_one_active($data);

                   $this->model_tool_builder->set_attributes($data);
                   $data['user_data'] = $this->layout_data['user_data'];   
                   $em=$data['user_data']['user_email'];

                 // debug($em);
                 $this->model_email->contactInquiry1($tool_builder,$em);
                // debug($this->model_email);

               //  $this->model_email->contactInquiry2($this->userid);
                 //debug($this->model_email);




                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Wait For Admin Approval for your tool_builder application';
                $this->json_param['msg']['url'] = l('step-finish').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }
   

       public function stepfortyfive()
       {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfortyfive",$data);
     }

    public function ajax_stepfortyfive()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 5;
                $data['tool_builder_file1']  = $_FILES['tool_builder']['name'];
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-nine').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }




    public function stepfortysix()
    {
        global $config;
        
        // SEO ModuleIn
        $this->plugin_seo();
        
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }



        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfortysix",$data);
     }


        public function ajax_stepfortysix(){

        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
        // debug($_GET,1);
                $id = $_GET['query-id'];
                $data['tool_builder_step_id'] = 12;
                $this->model_tool_builder->update_by_pk($id,$data);
                $url = l('step-sixteen').'?query-id='.$_GET['query-id'].'&key='.$_GET['key'];
                redirect($url);
        }
    }
   
    public function stepfortyseven()
    {
        global $config;
        
        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfortyseven",$data);
     }


    public function stepfortyeight()
    {
        global $config;


          if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfortyeight",$data);
     }



    public function ajax_stepfortyeight()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 4;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-five').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

    public function stepfortynine()
    {
        global $config;
        


        if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfortynine",$data);
     }


    public function ajax_stepfortynine()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 37;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-fifty').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

    public function stepfifty()
    {
        global $config;

       if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfifty",$data);
     }

    public function ajax_stepfifty()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 38;
                $data['tool_builder_file1']  = $_FILES['tool_builder']['name'];
                $this->model_tool_builder->update_by_pk($id,$data);



                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-fortytwo').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

    public function stepfiftyone()
    {
        global $config;

       if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfiftyone",$data);
     }



    public function ajax_stepfiftyone()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 19;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-twentythree').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
            echo json_encode($this->json_param);

    }

    public function stepfiftytwo()
    {
        global $config;

       if($this->keycheck($_GET['query-id'],$_GET['key']))
        {
            $data['key'] = $_GET['key'];
            $data['queryid'] = $_GET['query-id'];
        }

        
        // SEO ModuleIn
        $this->plugin_seo();
        
        $this->layout_data['title'] = g('db.admin.site_title');
        $this->layout_data['title'] = g('db.admin.site_title')." | Getting Started-1";

        $concontent = $this->model_cms_page->get_page(73);
        $data['cont1'] = $concontent['child'][0];
 
        $data['inner_banner'] = $this->model_inner_banner->find_by_pk(12);
            
        $this->load_view("stepfiftytwo",$data);
     }



    public function ajax_stepfiftytwo()
    {
        
        if (isset($_POST)) {
              
               $this->form_validation->set_rules('tool_builder[tool_builder_fname]', 'First Name', 'trim');
  

                if ($this->form_validation->run() == FALSE) {

                $this->json_param['status'] = false;
                $this->json_param['msg']['title'] = 'Error Occurred';
                $this->json_param['msg']['desc'] = validation_errors();
                 }
              else
              {
                $id = $_POST['id'];
                $data = array();
                $data = $_POST['tool_builder'];
                $data['tool_builder_step_id'] = 15;
                $this->model_tool_builder->update_by_pk($id,$data);

                $this->json_param['status'] = true;
                $this->json_param['msg']['title'] = 'Proceeding...';
                $this->json_param['msg']['desc'] = 'Go to Next Step';
                $this->json_param['msg']['url'] = l('step-nineteen').'?query-id='.$id.'&key='.$_POST['key'];

              }
        }
        echo json_encode($this->json_param);

    }





}

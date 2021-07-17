<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//Include Admin Wrapper. Break down things abit
include_once(APPPATH . "core/MY_Controller_Account.php");

class Booking extends MY_Controller_Account {

    /**
     * Achievements page
     *
     * @package		category
     *
     * @version		1.0
     * @since		Version 1.0 2017
     */

    public $_list_data = array();

    public function __construct() {

        global $config;

        parent::__construct();

        // if($this->user_type != CONTRIBUTOR_USER){
        //     redirect(l('account/dashboard?msgtype=error&msg='.urlencode('Can\'t access to article Page.')) , 'refresh');
        // }

        $this->class_name = $this->router->fetch_class();
        $this->view_pre = 'account/'.$this->class_name.'/';

        $this->_list_data['booking_user_id'] = $this->model_user->get_user_all();
        $this->_list_data['booking_artist_id'] = $this->model_user->get_user_only();
      
        $_POST = $this->input->post(NULL, false);
        
    }


    // Listing/Data table page
    public function index()
    {
        $this->register_plugins(array("datatables2"));

        $this->view_pre = 'account/account_area_theme/default/';
        $class_name = $this->class_name;//$this->router->class;
        $model_name = "model_".$class_name;
        $model_obj = $this->$model_name ;


        $data['user_id'] = $this->userid;
        $data['class'] = $class_name;
        $data['model'] = $model_obj;
        $data['title'] = humanize($this->class_name).' Management';
        $data['add_link'] = l('account/'.$this->class_name.'/add/');

        // Data Script
        $data['datatable'] = $this->model_booking->get_data_by_user_id($this->userid);
        $data['heading'] = array('booking_id','booking_user_id','booking_artist_id','booking_date','booking_status');
        $this->_list_data['booking_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );
        


        $this->load_view("datatable" , $data);

    }


    public function add($id='' , $data = array())
    {
        global $config;

        $this->add_script(array( 
            "account/jquery.validate.js" ,
            "account/form-validation-script.js",
            "account/tkd_script.js",
            "account/metronic.js",
            "account/quick-sidebar.js",
            "account/demo.js",
            "account/ui-alert-dialog-api.js",
            "account/layout.js",
        ) , "js" );

        $this->register_plugins("jquery-file-upload","bootstrap-switch",
            "select2",
            "bootbox"
        );

        $this->register_plugins("bootstrap-fileupload");


        $this->view_pre = 'account/account_area_theme/booking/';
        $insert_mode = FALSE;
        if(isset($_POST) AND array_filled($_POST)) {
            //$_POST['booking']['booking_user_id'] = $this->userid;
            if(empty($_POST['booking']['booking_id'])){
                $insert_mode = TRUE;
                $_POST['booking']['booking_createdon'] = date("Y-m-d h:m:s");
                $_POST['booking']['booking_status'] = 0;
            }
        }
        
        $this->prevent_return_on_success = TRUE;
        $insertId = parent::add($id,$data);
        // if($insert_mode) {
        //     $this->model_email->notification_article($insertId);
        // }
        if($insertId > 0)
            $this->add_redirect_success($insertId);
    }

    public function before_add_render(&$data)
    {
        // FOR CHILD META TAG HIDDEN START
        //if($data['form_data']['cms_page']['cms_page_page'] > 1)
        if(1==1)
        {
            // $data['form_fields']['booking']['booking_user_id']['type'] = 'hidden';
            // $data['form_fields']['booking']['booking_user_id']['type'] = 'hidden';
            $data['form_fields']['booking']['booking_admin_approval']['type'] = 'hidden';
            $data['form_fields']['booking']['booking_status']['type'] = 'hidden';
        }
        // FOR CHILD META TAG HIDDEN END

    }

    public function add_redirect_success($id)
    {
        $this->account_current = "account/".$this->router->fetch_class('') .'/'.$this->router->fetch_method('') . "/";
        switch($_POST['submit'])
        {

            case "SaveNEdit":
                $path = $this->account_current.$id;
            break;
            case "SaveNNew":
                $path = $this->account_current;
            break;
            default:
                $path = "account/".$this->router->fetch_class('') .'/';
            break;
        }
        redirect($path."?msgtype=success&msg=".urlencode('booking submitted.'), 'refresh');
        return $id;
    }


    public function get_list()
    {
        $id = $this->input->post("search_val"); 
        $param['fields'] = "category_id,category_name";
        $param['where']['category_parent_id'] = $id ;
        $data = $this->_list_data['booking_category_id'] = $this->model_category->find_all_active($param);
        echo json_encode($data);
    }


    // Delete Music
    public function ajax_delete()
    {
        if(isset($_POST) AND array_filled($_POST))
        {
            $id = intval($_POST['id']);

            $this->model_booking->update_by_pk($id,array('booking_status' => 2));

            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }



    public function upload_images(){
    
    $formdata = $_POST['booking'];
    $filedata = $_FILES['booking'];
    $cmsID = $formdata['booking_id'];

    $uploads_dir = 'assets/uploads/booking';
    $tmp_name = $filedata["tmp_name"]['booking_image'];
    $name = microtime()."_".$filedata["name"]['booking_image'];
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

      $Nname = explode(".", $name);
      //debug($name);exit;
      $allowEd = array('mp3','mpeg');
      if(in_array($Nname[2],$allowEd)){
        $insertImage['booking_image'] = $name;
        $insertImage['booking_image_path'] = 'assets/uploads/booking/';
        $where['where']['booking_id'] = $cmsID;
          $status = $this->model_booking->update_model($where,$insertImage);
          if($status){
            echo json_encode(array('status'=>1,'message'=>'Track updated successfully.'));
          }
          else{
            echo json_encode(array('status'=>0,'message'=>'Please try again.'));  
          }
      }
      else{
        echo json_encode(array('status'=>0,'message'=>'Only mp3 and mpeg format allowed'));  
      }
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

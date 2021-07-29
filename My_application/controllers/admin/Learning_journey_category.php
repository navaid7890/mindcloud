<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Learning_journey_category extends MY_Controller {

    /**
     * Achievements page
     *
     * @package		learning_journey_category
     *
     * @version		1.0
     * @since		Version 1.0 2017
     */

    public $_list_data = array();

    public function __construct() {

        global $config;

        parent::__construct();
        $this->dt_params['dt_headings'] = "learning_journey_category_id,learning_journey_category_name,learning_journey_category_status";
        $this->dt_params['searchable'] = explode(",", $this->dt_params['dt_headings']);

        $this->dt_params['action'] = array(
            "hide_add_button" => false ,
            "hide" => false ,
            "show_delete" => true ,
            "show_edit" => true ,
            "order_field" => false ,
            "show_view" => false ,
            "extra" => array() ,
        );

        $this->_list_data['learning_journey_category_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );
        /*$this->_list_data['learning_journey_category_feature'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">No</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Yes</span>"
        );

*/

        // Following are common so, defined in MY_Controller_Admin
        // $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
        // $this->dt_params['paginate']['uri'] = "paginate";
        // $this->dt_params['paginate']['update_status_uri'] = "update_status";

        // For use IN JS Files
        $config['js_config']['paginate'] = $this->dt_params['paginate'];


        // $this->_list_data['learning_journey_category_parent_id'] = $this->model_profession->find_all_list_active(
        //     array('where_string'=>'learning_journey_category_parent_id <= 1')
        //     ,"learning_journey_category_name");
        

        $_POST = $this->input->post(NULL, true);
    }


    public function add($id=0 , $data = array()) {
        
        // debug($_POST,1);
        $this->add_script(array( "jquery.validate.js" , "form-validation-script.js","plupload.full.min.js") , "js" );
        $this->register_plugins(array("datatables","jquery-file-upload"));
        parent::add($id, $data);

    }

    public function upload_images(){

		require_once APPPATH.'third_party/S3/S3.php';
		// $k=$this->load->library('S3');
  
		$formdata = $_POST['learning_journey_category'];
		$filedata = $_FILES['learning_journey_category'];
		$cmsID = $formdata['learning_journey_category_id'];


		// $uploads_dir = 'assets/uploads/learning';
		$tmp_name = $_FILES["ok"]["tmp_name"];
		$name = rand(1000,100000)."_".$_FILES["ok"]["name"];
		 

        // move_uploaded_file($tmp_name, "$uploads_dir/$file");

		$Nname = explode(".", $name); 
        $c_type = 'image/'.$Nname[1]; 

        $s = new S3();
	
        $s->setAuth(AWS_S3_KEY, AWS_S3_SECRET);
        $s->setRegion(AWS_S3_REGION);
        $s->setSignatureVersion('v4'); 
        $s->putObject($s->inputFile($tmp_name), AWS_S3_BUCKET, 'assets/images/'.$name, $s->ACL_PUBLIC_READ,[],['Content-Type'=>$c_type]);
        // debug($s,1);

	    $allowEd = array('jpg','png','.JPG','jpeg'); 
	    if(in_array($Nname[1],$allowEd)){

		

		   

		    $insertImage['learning_journey_category_image'] = $name;
		    $insertImage['learning_journey_category_image_path'] = 'assets/images/';
		    $where['where']['learning_journey_category_id'] = $cmsID;
	        $status = $this->model_learning_journey_category->update_model($where,$insertImage);
            
		
			if($status){
	        	echo json_encode(array('status'=>1,'message'=>'image updated successfully.'));
	        }
	        else{
	        	echo json_encode(array('status'=>0,'message'=>'Please try again.'));	
	        }
	    }
	    else{
	    	echo json_encode(array('status'=>0,'message'=>'Only JPG and PNG format allowed'));	
	    }
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

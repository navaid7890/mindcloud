<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Learning_journey_content extends MY_Controller {

    /**
     * Achievements page
     *
     * @package		learning_journey_content
     *
     * @version		1.0
     * @since		Version 1.0 2017
     */

    public $_list_data = array();

    public function __construct() {

        global $config;

        parent::__construct();
        $this->dt_params['dt_headings'] = "learning_journey_content_id,learning_journey_content_name,learning_journey_content_desc,learning_journey_content_status";
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

        $this->_list_data['learning_journey_content_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );
        /*$this->_list_data['learning_journey_content_feature'] = array(
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

        $this->_list_data['learning_journey_cat_id'] = $this->model_learning_journey_category->find_all_list_active(array(),"learning_journey_category_name");



        // $this->_list_data['learning_journey_content_parent_id'] = $this->model_profession->find_all_list_active(
        //     array('where_string'=>'learning_journey_content_parent_id <= 1')
        //     ,"learning_journey_content_name");
        

        $_POST = $this->input->post(NULL, true);
    }

    public function upload_images(){
      
		require_once APPPATH.'third_party/S3/S3.php';
		// $k=$this->load->library('S3');
  
		$formdata = $_POST['learning_journey_content'];
		$filedata = $_FILES['learning_journey_content'];
		$cmsID = $formdata['learning_journey_content_id'];


		// $uploads_dir = 'assets/uploads/learning_journey_content';
		$tmp_name = $_FILES["ok"]["tmp_name"];
		$name = rand(1000,100000)."_".$_FILES["ok"]["name"];
		
 
 
		$tmpfile = $_FILES["ok"]["tmp_name"];
		$file = $_FILES["ok"]["name"];

       

        // move_uploaded_file($tmp_name, "$uploads_dir/$file");

		$Nname = explode(".", $name); 
        $c_type = 'image/'.$Nname[1]; 

        $s = new S3();
	
        $s->setAuth(AWS_S3_KEY, AWS_S3_SECRET);
        $s->setRegion(AWS_S3_REGION);
        $s->setSignatureVersion('v4'); 
        $s->putObject($s->inputFile($tmpfile), AWS_S3_BUCKET, 'assets/images/learning_journey_content/'.$name, $s->ACL_PUBLIC_READ,[],['Content-Type'=>$c_type]);
        
   
	    $allowEd = array('jpg','png','.JPG','jpeg'); 
	    if(in_array($Nname[1],$allowEd)){

	
		    $insertImage['learning_journey_content_image'] = $name;
		    $insertImage['learning_journey_content_image_path'] = 'assets/images/learning_journey_content/';
		    $where['where']['learning_journey_content_id'] = $cmsID;
	        $status = $this->model_learning_journey_content->update_model($where,$insertImage);
            
		   // debug($status);
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


    public function add($id=0 , $data = array()) {
        
        $this->add_script(array( "jquery.validate.js" , "form-validation-script.js","plupload.full.min.js") , "js" );
        $this->register_plugins(array("datatables","jquery-file-upload"));
        
        parent::add($id, $data);

    }

    
    public function ajax_uploadtoserver()
    {

        require_once APPPATH.'third_party/S3/S3.php';


        // 5 minutes execution time
        @set_time_limit(5 * 60);
        // Uncomment this one to fake upload time
        // usleep(5000);

        // Settings
        $targetDir_path = "assets/uploads/learning_journey_content";
        $targetDir = FCPATH . $targetDir_path;//"assets/uploads/video_gameplay_reviews";

        //$targetDir = ???uploads???;
        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds

        // Create target dir
        if (!file_exists($targetDir)) {
        @mkdir($targetDir);
        }

        // Get a file name
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

        $s = new S3();
    
        $s->setAuth(AWS_S3_KEY, AWS_S3_SECRET);
        $s->setRegion(AWS_S3_REGION);
        $s->setSignatureVersion('v4');
        $tmpfile = $_FILES["file"]["tmp_name"];
       //debug($tmpfile);
        $file = $fileName;
        
      //  debug($file);
        $s->putObject($s->inputFile($tmpfile), AWS_S3_BUCKET, 'assets/videos/content/'.$file, $s->ACL_PUBLIC_READ,[],['Content-Type'=>'video/mp4']);

       

      

        // Chunking might be enabled
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
        
        // Remove old temp files
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                //die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
                $error[] = 'Failed to open temp directory.';
            }

            while (($file = readdir($dir)) !== false)
            {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                // If temp file is current file proceed to the next
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }

                // Remove temp file if it is older than the max age and is not the current file
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge))
                {
                    @unlink($tmpfilePath);
                }
            }

            closedir($dir);
        }

        // Open temp file
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            //die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
            $error[] = 'Failed to open output stream.';
        }

        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                //die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
                $error[] = 'Failed to move uploaded file.';
            }

            // Read binary input stream and append it to temp file
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                //die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
                $error[] = 'Failed to open input stream.';
            }
        }
        else {
            if (!$in = @fopen("php://input", "rb")) {
                //die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
                $error[] = 'Failed to open input stream.';
            }
        }

        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }

        @fclose($out);
        @fclose($in);

        // Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
        // Strip the temp .part suffix off
            rename("{$filePath}.part", $filePath);
        }


        if(($chunk+1) == $chunks) {
         
            $data = array('learning_journey_video'=>$fileName,'learning_journey_video_path'=>$targetDir_path."/");
            $this->db->where('learning_journey_content_id',$this->input->get('id'));
            $this->db->update('learning_journey_content',$data);
         
            $param = array();
            $param['status'] = true;
            $param['msg'] = 'Video Uploaded';
            echo json_encode($param);
        }
        else {
            $param = array();
            $param['msg'] = 'Video In-Progress';
            echo json_encode($param);    
        }
      
       // die();
        // Return Success JSON-RPC response
        //die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');

    }



    // public function update_count(){
    //     echo 'value updated';
    // }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

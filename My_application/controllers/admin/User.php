<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class User extends MY_Controller {

	/**
	 * user admin
	 *
	 * @package		User
	 * @author		
	 * @version		2.0 -- Robust , Advanced And More Frustating...
	 * @since		Version 2.0 2015
	 */

    public $_list_data = array();

	public function __construct() {

		global $config;
		
		parent::__construct();
        $this->dt_params['dt_headings'] = "user_id,user_firstname,user_lastname,user_type,user_email,user_status";
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


        
        $this->_list_data['user_status'] = array( 
                                        STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,  
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"  
                                    );

       
        // $this->_list_data['user_email_verified_status'] = array( 
        //                                 0 => "<span class=\"label label-default\">Not-Verified</span>" ,  
        //                                 1 =>  "<span class=\"label label-primary\">Verified</span>"  
        //                             );

		// For use IN JS Files
		$config['js_config']['paginate'] = $this->dt_params['paginate'];

		$this->_list_data['user_country'] = $this->model_country->find_all_list_active($param,"country");

        $this->_list_data['user_corporate_id'] = $this->model_corporate->find_all_list_active(array(),
            "corporate_name");
		
		$_POST = $this->input->post(NULL, true);

		if(isset($_GET['type']))
			$config['js_config']['paginate']['uri'] .= '?type=' . $_GET['type'];
	}

	public function add($id='',$data=array())
	{
		// Popluated LISTDATA in constructor
		$this->add_script(array( "jquery.validate.js" , "form-validation-script.js") , "js" );
		$this->register_plugins("bootstrap-fileupload");

		$this->form_params['action'] = array(
        	'hide_save' => true,
        	'hide_save_new' => true
    	);

    	//$this->_list_data['credit_hisotry'] = $this->model_user_credit->get_data($id);

		if(array_filled($_POST))
		
		{
			// function randomPassword() {
			// 	$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
			// 	$pass = array(); //remember to declare $pass as an array
			// 	$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
			// 	for ($i = 0; $i < 8; $i++) {
			// 		$n = rand(0, $alphaLength);
			// 		$pass[] = $alphabet[$n];
			// 	}
		
			// 	return implode($pass); //turn the array into a string
		
			// }

			$password = $this->randomPassword();

	
			$_POST['user']['user_is_admin'] = 0;
			
			if($id)
			{
				$old_password = $this->model_user->find_by_pk($id);
				
				if($old_password['user_password'] == $_POST['user']['user_password']) {
					$_POST['user']['user_password'] = $_POST['user']['user_password'];
				}
				else{
					$_POST['user']['user_password'] = $this->model_user->_encrypt_password(($_POST['user']['user_password']));
					
				}
			}
			else
			{
				// debug($password);
				$_POST['user']['user_password'] = $this->model_user->_encrypt_password(($password));
				// debug($password);
				// debug($_POST['user'] ,1);
			}
			
			
		}
		// $qp = array();
		// $qp['where']['quiz_user_id'] = $id;
		// $qp['where']
		// $data['quiz'] = $this->model_quiz->find_all($qp);

		   $data['activity_headings'] = array(
                "S.N.O",
                "Thumbnail",
                "Title",
                "Total Lectures",
                "Course ID",
                "Hourse",
                // "Status",
                // "View Lectures",
                "Take Quiz",
                "Actions",
            );


		
		 if(isset($_POST) AND array_filled($_POST)) {
			if($_POST['user']['user_paid'] == 1  && !empty($_POST['user']['user_corporate_id']))
			{
				parent::signup($_POST['user'],$password);
				
            
			}

		}

		parent::add($id,$data);
	}
	
	
	public function get_view($id=0) {

		global $config;
		$result = array();
		$class_name = $this->router->class;
		$model_name = 'model_'.$class_name ;
		$model_obj = $this->$model_name ;
		$form_fields = $model_obj->get_fields();
		if($id)
		{
			$result['record'] = $this->$model_name->find_by_pk($id);
			$result['record'] = $this->$model_name->prepare_view_data($result['record']);
			if(!$result['record'] )
				$result['failure'] = "No Item Found";
				// Load relation fields data
			$relation_data = $this->$model_name->get_relation_data($id);
			if(array_filled($relation_data))
				$result['record']['relation_data'] = $relation_data;
		}
		else
		{
			$result['failure'] = "No Item Found";
		}
	
		return $result;

	}


	
	public function update_status() {

		extract($_POST);
		if( array_filled($idList) && $model ){
			
			$updateVal = intval($updateVal);

			if($updateVal == 2)
			{

				foreach($idList as $id)
				{
					$user_data = $this->model_user->find_by_pk($id);
					$_POST['params']['pk'] = intval($id);
					if(intval($id))
					{
						$this->permanent_delete();
						
					}
				}
				$ret['affected'] = count($idList);
				end_script( json_encode($ret) );
			}
			else
			{
				$model_obj = $this->{$model};
				$status_field = $model_obj->get_status_field();
				$pk = $model_obj->get_pk();
				if($status_field && $pk)
				{
					$record[$status_field] = $updateVal;
					$params['where_in'][$pk] = $idList;
					$ret['affected'] = $model_obj->update_model($params, $record) ;
					end_script( json_encode($ret) );

				}
			}
		}
	}

	public function randomPassword() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}

		return implode($pass); //turn the array into a string

	}
	

	public function bulk_uploading()
	{
		// Toastr.error(response.msg.desc, 'Error');
		// $this->session->set_flashdata('error', ['err 1','err2']);
		
		// redirect(la("user"));
         // debug($_POST['user[user_season_id]'],1);
		// Load Library
        $this->load->library('simplexlsx');
        $json_param = array();
        if(isset($_FILES) AND array_filled($_FILES)) {
            if(empty($_FILES['file']['name'])){
                $json_param['status'] = false;
                $json_param['msg'] = 'Please select file';
				
            }
            else{
                if($_FILES['file']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
                {
                    ini_set('MAX_EXECUTION_TIME', -1);

                    // Get Post file
                    $file = $_FILES['file'];
                    // Create SimpleXLSX Obj
                    $xlsx = new SimpleXLSX($file['tmp_name']);

                    // Get file total Columns
                    $bulk_leads = array();

                    // Get total rows count in sheet with minus first row
                    $total_sheet_rows = count($xlsx->rows());

                    // NOTE : Tested per row insert and batch_insert (4.5836  ,  1.6655)
                    // Loop each row start
                    $data = $xlsx->rows();

                    if(isset($data) AND array_filled($data)) {
                        foreach($data as $k => $r) {
                            $cl = array_filter($r);
                            foreach($cl as $k1 => $v1) {

                              
                                if(($k1 <= 11)) 
                                    $bulk_leads[$k][$k1] = $v1;
                            }
                        }   
                    }

                    unset($bulk_leads[0]);
                    $post_values=$_POST['user'];
					$valid_useres_to_save = [];
					$dublicate_useres = [];

					$user_count = array();
					$user_count['where']['user_corporate_id'] = $this->session->userdata['logged_in']['corp_id'];
					$data['corp_count'] = $this->model_user->find_all_active($user_count);

					// debug(count($data['corp_count']) ,1);

					$quta_count = array();
					$quta_count['where']['corporate_id'] = $this->session->userdata['logged_in']['corp_id'];
					$data['quta_count'] = $this->model_corporate->find_one_active($quta_count);
					$total_allowed = $data['quta_count']['corporate_limit'];
					$consumed = count($data['corp_count']);
					$left_over = $total_allowed - $consumed;
					// limit of user added
					// debug($data['quta_count']['corporate_limit'] ,1);
					$quota_exceed = false;
					$user_added = false;
					$dublicate_record = false;

                    if(isset($bulk_leads) AND array_filled($bulk_leads)) {
                        foreach($bulk_leads as $value) {

							$all_user = array();
							$all_user['where']['user_email'] = $value[2];
							$all = $this->model_user->find_one_active($all_user);


							

							$password = $this->randomPassword();

							// debug($password ,1);

							

							// $abv=$this->model_user->_encrypt_password($value[3]);
							// debug($abv);
                            $save_param = array();
                            $save_param['user_type'] =  0;
                            $save_param['user_corporate_id'] = $this->session->userdata['logged_in']['corp_id'];
							$save_param['user_firstname'] =isset($value[0]) ? $value[0] : '';
							$save_param['user_lastname'] =isset($value[1]) ? $value[1] : '';
                            $save_param['user_email'] = isset($value[2]) ? $value[2] : '';
                            $save_param['user_password'] = $this->model_user->_encrypt_password($password);
                            $save_param['user_passwordshow'] = $password;


							// $user_param['user_password'] = $this->model_user->_encrypt_password($user_data['user_password']);

                            $save_param['user_status'] = 1;
							$save_param['user_paid'] = 1;
                            
                            // debug(var_dump(empty($all)),1);
							if(empty($all)){
								$valid_useres_to_save[] = $save_param;
								
							}
							else{
								$dublicate_useres[] = $save_param;
							}
                        }
                    }
					$err = [];
					foreach($valid_useres_to_save as $rec_num=> $save_param){
						if($left_over > $rec_num){
							$user_added = true;

							$this->model_user->set_attributes($save_param);                 
							$this->model_user->save();
							parent::signup($save_param,$password);
						}
						else{
							$quota_exceed = true;
					
							// $err[] = ' limit reached after uploading'.$rec_num.' users successfully';
							// $err = $err.' limit reached after uploading'.$rec_num.' users successfully,';
							// die('some error limit reached');
							break ;
						}						
					}
					if(count($dublicate_useres)){
						// debug($dublicate_useres);
						// if($err != ''){
						// 	$err = $err.' and'; 
						// }
						$dublicate_record = true;

						// $err[] =' total dublicate recods removed : '.count($dublicate_useres);
						// die('total dublicate recods removed : '.count($dublicate_useres));
						
			// $this->session->set_flashdata('error', $err);
					}
					if(count($err)){
						// die($err );

						$this->json_param['status'] = false;
						$this->json_param['msg']['title'] =  'Error Uploading';
						$this->json_param['msg']['desc'] = $err;

						$this->session->set_flashdata('error', $err);


						// $json_param['status'] = false;
						// $json_param['msg'] = $err;
						// echo json_encode($json_param);
					}
					else{
						// $this->$json_param['status'] = TRUE;
						// $this->json_param['msg'] = 'user Uploaded';
						// redirect(la("user"));
					}

                }
                else {
					$err[] = 'Invalid Format';
                	$this->json_param['status'] = false;
					
					$this->json_param['msg']['title'] =  'Error Uploading';
					$this->json_param['msg']['desc'] = $err;
					
			
                	// $json_param['msg'] = 'Invalid Format';
                }
            }

			if($quota_exceed){
				$this->session->set_flashdata('error', ['Quota limit exceeded, contact support ']);
			}
			else if($user_added){
				$this->session->set_flashdata('success', ['Users successfully added']);
			}
			else if($dublicate_record){
				$this->session->set_flashdata('error', ['Duplicate users found']);
			}
			// debug(json_encode($this->json_param));
            // echo json_encode($this->json_param);
			redirect(la("user"));
        }
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

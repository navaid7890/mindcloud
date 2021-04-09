<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


//Include Admin Wrapper. Break down things abit
include_once(APPPATH . "core/MY_Controller_Account.php");

class Profile extends MY_Controller_Account {

	/**
	 * Profile Controller. - The deafult controller
	 *
	 * @package		Profile - Default
	 * @author		devemail0909@gmail.com Ahmed (devemail0909@gmail.com)
	 * @version		2.0
	 * @since		06 Aug, 2015
	 */


	public function __construct()
	{
		parent::__construct();
		$this->add_script(array("account/account_area.js"),"js");
	}

	// Edit Profile
	public function index()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
		
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

		$this->load_view('profile' , $data);
	}


	// Edit Profile
	public function expertTutorial()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'Expert Tutorial';
		
		$data['user_data'] = $this->layout_data['user_data'];


		$param=array();
		if(isset($_GET['cat']) AND intval($_GET['cat']) > 0){
			$param['where']['course_category_id'] = intval($this->input->get('cat'));
		}
		$param['order'] ="course_id DESC";

		// $param['joins'][] = array(
		// 	"table"=>"category" , 
		// 	"joint"=>"category.category_id = course.course_category_id"
		// );
			
		$data['tutorial'] = $this->model_course->find_all_active($param);
		$data['category'] = $this->model_category->find_all_active();


		$data['dt'] = $this->model_category->find_all_active();
		// debug($data['tutorial']); 

		$this->load_view('expert' , $data);
	}

		// Package Info Profile
	public function change_password()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
			
		$data['user_data'] = $this->layout_data['user_data'];

		//$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

		$this->load_view('change_password' , $data);
		
	}

	// Address Info
	public function address_info()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
		
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

		$this->load_view('address_info' , $data);
	}


	public function about_us()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
		
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

		$this->load_view('about_us' , $data);
	}


	// Package Info Profile
	public function package_info()
	{
		global $config;
		$user_id = $this->userid;

		if($user_id > 0)
		{
			$data['title'] = 'My Profile';
			
			$data['user_data'] = $this->layout_data['user_data'];

			$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

			$this->load_view('package_info' , $data);
		}
		else {
			redirect(l('')."?pop=signup&msgtype=error&msg=".urlencode('Please login first') , true);
			exit();		
		}
		
	}


	// Package Info Profile
	public function favorite_article()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
			
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

		$this->load_view('favorite_article' , $data);
		
	}



	/*
	* Ajax Request
	*/

	//UPDATE CONTACT INFO
	public function ajax_contact_info_save()
	{
		if(isset($_POST) AND array_filled($_POST))
		{
			$this->form_validation->set_rules('user[user_firstname]', 'First Name', 'trim|required');
			$this->form_validation->set_rules('user[user_lastname]', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('user[user_email]', 'Email', 'required|valid_email|strtolower|trim|htmlentities|is_unique[user.user_email]');

			// $this->form_validation->set_rules('user_info[ui_mobile]', 'Mobile Number', 'trim|required');
			$this->form_validation->set_rules('user_info[ui_phone]', 'Phone Number', 'trim|required');
			
			// when email field is incorrect
			if ($this->form_validation->run() == FALSE) {
				$this->json_param['status'] = false;
				$this->json_param['msg']['title'] = 'Error Occurred';
				$this->json_param['msg']['desc'] = validation_errors();
			}
			else
			{

				$user_id = $this->userid;

				if(isset($_POST['user']) AND array_filled($_POST['user']))
				{
					$param = array();
					$data = $this->input->post('user');

					$this->model_user->update_by_pk($user_id,$data);
				}

				if(isset($_POST['user_info']) AND array_filled($_POST['user_info']))
				{
					unset($_POST['user_info']['ui_user_id']);
					
					$param = array();
					$param['where']['ui_user_id'] = $user_id;
					$data = $this->input->post('user_info');

					$this->model_user_info->update_model($param , $data);
				}


				//	SESSION DATA START
				$this->model_user->auto_login($user_id,'front');
				//	SESSION DATA END

				$this->json_param['status'] = true;
				$this->json_param['msg']['title'] = 'Success';
				$this->json_param['msg']['desc'] = "Your Contact info has been successfully updated";
			}

			echo json_encode($this->json_param);
		}
	}

	//	CHANGE PASSWORD FUNCTION 
	public function ajax_change_password()
	{
		if(isset($_POST) AND array_filled($_POST))
		{
			$this->form_validation->set_rules('new_password', 'New Password', 'required|trim|htmlentities|min_length[8]|max_length[100]');

			$user_id = $this->userid;//$_POST['user']['user_id'];
			$current_password = $this->model_user->_encrypt_password($_POST['current_password']);
			$new_password = $_POST['new_password'];
			$retype_password = $_POST['repeat_password'];

			// already save password get
			$db_password = $this->model_user->get_user_password($user_id);

			// check current and already save Password is correct
			if($db_password != $current_password)
			{
				$mode = false;
				$this->json_param['status'] = false;
				$this->json_param['msg']['title'] = 'Error Occurred';
				$this->json_param['msg']['desc'] = "Current Password Can\'t be correct";
			}
			else
			{
				// check New and retype is correct
				if($new_password != $retype_password)
				{
					$mode = false;
					$this->json_param['status'] = false;
					$this->json_param['msg']['title'] = 'Error Occurred';
					$this->json_param['msg']['desc'] = "Passwords Don\'t Match";
				}
				else
				{
					// when email field is incorrect
					if ($this->form_validation->run() == FALSE) {
						$mode = false;
						$this->json_param['status'] = false;
						$this->json_param['msg']['title'] = 'Error Occurred';
						$this->json_param['msg']['desc'] = validation_errors();
					}
					else
					{
						$mode = true;
					}
				}
			}

			
			// when password field is incorrect
			if($mode)
			{

				$data['user_password'] = $this->model_user->_encrypt_password($new_password);
				$this->model_user->update_by_pk($user_id , $data);


				//	SESSION DATA START
				//$this->model_user->auto_login($user_id,'front');
				//	SESSION DATA END

				
				$this->session->unset_userdata('logged_in_front');  

				$this->json_param['status'] = true;
				$this->json_param['msg']['title'] = 'Success';
				$this->json_param['msg']['desc'] = "Your password has been successfully updated.Login with new Password.";
			}

			echo json_encode($this->json_param);
		}
	}

	//UPDATE ADDRESS INFO 
	public function ajax_update_address_save()
	{
		if(isset($_POST) AND array_filled($_POST))
		{
			// DOB variable
			//$_POST['user_info']['ui_dob']= $_POST['year'].'-'.$_POST['month'].'-'.$_POST['days'];

			$this->form_validation->set_rules('user_info[ui_address_primary]', 'Primary Address', 'trim|required');
			//$this->form_validation->set_rules('user_info[ui_address_secondary]', 'Secondary Address', 'trim|required');
			$this->form_validation->set_rules('user_info[ui_city]', 'City', 'trim|required');
			$this->form_validation->set_rules('user_info[ui_country_id]', 'Country', 'trim|required');
			
			// when email field is incorrect
			if ($this->form_validation->run() == FALSE) {
				$this->json_param['status'] = false;
				$this->json_param['msg']['title'] = 'Error Occurred';
				$this->json_param['msg']['desc'] = validation_errors();
			}
			else
			{

				$user_id = $this->userid;//$_POST['user_info']['ui_user_id'];
				unset($_POST['user_info']['ui_user_id']);
				
				$param = array();
				$param['where']['ui_user_id'] = $user_id;
				$data = $_POST['user_info'];

				$this->model_user_info->update_model($param , $data);

				//	SESSION DATA START
				$this->model_user->auto_login($user_id,'front');
				//	SESSION DATA END

				$this->json_param['status'] = true;
				$this->json_param['msg']['title'] = 'Success';
				$this->json_param['msg']['desc'] = "Your Contact info has been successfully updated";
			}

			echo json_encode($this->json_param);
		}
	}


	//	UPDATE ABOUT US / AVATAR
	public function ajax_update_about()
	{
		if(isset($_POST) AND array_filled($_POST))
		{
			//debug($_POST , 1);	
			//$this->form_validation->set_rules('user_info[ui_website]', 'Website', 'trim|required');
			//$this->form_validation->set_rules('user_info[ui_description]', 'Description', 'trim|required');
			
			// when email field is incorrect
			//if ($this->form_validation->run() == FALSE) {
			if(1 == 2) {
				$this->json_param['status'] = false;
				$this->json_param['msg']['title'] = 'Error Occurred';
				$this->json_param['msg']['desc'] = validation_errors();
			}
			else
			{

				$user_id = $_POST['user_info']['ui_user_id'];
				unset($_POST['user_info']['ui_user_id']);

				// File Upload START
				if(isset($_FILES['file']['error']) AND ($_FILES['file']['error'] == 0))
				{
					// Get temp file
					$tmp = $_FILES['file']['tmp_name'];
					// Generate file name
					$name = mt_rand().$_FILES['file']['name'];

					// Get upload path
					$upload_path = $this->config->item('site_upload_user_photo');

					// Set data in user_info 
					$_POST['user_info']['ui_profile_image'] = $name;
					$_POST['user_info']['ui_profile_image_path'] = $upload_path;

					// Remove old file
					if(!empty($this->session->userdata('userdata')['signup_image'])){
						unlink($this->config->item('site_upload_user_photo') . basename($this->session->userdata('userdata')['signup_image']));
					}

					// Upload new file
					move_uploaded_file( $tmp,$upload_path.$name);
				}
				// File Upload END
				
				$param = array();
				$param['where']['ui_user_id'] = $user_id;
				$data = $_POST['user_info'];
				$this->model_user_info->update_model($param , $data);

				//	SESSION DATA START
				$this->model_user->auto_login($user_id,'front');
				//	SESSION DATA END

				$this->json_param['status'] = true;
				$this->json_param['msg']['title'] = 'Success';
				$this->json_param['msg']['desc'] = "Your profile has been successfully updated";
				//$this->json_param['msg']['url'] = l('account/profile');
			}

			echo json_encode($this->json_param);
		}
	}

	/*
	// check password change
	private function _check_password_change($user_id)
	{
		$new_password = $_POST['user']['user_password'];
		
		$param['fields'] = 'user_password';
		$data = $this->model_user->find_by_pk($user_id , false,$param);
		$old_password = $data['user_password'];

		if($old_password == $new_password)
			unset($_POST['user']['user_password']);
		
		return true;
	}


	public function update()
	{
		if(isset($_POST) AND array_filled($_POST))
		{
			$_POST['user']['user_term_agreed'] = 1;
			//debug(strlen($_POST['user']['user_password']) , 1);
			$this->form_validation->set_rules('user[user_firstname]', 'Primary Address', 'required|trim');
			$this->form_validation->set_rules('user[user_lastname]', 'Primary Address', 'required|trim');

			$this->form_validation->set_rules('user_info[ui_address_primary]', 'Primary Address', 'trim|required');
			$this->form_validation->set_rules('user_info[ui_city]', 'City', 'trim|required');
			$this->form_validation->set_rules('user_info[ui_country_id]', 'Country', 'trim|required');

			// when email field is incorrect
			if ($this->form_validation->run() == FALSE) {
				$this->json_param['status'] = false;
				$this->json_param['msg']['title'] = 'Error Occurred';
				$this->json_param['msg']['desc'] = validation_errors();
			}
			else
			{
				$user_id = $_POST['user']['user_id'];
				unset($_POST['user']['user_id']);

				//$this->_check_password_change($user_id);
				

				$data = $_POST['user'];
				if(isset($data['user_password']))
					$data['user_password'] = $this->model_user->_encrypt_password($data['user_password']);

				// File Upload START
				if(isset($_FILES['file']['error']) AND ($_FILES['file']['error'] == 0))
				{
					// Get temp file
					$tmp = $_FILES['file']['tmp_name'];
					// Generate file name
					$name = mt_rand().$_FILES['file']['name'];

					// Get upload path
					$upload_path = $this->config->item('site_upload_user_photo');

					// Set data in user_info 
					$_POST['user_info']['ui_profile_image'] = $name;
					$_POST['user_info']['ui_profile_image_path'] = $upload_path;

					// Remove old file
					if(!empty($this->session->userdata('userdata')['signup_image'])){
						unlink($this->config->item('site_upload_user_photo') . basename($this->session->userdata('userdata')['signup_image']));
					}

					// Upload new file
					move_uploaded_file( $tmp,$upload_path.$name);
				}
				// File Upload END
				$this->model_user->update_by_pk($user_id , $data);

				//	SESSION DATA START
				$this->model_user->auto_login($user_id,'front');
				//	SESSION DATA END

				$this->json_param['status'] = true;
				$this->json_param['msg']['title'] = 'Success';
				$this->json_param['msg']['desc'] = "Your profile has been successfully updated";
				$this->json_param['msg']['url'] = l('account/profile');
			}


			echo json_encode($this->json_param);
		}
	}
	
	

	


	

	

	*/


	public function expert()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
		
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

		$this->load_view('expert' , $data);
	}

	public function learning()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
		
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('learning' , $data);
	}

	public function startup()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
		
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

		$this->load_view('startup' , $data);
	}


	public function tools()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
		
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('tools' , $data);
	}

	public function video()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
		
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('video' , $data);

	}

	public function business()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';
		
		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

		$this->load_view('business' , $data);
	}




	







	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

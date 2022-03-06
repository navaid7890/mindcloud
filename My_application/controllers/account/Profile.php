<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


//Include Admin Wrapper. Break down things abit
include_once(APPPATH . "core/MY_Controller_Account.php");
include_once(APPPATH . "third_party/PhpWord/Autoloader.php");

use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;
use SquareConnect\Model\Device;

Autoloader::register();
Settings::loadConfig();
class Profile extends MY_Controller_Account
{


	/**
	 * Profile Controller. - The deafult controller
	 *
	 * @package		Profile - Default
	 * @author		devemail0909@gmail.com devemail0909@gmail.com (devemail0909@gmail.com)
	 * @version		2.0
	 * @since		06 Aug, 2015
	 */


	public function __construct()
	{
		parent::__construct();
		$this->add_script(array("account/account_area.js"), "js");
	}

	// Edit Profile
	public function index()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');

		// debug($data['country']);

		$this->load_view('profile', $data);
	}


	// Edit Profile
	// public function expertTutorial()
	// {
	// 	global $config;
	// 	$user_id = $this->userid;

	// 	$data['title'] = 'Expert Tutorial';

	// 	$data['user_data'] = $this->layout_data['user_data'];


	// 	$param = array();
	// 	if (isset($_GET['cat']) and intval($_GET['cat']) > 0) {
	// 		$param['where']['tutorial_category_id'] = intval($this->input->get('cat'));
	// 	}
	// 	$param['order'] = "tutorial_id DESC";

	// 	$data['tutorial'] = $this->model_tutorial->find_all_active($param);
	// 	$data['category'] = $this->model_category->find_all_active();


	// 	$data['dt'] = $this->model_category->find_all_active();
	// 	// debug($data['tutorial']); 

	// 	$this->load_view('expert', $data);
	// }

	// Package Info Profile
	public function change_password()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		//$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');

		$this->load_view('change_password', $data);
	}

	// Address Info
	public function address_info()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');

		$this->load_view('_address_info', $data);
	}


	public function about_us()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');

		$this->load_view('_about_us', $data);
	}


	// Package Info Profile
	public function package_info()
	{
		global $config;
		$user_id = $this->userid;

		if ($user_id > 0) {
			$data['title'] = 'My Profile';

			$data['user_data'] = $this->layout_data['user_data'];

			$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');

			$this->load_view('package_info', $data);
		} else {
			redirect(l('') . "?pop=signup&msgtype=error&msg=" . urlencode('Please login first'), true);
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

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');

		$this->load_view('favorite_article', $data);
	}



	/*
	* Ajax Request
	*/

	//UPDATE CONTACT INFO
	public function ajax_contact_info_save()
	{
		if (isset($_POST) and array_filled($_POST)) {
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
			} else {

				$user_id = $this->userid;

				if (isset($_POST['user']) and array_filled($_POST['user'])) {
					$param = array();
					$data = $this->input->post('user');

					$this->model_user->update_by_pk($user_id, $data);
				}

				if (isset($_POST['user_info']) and array_filled($_POST['user_info'])) {
					unset($_POST['user_info']['ui_user_id']);

					$param = array();
					$param['where']['ui_user_id'] = $user_id;
					$data = $this->input->post('user_info');

					$this->model_user_info->update_model($param, $data);
				}


				//	SESSION DATA START
				$this->model_user->auto_login($user_id, 'front');
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
		if (isset($_POST) and array_filled($_POST)) {
			$this->form_validation->set_rules('new_password', 'New Password', 'required|trim|htmlentities|min_length[8]|max_length[100]');

			$user_id = $this->userid; //$_POST['user']['user_id'];
			$current_password = $this->model_user->_encrypt_password($_POST['current_password']);
			$new_password = $_POST['new_password'];
			$retype_password = $_POST['repeat_password'];

			// already save password get
			$db_password = $this->model_user->get_user_password($user_id);

			// check current and already save Password is correct
			if ($db_password != $current_password) {
				$mode = false;
				$this->json_param['status'] = false;
				$this->json_param['msg']['title'] = 'Error Occurred';
				$this->json_param['msg']['desc'] = "Current Password Can\'t be correct";
			} else {
				// check New and retype is correct
				if ($new_password != $retype_password) {
					$mode = false;
					$this->json_param['status'] = false;
					$this->json_param['msg']['title'] = 'Error Occurred';
					$this->json_param['msg']['desc'] = "Passwords Don\'t Match";
				} else {
					// when email field is incorrect
					if ($this->form_validation->run() == FALSE) {
						$mode = false;
						$this->json_param['status'] = false;
						$this->json_param['msg']['title'] = 'Error Occurred';
						$this->json_param['msg']['desc'] = validation_errors();
					} else {
						$mode = true;
					}
				}
			}


			// when password field is incorrect
			if ($mode) {

				$data['user_password'] = $this->model_user->_encrypt_password($new_password);
				$this->model_user->update_by_pk($user_id, $data);


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
		if (isset($_POST) and array_filled($_POST)) {
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
			} else {

				$user_id = $this->userid; //$_POST['user_info']['ui_user_id'];
				unset($_POST['user_info']['ui_user_id']);

				$param = array();
				$param['where']['ui_user_id'] = $user_id;
				$data = $_POST['user_info'];

				$this->model_user_info->update_model($param, $data);

				//	SESSION DATA START
				$this->model_user->auto_login($user_id, 'front');
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
		if (isset($_POST) and array_filled($_POST)) {
			//debug($_POST , 1);	
			//$this->form_validation->set_rules('user_info[ui_website]', 'Website', 'trim|required');
			//$this->form_validation->set_rules('user_info[ui_description]', 'Description', 'trim|required');

			// when email field is incorrect
			//if ($this->form_validation->run() == FALSE) {
			if (1 == 2) {
				$this->json_param['status'] = false;
				$this->json_param['msg']['title'] = 'Error Occurred';
				$this->json_param['msg']['desc'] = validation_errors();
			} else {

				$user_id = $_POST['user_info']['ui_user_id'];
				unset($_POST['user_info']['ui_user_id']);

				// File Upload START
				if (isset($_FILES['file']['error']) and ($_FILES['file']['error'] == 0)) {
					// Get temp file
					$tmp = $_FILES['file']['tmp_name'];
					// Generate file name
					$name = mt_rand() . $_FILES['file']['name'];

					// Get upload path
					$upload_path = $this->config->item('site_upload_user_photo');

					// Set data in user_info 
					$_POST['user_info']['ui_profile_image'] = $name;
					$_POST['user_info']['ui_profile_image_path'] = $upload_path;

					// Remove old file
					if (!empty($this->session->userdata('userdata')['signup_image'])) {
						unlink($this->config->item('site_upload_user_photo') . basename($this->session->userdata('userdata')['signup_image']));
					}

					// Upload new file
					move_uploaded_file($tmp, $upload_path . $name);
				}
				// File Upload END

				$param = array();
				$param['where']['ui_user_id'] = $user_id;
				$data = $_POST['user_info'];
				$this->model_user_info->update_model($param, $data);

				//	SESSION DATA START
				$this->model_user->auto_login($user_id, 'front');
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

		$data = array();
		global $config;

		$method_title = ucwords($this->uri->segment(1));
		$this->layout_data['title'] = g('db.admin.site_title') . " | " . $method_title;

		$cont = $this->model_cms_page->get_page(2);
		$data['cont1'] = $cont['child'][4];
		$data['cont2'] = $cont['child'][5];

		$conts = $this->model_cms_page->get_page(20);
		$data['con1'] = $conts['child'][0];

		$contss = $this->model_cms_page->get_page(20);

		$data['con2'] = $contss['child'][1];
		$data['con3'] = $contss['child'][2];
		$data['con4'] = $contss['child'][3];
		$data['con5'] = $contss['child'][4];

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




		$param['order'] = "tutorial_name ASC";
		$param['where_in']['tutorial_id'] = $all;

		$art = $this->model_tutorial->get_details($param);

		$product_data = $this->_paginations('tutorial', $art);
		$data['art'] = $product_data['data'];
		$data['links'] = $product_data['links'];

		//	debug($this->db->last_query());


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

		$params = array();
		$params['limit'] = 3;
		$params['where_in']['tutorial_id'] = $all;
		$data['tut'] = $this->model_tutorial->find_all_active($params);

		$exp1 = $this->model_cms_page->get_page(26);

		$data['check'] = $exp1['child'][0];


		$par200 = array();
        $par200['order'] = "language_id ASC";
        $data['lang'] = $this->model_language->find_all_active($par200);

		

		// $dashCat = array();
		// $dashCat['where']['category_status'] = 1;
		// $data['dashCatV'] = $this->model_category->find_all_active($dashCat);



		$this->load_view('expert', $data);
	}

	public function learning()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();

		$startup = array();
		$startup['where']['startup_user_id'] = $this->userid;
		$data['startup'] = $this->model_startup->find_all_active($startup);

		$this->load_view('learning', $data);
	}
	// public function ppt()
	// {
	// 	global $config;
	// 	$user_id = $this->userid;

	// 	$data['title'] = 'My Profile';

	// 	set_time_limit(0);
	// 	$all_slides ="";
	// 	$file = file_get_contents("https://mindcloud-assets.s3.amazonaws.com/assets/legal_term_sheet.pptx");
	// 	file_put_contents('ppt_temp.pptx', $file);
	// 	$file = "ppt_temp.pptx";
	// 	if (!file_exists('assets/slides/')) {
	// 		mkdir('assets/slides/', 0777, true);
	// 	}
	// 	$uploadsFolder = "assets/slides/";
	// 	$powerpnt = new COM("powerpoint.application") or die("Unable to instantiate Powerpoint");
	// 	$presentation = $powerpnt->Presentations->Open(realpath($file), false, false, false) or die("Unable to open presentation");
	// 	foreach ($presentation->Slides as $slide) {
	// 		$slideName = "Slide_" . $slide->SlideNumber;
	// 		$exportFolder = realpath($uploadsFolder);
	// 		$slide->Export($exportFolder . "\\\\" . $slideName . ".jpg", "jpg", "600", "400");
	// 		$all_slides .= $slideName.",";
	// 		ob_flush();
	// 		flush();
	// 	}
	// 	$powerpnt->quit();
	// 	echo $all_slides;
	// 	// $this->load_view('learning', $data);
	// }

	public function startup()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();


		$startup = array();
		$startup['where']['startup_user_id'] = $this->userid;
		$data['startup'] = $this->model_startup->find_all_active($startup);



		$this->load_view('startup', $data);
	}
	public function your_work()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();


		$startup = array();
		$startup['where']['startup_user_id'] = $this->userid;
		$data['startup'] = $this->model_startup->find_all_active($startup);

		$param = array();
		if (isset($_GET['cat']) and intval($_GET['cat']) > 0) {
			$param['where']['learning_journey_content_id'] = intval($this->input->get('cat'));
		}
		$data['learn_content'] = $this->model_learning_journey_content->find_all_active($param);



		$this->load_view('your_work', $data);
	}


	public function tools()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('business-model-tool', $data);
	}
	public function dl_tools()
	{
		$vp = array();
		$vp['where']['tool_builder_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder->find_all_active($vp);
		$tootl = $data['tootl'];
		// $toolurl= l('account/profile/tools?cat=11');

		// if (empty($tootl)) {
		// 	header('Location:'.$toolurl);
		// } else {
			// $this->load->library('phpword');

			$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/business_model_canvus.docx');
			foreach ($tootl[0] as $column_name => $value) {
				$textlines = explode("\n", $value);
				if (sizeof($textlines) > 1) {
					$value = '';
					foreach ($textlines as $line) {
						$value = $value . $line . '</w:t><w:br/><w:t>';
					}
				}
				$templateProcessor->setValue($column_name, $value);
			}
			$filename = 'Business Model Canvas.docx';
			$templateProcessor->saveAs($filename);
			$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
			$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
			// $xmlWriter->save('result.docx');
			// $targetFile = "./global/uploads/";
			// $filename = 'Value Proposition Canvas.docx';
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . $filename);
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($filename));
			flush();
			readfile($filename);
			unlink($filename); // deletes the temporary file
			exit;
		// }
	}
	public function dl_tools_multi()
	{
		// $this->load->library('phpword');
		$vp = array();
		$vp['where']['tool_builder_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder_bmc_multi->find_all_active($vp);
		$tootl = $data['tootl'];
		// debug( $tootl);
		// die;
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/business_model_canvus_multi.docx');
		// debug($tootl);
		// die();
		foreach ($tootl[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			$templateProcessor->setValue($column_name, $value);
		}
		// foreach ($tootl[0] as $column_name => $value) {
		// 	$templateProcessor->setValue($column_name, $value);
		// }
		$filename = 'Business Model Canvas.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	}

	public function tools_vp()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		// $data['tootl_vp'] = $this->model_tool_builder_vp->find_all_active();


		$this->load_view('business-model-tool-vp', $data);
	}

	public function dl_tools_vp()
	{
		// $this->load->library('phpword');
		$vp = array();
		$vp['where']['tool_builder_vp_user_id'] = $this->userid;
		$data['tootl_vp'] = $this->model_tool_builder_vp->find_all_active($vp);
		$tootl_vp = $data['tootl_vp'];
		// $toolurl= l('account/profile/tools_vp?cat=12');

		// if (empty($tootl_vp)) {
		// 	header('Location:'.$toolurl);
		// } else {


		// debug( $tootl_vp);
		// die;
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/value_proposition_canvas.docx');
		foreach ($tootl_vp[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			$templateProcessor->setValue($column_name, $value);
		}
		// foreach ($tootl_vp[0] as $column_name => $value) {
		// 	$templateProcessor->setValue($column_name, $value);
		// }

		$filename = 'Value Proposition Canvas.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	// }
}


	public function tools_swot()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('business-model-tool-swot', $data);
	}
	public function dl_tools_swot()
	{
		// $this->load->library('phpword');
		$vp = array();
		$vp['where']['tool_builder_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder_swot->find_all_active($vp);
		$tootl = $data['tootl'];
		// $toolurl= l('account/profile/tools_swot?cat=13');

		// if (empty($tootl)) {
		// 	header('Location:'.$toolurl);
		// } else {
		// debug( $tootl);
		// die;
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/swot_analysis.docx');
		foreach ($tootl[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			$templateProcessor->setValue($column_name, $value);
		}
		// foreach ($tootl[0] as $column_name => $value) {
		// 	$templateProcessor->setValue($column_name, $value);
		// }

		$filename = 'SWOT Analysis.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	// }
}

	public function tools_pmmt()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('business-model-tool-pmmt', $data);
	}
	public function dl_tools_pmmt()
	{
		// $this->load->library('phpword');
		$vp = array();
		$vp['where']['tool_builder_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder_pmmt->find_all_active($vp);
		$tootl = $data['tootl'];
		// debug( $tootl);
		// die;
		// $toolurl= l('account/profile/tools_pmmt?cat=14');

		// if (empty($tootl)) {
		// 	header('Location:'.$toolurl);
		// } else {
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/positioning_marketing_mix.docx');
		foreach ($tootl[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			$templateProcessor->setValue($column_name, $value);
		}
		// foreach ($tootl[0] as $column_name => $value) {
		// 	$templateProcessor->setValue($column_name, $value);
		// }

		$filename = 'Positioning and Marketing Mix.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
		// }
	}

	public function tools_smp()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('strategic-marketing-tool', $data);
	}
	public function dl_tools_smp()
	{
		// $this->load->library('phpword');
		$vp = array();
		$vp['where']['tool_builder_strg_mkt_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder_strg_mkt->find_all_active($vp);
		$tootl = $data['tootl'];
		// debug( $tootl);
		// die;
		// $toolurl= l('account/profile/tools_smp?cat=15');

		// if (empty($tootl)) {
		// 	header('Location:'.$toolurl);
		// } else {
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/strategic_marketing_plan.docx');
		foreach ($tootl[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			$templateProcessor->setValue($column_name, $value);
		}
		// foreach ($tootl[0] as $column_name => $value) {
		// 	$templateProcessor->setValue($column_name, $value);
		// }

		$filename = 'Strategic Marketing Plan.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	// }
}
	public function tools_cjdg()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('customer-journey-demand-generation', $data);
	}
	public function dl_tools_cjdg()
	{
		// $this->load->library('phpword');
		$vp = array();
		$vp['where']['tool_builder_cj_dg_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder_cj_dg->find_all_active($vp);
		$tootl = $data['tootl'];
		// debug( $tootl);
		// die;
		// $toolurl= l('account/profile/tools_cjdg?cat=16');

		// if (empty($tootl)) {
		// 	header('Location:'.$toolurl);
		// } else {
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/customer_journey_demand_generation.docx');
		foreach ($tootl[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			$templateProcessor->setValue($column_name, $value);
		}
		// foreach ($tootl[0] as $column_name => $value) {
		// 	$templateProcessor->setValue($column_name, $value);
		// }

		$filename = 'Customer Journey Demand Generation.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	// }
}
	public function tools_mc()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('marketing-campaign-model-canvas', $data);
	}
	public function dl_tools_mc()
	{
		// $this->load->library('phpword');
		$vp = array();
		$vp['where']['tool_builder_mc_mc_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder_mc_mc->find_all_active($vp);
		$tootl = $data['tootl'];
		// debug( $tootl);
		// die;
		// $toolurl= l('account/profile/tools_mc?cat=17');
		// if (empty($tootl)) {
		// 	header('Location:'.$toolurl);
		// } else {
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/marketing_campaign_model_canvas.docx');
		foreach ($tootl[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			$templateProcessor->setValue($column_name, $value);
		}
		// foreach ($tootl[0] as $column_name => $value) {
		// 	$templateProcessor->setValue($column_name, $value);
		// }


		$filename = 'Marketing Campaign Model Canvas.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	// }
}
	public function tools_osf()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('online-sales-funnel', $data);
	}
	public function dl_tools_osf()
	{
		// $this->load->library('phpword');
		$vp = array();
		$vp['where']['tool_builder_osf_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder_osf->find_all_active($vp);
		$tootl = $data['tootl'];
		// debug( $tootl);
		// die;
		// $toolurl= l('account/profile/tools_osf?cat=18');
		// if (empty($tootl)) {
		// 	header('Location:'.$toolurl);
		// } else {
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/online_sales_funnel.docx');
		foreach ($tootl[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			$templateProcessor->setValue($column_name, $value);
		}
		// foreach ($tootl[0] as $column_name => $value) {
		// 	$templateProcessor->setValue($column_name, $value);
		// }

		$filename = 'Online Sales Funnel.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	// }
}
	public function tools_lts()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('legal-term-sheet', $data);
	}
	public function dl_tools_lts()
	{

		$vp = array();
		$vp['where']['tool_builder_lts_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder_lts->find_all_active($vp);
		$tootl = $data['tootl'];
		// debug( $tootl[0]['tool_builder_lts_structure_settingup_jv_company']);
		// die;
		// html_entity_decode();
		// $toolurl= l('account/profile/tools_lts?cat=25');
		// if (empty($tootl)) {
		// 	header('Location:'.$toolurl);
		// } else {
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/legal_term_sheet.docx');
		foreach ($tootl[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			$templateProcessor->setValue($column_name, $value);
		}
		// foreach ($tootl[0] as $column_name => $value) {
		// 	$templateProcessor->setValue($column_name, $value);
		// }

		$filename = 'Legal Term Sheet.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	// }
}

	public function tools_fm_income()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('business-model-tool-fm-income', $data);
	}
	public function tools_ids()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('investment-deck-slides', $data);
	}
	public function dl_tools_ids()
	{

		$vp = array();
		$vp['where']['tool_builder_ids_user_id'] = $this->userid;
		$data['tootl'] = $this->model_tool_builder_ids->find_all_active($vp);
		$tootl = $data['tootl'];

		$startup = array();
		$startup['where']['startup_user_id'] = $this->userid;
		$data['startupname'] = $this->model_startup->find_all_active($startup);


		if (empty($data['startupname'][0]["startup_name"])) {
			$data['startupname'][0]["startup_name"] = " ";
		}
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/investment_deck_slides.docx');
		$templateProcessor->setValue('startup_name', $data['startupname'][0]["startup_name"]);
		foreach ($tootl[0] as $column_name => $value) {
			$textlines = explode("\n", $value);
			if (sizeof($textlines) > 1) {
				$value = '';
				foreach ($textlines as $line) {
					$value = $value . $line . '</w:t><w:br/><w:t>';
				}
			}
			
			$templateProcessor->setValue($column_name, $value);

		}

		$filename = 'Investment Deck Slides.docx';
		$templateProcessor->saveAs($filename);
		$phpWord = \PhpOffice\PhpWord\IOFactory::load($filename); // Read the temp file
		$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		// $xmlWriter->save('result.docx');
		// $targetFile = "./global/uploads/";
		// $filename = 'Value Proposition Canvas.docx';
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	}

	public function tools_fm_bss()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('business-model-tool-fm-bss', $data);
	}


	public function tools_fm_beps()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('business-model-tool-fm-beps', $data);
	}


	public function tools_fm_cfs()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('business-model-tool-fm-cfs', $data);
	}


	public function tools_fm_dcvm()
	{
		global $config;
		$user_id = $this->userid;
		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('business-model-tool-fm-dcvm', $data);
	}

	public function video()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();

		$param = array();
		if (isset($_GET['cat']) and intval($_GET['cat']) > 0) {
			$param['where']['learning_journey_content_id'] = intval($this->input->get('cat'));
		}
		$data['learn_content'] = $this->model_learning_journey_content->find_all_active($param);
		// $data['learn_video'] =
		$this->load_view('video', $data);
	}
	public function description()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();

		$param = array();
		if (isset($_GET['cat']) and intval($_GET['cat']) > 0) {
			$param['where']['learning_journey_content_id'] = intval($this->input->get('cat'));
		}
		$data['learn_content'] = $this->model_learning_journey_content->find_all_active($param);
		// $data['learn_video'] =
		$this->load_view('description', $data);
	}

	public function business()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		// $data['learn_content'] = $this->model_learning_journey_content->find_all_active($param);
		$this->load_view('business', $data);
	}


	public function course_detail_expert($slug = '')
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
		if (count($course) < 1) {
			redirect("?msgtype=error&msg=invalid url");
		}
		$data['course'] = $course;
		$pop = array();
		$pop['where']['tutorial_slug !='] = $slug;
		$pop['limit'] = 3;
		$data['popular'] = $this->model_tutorial->find_all_active($pop);


		$expert = array();
		$expert['where']['expert_id'] = $course[0]['tutorial_expert_id'];
		$expert_data = $this->model_expert->find_all_active($expert);
		$data['expert'] = $expert_data;

		$tut = array();
		$tut['where']['cp_course_id'] = $course[0]['tutorial_id'];
		$tutorail = $this->model_course_tutorial->find_all_active($tut);

		foreach ($tutorail as $key => $value) {
			$all[] = $value['cp_tutorial_id'];
		}


		$lec = array();
		$lec['where_in']['videos_id'] = $all;
		$data['lc'] = $this->model_videos->find_all_active($lec);
		//   debug($lc);
		$par7 = array();
		$par7['where']['cp_course_id'] = $course[0]['tutorial_id'];
		$coursecat = $this->model_course_category->find_all_active($par7);
		// debug($coursecat);

		foreach ($coursecat as $key => $value) {
			$all1[] = $value['cp_category_id'];
		}
		$ccategory = array();
		$ccategory['where_in']['category_id'] = $all1;
		$data['ct'] = $this->model_category->find_all_active($ccategory);

		//   debug($course_review_data[0]['learning_journey_course_review_course_id']);
		$review = array();
		$review['where']['learning_journey_course_review_course_id'] = $coursecat[0]['cp_course_id'];
		$review_data = $this->model_learning_journey_course_review->find_all_active($review);

		$data['review'] = $review_data;



		//  debug($coursecat[0]['cp_course_id']);
		//  debug($review_data);

		$this->load_view("course_detail_expert", $data);
	}



	public function expert_detail_tutorial()
	{
		global $config;
		$user_id = $this->userid;

		$data = $this->get_sidebar_data();

		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$param = array();
		if (isset($_GET['courseid']) and intval($_GET['courseid']) > 0) {
			$param['where']['tutorial_id'] = intval($_GET['courseid']);
		}
		$data['expert_course'] = $this->model_tutorial->find_all_active($param);
		$this->load_view('expert_detail_tutorial', $data);
	}

	public function pdf_convert($tutorialid = '', $view = 0)
	{
		$tutorialid = $_GET['courseid'];
		$view = 1;

		$this->layout_data['template_config']['show_toolbar'] = false;

		$logodata = $this->model_logo->find_by_pk(1);
		$logo = Links::img($logodata['logo_image_path'], $logodata['logo_image']);
		// $data['logo'] = g('dirname').$logodata['logo_image_path'].$logodata['logo_image'];

		//   $quiz = $this->model_quiz->find_by_pk($tutorialid);
		$course = $this->model_tutorial->find_by_pk($tutorialid);

		$pu = array();
		$pu['fields'] = "user_firstname,user_lastname";
		$user_data = $this->model_user->find_by_pk($this->userid, false, $pu);


		$al = array();
		$al['where']['expert_id'] = $course['tutorial_expert_id'];

		$expert = $this->model_expert->find_all_active($al);
		//   debug($expert[0]['expert_name']);
		// debug($expert[0]['expert_name']);
		// die;

		//CERTIFICATE VARIABLES
		// $data['completion_date'] = csl_date($quiz['quiz_createdon'],'d-m-Y');
		// $data['certificate_number']  = $quiz['quiz_certificate_number'];
		$data['course_title'] = $course['tutorial_name'];
		$data['expert_name'] = $expert[0]['expert_name'];
		$data['course_tracking_number'] = $course['tutorial_identity'];
		$data['username'] = $user_data['user_firstname'] . ' ' . $user_data['user_lastname'];
		$data['ce_provider'] = '110221021';

		$data['logo'] = g('dirname') . 'assets/front_assets/images/logo.png';    //for PDF
		$data['certificate'] = g('dirname') . 'assets/front_assets/images/certificate.png';    //for PDF
		$data['signature'] = g('dirname') . 'assets/front_assets/images/signature.jpg';    //for PDF

		// $data['certificate'] = l('').'assets/front_assets/images/certificate_pdf.jpg';
		$filename = "Certificate";

		$this->load->view("widgets/pdf_certificate", $data);

		// // Get output html
		$html = $this->output->get_output();
		// debug($html , 1);

		// Load library
		$this->load->library('dompdf_gen');

		// $dompdf = new Dompdf();
		//     $options = $dompdf->getOptions();
		//     $options->set(array('isRemoteEnabled' => true));
		//     $dompdf->setOptions($options);
		//     $dompdf->loadHtml($html);

		// Convert to PDF
		$this->dompdf->load_html($html);
		//$paper_size = array(0,0,1050.72,800);
		// $paper_size = array(0,0,1050.72,841.42);
		//$this->dompdf->set_paper($paper_size);
		$this->dompdf->set_paper('A4', 'portrait');
		$this->dompdf->render();

		// if(isset($_GET['view']) AND ($_GET['view'] == 1)) { // just view certificates
		if (isset($view) and ($view == 1)) { // just view certificates
			$this->dompdf->stream("{$filename}.pdf", array("Attachment" => false));
			exit(0);
		} else { // download certificates
			$this->dompdf->stream("{$filename}.pdf");
		}
	}
	public function learning_certificate($tutorialid = '', $view = 0)
	{
		$view = 1;

		$this->layout_data['template_config']['show_toolbar'] = false;

		$logodata = $this->model_logo->find_by_pk(1);
		$logo = Links::img($logodata['logo_image_path'], $logodata['logo_image']);

		$pu = array();
		$pu['fields'] = "user_firstname,user_lastname";
		$user_data = $this->model_user->find_by_pk($this->userid, false, $pu);
		$data['course_title'] = "LEARNING JOURNEY";
		$data['expert_name'] = "Genny Ghanimeh";
		// $data['course_tracking_number'] = $course['tutorial_identity'];
		$data['username'] = $user_data['user_firstname'] . ' ' . $user_data['user_lastname'];
		$data['ce_provider'] = '110221021';

		$data['logo'] = g('dirname') . 'assets/front_assets/images/logo.png';    //for PDF
		$data['certificate'] = g('dirname') . 'assets/front_assets/images/certificate.png';    //for PDF
		$data['signature'] = g('dirname') . 'assets/front_assets/images/signature.jpg';    //for PDF

		$filename = "Certificate";

		$this->load->view("widgets/pdf_certificate", $data);

		// // Get output html
		$html = $this->output->get_output();
		// debug($html , 1);

		// Load library
		$this->load->library('dompdf_gen');

		// $dompdf = new Dompdf();
		//     $options = $dompdf->getOptions();
		//     $options->set(array('isRemoteEnabled' => true));
		//     $dompdf->setOptions($options);
		//     $dompdf->loadHtml($html);

		// Convert to PDF
		$this->dompdf->load_html($html);
		//$paper_size = array(0,0,1050.72,800);
		// $paper_size = array(0,0,1050.72,841.42);
		//$this->dompdf->set_paper($paper_size);
		$this->dompdf->set_paper('A4', 'portrait');
		$this->dompdf->render();

		// if(isset($_GET['view']) AND ($_GET['view'] == 1)) { // just view certificates
		if (isset($view) and ($view == 1)) { // just view certificates
			$this->dompdf->stream("{$filename}.pdf", array("Attachment" => false));
			exit(0);
		} else { // download certificates
			$this->dompdf->stream("{$filename}.pdf");
		}
	}




	public function expert_detail_tutorial_intro_video()
	{
		global $config;
		$user_id = $this->userid;

		$data = $this->get_sidebar_data();

		$data['title'] = 'My Profile';
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$param = array();
		if (isset($_GET['courseid']) and intval($_GET['courseid']) > 0) {
			$param['where']['tutorial_id'] = intval($_GET['courseid']);
		}




		$par7 = array();
		$par7['where']['tutorial_id'] = intval($_GET['courseid']);
		$coursecat = $this->model_tutorial->find_one_active($par7);
		//    debug($coursecat);

		// debug($all1);
		$ccategory = array();
		$ccategory['where']['expert_id'] = $coursecat['tutorial_expert_id'];
		$data['ct'] = $this->model_expert->find_one_active($ccategory);
		//    debug($data['ct']);





		$this->load_view('expert-detail-tutorial-intro-video', $data);
	}




	public function expert_detail_tutorial_video()
	{
		global $config;


		$user_id = $this->userid;

		$data = $this->get_sidebar_data();

		$data['title'] = 'My Profile';
		$param = array();
		if (isset($_GET['tutorialid']) and intval($_GET['tutorialid']) > 0) {
			$param['where']['videos_id'] = intval($_GET['tutorialid']);
		}
		$tutorial_detail_arr = $this->model_videos->find_all_active($param);
		$tutorial_detail = $tutorial_detail_arr[0];
		$data['tutorial_detail'] = $tutorial_detail;

		$count_tutorial = $this->model_videos->find_by_pk($_GET['tutorialid']);
		if (isset($_GET['count_id']) and intval($_GET['count_id']) > 0) {
			$count_tutorial['videos_views'] = $_GET['count_id'];
			$count_up = $this->model_videos->update_by_pk($_GET['tutorialid'], $count_tutorial);
		}

		// debug($count_up,1);		

		//    debug($tutorial_detail);
		$this->load_view('expert-detail-tutorial-video', $data);
	}
	public function learing_journey()
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
		$this->load_view('learing_journey', $data);
	}

	public function get_sidebar_data()
	{
		$data['user_data'] = $this->layout_data['user_data'];
		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		if (isset($_GET['courseid']) and intval($_GET['courseid']) > 0) {
			$param['where']['tutorial_id'] = intval($_GET['courseid']);
		}
		$expert_course = $this->model_tutorial->find_all_active($param);


		$data['expert_course'] = $expert_course[0];
		$data['course_name'] = $expert_course[0]['tutorial_name'];
		$data['courseid'] = $_GET['courseid'];
		$tutparm = array();

		if (isset($_GET['courseid']) and intval($_GET['courseid']) > 0) {
			$tutparm['where']['cp_course_id'] = intval($_GET['courseid']);
		}
		// $data['tutorial_course'] 
		$tutorials = $this->model_course_tutorial->find_all_active($tutparm);

		$tutorials_id = [];
		$tutorial_param = [];
		$all_tutorials = [];
		foreach ($tutorials as $t) {
			$tutorials_id[] = $t['cp_tutorial_id'];
			$tutorial_param['where']['videos_id'] = $t['cp_tutorial_id'];
			$tutorial = $this->model_videos->find_all_active($tutorial_param);
			if (sizeof($tutorial)) {
				$all_tutorials[] = $tutorial[0];
			}
		}
		$data['tutorial_course'] = $all_tutorials;
		return $data;
	}

	// this is test

	public function _paginations($model_name = '', $paginate_param)
	{
		$per_page = 12;
		$this->load->library('mypagination');

		$class_name = $this->router->fetch_class();
		// $method_name = $slug;
		$method_name = $this->router->fetch_method();

		// Model get
		$model_name = empty($model_name) ? $class_name : $model_name;
		$model_name = "model_" . $model_name;
		$model_obj = $this->$model_name;
		// Model get

		$suffix = empty($_SERVER['QUERY_STRING']) ? '' : '?' . $_SERVER['QUERY_STRING'];


		// $pagination["base_url"] = g('base_url')."shop-category/".$method_name."/page/";

		$pagination["base_url"] = g('base_url') . "account/profile/expert/";

		$pagination["total_rows"] = $model_obj->get_pagination_total_count();
		$pagination["per_page"] = (ENVIRONMENT == 'development') ? $per_page : $per_page;
		$pagination['use_page_numbers']  = TRUE;
		$pagination["uri_segment"] = 4;
		$pagination["suffix"] = $suffix;
		$pagination['last_tag_open'] = '';
		$this->mypagination->initialize($pagination);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		// $vars["data"] = $model_obj->get_pagination_data($pagination["per_page"], (($page > 0)?($page-1):($page)) * $pagination["per_page"]);
		$vars["data"] = $model_obj->get_pagination_data($pagination["per_page"], (($page > 0) ? ($page - 1) : ($page)) * $pagination["per_page"], $paginate_param);

		$vars["links"] = $this->mypagination->create_links();

		//.debug($vars,1); 
		return $vars;
	}
}

<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


//Include Admin Wrapper. Break down things abit
include_once(APPPATH . "core/MY_Controller_Account.php");
include_once(APPPATH . "third_party/PhpWord/Autoloader.php");

use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

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

		$this->load_view('profile', $data);
	}


	// Edit Profile
	public function expertTutorial()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'Expert Tutorial';

		$data['user_data'] = $this->layout_data['user_data'];


		$param = array();
		if (isset($_GET['cat']) and intval($_GET['cat']) > 0) {
			$param['where']['tutorial_category_id'] = intval($this->input->get('cat'));
		}
		$param['order'] = "tutorial_id DESC";

		// $param['joins'][] = array(
		// 	"table"=>"category" , 
		// 	"joint"=>"category.category_id = course.course_category_id"
		// );

		$data['tutorial'] = $this->model_tutorial->find_all_active($param);
		$data['category'] = $this->model_category->find_all_active();


		$data['dt'] = $this->model_category->find_all_active();
		// debug($data['tutorial']); 

		$this->load_view('expert', $data);
	}

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

		$this->load_view('address_info', $data);
	}


	public function about_us()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');

		$this->load_view('about_us', $data);
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

		$par2 = array();
		$par2['order'] = "expert_id ASC";
		$data['ex'] = $this->model_expert->find_all_active($par2);

		$coursecat=array();
        $coursecat['where']['cp_category_id']=intval($this->input->get('cat'));
        $cate = $this->model_course_category->find_all_active($coursecat);

       // debug($cate);
  
        foreach($cate as $key => $value)
        {
         $all[]=$value['cp_course_id'];
        }
        
		//debug($data['main_categories']);

		$param = array();
		if (isset($_GET['expert']) and intval($_GET['expert']) > 0) {
			$param['where']['tutorial_expert_id'] = intval($this->input->get('expert'));
		}








		$param['order'] = "tutorial_id ASC";
		$param['where']['tutorial_free_status'] = 1;
		$param['where_in']['tutorial_id']=$all;

		$data['art'] = $this->model_tutorial->find_all_active($param);


		$pop = array();
		$pop['where']['category_featured'] = 1;
		$data['popular'] = $this->model_category->find_all_active($pop);
		// debug($data['art']);


		$fa = array();
		$fa['where']['faq_category'] = 1;
		$fa['order'] = "faq_id ASC";
		$data['faq'] = $this->model_faq->find_all_active($fa);

		$exp1 = $this->model_cms_page->get_page(26);

		$data['check'] = $exp1['child'][0];





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
		$this->load_view('learning', $data);
	}

	public function startup()
	{
		global $config;
		$user_id = $this->userid;

		$data['title'] = 'My Profile';

		$data['user_data'] = $this->layout_data['user_data'];

		$data['country'] = $this->model_country->find_all_list(array('order' => 'country ASC'), 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('startup', $data);
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
		// $this->load->library('phpword');
			$vp = array();
			$vp['where']['tool_builder_user_id'] = 0;//$this->userid;
			$data['tootl'] = $this->model_tool_builder->find_all_active($vp);
			$tootl = $data['tootl'];
			// debug( $tootl);
			// die;
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/business_model_canvus.docx');
		// debug($tootl);
		// die();
		foreach($tootl[0] as $column_name =>$value){
			// debug($column_name);
			// debug($value);
			$templateProcessor->setValue($column_name, $value);

		}
		// die();
		
		// $templateProcessor->setValue('tool_builder_customer_segments', $tootl[0]['tool_builder_customer_segments']);
		// $templateProcessor->setValue('tool_builder_value_proposition', $tootl[0]['tool_builder_value_proposition']);
		// $templateProcessor->setValue('tool_builder_channels', $tootl[0]['tool_builder_channels']);
		// $templateProcessor->setValue('tool_builder_customer_relationship', $tootl[0]['tool_builder_customer_relationship']);
		// $templateProcessor->setValue('tool_builder_revenue_model', $tootl[0]['tool_builder_revenue_model']);
		// $templateProcessor->setValue('tool_builder_key_resources', $tootl[0]['tool_builder_key_resources']);
		// $templateProcessor->setValue('tool_builder_key_activities', $tootl[0]['tool_builder_key_activities']);
		// $templateProcessor->setValue('tool_builder_key_partners', $tootl[0]['tool_builder_key_partners']);
		// $templateProcessor->setValue('tool_builder_cost_structure', $tootl[0]['tool_builder_cost_structure']);
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
			// debug( $tootl_vp);
			// die;
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/value_proposition_canvas.docx');
		$templateProcessor->setValue('tool_builder_vp_jobs', $tootl_vp[0]['tool_builder_vp_jobs']);
		$templateProcessor->setValue('tool_builder_vp_pains', $tootl_vp[0]['tool_builder_vp_pains']);
		$templateProcessor->setValue('tool_builder_vp_gains', $tootl_vp[0]['tool_builder_vp_gains']);
		$templateProcessor->setValue('tool_builder_vp_products_services', $tootl_vp[0]['tool_builder_vp_products_services']);
		$templateProcessor->setValue('tool_builder_vp_pain_relievers', $tootl_vp[0]['tool_builder_vp_pain_relievers']);
		$templateProcessor->setValue('tool_builder_vp_gain_creators', $tootl_vp[0]['tool_builder_vp_gain_creators']);
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
			// debug( $tootl);
			// die;
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/swot_analysis.docx');
		$templateProcessor->setValue('tool_builder_strengths', $tootl[0]['tool_builder_strengths']);
		$templateProcessor->setValue('tool_builder_weaknessess', $tootl[0]['tool_builder_weaknessess']);
		$templateProcessor->setValue('tool_builder_opportunities', $tootl[0]['tool_builder_opportunities']);
		$templateProcessor->setValue('tool_builder_threats', $tootl[0]['tool_builder_threats']);
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
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/positioning_marketing_mix.docx');
		$templateProcessor->setValue('tool_builder_target_customers', $tootl[0]['tool_builder_target_customers']);
		$templateProcessor->setValue('tool_builder_offering', $tootl[0]['tool_builder_offering']);
		$templateProcessor->setValue('tool_builder_need', $tootl[0]['tool_builder_need']);
		$templateProcessor->setValue('tool_builder_product_category', $tootl[0]['tool_builder_product_category']);
		$templateProcessor->setValue('tool_builder_price_category', $tootl[0]['tool_builder_price_category']);
		$templateProcessor->setValue('tool_builder_solution_competitors', $tootl[0]['tool_builder_solution_competitors']);
		$templateProcessor->setValue('tool_builder_product_or_service', $tootl[0]['tool_builder_product_or_service']);
		$templateProcessor->setValue('tool_builder_pricing_strategies', $tootl[0]['tool_builder_pricing_strategies']);
		$templateProcessor->setValue('tool_builder_product_customer', $tootl[0]['tool_builder_product_customer']);
		$templateProcessor->setValue('tool_builder_promotional_channels', $tootl[0]['tool_builder_promotional_channels']);
		$templateProcessor->setValue('tool_builder_people_for_team', $tootl[0]['tool_builder_people_for_team']);
		$templateProcessor->setValue('tool_builder_execution', $tootl[0]['tool_builder_execution']);
		$templateProcessor->setValue('tool_builder_great_experience', $tootl[0]['tool_builder_great_experience']);
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
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/strategic_marketing_plan.docx');
		$templateProcessor->setValue('tool_builder_strg_mkt_situational_analysis', $tootl[0]['tool_builder_strg_mkt_situational_analysis']);
		$templateProcessor->setValue('tool_builder_strg_mkt_mission', $tootl[0]['tool_builder_strg_mkt_mission']);
		$templateProcessor->setValue('tool_builder_strg_mkt_objectives', $tootl[0]['tool_builder_strg_mkt_objectives']);
		$templateProcessor->setValue('tool_builder_strg_mkt_target_market', $tootl[0]['tool_builder_strg_mkt_target_market']);
		$templateProcessor->setValue('tool_builder_strg_mkt_implementation_tactics', $tootl[0]['tool_builder_strg_mkt_implementation_tactics']);
		$templateProcessor->setValue('tool_builder_strg_mkt_evaluation', $tootl[0]['tool_builder_strg_mkt_evaluation']);
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
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/customer_journey_demand_generation.docx');
		$templateProcessor->setValue('tool_builder_cj_dg_awareness', $tootl[0]['tool_builder_cj_dg_awareness']);
		$templateProcessor->setValue('tool_builder_cj_dg_engagement', $tootl[0]['tool_builder_cj_dg_engagement']);
		$templateProcessor->setValue('tool_builder_cj_dg_consideration', $tootl[0]['tool_builder_cj_dg_consideration']);
		$templateProcessor->setValue('tool_builder_cj_dg_purchase', $tootl[0]['tool_builder_cj_dg_purchase']);
		$templateProcessor->setValue('tool_builder_cj_dg_activation', $tootl[0]['tool_builder_cj_dg_activation']);
		$templateProcessor->setValue('tool_builder_cj_dg_repeat', $tootl[0]['tool_builder_cj_dg_repeat']);
		$templateProcessor->setValue('tool_builder_cj_dg_loyalty', $tootl[0]['tool_builder_cj_dg_loyalty']);
		$templateProcessor->setValue('tool_builder_cj_dg_advocacy', $tootl[0]['tool_builder_cj_dg_advocacy']);

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
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/marketing_campaign_model_canvas.docx');
		$templateProcessor->setValue('tool_builder_mc_mc_prospect_personas', $tootl[0]['tool_builder_mc_mc_prospect_personas']);
		$templateProcessor->setValue('tool_builder_mc_mc_prospect_problems', $tootl[0]['tool_builder_mc_mc_prospect_problems']);
		$templateProcessor->setValue('tool_builder_mc_mc_value_proposition', $tootl[0]['tool_builder_mc_mc_value_proposition']);
		$templateProcessor->setValue('tool_builder_mc_mc_channels', $tootl[0]['tool_builder_mc_mc_channels']);
		$templateProcessor->setValue('tool_builder_mc_mc_content', $tootl[0]['tool_builder_mc_mc_content']);
		$templateProcessor->setValue('tool_builder_mc_mc_key_activities', $tootl[0]['tool_builder_mc_mc_key_activities']);
		$templateProcessor->setValue('tool_builder_mc_mc_key_metrics', $tootl[0]['tool_builder_mc_mc_key_metrics']);
		$templateProcessor->setValue('tool_builder_mc_mc_kost_structure', $tootl[0]['tool_builder_mc_mc_kost_structure']);
		$templateProcessor->setValue('tool_builder_mc_mc_roi', $tootl[0]['tool_builder_mc_mc_roi']);

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
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/online_sales_funnel.docx');
		$templateProcessor->setValue('tool_builder_osf_brand_awareness', $tootl[0]['tool_builder_osf_brand_awareness']);
		$templateProcessor->setValue('tool_builder_osf_lead_gathering', $tootl[0]['tool_builder_osf_lead_gathering']);
		$templateProcessor->setValue('tool_builder_osf_lead_qualifying', $tootl[0]['tool_builder_osf_lead_qualifying']);
		$templateProcessor->setValue('tool_builder_osf_optimize_audience', $tootl[0]['tool_builder_osf_optimize_audience']);
		$templateProcessor->setValue('tool_builder_osf_optimize_experience', $tootl[0]['tool_builder_osf_optimize_experience']);
		$templateProcessor->setValue('tool_builder_osf_optimize_Metrics', $tootl[0]['tool_builder_osf_optimize_Metrics']);
		$templateProcessor->setValue('tool_builder_osf_optimize_testing', $tootl[0]['tool_builder_osf_optimize_testing']);

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

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(APPPATH . '/third_party/PhpWord/templates/legal_term_sheet.docx');
		$templateProcessor->setValue('tool_builder_lts_identify_parties', $tootl[0]['tool_builder_lts_identify_parties']);
		$templateProcessor->setValue('tool_builder_lts_jv_comp_obligations', $tootl[0]['tool_builder_lts_jv_comp_obligations']);
		$templateProcessor->setValue('tool_builder_lts_business_jv_company', $tootl[0]['tool_builder_lts_business_jv_company']);
		$templateProcessor->setValue('tool_builder_lts_likely_turnover', $tootl[0]['tool_builder_lts_likely_turnover']);
		$templateProcessor->setValue('tool_builder_lts_regulatory_consents', $tootl[0]['tool_builder_lts_regulatory_consents']);
		$templateProcessor->setValue('tool_builder_lts_business_based', $tootl[0]['tool_builder_lts_business_based']);
		$templateProcessor->setValue('tool_builder_lts_regulatory_approvals', $tootl[0]['tool_builder_lts_regulatory_approvals']);
		$templateProcessor->setValue('tool_builder_lts_regulatory_approvals_overseas_jurisdictions', $tootl[0]['tool_builder_lts_regulatory_approvals_overseas_jurisdictions']);
		$templateProcessor->setValue('tool_builder_lts_collective_investment_scheme', $tootl[0]['tool_builder_lts_collective_investment_scheme']);
		$templateProcessor->setValue('tool_builder_lts_regulatory_enquiry', $tootl[0]['tool_builder_lts_regulatory_enquiry']);
		$templateProcessor->setValue('tool_builder_lts_structure_settingup_jv_company', $tootl[0]['tool_builder_lts_structure_settingup_jv_company']);
		$templateProcessor->setValue('tool_builder_lts_legal_form_of_jv_company', $tootl[0]['tool_builder_lts_legal_form_of_jv_company']);
		$templateProcessor->setValue('tool_builder_lts_jv_company_established', $tootl[0]['tool_builder_lts_jv_company_established']);
		$templateProcessor->setValue('tool_builder_lts_formalities_required_establishing', $tootl[0]['tool_builder_lts_formalities_required_establishing']);
		$templateProcessor->setValue('tool_builder_lts_applicable_tax_considerations', $tootl[0]['tool_builder_lts_applicable_tax_considerations']);
		$templateProcessor->setValue('tool_builder_lts_Financing_jv_company', $tootl[0]['tool_builder_lts_Financing_jv_company']);
		$templateProcessor->setValue('tool_builder_lts_unding_through_debt_rather_than_equity', $tootl[0]['tool_builder_lts_unding_through_debt_rather_than_equity']);
		$templateProcessor->setValue('tool_builder_lts_party_funding_required_banks_security', $tootl[0]['tool_builder_lts_party_funding_required_banks_security']);
		$templateProcessor->setValue('tool_builder_lts_continuing_funding_requirements', $tootl[0]['tool_builder_lts_continuing_funding_requirements']);
		$templateProcessor->setValue('tool_builder_lts_parties_defaults', $tootl[0]['tool_builder_lts_parties_defaults']);
		$templateProcessor->setValue('tool_builder_lts_contribution_assets', $tootl[0]['tool_builder_lts_contribution_assets']);
		$templateProcessor->setValue('tool_builder_lts_assets_need_to_valued', $tootl[0]['tool_builder_lts_assets_need_to_valued']);
		$templateProcessor->setValue('tool_builder_lts_assets_be_contributed', $tootl[0]['tool_builder_lts_assets_be_contributed']);
		$templateProcessor->setValue('tool_builder_lts_competition_restrictions', $tootl[0]['tool_builder_lts_competition_restrictions']);
		$templateProcessor->setValue('tool_builder_lts_soliciting_customers_employees', $tootl[0]['tool_builder_lts_soliciting_customers_employees']);
		$templateProcessor->setValue('tool_builder_lts_purposes_of_such_restrictions', $tootl[0]['tool_builder_lts_purposes_of_such_restrictions']);
		$templateProcessor->setValue('tool_builder_lts_business_to_the_joint_venture', $tootl[0]['tool_builder_lts_business_to_the_joint_venture']);
		// // $templateProcessor->setValue('tool_builder_lts_purposes_of_such_restrictions2', $tootl[0]['tool_builder_lts_purposes_of_such_restrictions2']);
		$templateProcessor->setValue('tool_builder_lts_board_of_directors', $tootl[0]['tool_builder_lts_board_of_directors']);
		$templateProcessor->setValue('tool_builder_lts_general_manager_ceo_appointed', $tootl[0]['tool_builder_lts_general_manager_ceo_appointed']);
		$templateProcessor->setValue('tool_builder_lts_shareholder_Board_management_matters', $tootl[0]['tool_builder_lts_shareholder_Board_management_matters']);
		$templateProcessor->setValue('tool_builder_lts_conflict_situations', $tootl[0]['tool_builder_lts_conflict_situations']);
		$templateProcessor->setValue('tool_builder_lts_ownership_jv_company', $tootl[0]['tool_builder_lts_ownership_jv_company']);
		$templateProcessor->setValue('tool_builder_lts_shareholder_meetings', $tootl[0]['tool_builder_lts_shareholder_meetings']);
		$templateProcessor->setValue('tool_builder_lts_locations_for_shareholders_meetings', $tootl[0]['tool_builder_lts_locations_for_shareholders_meetings']);
		$templateProcessor->setValue('tool_builder_lts_minority_protection', $tootl[0]['tool_builder_lts_minority_protection']);
		$templateProcessor->setValue('tool_builder_lts_rights_attaching_to_shares', $tootl[0]['tool_builder_lts_rights_attaching_to_shares']);
		$templateProcessor->setValue('tool_builder_lts_matters_for_decision', $tootl[0]['tool_builder_lts_matters_for_decision']);
		$templateProcessor->setValue('tool_builder_lts_if_minority_rights', $tootl[0]['tool_builder_lts_if_minority_rights']);
		$templateProcessor->setValue('tool_builder_lts_transfer_of_Shares', $tootl[0]['tool_builder_lts_transfer_of_Shares']);
		$templateProcessor->setValue('tool_builder_lts_shares_be_valued', $tootl[0]['tool_builder_lts_shares_be_valued']);
		$templateProcessor->setValue('tool_builder_lts_new_shareholder_be_required', $tootl[0]['tool_builder_lts_new_shareholder_be_required']);
		$templateProcessor->setValue('tool_builder_lts_joint_ventures_name', $tootl[0]['tool_builder_lts_joint_ventures_name']);
		$templateProcessor->setValue('tool_builder_lts_leaving_shareholder', $tootl[0]['tool_builder_lts_leaving_shareholder']);
		$templateProcessor->setValue('tool_builder_lts_monies_owed_to_the_JV_Company', $tootl[0]['tool_builder_lts_monies_owed_to_the_JV_Company']);
		$templateProcessor->setValue('tool_builder_lts_key_Person_arrangements', $tootl[0]['tool_builder_lts_key_Person_arrangements']);
		$templateProcessor->setValue('tool_builder_lts_change_in_control_of_shareholder', $tootl[0]['tool_builder_lts_change_in_control_of_shareholder']);
		$templateProcessor->setValue('tool_builder_lts_breach_of_undertakings', $tootl[0]['tool_builder_lts_breach_of_undertakings']);
		$templateProcessor->setValue('tool_builder_lts_death_of_shareholder', $tootl[0]['tool_builder_lts_death_of_shareholder']);
		$templateProcessor->setValue('tool_builder_lts_deadlock', $tootl[0]['tool_builder_lts_deadlock']);
		$templateProcessor->setValue('tool_builder_lts_deadlock_issues_resolved', $tootl[0]['tool_builder_lts_deadlock_issues_resolved']);
		$templateProcessor->setValue('tool_builder_lts_cooling_off', $tootl[0]['tool_builder_lts_cooling_off']);
		$templateProcessor->setValue('tool_builder_lts_if_deadlock_occurs', $tootl[0]['tool_builder_lts_if_deadlock_occurs']);
		$templateProcessor->setValue('tool_builder_lts_continuous_business_involvement_jv_parties', $tootl[0]['tool_builder_lts_continuous_business_involvement_jv_parties']);
		$templateProcessor->setValue('tool_builder_lts_continuing_trading_arrangements', $tootl[0]['tool_builder_lts_continuing_trading_arrangements']);
		$templateProcessor->setValue('tool_builder_lts_flow_of_information', $tootl[0]['tool_builder_lts_flow_of_information']);
		$templateProcessor->setValue('tool_builder_lts_employees', $tootl[0]['tool_builder_lts_employees']);
		$templateProcessor->setValue('tool_builder_lts_consider_the_management_structure', $tootl[0]['tool_builder_lts_consider_the_management_structure']);
		$templateProcessor->setValue('tool_builder_lts_consider_share_option', $tootl[0]['tool_builder_lts_consider_share_option']);
		$templateProcessor->setValue('tool_builder_lts_pension_arrangements', $tootl[0]['tool_builder_lts_pension_arrangements']);
		$templateProcessor->setValue('tool_builder_lts_cost_be_borne_by_the_parties', $tootl[0]['tool_builder_lts_cost_be_borne_by_the_parties']);
		$templateProcessor->setValue('tool_builder_lts_Intellectual_property', $tootl[0]['tool_builder_lts_Intellectual_property']);
		$templateProcessor->setValue('tool_builder_lts_ip_rights', $tootl[0]['tool_builder_lts_ip_rights']);
		$templateProcessor->setValue('tool_builder_lts_exploit_the_ip_rights', $tootl[0]['tool_builder_lts_exploit_the_ip_rights']);
		$templateProcessor->setValue('tool_builder_lts_confidential_information', $tootl[0]['tool_builder_lts_confidential_information']);
		$templateProcessor->setValue('tool_builder_lts_ip_rights_on_termination', $tootl[0]['tool_builder_lts_ip_rights_on_termination']);
		$templateProcessor->setValue('tool_builder_lts_administration', $tootl[0]['tool_builder_lts_administration']);
		// // $templateProcessor->setValue('tool_builder_lts_lending_bankers', $tootl[0]['tool_builder_lts_lending_bankers']);
		$templateProcessor->setValue('tool_builder_lts_lawyers', $tootl[0]['tool_builder_lts_lawyers']);
		$templateProcessor->setValue('tool_builder_lts_auditors', $tootl[0]['tool_builder_lts_auditors']);
		$templateProcessor->setValue('tool_builder_lts_professional_advisers', $tootl[0]['tool_builder_lts_professional_advisers']);
		$templateProcessor->setValue('tool_builder_lts_office_and_headquarters', $tootl[0]['tool_builder_lts_office_and_headquarters']);
		$templateProcessor->setValue('tool_builder_lts_dividend_policy', $tootl[0]['tool_builder_lts_dividend_policy']);
		$templateProcessor->setValue('tool_builder_lts_termination', $tootl[0]['tool_builder_lts_termination']);
		$templateProcessor->setValue('tool_builder_lts_automatically_terminate', $tootl[0]['tool_builder_lts_automatically_terminate']);
		$templateProcessor->setValue('tool_builder_lts_entitled_to_terminate', $tootl[0]['tool_builder_lts_entitled_to_terminate']);
		$templateProcessor->setValue('tool_builder_lts_arrangements_will_apply_on_termination', $tootl[0]['tool_builder_lts_arrangements_will_apply_on_termination']);
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
		$data['country'] = $this->model_country->find_all_list(array('order'=>'country ASC') , 'country');
		$data['learn_cat'] = $this->model_learning_journey_category->find_all_active();
		$this->load_view('business-model-tool-fm-dcvm' , $data);
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
		$fa['where']['faq_category'] = 2;
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




		// debug(  $data['ct']);

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





		//    debug($tutorial_detail);
		$this->load_view('expert-detail-tutorial-video', $data);
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

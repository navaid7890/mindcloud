<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//Include Admin Wrapper. Break down things abit
include_once(APPPATH . "core/MY_Controller_Account.php");

class Dashboard extends MY_Controller_Account
{

	/**
	 * Reset_password Controller. - The deafult controller
	 *
	 * @package		Reset_password - Default
	 * @author		Dalton Lambert (dalton.developer@gmail.com)
	 * @version		2.0
	 * @since		06 March, 2017
	 */

	//protected $cms_page_id = 1;

	public function __construct()
	{
		// Call the Model constructor latest_product
		parent::__construct();
		//$this->add_script(array("account.css"));
		$this->layput_data['inner_banner'] = ''; //$this->model_inner_banner->find_by_pk_active(7);
	}

	public function index()
	{
		global $config;



		$data['inner_banner'] = $this->layput_data['inner_banner'];
		$data['title'] = 'Account Area';


		$data['country'] = $this->model_country->find_all_list_active(array('order' => 'country ASC'), "country");

		$data['user_data'] = $this->model_user->find_by_pk($this->session->userdata['logged_in_front']['id']);

		//$data['user_login_hisotry'] = $this->model_user->user_last_login_history($this->session->userdata['logged_in_front']['id'] , 3);

		// $data['credit_hisotry'] = $this->model_user_credit->get_data(
		// 	$this->session->userdata['logged_in_front']['id']);
		//debug($data['credit_hisotry'] , 1);

		// DOB String
		// $dd = explode("-", $data['user_data']['ui_dob']);
		// $data['dob']['year'] = $dd[0];
		// $data['dob']['month'] = $dd[1];
		// $data['dob']['day'] = $dd[2];
		//debug($data['dob'] , 1);

		$pop = array();
		$pop['where']['tutorial_free_status'] = '1';
		$pop['limit'] = 3;
		$data['popular'] = $this->model_tutorial->find_all_active($pop);
		$art = $data['popular'];

		// debug($data['popular']);


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



		$yourt = array();
		$yourt['where']['tutorial_free_status'] = '1';
		$yourt['limit'] = 3;
		$data['your_tut'] = $this->model_tutorial->find_all_active($yourt);

		// debug($data['yourtutorial']);

		$nexttut = array();
		$nexttut['where']['tutorial_free_status'] = '0';
		$nexttut['limit'] = 3;
		$data['next_tut'] = $this->model_tutorial->find_all_active($nexttut);


		$cat = array();
		$data['art'] = $this->model_tutorial->find_all_active($cat);

		$upaid = array();
		$upaid['where']['user_id'] = $this->userid;
		$upaid['where']['user_paid'] = 1;
		$datapaid = $this->model_user->find_all_active($upaid);


		if ($datapaid[0]['user_paid'] == 1) {

			$param['order'] = "tutorial_id ASC";
			$param['where']['tutorial_free_status'] = 1;
			$param['where']['tutorial_free_status'] = 0;
			// $param['where_in']['tutorial_id'] = $all;
			$data['art'] = $this->model_tutorial->find_all_active($param);
			// debug("user is paid");
		} else {
			$param['order'] = "tutorial_id ASC";
			$param['where']['tutorial_free_status'] = 1;
			// $param['where_in']['tutorial_id'] = $all;
			$data['art'] = $this->model_tutorial->find_all_active($param);
			// debug("user is Not paid");
		}


		$this->load_view("dashboard", $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
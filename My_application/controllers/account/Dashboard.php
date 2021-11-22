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

     // debug("ok");

		$data['inner_banner'] = $this->layput_data['inner_banner'];
		$data['title'] = 'Account Area';


		$data['country'] = $this->model_country->find_all_list_active(array('order' => 'country ASC'), "country");

		$data['user_data'] = $this->model_user->find_by_pk($this->session->userdata['logged_in_front']['id']);

	

		$pop = array();
		$pop['where']['tutorial_free_status'] = '1';
		$pop['limit'] = 3;
		$data['popular'] = $this->model_tutorial->find_all_active($pop);
		$art = $data['popular'];

	


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



	
		$nexttut = array();
		$nexttut['where']['tutorial_free_status'] = '0';

		$data['next_tut'] = $this->model_tutorial->find_all_active($nexttut);


		$cat = array();
		$data['art'] = $this->model_tutorial->find_all_active($cat);

		$upaid = array();
		$upaid['where']['user_id'] = $this->userid;
		$upaid['where']['user_paid'] = 1;
		$datapaid = $this->model_user->find_all_active($upaid);


		if ($datapaid[0]['user_paid'] == 1) {

			$param['order'] = "tutorial_id ASC";
			
			$data['art'] = $this->model_tutorial->find_all_active($param);
			$data['your_tut'] = $this->model_tutorial->find_all_active($param);
		
		} else {
			$param['order'] = "tutorial_id ASC";
			$param['where']['tutorial_free_status'] = 1;

			$data['art'] = $this->model_tutorial->find_all_active($param);
			$data['your_tut'] = $this->model_tutorial->find_all_active($param);
			
		}
	

		$mytut = array();
		$mytut['where']['mytutorial_user_id'] = $this->userid;
		$mytut['where']['mytutorial_certificate'] = 1;
		$data['mytutorial'] = $this->model_mytutorial->find_all_active($mytut);

		$dashCat = array();
		$dashCat['where']['category_status'] = 1;
		$data['dashCatV'] = $this->model_category->find_all_active($dashCat);

		$nextut = array();
		$nextut['where']['user_id'] = $this->userid;
		$data['nextutshow'] = $this->model_user->find_all_active($nextut);


		$data['mytutorialpaid'] = $this->model_tutorial->test_query($this->userid);

		$data['mytutorialremain'] = $this->model_tutorial->test_query_1($this->userid);


	

		$dat=date('Y-m-d', strtotime($data['user_data']['user_createdon']));
		$dates = strtotime($dat);
        $date = strtotime("+350 days", $dates);

	
        $a= date('Y-m-d',$date);

    	// debug($a);

		if(date('Y-m-d')==$a && $data['user_data']['user_paid']==1)
		{

      
		parent::renewal();

   
		}

		$dat1=date('Y-m-d', strtotime($data['user_data']['user_createdon']));
		$dates1 = strtotime($dat1);
        $date1 = strtotime("+363 days", $dates1);
        $ab= date('Y-m-d',$date1);
		// debug($ab);

		if(date('Y-m-d')==$ab && $data['user_data']['user_paid']==1)
		{

      
		parent::renewal_two();

   
		}

		

		$this->load_view("dashboard", $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
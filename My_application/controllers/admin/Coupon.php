<?php

if (!defined('BASEPATH'))

	exit('No direct script access allowed');



class Coupon extends MY_Controller {



	/**

	 * faq page

	 *

	 * @package		faq

	 *

     * @version		1.0 --

     * @since		Version 1.0 2017

	 */



    public $_list_data = array();



	public function __construct() {



		global $config;

		

		parent::__construct();

        $this->dt_params['dt_headings'] = "coupon_id,coupon_affiliate,coupon_code,coupon_discount,coupon_count,coupon_created_on,coupon_status";

        $this->dt_params['searchable'] = array("coupon_id","coupon_code","coupon_discount","coupon_status");

		// $this->dt_params['action'] = array(
		// 	"hide_add_button" => false,
		// 	"hide" => false ,
		// 	"show_delete" => true ,
		// 	"show_edit" => true ,
		// 	"order_field" => false ,
		// 	"show_view" => true ,
		// 	"multi_lang" => false ,

		// 	"extra" => array() ,
		//   );


        $this->dt_params['action'] = array(

                                    
                                        "hide_add_button" => false ,
										"hide" => false ,


                                        "show_delete" => true ,

                                        "show_edit" => true ,

                                        "order_field" => false ,

                                        "show_view" => true ,

                                        "multi_lang" => false ,

                                        "extra" => array(
											"add_btn" => '<a title="Edit" href="'.la('coupon/add/').'%d/"'.
											' target="_blank"><button class="btn btn-icon-only green" '.
											'data-model="model_'.$this->table_name.'" data-pk="'.$itemId.'" '.'>'.
											'<i class="fa fa-money"></i></button></a>',


										) ,

                                      );

        

        // $this->_list_data['coupon_status'] = array( 

        //                                 STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,  

        //                                 STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"  

        //                             );



        

		// For use IN JS Files

		$config['js_config']['paginate'] = $this->dt_params['paginate'];

		

		$_POST = $this->input->post(NULL, true);

		//$language = get_lang_details($_GET);

		//$config['js_config']['paginate']['uri'] .= '?lang=' . $language['lang_id'];

	}






	public function index()

	{

		// Popluated LISTDATA in constructor

		parent::index();

	}

	// public function add($id='', $data=array())
	// {
	// 	$this->add_script(array( "jquery.validate.js" , "form-validation-script.js") , "js" );
    //     $this->register_plugins("jquery-file-upload");
    //     $this->register_plugins("bootstrap-fileupload");
	// 	parent::add($id,$data);
	// }

	// public function ajax_view($id='')
	// {
	// 	if($id)
	// 	{
	// 		$this->model_coupon->update_by_pk($id, array("coupon_status" => 0));
	// 	}
	// 	parent::ajax_view($id);
	// }


	
	public function get_view($id=0) {

		global $config;
		$result = array();
		$class_name = $this->router->class;
		$model_name = 'model_'.$class_name ;
		$model_obj = $this->$model_name ;

		$form_fields = $model_obj->get_fields();
		if($id)
		{
			
			$data = $this->$model_name->find_by_pk($id,false, $params);


			// print_r($job_data);	

			if(isset($data) AND array_filled($data))
			{
				$result['record']['Record ID'] = $data['inquiry_id'];
				$result['record']['Name Of Affiliate'] = $data['inquiry_name'];
				$result['record']['Email'] = $data['inquiry_email'];
				$result['record']['Phone'] = $data['inquiry_phone'];
				
	
			    $result['record']['Report Date/Time'] = $data['inquiry_createdon'];

				}
		}
		else
		{
			$result['failure'] = "No Item Found";
		}
		return $result;
	}



}



/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */


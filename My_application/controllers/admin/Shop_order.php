<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Shop_order extends MY_Controller {

	/**
	 * cms_page page
	 *
	 * @package		cms_page
	 * @author		devemail0909@gmail.com devemail0909@gmail.com (devemail0909@gmail.com)
	 * @version		2.0 -- Robust , Advanced And More Frustating...
	 * @since		Version 2.0 2014
	 */

    public $_list_data = array();

	public function __construct() {

		global $config;
		
		parent::__construct();
        $this->dt_params['dt_headings'] = "order_id,order_billing_fname,order_billing_email,order_payment_type,order_payment_status";
// CONCAT('$',) AS
        $this->dt_params['searchable'] = explode(",", $this->dt_params['dt_headings']);
        

        $this->dt_params['action'] = array(
										"hide_add_button" => false ,
                                        "hide" => false ,
                                        "show_delete" => false ,
                                        "show_edit" => false ,
                                        "order_field" => false ,
                                        "show_view" => false ,
                                        "extra" => array(
											"add_btn" => '<a title="Edit" href="shop_order/invoice/%d/"'.
															' target="_blank"><button class="btn btn-icon-only green" '.
															'data-model="model_'.$this->table_name.'" data-pk="'.$itemId.'" '.'>'.
															'<i class="fa fa-money"></i></button></a>',
                                        	) ,
                                      );

        /*
        $this->_list_data['order_payment_status'] = array( 
                                        0 => "<span class=\"label label-default\">Not Approved</span>" ,  
                                        1 =>  "<span class=\"label label-primary\">Payment approved</span>"  ,
                                        2 =>  "<span class=\"label label-default\">Declined</span>"  ,
                                        3 =>  "<span class=\"label label-default\">Error</span>"  ,
                                        4 =>  "<span class=\"label label-default\">Held for Review</span>" ,
                                        11 =>  "<span class=\"label label-default\">Fruad Cause</span>",
                                    );

        $this->_list_data['order_delivery_status'] = array( 
                                        0 =>  "<span class=\"label label-process\">In Process</span>"  ,
                                        1 =>  "<span class=\"label label-primary\">New order</span>"  ,
                                        2 =>  "<span class=\"label label-success\">Shipped</span>"  ,
                                        3 =>  "<span class=\"label label-warning\">On Hold</span>"  ,
                                        4 =>  "<span class=\"label label-danger\">Denied</span>" ,
                                        5 =>  "<span class=\"label label-danger\">Reject</span>" ,
                                    );
		*/
         $this->form_params['action'] = array(
						        	'hide_save' => true,
						        	'hide_save_new' => hide
						    	);
         //debug($this->_list_data , 1);
        // Following are common so, defined in MY_Controller_Admin
		// $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
		// $this->dt_params['paginate']['uri'] = "paginate";
		// $this->dt_params['paginate']['update_status_uri'] = "update_status";

        $this->_list_data['order_user_id'] = $this->model_user->get_user_list_active();

		// For use IN JS Files
		$config['js_config']['paginate'] = $this->dt_params['paginate'];
		
		// Populating LISTDATA

		$_POST = $this->input->post(NULL, true);
	}
	

	// public function before_add_render(&$data)
	// {
	// 	$this->layout_data['bread_crumbs'] = array(
	// 										array(
	// 											"home/"=>"Home" , 
	// 											'admin/cms_page' => "Cms Page",
	// 											//$class_name."/add/" => "Add ".humanize($class_name),
	// 										)
	// 									);
	// 	return true;
	// }


	// Invoice view
	public function invoice($id=0,$data=array())
	{

		$this->layout_data['template_config']['show_toolbar'] = false ;
		$this->register_plugins(array(						
									"jquery-ui",
									"bootstrap",
									"bootstrap-hover-dropdown",
									"jquery-slimscroll",
									"uniform",
									"boots",
									"font-awesome",
									"simple-line-icons" ,
									"select2",
									"bootbox",
									"bootstrap-toastr",
								));



		
		$vars['where']['order_id'] = $id;
		$d = $this->model_shop_order->get_data($vars);
		$vars = array();
		// $vars['fields'] = 'item_id as id , course.course_id as course_id , course.course_name as course_name,
		// item_qty as course_qty , item_rate as course_rate , item_price as course_price,item_serialize as item_serialize';
		$vars['where']['item_order_id'] = $id;
		// $vars['joins'][] = array('table'=>'course' , 
			// 'joint'=>'item_product_id = course.course_id AND course.course_status = 1');
		$data['items'] = $this->model_shop_item->get_data($vars);
		// debug($data['items']);
		// $total_amount = 0;
		// if(isset($data['items']) && array_filled($data['items']))
		// {
		// 	foreach($data['items'] as $item) {
		// 		$total_amount += $item['item_price'];
		// 	}
		// }
		// $data['billing_amount'] = $total_amount;

		// /** Additional charges or discount etc*/
		// $total_amount += $d[0]['order_shipping_amount'];
		// $total_amount += $d[0]['order_tax_amount'];
		// $total_amount -= $d[0]['order_discount_amount'];

		// $data['total_invoice_amount'] = $total_amount;
		$data['total_invoice_amount'] = $d[0]['order_amount'];


		$data['data'] = $d[0];

		$data[ 'id' ] = $id; 

		$vars = array();
		$vars['where']['logo_id'] = 1;
		$data['logo'] = $this->model_logo->find_one_active($vars);

		// get fields data 
		$data['fields'] = $this->model_shop_order->get_fields();

		//$data['coupon_data'] = $this->model_coupon_user->find_by_order_id($id);
		//debug($data['coupon_data'] , 1);

		$data['order_status'] = array('In process', 'New order' , 'Shipped' , 'On Hold' , 'Denied' , 'Reject');
		//debug($data , 1);
		$this->load_view("invoice" , $data);
	}


	public function order_delivery_status_change()
	{
		if(isset($_POST) && array_filled($_POST))
		{
			$order_id = intval($_POST['order_id']);
			$data = array();
			$data['order_delivery_status'] = intval($_POST['order_delivery_status']);

			$inserted_id = $this->model_shop_order->update_by_pk($order_id,$data);
			//$result = $this->model_shop_order->save_order_status($data);
			if($inserted_id)
				echo true;
			else
				echo false;
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

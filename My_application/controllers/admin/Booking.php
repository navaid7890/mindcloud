<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Booking extends MY_Controller {

    /**
     * Achievements page
     *
     * @package		category
     *
     * @version		1.0
     * @since		Version 1.0 2017
     */

    public $_list_data = array();

    public function __construct() {

        global $config;

        parent::__construct();
        $this->dt_params['dt_headings'] = "booking_id,booking_user_id,booking_expert_id,booking_date,booking_time, booking_expert_approval ,booking_admin_approval,booking_status";
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


        $this->_list_data['booking_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );

        $this->_list_data['booking_artist_approval'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );
        $this->_list_data['booking_admin_approval'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );



        $config['js_config']['paginate'] = $this->dt_params['paginate'];

        $this->_list_data['booking_user_id'] = $this->model_user->get_user_all();
        $this->_list_data['booking_expert_id'] =$this->model_expert->find_all_list_active(array(),"expert_name");
        $this->_list_data['booking_category_id'] =$this->model_category->find_all_list_active(array(),"category_name");
        

        $_POST = $this->input->post(NULL, true);
    }




    // // BeforeRender Hook to manipulate Overrides... for Add Method
    public function before_add_render(&$data)
    {
        if(isset($data['form_data']['category']['category_parent_id']) AND ($data['form_data']['category']['category_parent_id'] != 1))
        {
            $data['form_fields']['category']['category_parent_id']['type'] = 'dropdown';
            $data['form_fields']['category']['category_parent_id']['type_filter_dt'] = 'dropdown';
        }

        // To access from Child Class
        return true;
    }


    public function add($id=0 , $data = array()) {

        if($_POST['booking']['booking_expert_approval']==1)
        {
           $this->model_email->request_payment($_POST['booking']['booking_user_id'],$_POST['booking']['booking_expert_id']);
        //  debug( $this->model_email,1);

        }
        parent::add($id, $data);

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

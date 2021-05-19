<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Package extends MY_Controller {

    /**
     * Achievements page
     *
     * @package		package
     *
     * @version		1.0
     * @since		Version 1.0 2017
     */

    public $_list_data = array();

    public function __construct() {

        global $config;

        parent::__construct();
      
        $this->dt_params['dt_headings'] = "package_id,package_name,package_price,package_period_no,package_period,package_status";

        $this->dt_params['searchable'] = array("package_id","package_name","package_price","package_status");
        $this->dt_params['action'] = array(
            "hide_add_button" => true,
            "hide" => false ,
            "show_delete" => true ,
            "show_edit" => true ,
            "order_field" => false ,
            "show_view" => false ,
            "extra" => array() ,
        );

        $this->_list_data['package_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );

        $this->_list_data['package_course'] = $this->model_tutorial->find_all_list_active(array(),"tutorial_name");

        // For use IN JS Files
        $config['js_config']['paginate'] = $this->dt_params['paginate'];

        $_POST = $this->input->post(NULL, true);
    }

    public function add($id='', $data=array())
    {
        $this->add_script(array( "jquery.validate.js" , "form-validation-script.js") , "js" );

        parent::add($id, $data);
    }

    public function index()
    {
        parent::index();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

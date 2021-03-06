<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mytutorial extends MY_Controller {

    /**
     * Achievements page
     *
     * @package		learning_journey_content
     *
     * @version		1.0
     * @since		Version 1.0 2017
     */

    public $_list_data = array();

    public function __construct() {

        global $config;

        parent::__construct();
        $this->dt_params['dt_headings'] = "mytutorial_id,mytutorial_user_id,mytutorial_tutorial_id,mytutorial_total_percent,mytutorial_status";
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

        $this->_list_data['mytutorial_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );
        /*$this->_list_data['learning_journey_content_feature'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">No</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Yes</span>"
        );

*/

        // Following are common so, defined in MY_Controller_Admin
        // $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
        // $this->dt_params['paginate']['uri'] = "paginate";
        // $this->dt_params['paginate']['update_status_uri'] = "update_status";

        // For use IN JS Files
        $config['js_config']['paginate'] = $this->dt_params['paginate'];

        // $this->_list_data['learning_journey_cat_id'] = $this->model_learning_journey_category->find_all_list_active(array(),"learning_journey_category_name");



        // $this->_list_data['learning_journey_content_parent_id'] = $this->model_profession->find_all_list_active(
        //     array('where_string'=>'learning_journey_content_parent_id <= 1')
        //     ,"learning_journey_content_name");
        

        $_POST = $this->input->post(NULL, true);
    }


    public function add($id=0 , $data = array()) {
        
        $this->add_script(array( "jquery.validate.js" , "form-validation-script.js","plupload.full.min.js") , "js" );
        $this->register_plugins(array("datatables","jquery-file-upload"));
        
        parent::add($id, $data);

    }

    
   


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Course extends MY_Controller {

    /**
     * Achievements page
     *
     * @package		course
     *
     * @version		1.0
     * @since		Version 1.0 2017
     */

    public $_list_data = array();

    public function __construct() {

        global $config;

        parent::__construct();
        $this->dt_params['dt_headings'] = "course_id,course_name,course_image,course_status";
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

        $this->_list_data['course_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );
        /*$this->_list_data['course_feature'] = array(
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

        $this->_list_data['course_state_id'] = $this->model_lecture->find_all_list_active(
            array(''),"lecture_name");
        
        
        $this->_list_data['course_tutorial'] = $this->model_tutorial->find_all_list_active(
                array(''),"tutorial_name");
       
        $this->_list_data['course_category'] = $this->model_category->find_all_list_active(
                    array(''),"category_name");

                    
        $this->_list_data['course_expert_id'] = $this->model_expert->find_all_list_active(
            array(''),"expert_name");

        $this->_list_data['course_language_id'] = $this->model_language->find_all_list_active(
                array(''),"language_name");
            
        

        $_POST = $this->input->post(NULL, true);
    }


    public function add($id=0 , $data = array()) {
        
         debug($_POST,1);
        parent::add($id, $data);

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

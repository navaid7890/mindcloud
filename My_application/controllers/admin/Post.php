<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Post extends MY_Controller {

	/**
	 * news page
	 *
	 * @package		MD
	 * @author		Dalton Lambert (devemail0909@gmail.com)
	 * @version		2.0 -- Robust , Advanced And More Frustating...
	 * @since		Version 1.0 2019
	 */

    public $_list_data = array();

	public function __construct() {

		global $config;
		
		parent::__construct();
        $this->dt_params['dt_headings'] = "post_id,post_title,post_description,post_status";
        $this->dt_params['searchable'] = explode("," , $this->dt_params['dt_headings']);//array("post_id","post_name","post_is_featured","post_status");
        $this->dt_params['action'] = array(
                                        "hide" => false ,
                                        "show_delete" => true ,
                                        "show_edit" => true ,
                                        "order_field" => false ,
                                        "show_view" => false ,
                                        "extra" => array() ,
                                      );
        
        $this->_list_data['post_status'] = array( 
                                        STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,  
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"  
                                    );

        $this->_list_data['post_is_featured'] = array( 
                                        STATUS_INACTIVE => "<span class=\"label label-default\">No</span>" ,  
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Yes</span>"  
                                    );

        // Following are common so, defined in MY_Controller_Admin
		// $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
		// $this->dt_params['paginate']['uri'] = "paginate";
		// $this->dt_params['paginate']['update_status_uri'] = "update_status";

		// For use IN JS Files
		$config['js_config']['paginate'] = $this->dt_params['paginate'];
		
		// Populating LISTDATA

		// Populating LISTDATA
		$param = array();
		//$param['where_string'] = 'category_parent_id > 0';
		//$this->_list_data['post_blog_id'] = $this->model_blog->find_all_list_active($param,"blog_name");
		//debug($this->_list_data['blog_id'] , 1);

		


		$_POST = $this->input->post(NULL, true);

	
	}

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

<?
class Model_tool_builder_vp extends MY_Model {
    /**
     * tool_builder MODEL
     *
     * @package     tool_builder Model
     * @author      
     * @version     2.0
     * @since       2016 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'tool_builder_vp';
    protected $_field_prefix    = 'tool_builder_vp_';
    protected $_pk    = 'tool_builder_vp_id';
    protected $_status_field    = 'tool_builder_vp_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model construtool_builderr
        $this->pagination_params['fields'] = "tool_builder_vp_id,tool_builder_vp_user_id,tool_builder_vp_jobs,tool_builder_vp_pains,tool_builder_vp_approval_status,tool_builder_vp_status";
        
        //$this->pagination_params['joins'][] = $this->join_user("LEFT");

        parent::__construct();

    }


    // //public function join_user($type="" , $append_joint ="AND user_status = 1 AND user_type = ".DEALER_TYPE , $prepend_joint = "")
    // public function join_user($type="" , $append_joint ="AND user_status = 1", $prepend_joint = "")
    // {
    //     $joint = $prepend_joint . "tool_builder_user_id = user_id " . $append_joint ; 
    //     return $this->prep_join("user" , $joint, $type );
    // }


    // public function join_user_info($type="" , $append_joint ="" , $prepend_joint = "")
    // {
    //     $joint = $prepend_joint . "tool_builder_user_id = ui_user_id " . $append_joint ; 
    //     return $this->prep_join("user_info" , $joint, $type );
    // }


    // public function get_dealer_review_active()
    // {
    //     $params = array();
    //     $params['fields'] = '
    //                     CONCAT(user_firstname , " " , user_lastname) as tool_builder_user_name,
    //                     {pre}user_info.ui_tool_builder_image,{pre}user_info.ui_tool_builder_image_path,
    //                     {pre}tool_builder.tool_builder_description';

    //     $params['joins'][] = $this->join_user_info();
    //     $params['joins'][] = $this->join_user("LEFT");
    //     $params['where']['{pre}user.user_type'] = DEALER_TYPE;
    //     return $this->find_all_active($params);
    // }


    // public function get_rider_review_active()
    // {
    //     $params = array();
    //     $params['fields'] = '
    //                     CONCAT(user_firstname , " " , user_lastname) as tool_builder_user_name,
    //                     {pre}user_info.ui_tool_builder_image,{pre}user_info.ui_tool_builder_image_path,
    //                     {pre}tool_builder.tool_builder_description';

    //     $params['joins'][] = $this->join_user_info();                        
    //     $params['joins'][] = $this->join_user("LEFT");
    //     $params['where']['{pre}user.user_type'] = RIDER_TYPE;
    //     return $this->find_all_active($params);
    // }


    /*
    * table             Table Name
    * Name              FIeld Name
    * label             Field Label / Textual Representation in form and DT headings
    * type              Field type : hidden, text, textarea, editor, etc etc. 
    *                                 Implementation in form_generator.php
    * type_dt           Type used by prepare_datatables method in controller to prepare DT value
    *                                 If left blank, prepare_datatable Will opt to use 'type'
    * type_filter_dt    Used by DT FILTER PREPRATION IN datatables.php
    * attributes        HTML Field Attributes
    * js_rules          Rules to be aplied in JS (form validation)
    * rules             Server side Validation. Supports CI Native rules

    * list_data         For dropdown etc, data in key-value pair that will populate dropdown 
    *                   -----USED IN ADMIN_CONTROLLER AND admin's database.php
    * list_data_key     For dropdown etc, if you want to define list_data in CONTROLLER (public _list_data[$key]) list_data_key is the $key which identifies it
    *                   -----Incase list_data_key is not defined, it will look for field_name as a $key
    *                   -----USED IN ADMIN_CONTROLLER AND admin's database.php
    */
    public function get_fields( $specific_field = "" )
    {

        $fields = array(
        
              'tool_builder_vp_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_vp_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

                'tool_builder_vp_user_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_vp_user_id',
                     'label'   => 'User ID',
                     'type'   => 'hidden',
                     'type_filter_dt'   => 'dropdown',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"10%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),



                'tool_builder_vp_step_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_vp_step_id',
                     'label'   => 'Step ID',
                     'type'   => 'hidden',
                     'type_filter_dt'   => 'dropdown',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"10%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

              'tool_builder_vp_jobs' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_vp_jobs',
                     'label'   => 'Jobs',
                     'type'   => 'textarea',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),
         
                'tool_builder_vp_pains' => array(
                'table' => $this->_table,
                'name' => '	tool_builder_vp_pains',
                'label' => 'Pains',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
             
               'tool_builder_vp_gains' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_vp_gains',
                'label' => 'Gains',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

               'tool_builder_vp_products_services' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_vp_products_services',
                'label' => 'Products/Services',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


            'tool_builder_vp_pain_relievers' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_vp_pain_relievers',
                'label' => 'Pain Relievers',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

            'tool_builder_vp_gain_creators' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_vp_gain_creators',
                'label' => 'Gain Creators',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

             'tool_builder_vp_approval_status' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_vp_approval_status',
                'label' => 'Approval Status',
                'type' => 'switch',
                'default' => '0',
                'attributes' => array(),
                'rules' => 'trim'
            ),

           'tool_builder_vp_status' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_vp_status',
                'label' => 'Status?',
                'type' => 'switch',
                'default' => '1',
                'attributes' => array(),
                'rules' => 'trim'
            ),

              
              
              
            );
        
        if($specific_field)
            return $fields[ $specific_field ];
        else
            return $fields;
    }

}
?>
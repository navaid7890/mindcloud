<?
class Model_metadata extends MY_Model {
    /**
     *
     * @package     metadata Model
     * 
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'metadata';
    protected $_field_prefix    = 'metadata_';
    protected $_pk    = 'metadata_id';
    protected $_status_field    = 'metadata_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "metadata_id,metadata_title,metadata_keyword,
        metadata_status";

        parent::__construct();

    }

    // Get all Categories start (non featured)
    // public function get_categories()
    // {
    //     // Set params
    //     $params['fields'] = "metadata_id,metadata_title,metadata_slug,metadata_image,metadata_image_thumb,metadata_image_path";
    //     // Query to get all categories
    //     $params['order'] = "metadata_title ASC";
    //     // Result
    //     $result = $this->model_metadata->find_all_active($params);
    //     return $result;
    // }
    // Get all Categories end


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
    * 
    * list_data         For dropdown etc, data in key-value pair that will populate dropdown 
    *                   -----USED IN ADMIN_CONTROLLER AND admin's database.php
    * list_data_key     For dropdown etc, if you want to define list_data in CONTROLLER (public _list_data[$key]) list_data_key is the $key which identifies it
    *                   -----Incase list_data_key is not defined, it will look for field_title as a $key
    *                   -----USED IN ADMIN_CONTROLLER AND admin's database.php
    */
    public function get_fields( $specific_field = "" )
    {

        // Use when add new image
        // $is_required_image = (($this->uri->segment(4)!=null) && intval($this->uri->segment(4)))?'':'required';

        $fields = array(
        
              'metadata_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'metadata_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),


              'metadata_title' => array(
                     'table'   => $this->_table,
                     'name'   => 'metadata_title',
                     'label'   => 'Name',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities'
                  ),
              
           
    
              'metadata_keyword' => array(
                     'table'   => $this->_table,
                     'name'   => 'metadata_keyword',
                     'label'   => 'Keywords',
                     'type'   => 'textarea',
                     'attributes'   => array(),
                     // 'js_rules'   => 'required',
                     'rules'   => 'trim|htmlentities'
                  ),

           'metadata_desc' => array(
                             'table'   => $this->_table,
                             'name'   => 'metadata_desc',
                             'label'   => 'Description',
                             'type'   => 'textarea',
                             'attributes'   => array(),
                             'js_rules'   => 'required',
                             'rules'   => 'required|trim'
                          ),    
              
              

            
              'metadata_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'metadata_status',
                     'label'   => 'Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "metadata_status" ,
                     'list_data' => array(),
                     'default'   => '1',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),
              
            );
        
        if($specific_field)
            return $fields[ $specific_field ];
        else
            return $fields;
    }

}
?>
<?
class Model_startup extends MY_Model {
    /**
     *
     * @package     startup Model
     * 
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'startup';
    protected $_field_prefix    = 'startup_';
    protected $_pk    = 'startup_id';
    protected $_status_field    = 'startup_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "startup_id,startup_name,startup_status";

        parent::__construct();

    }


 

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
    *                   -----Incase list_data_key is not defined, it will look for field_name as a $key
    *                   -----USED IN ADMIN_CONTROLLER AND admin's database.php
    */
    public function get_fields( $specific_field = "" )
    {

        $fields = array(
        
              'startup_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'startup_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),
                'startup_user_id' => array(
                    'table'   => $this->_table,
                    'name'   => 'startup_user_id',
                    'label'   => 'user id #',
                    'type'   => 'hidden',
                    'type_dt'   => 'text',
                    'attributes'   => array(),
                    'dt_attributes'   => array("width"=>"5%"),
                    'js_rules'   => '',
                    'rules'   => 'trim'
              ),


              'startup_name' => array(
                     'table'   => $this->_table,
                     'name'   => 'startup_name',
                     'label'   => 'Name',
                     'type'   => 'text',
                     // 'attributes'   => array("additional"=>'slugify="#'.$this->_table.'-'.$this->_field_prefix.'slug"'),
                     // 'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities|is_unique['.$this->_table.'.'.$this->_field_prefix.'name]'
                  ),
                  'startup_video_new' => array(
                    'table' => $this->_table,
                    'name' => 'startup_video_new',
                    'label' => 'Video New',
                    'type' => 'hidden',
                    'attributes' => array(),
                    'js_rules' => '',
                    'rules' => 'trim|htmlentities'
                ),
                'startup_video_corporate' => array(
                    'table' => $this->_table,
                    'name' => 'startup_video_corporate',
                    'label' => 'Video Corporate',
                    'type' => 'hidden',
                    'attributes' => array(),
                    'js_rules' => '',
                    'rules' => 'trim|htmlentities'
                ),
                'startup_video_growth' => array(
                    'table' => $this->_table,
                    'name' => 'startup_video_growth',
                    'label' => 'Video Growth',
                    'type' => 'hidden',
                    'attributes' => array(),
                    'js_rules' => '',
                    'rules' => 'trim|htmlentities'
                ),

              'startup_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'startup_status',
                     'label'   => 'Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "startup_status" ,
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
<?
class Model_team extends MY_Model {
  
    /**
     * model_faq
     *
     * @package     model_faq Model
     * 
     * @version     1.0
     * @since       2017 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'team';
    protected $_field_prefix    = 'team_';
    protected $_pk    = 'team_id';
    protected $_status_field    = 'team_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "team_id,team_type,team_name,team_status";
        
        parent::__construct();
    }

    
    /*
    * table       Table Name
    * Name        FIeld Name
    * label       Field Label / Textual Representation in form and DT headings
    * type        Field type : hidden, text, textarea, editor, etc etc. 
    *                           Implementation in form_generator.php
    * type_dt     Type used by prepare_datatables method in controller to prepare DT value
    *                           If left blank, prepare_datatable Will opt to use 'type'
    * attributes  HTML Field Attributes
    * js_rules    Rules to be aplied in JS (form validation)
    * rules       Server side Validation. Supports CI Native rules
    */
    public function get_fields( $specific_field = "" )
    {

        // Use when add new image
        // $is_required_image = (($this->uri->segment(4)!=null) && intval($this->uri->segment(4)))?'':'required';

        $fields = array(
        
              'team_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'team_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

                'team_type' => array( 
                    'table'   => $this->_table,
                    'name'   => 'team_type',
                    'label'   => 'Category',
                    'type'   => 'dropdown',
                    'type_dt'   => 'dropdown',
                    'type_filter_dt' => 'dropdown',
                    'list_data_key' => "team_type" ,
                    'list_data' => array(
                        1 => "Advisory Board",
                        2 => "Management Team"
                        ),
                    // 'default'   => '0',
                    'attributes'   => array(),
                    'dt_attributes'   => array("width"=>"7%"),
                    'rules'   => 'required|trim'
                 ),
 

              'team_name' => array(
                     'table'   => $this->_table,
                     'name'   => 'team_name',
                     'label'   => 'Name',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'default'   => '',
                     'rules'   => 'trim|htmlentities|required',
                     'js_rules'   => 'required'
                  ),

                  'team_image' => array(
                    'table' => $this->_table,
                    'name' => 'team_image',
                    'label' => 'Image',
                    'type' => 'hidden',
                    'attributes' => array(),
                    'js_rules' => '',
                    'rules' => 'trim|htmlentities'
                ),
                  'team_description' => array(
                    'table'   => $this->_table,
                    'name'   => 'team_description',
                    'label'   => 'Description',
                    'type'   => 'textarea',
                    'attributes'   => array(),
                    'default'   => '',
                    'rules'   => 'trim|htmlentities|required',
                    'js_rules'   => 'required'
                 ),
           

              'team_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'team_status',
                     'label'   => 'Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt'   => 'dropdown',
                     'list_data' => array( 
                                   
                                    ) ,
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
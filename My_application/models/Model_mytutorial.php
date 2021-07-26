<?
class Model_mytutorial extends MY_Model {
  
    /**
     * model_faq
     *
     * @package     model_faq Model
     * 
     * @version     1.0
     * @since       2017 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'mytutorial';
    protected $_field_prefix    = 'mytutorial_';
    protected $_pk    = 'mytutorial_id';
    protected $_status_field    = 'mytutorial_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "mytutorial_id,mytutorial_user_id,mytutorial_tutorial_id,mytutorial_total_percent,mytutorial_status";
        
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
        
              'mytutorial_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'mytutorial_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim',
                     'js_rules'   => 'required'
                ),

                'mytutorial_user_id' => array(
                    'table'   => $this->_table,
                    'name'   => 'mytutorial_user_id',
                    'label'   => 'mytutorial_user_id #',
                    'type'   => 'hidden',
                    'type_dt'   => 'text',
                    'attributes'   => array(),
                    'dt_attributes'   => array("width"=>"5%"),
                    'js_rules'   => '',
                    'rules'   => 'trim',
                    'js_rules'   => 'required'
               ),
               'mytutorial_tutorial_id' => array(
                'table'   => $this->_table,
                'name'   => 'mytutorial_tutorial_id',
                'label'   => 'mytutorial_tutorial_id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"5%"),
                'js_rules'   => '',
                'rules'   => 'trim',
                'js_rules'   => 'required'
           ),

 

              'mytutorial_desc_percent' => array(
                     'table'   => $this->_table,
                     'name'   => 'mytutorial_desc_percent',
                     'label'   => 'mytutorial_desc_percent',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'default'   => '',
                     'rules'   => 'trim|htmlentities',
                     
                  ),
                  'mytutorial_intro_percent' => array(
                    'table'   => $this->_table,
                    'name'   => 'mytutorial_intro_percent',
                    'label'   => 'mytutorial_intro_percent',
                    'type'   => 'text',
                    'attributes'   => array(),
                    'default'   => '',
                    'rules'   => 'trim|htmlentities',
                    
                 ),
                 'mytutorial_video_percent' => array(
                    'table'   => $this->_table,
                    'name'   => 'mytutorial_video_percent',
                    'label'   => 'mytutorial_video_percent',
                    'type'   => 'text',
                    'attributes'   => array(),
                    'default'   => '',
                    'rules'   => 'trim|htmlentities',
                    
                 ),
                 'mytutorial_total_percent' => array(
                    'table'   => $this->_table,
                    'name'   => 'mytutorial_total_percent',
                    'label'   => 'mytutorial_total_percent',
                    'type'   => 'text',
                    'attributes'   => array(),
                    'default'   => '',
                    'rules'   => 'trim|htmlentities',
                    
                 ),
                 'mytutorial_certificate' => array(
                    'table'   => $this->_table,
                    'name'   => 'mytutorial_certificate',
                    'label'   => 'mytutorial_certificate',
                    'type'   => 'text',
                    'attributes'   => array(),
                    'default'   => '',
                    'rules'   => 'trim|htmlentities',
                    
                 ),

              'mytutorial_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'mytutorial_status',
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

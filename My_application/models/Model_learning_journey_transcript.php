<?
class Model_learning_journey_transcript extends MY_Model {
  
    /**
     * model_faq
     *
     * @package     model_faq Model
     * 
     * @version     1.0
     * @since       2017 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'learning_journey_transcript';
    protected $_field_prefix    = 'learning_journey_transcript_';
    protected $_pk    = 'learning_journey_transcript_id';
    protected $_status_field    = 'learning_journey_transcript_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "learning_journey_transcript_id,learning_journey_transcript_user_id,learning_journey_transcript_content_id,learning_journey_transcript_percent,learning_journey_transcript_status";
        
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
        
              'learning_journey_transcript_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'learning_journey_transcript_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),
                'learning_journey_transcript_user_id' => array(
                  'table'   => $this->_table,
                  'name'   => 'learning_journey_transcript_user_id',
                  'label'   => 'user id #',
                  'type'   => 'hidden',
                  'type_dt'   => 'text',
                  'attributes'   => array(),
                  'dt_attributes'   => array("width"=>"5%"),
                  'js_rules'   => '',
                  'rules'   => 'trim'
             ),
                'learning_journey_transcript_content_id' => array(
                  'table'   => $this->_table,
                  'name'   => 'learning_journey_transcript_content_id',
                  'label'   => 'Content id',
                  'type'   => 'text',
                  'attributes'   => array(),
                  'default'   => '',
                  'rules'   => 'trim|htmlentities|required',
                  'js_rules'   => 'required'
               ),
               'learning_journey_transcript_percent' => array(
                'table'   => $this->_table,
                'name'   => 'learning_journey_transcript_percent',
                'label'   => 'Percent',
                'type'   => 'text',
                'attributes'   => array(),
                'default'   => '',
                'rules'   => 'trim|htmlentities|required',
                'js_rules'   => 'required'
             ),
           

              'learning_journey_transcript_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'learning_journey_transcript_status',
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
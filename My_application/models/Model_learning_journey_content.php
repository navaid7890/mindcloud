<?
class Model_learning_journey_content extends MY_Model {
    /**
     *
     * @package     learning_journey_content Model
     * 
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'learning_journey_content';
    protected $_field_prefix    = 'learning_journey_content_';
    protected $_pk    = 'learning_journey_content_id';
    protected $_status_field    = 'learning_journey_content_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "learning_journey_content_id,learning_journey_content_name,learning_journey_content_desc,learning_journey_content_status";
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
        
              'learning_journey_content_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'learning_journey_content_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

                'learning_journey_cat_id' => array(
                    'table'   => $this->_table,
                    'name'   => 'learning_journey_cat_id',
                    'label'   => 'Category',
                    'type'   => 'dropdown',
                    'type_dt'   => 'text',
                    'type_filter_dt'   => 'dropdown',
                    'attributes'   => array(),
                    'js_rules'   => 'required',
                    'rules'   => 'required|trim'
               ),


       

              'learning_journey_content_name' => array(
                     'table'   => $this->_table,
                     'name'   => 'learning_journey_content_name',
                     'label'   => 'Name',
                     'type'   => 'text',
                     'attributes'   => array("additional"=>'slugify="#'.$this->_table.'-'.$this->_field_prefix.'slug"'),
                     // 'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities'
                  ),

                  'learning_journey_content_legal_terms' => array(
                    'table'   => $this->_table,
                    'name'   => 'learning_journey_content_legal_terms',
                    'label'   => 'Legal Terms Text',
                    'type'   => 'editor',
                    'attributes'   => array(),
                    'js_rules'   => '',
                    'rules'   => 'trim|htmlentities'
                 ),
      
               'learning_journey_content_desc' => array(
                     'table'   => $this->_table,
                     'name'   => 'learning_journey_content_desc',
                     'label'   => 'Description',
                     'type'   => 'editor',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),

                  'learning_journey_content_tags' => array(
                    'table'   => $this->_table,
                    'name'   => 'learning_journey_content_tags',
                    'label'   => 'Video Transcript',
                    'type'   => 'editor',
                    'attributes'   => array(),
                    'attributes' => array(),
                    'js_rules'   => '',
                    'rules'   => 'trim|htmlentities'
                 ),
            
                 'learning_journey_video' => array(
                    'table' => $this->_table,
                    'name' => 'learning_journey_video',
                    'label' => 'Video',
                    'type' => 'hidden',
                    'attributes' => array(),
                    'js_rules' => '',
                    'rules' => 'trim|htmlentities'
                ),
                'learning_journey_content_image' => array(
                    'table' => $this->_table,
                    'name' => 'learning_journey_content_image',
                    'label' => 'Image',
                    'type' => 'hidden',
                    'attributes' => array(),
                    'js_rules' => '',
                    'rules' => 'trim|htmlentities'
                ),
                //   'learning_journey_video' => array(
                //     'table' => $this->_table,
                //     'name' => 'learning_journey_video',
                //     'label' => 'Video',
                //     'name_path' => 'learning_journey_video_path',
                //     'upload_config' => 'site_upload_learning_journey_content',
                //     'type' => 'videoupload',
                //     'type_dt' => 'video',
                //     'randomize' => true,
                //     'preview' => 'true',
                //     'attributes'   => array(
                //         'allow_ext'=>'mkv|avi|mp4',
                //     ),
                //     'dt_attributes' => array("width" => "10%"),
                //     'rules' => 'trim|htmlentities',
                //     // 'js_rules'=>$is_required_image
                // ),

    

              'learning_journey_content_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'learning_journey_content_status',
                     'label'   => 'Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "learning_journey_content_status" ,
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
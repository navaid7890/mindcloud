<?
class Model_corporate extends MY_Model {
    /**
     *
     * @package     corporate Model
     * 
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'corporate';
    protected $_field_prefix    = 'corporate_';
    protected $_pk    = 'corporate_id';
    protected $_status_field    = 'corporate_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "corporate_id,corporate_name,CONCAT(corporate_image_path,corporate_image) AS corporate_image,corporate_status";
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


    
	// public function get_category_tutorials(){
	// 	$this->db->select('corporate.category_id,corporate.category_name,corporate.category_image,count(md_tutorial.tutorial_id) as tutorials');
	// 	$this->db->from('corporate');
	// 	$this->db->join('course_category', 'corporate.category_id = course_category.cp_category_id');
	// 	$this->db->join('tutorial', 'tutorial.tutorial_id = course_category.cp_course_id');
    //     $this->db->where('tutorial_status','1');
	// 	$this->db->group_by(['corporate.category_id']);
    //     // debug();
	// 	$query = $this->db->get();
    //     // debug($this->db->last_query());die();
	// 	return $query->result_array() ;
	// }

    
    public function get_fields( $specific_field = "" )
    {

        $fields = array(
        
              'corporate_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'corporate_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

       

              'corporate_name' => array(
                     'table'   => $this->_table,
                     'name'   => 'corporate_name',
                     'label'   => 'Corporate Name',
                     'type'   => 'text',
                     'attributes'   => array("additional"=>'slugify="#'.$this->_table.'-'.$this->_field_prefix.'slug"'),
                     // 'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities'
                  ),

              
              'corporate_slug'  => array(
                  'table'   => $this->_table,
                  'name'   => 'corporate_slug',
                  'label'   => 'Slug',
                  'type'   => 'text',
                  'attributes'   => array(),
                  'js_rules'   => array("is_slug" => array()),
                  'rules'   => 'required|strtolower|htmlentities|is_unique['.$this->_table.'.'.$this->_field_prefix.'slug]|callback_is_slug'
              ),
             
               'corporate_desc' => array(
                     'table'   => $this->_table,
                     'name'   => 'corporate_desc',
                     'label'   => 'Description',
                     'type'   => 'editor',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),

                  'corporate_url' => array(
                    'table'   => $this->_table,
                    'name'   => 'corporate_url',
                    'label'   => 'URL',
                    'type'   => 'text',
                    'attributes'   => array(),
                    'js_rules'   => '',
                    'rules'   => 'trim|htmlentities'
                 ),

                 'corporate_limit' => array(
                    'table'   => $this->_table,
                    'name'   => 'corporate_limit',
                    'label'   => 'Limit',
                    'type'   => 'text',
                    'attributes'   => array(),
                    'js_rules'   => '',
                    'rules'   => 'trim|htmlentities'
                 ),


                 'corporate_image' => array(
                    'table' => $this->_table,
                    'name' => 'corporate_image',
                    'label' => 'Corporate Logo',
                    'type' => 'hidden',
                    'attributes' => array(),
                    'js_rules' => '',
                    'rules' => 'trim|htmlentities'
                ),

         
            //       'corporate_image' => array(
            //     'table' => $this->_table,
            //     'name' => 'corporate_image',
            //     'label' => 'Logo',
            //     'name_path' => 'corporate_image_path',
            //     'upload_config' => 'site_upload_category',
            //     'type' => 'fileupload',
            //     'type_dt' => 'image',
            //     'randomize' => true,
            //     'preview' => 'true',
            //     // 'thumb'   => array(array('name'=>'category_image_thumb','max_width'=>260, 'max_height'=>250),),
            //     'attributes'   => array(
            //         'image_size_recommended'=>'57px × 57px',
            //         'allow_ext'=>'png|jpeg|jpg',
            //     ),
            //     'dt_attributes' => array("width" => "10%"),
            //     'rules' => 'trim|htmlentities',
            //     'js_rules'=>$is_required_image
            // ),



      
            // 'category_featured' => array(
            //          'table'   => $this->_table,
            //          'name'   => 'category_featured',
            //          'label'   => 'Popular',
            //          'type'   => 'switch',
            //          'type_dt'   => 'dropdown',
            //          'type_filter_dt' => 'dropdown',
            //          'list_data_key' => "category_featured" ,
            //          'list_data' => array(),
            //          'default'   => '1',
            //          'attributes'   => array(),
            //          'dt_attributes'   => array("width"=>"7%"),
            //          'rules'   => 'trim'
            //       ),

              'corporate_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'corporate_status',
                     'label'   => 'Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "category_status" ,
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
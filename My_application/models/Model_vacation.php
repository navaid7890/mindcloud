<?
class Model_vacation extends MY_Model
{
    /**
     * TKD banner MODEL
     *
     * @package     banner Model
     * @version     1.0
     * @since       2017
     */

    protected $_table = 'vacation';
    protected $_field_prefix = 'v_';
    protected $_pk = 'v_id';
    protected $_status_field = 'v_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "";

        parent::__construct();
    }


    public function is_professional_available($professional_id,$date)
    {
        $param = array();
        $param['where']['v_user_id'] = $professional_id;
        $param['where']['v_date'] = $date;
        $data = $this->find_one($param);
        return (isset($data) AND array_filled($data)) ? FALSE:TRUE;
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
    public function get_fields($specific_field = "")
    {
        // Use when add new image
        $is_required_image = (($this->uri->segment(4)!=null) && intval($this->uri->segment(4)))?'':'required';

        $fields = array(

            'v_id' => array(
                'table' => $this->_table,
                'name' => 'v_id',
                'label' => 'id #',
                'type' => 'hidden',
                'type_dt' => 'text',
                'attributes' => array(),
                'dt_attributes' => array("width" => "5%"),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'v_user_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'v_user_id',
                     'label'   => 'Expert',
                     'type'   => 'dropdown',
                     'type_dt'   => 'text',
                     'type_filter_dt'   => 'dropdown',
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim',
                ),

                'v_cat_id' => array(
                    'table'   => $this->_table,
                    'name'   => 'v_cat_id',
                    'label'   => 'Category',
                    'type'   => 'dropdown',
                    'type_dt'   => 'text',
                    'type_filter_dt'   => 'dropdown',
                    'js_rules'   => 'required',
                    'rules'   => 'required|trim',
               ),

            'v_date' => array(
                'table' => $this->_table,
                'name' => 'v_date',
                'label' => 'Date',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|trim|htmlentities'
            ),


            'v_desc' => array(
                'table' => $this->_table,
                'name' => 'v_desc',
                'label' => 'Description',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),



        );

        if ($specific_field)
            return $fields[$specific_field];
        else
            return $fields;

    }

}

?>
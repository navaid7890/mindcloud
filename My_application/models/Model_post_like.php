<?

class Model_post_like extends MY_Model
{

    /**
     * Social8 Post Like MODEL
     *
     * @package     Post Like Model 
     * @author      Rafi Ullah Patel
     * @version     1.0
     * @since       20 March,2017
     */

    protected $_table = 'post_like';
    protected $_field_prefix = 'post_like_';
    protected $_pk = 'post_like_id';
    protected $_status_field = 'post_like_status';
    public $pagination_params = array();

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
      
    }

    // Return Total post like
    public function total_like($post_id,$post_type)
    {
        // Set params
        $post_params_like['where']['post_like_post_id'] = $post_id;
        $post_params_like['where']['post_like_post_type'] = $post_type;
        // Query
        $total_like = $this->model_post_like->find_count($post_params_like);

        // Add leading zero
        if($total_like<10){
            $total_like = 0 . $total_like;
        }

        // Return total like
        return $total_like;
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

        $fields = array(
            'post_like_id' => array(
                'table' => $this->_table,
                'name' => 'post_like_id',
                'label' => 'ID #',
                'type' => 'hidden',
                'type_dt' => 'text',
                'attributes' => array(),
                'dt_attributes' => array("width" => "5%"),
                'js_rules' => '',
                'rules' => 'trim'
            ),
           
            'post_like_post_id' => array(
                'table' => $this->_table,
                'name' => 'post_like_post_id',
                'label' => 'Post Like Image ID',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),
            'post_like_post_type' => array(
                'table' => $this->_table,
                'name' => 'post_like_post_type',
                'label' => 'Post Like Type',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),

            'post_like_user_id' => array(
                'table' => $this->_table,
                'name' => 'post_like_user_id',
                'label' => 'Post Like User Id',
                'type' => 'text',
                'attributes' => array(''),
                'rules' => '|required|trim|htmlentities'
            ),

            'post_like_status' => array(
                'table' => $this->_table,
                'name' => 'post_like_status',
                'label' => 'Status?',
                'type' => 'switch',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|trim'
            ),

             'post_like_createdon' => array(
                'table' => $this->_table,
                'name' => 'post_like_createdon',
                'label' => 'post Like Createdon',
                'type' => 'label',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|trim'
            ),

        );

        if ($specific_field)
            return $fields[$specific_field];
        else
            return $fields;

    }
}

?>
<?

class Model_post_comment extends MY_Model
{

    /**
     * Social8 Post Comment MODEL
     *
     * @package     Post Comment Model 
     * @author      Rafi Ullah Patel
     * @version     1.0
     * @since       20 March,2017
     */

    protected $_table = 'post_comment';
    protected $_field_prefix = 'post_comment_';
    protected $_pk = 'post_comment_id';
    protected $_status_field = 'post_comment_status';
    public $pagination_params = array();

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
      
    }

    // Return Total post comment (Not using anymore)
    public function total_comment($post_id,$post_type)
    {
        // Set params
        $post_params_like['where']['post_comment_post_id'] = $post_id;
        $post_params_like['where']['post_comment_post_type'] = $post_type;
        // Query
        $total_comments = $this->model_post_comment->find_count($post_params_like);

        // Add leading zero
        if($total_comments<10){
            $total_comments = 0 . $total_comments;
        }

        // Return total like
        return $total_comments;
    }

    // Get comments
    public function comments_list($post_id,$pagination_id=null,$limit='')
    {
        // Set fields
        $params_comments['fields'] = "post_comment_id,post_comment_post_id,post_comment_post_type,post_comment_user_id,
        post_comment_user_comment,post_comment_createdon,user_id,CONCAT(user_firstname, ' ' , user_lastname) as name,
        CONCAT(ui_profile_image_path, '' , ui_profile_image) as image";
        // Set pagination
        if($pagination_id != null){
            $pagination_where = "AND post_comment_id < " . $pagination_id;
        }
        else{
            $pagination_where = "";
        }

        // JOIN
        $params_comments['joins'][] = array(
            "table"=>"user" ,
            "joint"=>"user.user_id = post_comment_user_id",
        );

        $params_comments['joins'][] = array(
            "table"=>"user_info" ,
            "joint"=>"user_info.ui_user_id = post_comment_user_id",
        );

        // Set comments params
        $params_comments['where_string'] = "post_comment_post_id = " . $post_id . " $pagination_where";
        // Order By
        $params_comments['order'] = "post_comment_id DESC";
        // Set limit
        if(!empty($limit)){
            $params_comments['limit'] = $limit;
        }

        // Set data
        $data = $this->model_post_comment->find_all($params_comments);

        return array_reverse($data);

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
            'post_comment_id' => array(
                'table' => $this->_table,
                'name' => 'post_comment_id',
                'label' => 'ID #',
                'type' => 'hidden',
                'type_dt' => 'text',
                'attributes' => array(),
                'dt_attributes' => array("width" => "5%"),
                'js_rules' => '',
                'rules' => 'trim'
            ),
      'post_comment_post_id' => array(
                'table' => $this->_table,
                'name' => 'post_comment_post_id',
                'label' => 'Post Comment ID',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),
      'post_comment_post_type' => array(
                'table' => $this->_table,
                'name' => 'post_comment_post_type',
                'label' => 'Post Comment Type',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),
            'post_comment_user_id' => array(
                'table' => $this->_table,
                'name' => 'post_comment_user_id',
                'label' => 'Post Comment User Id',
                'type' => 'text',
                'attributes' => array(''),
                'rules' => '|required|trim|htmlentities'
            ),
      'post_comment_user_comment' => array(
                'table' => $this->_table,
                'name' => 'post_comment_user_comment',
                'label' => 'Post Comment',
                'type' => 'text',
                'attributes' => array(''),
                'rules' => '|required|trim|htmlentities'
            ),

            'post_comment_status' => array(
                'table' => $this->_table,
                'name' => 'post_comment_status',
                'label' => 'Status?',
                'type' => 'switch',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|trim'
            ),

             'post_comment_createdon' => array(
                'table' => $this->_table,
                'name' => 'post_comment_createdon',
                'label' => 'Post Comment Createdon',
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
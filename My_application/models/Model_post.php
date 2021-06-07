<?

class Model_post extends MY_Model
{

    /**
     * Social8 PhotoMODEL
     *
     * @package     Photo Model
     * @author      Fawwad Shafi
     * @version     1.0
     * @since       01 Feb,2017
     */

    protected $_table = 'post';
    protected $_field_prefix = 'post_';
    protected $_pk = 'post_id';
    protected $_status_field = 'post_status';
    public $pagination_params = array();

    function __construct()
    {
        // Call the Model constructor
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

    // NOT USE -->go to find_post
    // User posts
    public function user_post($user_id,$limit=0)
    {
        // Set fields
        $params['fields'] = "post_id,post_user_id,post_type,post_other_action_id,post_description,post_file,post_file_path,
                            post_visibility,post_createdon,signup_id,CONCAT(signup_firstname, ' ', signup_lastname) as name,
                            signup_profile_image,signup_profile_image_path,(SELECT COUNT(post_like_post_id) FROM {pre}post_like
                            WHERE post_like_post_id = post_id) AS post_like_count,(SELECT COUNT(post_comment_post_id) FROM {pre}post_comment
                            WHERE post_comment_post_id = post_id) AS post_comment_count";
        // JOIN
        $params['joins'][] = array(
            "table"=>"user" ,
            "joint"=>"user.user_id = post_user_id",
        );
        // Set params
        $params['where']['post_user_id'] = $user_id;
        // Set limit
        // if($limit!=0){
        //     $params['limit'] = $limit;
        // }
        // order by
        $params['order'] = "post_id DESC";

        // Query
        $query = $this->model_post->find_all_active($params);

        // Fetch comments
        if(count($query)>0){
            foreach($query as $row):
                // Fetch comment
                $comment_data = $this->model_post_comment->comments_list($row['post_id'],null,2);
                // Set data
                $result[] = array(
                    'post_data'=>$row,
                    'post_comment'=>$comment_data
                );
            endforeach;
        }
        else{
            $result = array();
        }


        return $result;
    }

    // NOT USE -->go to find_post
    // Time posts with friend
    public function timeline_post($ids,$limit=0)
    {
        // Set fields
        $params['fields'] = "post_id,post_user_id,post_type,post_other_action_id,post_description,post_file,post_file_path,
                            post_visibility,post_createdon,signup_id,CONCAT(signup_firstname, ' ', signup_lastname) as name,
                            signup_profile_image,signup_profile_image_path,(SELECT COUNT(post_like_post_id) FROM {pre}post_like
                            WHERE post_like_post_id = post_id) AS post_like_count,(SELECT COUNT(post_comment_post_id) FROM {pre}post_comment
                            WHERE post_comment_post_id = post_id) AS post_comment_count";
        // JOIN
        $params['joins'][] = array(
            "table"=>"signup" ,
            "joint"=>"signup.signup_id = post_user_id",
        );
        // Set params
        $params['where_in']['post_user_id'] = $ids;
        // Set limit
        if($limit!=0){
            $params['limit'] = $limit;
        }
        // order by
        $params['order'] = "post_id DESC";

        // Query
        $query = $this->model_post->find_all_active($params);

        // Fetch comments
        if(count($query)>0){
            // Get total post count
            $total_post_count = $this->post_counts($ids);

            foreach($query as $row):
                // Fetch comment
                $comment_data = $this->model_post_comment->comments_list($row['post_id'],null,2);
                // Set data
                $result[] = array(
                    'post_data'=>$row,
                    'post_comment'=>$comment_data
                );
            endforeach;
        }
        else{
            $total_post_count = 0;
            $result = array();
        }


        return $result;
        //return array($result,$total_post_count);
    }



    // Time line , user profile and group posts
    //public function find_post($ids,$limit=0 , $last_id=0, $type, $group_ids)
    public function find_post()
    {
        // Set fields
        $params['fields'] = "post_id,post_user_id,post_page_type,post_page_id,post_type,post_other_action_id,post_description,post_file,post_file_path,
                            post_visibility,post_createdon,user_id,CONCAT(user_firstname, ' ', user_lastname) as name,
                            ui_profile_image as signup_profile_image,ui_profile_image_path as signup_profile_image_path";
                            

        // JOIN
        $params['joins'][] = array(
            "table"=>"user" ,
            "joint"=>"user.user_id = post_user_id",
        );
        
        $params['joins'][] = array(
            "table"=>"user_info" ,
            "joint"=>"user_info.ui_user_id = post_user_id",
        );
        

        // order by
        $params['order'] = "post_id DESC";

        if(isset($_GET['type']) AND ($_GET['type'] == 'message')) {
            $params['where']['post_type'] = 1;
        }

        if(isset($_GET['type']) AND ($_GET['type'] == 'photo')) {
            $params['where']['post_type'] = 2;
        }

        if(isset($_GET['type']) AND ($_GET['type'] == 'audio')) {
            $params['where']['post_type'] = 3;
        }

        if(isset($_GET['type']) AND ($_GET['type'] == 'video')) {
            $params['where']['post_type'] = 4;
        }


        if(isset($_GET['search'])) {
            $params['where_like'][] = array('column'=>'user_firstname','value'=>$this->input->get('search'),'type'=>'both');
            $params['where_or_like'][] = array('column'=>'user_lastname','value'=>$this->input->get('search'),'type'=>'both');
        }


        // Query
        $query = $this->model_post->find_all_active($params);
        
        $result = array();
        if(isset($query) AND array_filled($query)) {
            foreach($query as $key=>$value) {
                $result[$key] = $value;
                $result[$key]['comments'] = $this->model_post_comment->comments_list($value['post_id']);
            }
        }
        
        //debug($result,1);
        return $result;
    }

    // Get total post count
    public function post_counts($ids)
    {
        // Set fields
        $params['fields'] = "post_user_id";
        // Set params
        $params['where_in']['post_user_id'] = $ids;
        // Return data
        return $this->model_post->find_count_active($params);
    }

    public function get_fields($specific_field = "")
    {

        $fields = array(
            'post_id' => array(
                'table' => $this->_table,
                'name' => 'post_id',
                'label' => 'ID #',
                'type' => 'hidden',
                'type_dt' => 'text',
                'attributes' => array(),
                'dt_attributes' => array("width" => "5%"),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'post_user_id' => array(
                'table' => $this->_table,
                'name' => 'post_user_id',
                'label' => 'User ID',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),
            'post_page_type' => array(
                'table' => $this->_table,
                'name' => 'post_page_type',
                'label' => 'Post Page Type',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),
            'post_page_id' => array(
                'table' => $this->_table,
                'name' => 'post_page_id',
                'label' => 'Post Page ID',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),

            /*
             * 1 = text
             * 2 = image
             * 3 = video
             * 4 = Youtube
             * 5 = like
             * 6 = update profile image
             * 7 = Share poll
             * */

            'post_type' => array(
                'table' => $this->_table,
                'name' => 'photo_type',
                'label' => 'Post type',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),

            // Pk id of other event
            'post_other_action_id' => array(
                'table' => $this->_table,
                'name' => 'post_other_action_id',
                'label' => 'Post type',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),

            // text
            'post_description' => array(
                'table' => $this->_table,
                'name' => 'post_description',
                'label' => 'Post Description',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|required|trim|htmlentities'
            ),

            // Image , video
            'post_file' => array(
                'table' => $this->_table,
                'name' => 'post_file',
                'label' => 'File (Avatar)',
                'name_path' => 'post_file_path',
                'upload_config' => 'upload_post',
                'type' => 'fileupload',
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes' => array(
                    'image_size' => 'Recommended Avatar image size : 50px x 50px',
                    'allow_ext'=>'png|jpeg|jpg|mp3|mpeg',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities'
            ),

            /*
             * 1 : Public
             * 2 : Private
             *
             */

            'post_visibility' => array(
                'table' => $this->_table,
                'name' => 'post_visibility',
                'label' => 'Post visibility',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'default'=>1,
                'rules' => '|required|trim|htmlentities'
            ),

            'post_createdon' => array(
                'table' => $this->_table,
                'name' => 'post_createdon',
                'label' => 'Post Createdon',
                'type' => 'label',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => '|trim'
            ),

            'post_status' => array(
                'table' => $this->_table,
                'name' => 'post_status',
                'label' => 'Status?',
                'type' => 'switch',
                'type_dt' => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(),
                'default' => '1',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
            ),

        );

        if ($specific_field)
            return $fields[$specific_field];
        else
            return $fields;

    }
}

?>
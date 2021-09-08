<?
class Model_booking extends MY_Model
{
    /**
     * TKD booking MODEL
     *
     * @package     booking Model
     * @version     1.0
     * @since       2017
     */

    protected $_table = 'booking';
    protected $_field_prefix = 'booking_';
    protected $_pk = 'booking_id';
    protected $_status_field = 'booking_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "booking_id,booking_user_id,booking_expert_id,booking_date,booking_time,booking_expert_approval,booking_admin_approval,booking_status";

        parent::__construct();
    }


    public function join_user($type="" , $append_joint ="" , $prepend_joint = "")
    {
        $joint = $prepend_joint . "booking_user_id = user_id" . $append_joint ; 
        return $this->prep_join("user" , $joint, $type );
    }

    public function join_expert($type="" , $append_joint ="" , $prepend_joint = "")
    {
        $joint = $prepend_joint . "booking_expert_id = expert_id" . $append_joint ; 
        return $this->prep_join("expert" , $joint, $type );
    }
    
    public function get_already_booked_slot($professional_id,$date)
    {

        
        $param = array();
        $param['where']['booking_expert_id'] = $professional_id;
        $param['where']['booking_date'] = $date;
        
        $data = $this->find_all_active($param);
        $var = array();
        if(isset($data) AND array_filled($data)) {
            foreach($data as $value) {
                $var[] = date("G:i",strtotime($value['booking_time']));
            }
        }
        // Professional Not Available Script Start
        // $param = array();
        //  $param['where']['v_user_id'] = $professional_id;
        // $param['where_string'] = "DATE(v_date) = '$date'";
        // $vacation_data = $this->model_vacation->find_all($param);
        
        // if(isset($vacation_data) AND array_filled($vacation_data)){
        //     foreach($vacation_data as $value) {
        //         $var[] = date("G:i",strtotime($value['v_date']));
        //     }
        // }
        // Professional Not Available Script End
        sort($var);
      //  debug($var);
        return $var;
    }

    // public function get_page_booking($page='')
    // {
    //     // Set params
    //     $params['fields'] = 'booking_page,booking_title,booking_image_path,booking_image,booking_status';
    //     $params['where']['booking_page'] = $page;
    //     return $this->model_booking->find_one_active($params);

    // }
    public function get_data_by_user_id($userid)
    {
        $param = array();
        $param['where']['booking_artist_id'] = $userid;
       
        return $this->get_all_data($param);
    }
    public function get_bookings($params = array())
    {
        // Set params
        //$params = array();
        $params['order'] = 'booking_position ASC';
        return $this->model_booking->find_all_active($params);

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

            'booking_id' => array(
                'table' => $this->_table,
                'name' => 'booking_id',
                'label' => 'id #',
                'type' => 'hidden',
                'type_dt' => 'text',
                'attributes' => array(),
                'dt_attributes' => array("width" => "5%"),
                'js_rules' => '',
                'rules' => 'trim'
            ),


            'booking_user_id' => array(
                   'table'   => $this->_table,
                   'name'   => 'booking_user_id',
                   'label'   => 'User Name',
                   'type'   => 'dropdown',
                   'attributes'   => array(),
                   'js_rules'   => 'required',
                   'rules'   => 'required|trim',
                ),

                'booking_expert_id' => array(
                    'table'   => $this->_table,
                    'name'   => 'booking_expert_id',
                    'label'   => 'Expert Name',
                    'type'   => 'dropdown',
                    'attributes'   => array(),
                    'js_rules'   => 'required',
                    'rules'   => 'required|trim',
                 ),

                 

                 'booking_category_id' => array(
                    'table'   => $this->_table,
                    'name'   => 'booking_category_id',
                    'label'   => 'Category Name',
                    'type'   => 'dropdown',
                    'attributes'   => array(),
                    'js_rules'   => 'required',
                    'rules'   => 'required|trim',
                 ),



            'booking_date' => array(
                'table'   => $this->_table,
                'name'   => 'booking_date',
                'label'   => 'Booking Date',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),
    
             'booking_time' => array(
                'table'   => $this->_table,
                'name'   => 'booking_time',
                'label'   => 'Time',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),

        'booking_message' => array(
                'table'   => $this->_table,
                'name'   => 'booking_message',
                'label'   => 'Message',
                'type'   => 'textarea',
                'attributes'   => array(),
                'js_rules'   => 'required',
                'rules'   => 'required|trim|htmlentities'
             ),


            //  'booking_service' => array(
            //     'table'   => $this->_table,
            //     'name'   => 'booking_service',
            //     'label'   => 'Service',
            //     'type'   => 'text',
            //     'attributes'   => array(),
            //     'js_rules'   => '',
            //     'rules'   => 'trim|htmlentities'
            //  ),

             'booking_phone' => array(
                'table'   => $this->_table,
                'name'   => 'booking_phone',
                'label'   => 'Phone',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),

             'booking_email' => array(
                'table'   => $this->_table,
                'name'   => 'booking_email',
                'label'   => 'Email',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),

             'booking_expert_approval' => array(
                'table' => $this->_table,
                'name' => 'booking_expert_approval',
                'label' => 'Expert Approval',
                'type' => 'switch',
                'type_dt' => 'switch',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(),
                'default' => '1',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
            ),



            'booking_expert_rejection' => array(
                'table' => $this->_table,
                'name' => 'booking_expert_rejection',
                'label' => 'Expert Rejection',
                'type' => 'switch',
                'type_dt' => 'switch',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(),
                'default' => '1',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
            ),


             'booking_admin_approval' => array(
                'table' => $this->_table,
                'name' => 'booking_admin_approval',
                'label' => 'Admin Approval',
                'type' => 'switch',
                'type_dt' => 'switch',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(),
                'default' => '1',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
            ),


        //  'booking_artist_approval' => array(
        //             'table' => $this->_table,
        //             'name' => 'booking_artist_approval',
        //             'label' => 'Expert Approval',
        //             'type' => 'switch',
        //             'type_dt' => 'switch',
        //             'type_filter_dt' => 'dropdown',
        //             'list_data' => array(),
        //             'default' => '1',
        //             'attributes' => array(),
        //             'dt_attributes' => array("width" => "7%"),
        //             'rules' => 'trim'
        //         ),

       

 
            'booking_status' => array(
                'table' => $this->_table,
                'name' => 'booking_status',
                'label' => 'Status?',
                'type' => 'switch',
                'type_dt' => 'switch',
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
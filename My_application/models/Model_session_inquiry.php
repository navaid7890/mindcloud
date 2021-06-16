<?
class Model_session_inquiry extends MY_Model {
  
    /**
     * session_inquiry MODEL
     *
     * @package     session_inquiry Model
     * 
     * @version     1.0
     * @since       2017 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'session_inquiry';
    protected $_field_prefix    = 'si_';
    protected $_pk    = 'si_id';
    protected $_status_field    = 'si_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "
         si_id,
        si_name,
        si_email,
        si_phone,
        si_status";
        parent::__construct();
    }
        // si_subject,

    // Get unread inquiries 
    public function get_unread_inquiry()
    {
        // Set params
        $params['where_string'] = " si_status!=0";
        $result = $this->find_count($params);
        return $result;
    }



    public function get_already_booked_slot($professional_id,$date)
    {

        
        $param = array();
        // $param['where']['ba_professional_id'] = $professional_id;
        $param['where']['si_date'] = $date;
        
        $data = $this->find_all_active($param);
        $var = array();
        if(isset($data) AND array_filled($data)) {
            foreach($data as $value) {
                $var[] = date("G:i",strtotime($value['si_time']));
            }
        }
        // Professional Not Available Script Start
        $param = array();
        // $param['where']['v_user_id'] = $professional_id;
        $param['where_string'] = "DATE(v_date) = '$date'";
        $vacation_data = $this->model_vacation->find_all($param);
        
        if(isset($vacation_data) AND array_filled($vacation_data)){
            foreach($vacation_data as $value) {
                $var[] = date("G:i",strtotime($value['v_date']));
            }
        }
        // Professional Not Available Script End

        sort($var);
        

        
        return $var;
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
        $fields = array(        
           
              'si_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'si_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

              'si_name' => array(
                 'table'   => $this->_table,
                 'name'   => 'si_name',
                 'label'   => 'FULL NAME',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'   => 'required|strtolower|trim|htmlentities|min_length[2]|max_length[30]'
              ),

            // 'si_lastname' => array(
            //      'table'   => $this->_table,
            //      'name'   => 'si_lastname',
            //      'label'   => 'Last Name',
            //      'type'   => 'text',
            //      'attributes'   => array(),
            //      'js_rules'   => '',
            //      'rules'   => 'required|strtolower|trim|htmlentities|min_length[2]|max_length[30]'
            //   ),


              'si_email' => array(
                     'table'   => $this->_table,
                     'name'   => 'si_email',
                     'label'   => 'EMAIL ADDRESS',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'required|valid_email|strtolower|trim|htmlentities'
                  ),


              // 'si_date' => array(
              //        'table'   => $this->_table,
              //        'name'   => 'si_date',
              //        'label'   => 'Date',
              //        'type'   => 'text',
              //        'attributes'   => array(),
              //        'js_rules'   => '',
              //        'rules'   => 'trim'
              //     ),


              // 'si_subject' => array(
              //        'table'   => $this->_table,
              //        'name'   => 'si_subject',
              //        'label'   => 'Company',
              //        'type'   => 'text',
              //        'attributes'   => array(),
              //        'js_rules'   => '',
              //        'rules'   => 'trim|htmlentities'
              //     ),

               'si_phone' => array(
                     'table'   => $this->_table,
                     'name'   => 'si_phone',
                     'label'   => 'CONTACT NUMBER<',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'required|trim|htmlentities'
                  ),

                 'si_date' => array(
                     'table'   => $this->_table,
                     'name'   => 'si_date',
                     'label'   => 'AVAILABLE FOR A CALL BACK',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'required|trim'
                  ),

                'si_time' => array(
                     'table'   => $this->_table,
                     'name'   => 'si_time',
                     'label'   => 'Session Starts',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'required|trim'
                  ),

                

            'si_time2' => array(
                     'table'   => $this->_table,
                     'name'   => 'si_time2',
                     'label'   => 'Session Over',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                  ),

              'si_message' => array(
                     'table'   => $this->_table,
                     'name'   => 'si_message',
                     'label'   => 'REASON FOR CALL BACK',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                  ),


             'si_createdon' => array(
                     'table'   => $this->_table,
                     'name'   => 'si_createdon',
                     'label'   => 'Sent On',
                     'type'   => 'readonly',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                  ),

            
              'si_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'si_status',
                     'label'   => 'Status',     
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt'   => 'dropdown',
                     'list_data' => array( 
                                        0 => "<span class=\"label label-default\">Read</span>" ,  
                                        1 =>  "<span class=\"label label-primary\">Unread</span>" 
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
<?
class Model_tool_builder extends MY_Model {
    /**
     * tool_builder MODEL
     *
     * @package     tool_builder Model
     * @author      
     * @version     2.0
     * @since       2016 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'tool_builder';
    protected $_field_prefix    = 'tool_builder_';
    protected $_pk    = 'tool_builder_id';
    protected $_status_field    = 'tool_builder_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model construtool_builderr
        $this->pagination_params['fields'] = "tool_builder_id,tool_builder_user_id,tool_builder_fname,tool_builder_lname,tool_builder_approval_status,tool_builder_status";
        
        //$this->pagination_params['joins'][] = $this->join_user("LEFT");

        parent::__construct();

    }


    // //public function join_user($type="" , $append_joint ="AND user_status = 1 AND user_type = ".DEALER_TYPE , $prepend_joint = "")
    // public function join_user($type="" , $append_joint ="AND user_status = 1", $prepend_joint = "")
    // {
    //     $joint = $prepend_joint . "tool_builder_user_id = user_id " . $append_joint ; 
    //     return $this->prep_join("user" , $joint, $type );
    // }


    // public function join_user_info($type="" , $append_joint ="" , $prepend_joint = "")
    // {
    //     $joint = $prepend_joint . "tool_builder_user_id = ui_user_id " . $append_joint ; 
    //     return $this->prep_join("user_info" , $joint, $type );
    // }


    // public function get_dealer_review_active()
    // {
    //     $params = array();
    //     $params['fields'] = '
    //                     CONCAT(user_firstname , " " , user_lastname) as tool_builder_user_name,
    //                     {pre}user_info.ui_tool_builder_image,{pre}user_info.ui_tool_builder_image_path,
    //                     {pre}tool_builder.tool_builder_description';

    //     $params['joins'][] = $this->join_user_info();
    //     $params['joins'][] = $this->join_user("LEFT");
    //     $params['where']['{pre}user.user_type'] = DEALER_TYPE;
    //     return $this->find_all_active($params);
    // }


    // public function get_rider_review_active()
    // {
    //     $params = array();
    //     $params['fields'] = '
    //                     CONCAT(user_firstname , " " , user_lastname) as tool_builder_user_name,
    //                     {pre}user_info.ui_tool_builder_image,{pre}user_info.ui_tool_builder_image_path,
    //                     {pre}tool_builder.tool_builder_description';

    //     $params['joins'][] = $this->join_user_info();                        
    //     $params['joins'][] = $this->join_user("LEFT");
    //     $params['where']['{pre}user.user_type'] = RIDER_TYPE;
    //     return $this->find_all_active($params);
    // }


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

    * list_data         For dropdown etc, data in key-value pair that will populate dropdown 
    *                   -----USED IN ADMIN_CONTROLLER AND admin's database.php
    * list_data_key     For dropdown etc, if you want to define list_data in CONTROLLER (public _list_data[$key]) list_data_key is the $key which identifies it
    *                   -----Incase list_data_key is not defined, it will look for field_name as a $key
    *                   -----USED IN ADMIN_CONTROLLER AND admin's database.php
    */
    public function get_fields( $specific_field = "" )
    {

        $fields = array(
        
              'tool_builder_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

                'tool_builder_user_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_user_id',
                     'label'   => 'User ID',
                     'type'   => 'hidden',
                     'type_filter_dt'   => 'dropdown',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"10%"),
                     'js_rules'   => '',
                     'rules'   => 'trim|required'
                ),



                'tool_builder_step_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_step_id',
                     'label'   => 'Step ID',
                     'type'   => 'hidden',
                     'type_filter_dt'   => 'dropdown',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"10%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

              'tool_builder_officername' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_officername',
                     'label'   => 'Officer Name',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),
              
              'tool_builder_work' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_work',
                     'label'   => 'Work Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "tool_builder_status" ,
                     'list_data' => array(),
                     'default'   => '0',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),
                'tool_builder_apply_someone' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_apply_someone',
                'label' => 'Are You applying with someone?',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
             
               'tool_builder_trans' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_trans',
                'label' => 'Type Of Transaction',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),



               'tool_builder_fname' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_fname',
                'label' => 'First Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


            'tool_builder_midname' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_midname',
                'label' => 'Middle Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'tool_builder_lname' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_lname',
                'label' => 'Last Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
          
      

            'tool_builder_suffix' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_suffix',
                'label' => 'Suffix',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                'tool_builder_phone' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_phone',
                'label' => 'Phone Number',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
          
                'tool_builder_marital_status' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_marital_status',
                'label' => 'Marital Status',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
      
                'tool_builder_military' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_military',
                     'label'   => 'Military Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "tool_builder_status" ,
                     'list_data' => array(),
                     'default'   => '0',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),

             'tool_builder_address' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_address',
                'label' => 'Current Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

   'tool_builder_mail_add' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_mail_add',
                'label' => 'Mailing Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

      'tool_builder_citizen' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_citizen',
                'label' => 'Citizen',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

    'tool_builder_co_mail_add' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_co_mail_add',
                'label' => 'Co-applicant Mailing Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


                'tool_builder_property_value' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_property_value',
                 'label'   => 'Property Value',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 

                 'tool_builder_cash_out' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_cash_out',
                     'label'   => 'Cash Out Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "tool_builder_status" ,
                     'list_data' => array(),
                     'default'   => '0',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),


      'tool_builder_cash_amount' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_cash_amount',
                 'label'   => 'Cash Amount',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 

     'tool_builder_tool_builder_value' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_tool_builder_value',
                 'label'   => 'tool_builder Amount',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 

     //


        'tool_builder_co_applicantfname' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_co_applicantfname',
                'label' => 'Co-Applicant First Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


            'tool_builder_co_applicantmidname' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_co_applicantmidname',
                'label' => 'Co-Applicant Middle Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'tool_builder_co_applicantlname' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_co_applicantlname',
                'label' => 'Co-Applicant Last Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
          
      

            'tool_builder_co_applicantsuffix' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_co_applicantsuffix',
                'label' => 'Co-Applicant Suffix',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                   'tool_builder_co_applicantemail' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_co_applicantemail',
                     'label'   => 'Co-Applicant Email',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'valid_email|strtolower|trim|htmlentities'
                  ),


                'tool_builder_co_applicantphone' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_co_applicantphone',
                'label' => 'Co-Applicant Phone Number',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
          
                'tool_builder_co_applicantmarital_status' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_co_applicantmarital_status',
                'label' => 'Co-Applicant Marital Status',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
      
           'tool_builder_co_applicantmilitary_status' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_co_applicantmilitary_status',
                'label' => 'Co-Applicant Military Status',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
      
         'tool_builder_personal_status' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_personal_status',
                'label' => 'Personal Military Status',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
      
                'tool_builder_co_applicantmilitary' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_co_applicantmilitary',
                     'label'   => 'Co-Applicant Military Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "tool_builder_status" ,
                     'list_data' => array(),
                     'default'   => '0',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),
                 'tool_builder_co_applicantvatool_builder' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_co_applicantvatool_builder',
                     'label'   => 'Co-Applicant VA tool_builder',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "tool_builder_status" ,
                     'list_data' => array(),
                     'default'   => '1',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),

  'tool_builder_personalvatool_builder' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_personalvatool_builder',
                     'label'   => 'Personal VA tool_builder',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "tool_builder_status" ,
                     'list_data' => array(),
                     'default'   => '1',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),

             'tool_builder_co_applicantlive' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_co_applicantlive',
                     'label'   => 'Co-Applicant Live Person Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "tool_builder_status" ,
                     'list_data' => array(),
                     'default'   => '0',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),

             'tool_builder_co_applicantaddress' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_co_applicantaddress',
                'label' => 'Co-Applicant Current Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),





     //


                'tool_builder_property_type' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_property_type',
                'label' => 'Property Type',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

            

                'tool_builder_property_use' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_property_use',
                'label' => 'Property Use',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                'tool_builder_property_county' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_property_county',
                'label' => 'Property County',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                //
                'tool_builder_purchase_price' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_purchase_price',
                 'label'   => 'Purchase Price',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 

          'tool_builder_down_payment' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_down_payment',
                 'label'   => 'Down Payment',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 

                 'tool_builder_down_payment_gift' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_down_payment_gift',
                     'label'   => 'Down Payment Gift',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "tool_builder_status" ,
                     'list_data' => array(),
                     'default'   => '0',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),
                  
                  //
                   'tool_builder_real_state_agent' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_real_state_agent',
                     'label'   => 'Real State Agent',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "tool_builder_status" ,
                     'list_data' => array(),
                     'default'   => '0',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),


        'tool_builder_refer_name' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_refer_name',
                'label' => 'Referring Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


               'tool_builder_work_some' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_work_some',
                'label' => 'Working with Someone',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),



            'tool_builder_agent_fname' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_agent_fname',
                'label' => 'Agent First Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),



            'tool_builder_personal_tool_builder_status' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_personal_tool_builder_status',
                'label' => 'Personal VA tool_builder',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'tool_builder_agent_lname' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_agent_lname',
                'label' => 'Agent Last Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

 'tool_builder_agent_phone' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_agent_phone',
                'label' => 'Agent Phone Number',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

         'tool_builder_agent_email' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_agent_email',
                     'label'   => 'Agent Email',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'valid_email|strtolower|trim|htmlentities'
                  ),


//
         'tool_builder_dateof_birth' => array(
                    'table'   => $this->_table,
                    'name'   => 'tool_builder_dateof_birth',
                    'label'   => 'Date Of Birth',
                    'type'   => 'date',
                    'attributes'   => array(),
                    'js_rules'   => '',
                    'rules'   => 'trim|htmlentities'
                ),

            'tool_builder_security_number' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_security_number',
                'label' => 'tool_builder Security Number',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


       'tool_builder_finance_institute' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_finance_institute',
                'label' => 'Finance Institute',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

          'tool_builder_property_address' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_property_address',
                'label' => 'Property Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


//Last step-twentytwo


                    'tool_builder_judgments' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_judgments',
                     'label'   => 'tool_builder Judgement',
                     'type'   => 'text',
                     'attributes'   => array(),
                      'js_rules' => '',
                     'rules'   => 'trim'
                  ),

          'tool_builder_bankruptcy' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_bankruptcy',
                     'label'   => 'tool_builder Bankruptcy',
                     'type'   => 'text',
                     'attributes'   => array(),
                    'js_rules' => '',
                     'rules'   => 'trim'
                  ),


          'tool_builder_foreclosed' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_foreclosed',
                     'label'   => 'tool_builder ForceClosed',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules' => '',
                     'rules'   => 'trim'
                  ),


          'tool_builder_lawsuit' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_lawsuit',
                     'label'   => 'tool_builder Lawsuit',
                     'type'   => 'text',
                
                     'attributes'   => array(),
                      'js_rules' => '',
                     'rules'   => 'trim'
                  ),

          'tool_builder_transfer_of_title' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_transfer_of_title',
                     'label'   => 'tool_builder Transfer Of Title',
                     'type'   => 'text',
                     
                     'attributes'   => array(),
                     'js_rules' => '',
                     'rules'   => 'trim'
                  ),

          'tool_builder_financial_obligation' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_financial_obligation',
                     'label'   => 'Financial Obligation',
                     'type'   => 'text',
                    
                     'attributes'   => array(),
                    'js_rules' => '',
                     'rules'   => 'trim'
                  ),

          'tool_builder_child_support' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_child_support',
                     'label'   => 'tool_builder Child Support',
                     'type'   => 'text',
                    
                     'attributes'   => array(),
                     'js_rules' => '',
                     'rules'   => 'trim'
                  ),

          'tool_builder_payment_borrowed' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_payment_borrowed',
                     'label'   => 'Payment Borrowed',
                     'type'   => 'text',
                    
                     'attributes'   => array(),
                    'js_rules' => '',
                     'rules'   => 'trim'
                  ),

          'tool_builder_co_maker' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_co_maker',
                     'label'   => 'tool_builder Co-Maker',
                     'type'   => 'text',
                    
                     'attributes'   => array(),
                     'js_rules' => '',
                     'rules'   => 'trim'
                  ),
//



                'tool_builder_sex' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_sex',
                'label' => 'Sex',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


                'tool_builder_same' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_same',
                'label' => 'Mailing Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                'tool_builder_terms' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_terms',
                'label' => 'Accept<br /> Term & Condition?',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


                'tool_builder_ethnicity' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_ethnicity',
                'label' => 'Ethnicity',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
          

                'tool_builder_hispanic' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_hispanic',
                'label' => 'Hispanic',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
          

                'tool_builder_wish' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_wish',
                'label' => 'Wish',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                //next
                   'tool_builder_american' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_american',
                'label' => 'American',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
                'tool_builder_asian' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_asian',
                'label' => 'Asian',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
             

             'tool_builder_black' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_black',
                'label' => 'Black or African',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
             

             'tool_builder_native' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_native',
                'label' => 'Native',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
                
                'tool_builder_white' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_white',
                'label' => 'White',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


                'tool_builder_move_date' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_move_date',
                'label' => 'Move Date',
                'type' => 'date',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
       
          
          

                'tool_builder_rent_free' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_rent_free',
                'label' => 'Rent Free',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


            'tool_builder_own_property' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_own_property',
                'label' => 'Owned Property',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


                'tool_builder_education' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_education',
                'label' => 'Education',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                'tool_builder_dependents' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_dependents',
                'label' => 'Dependents',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


                'tool_builder_credit_score' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_credit_score',
                'label' => 'Credit Score',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
       
             'tool_builder_file1' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_file1',
                'label' => 'File',
                'name_path' => 'tool_builder_image_path',
                'upload_config' => 'site_upload_tool_builder',
                'type' => 'customfileupload',
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    //'image_size_recommended'=>'1583px × 301px',
                    'allow_ext'=>'doc|docx|pdf'
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
               
            ),


               // 'tool_builder_file1' => array(
               //                'table' => $this->_table,
               //                'name' => 'tool_builder_file1',
               //                'label' => 'File',
               //                'name_path' => 'tool_builder_image_path',
               //                'upload_config' => 'site_upload_tool_builder',
               //                'type' => 'fileupload',
               //                 'type_dt' => 'image',
               //                'randomize' => true,
               //                'preview' => 'true',
               //                'attributes'   => array(
               //                    // 'image_size_recommended'=>'1349px × 745px ',
               //                    'allow_ext'=>'doc|docx|pdf',
               //                ),
               //                'dt_attributes' => array("width" => "10%"),
               //                'rules' => 'trim|htmlentities',
               //                 'js_rules'=>""
               //    ),

                 'tool_builder_file2' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file2',
                              'label' => 'File 2',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),

                   'tool_builder_file3' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file3',
                              'label' => 'File 3',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),

                   //
                           'tool_builder_file4' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file4',
                              'label' => 'File 4',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),
    
            'tool_builder_file5' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file5',
                              'label' => 'File 5',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),
    
            'tool_builder_file6' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file6',
                              'label' => 'File 6',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),
            'tool_builder_file7' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file7',
                              'label' => 'File 7',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),
            'tool_builder_file8' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file8',
                              'label' => 'File 8',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),
            'tool_builder_file9' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file9',
                              'label' => 'File 9',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),
            'tool_builder_file10' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file10',
                              'label' => 'File 10',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),
            'tool_builder_file11' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file11',
                              'label' => 'File 11',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),
            'tool_builder_file12' => array(
                              'table' => $this->_table,
                              'name' => 'tool_builder_file12',
                              'label' => 'File 12',
                              'name_path' => 'tool_builder_image_path',
                              'upload_config' => 'site_upload_tool_builder',
                              'type' => 'customfileupload',
                               'type_dt' => 'image',
                              'randomize' => true,
                              'preview' => 'true',
                              'attributes'   => array(
                                  // 'image_size_recommended'=>'1349px × 745px ',
                                  'allow_ext'=>'doc|docx|pdf',
                              ),
                              'dt_attributes' => array("width" => "10%"),
                              'rules' => 'trim|htmlentities',
                               'js_rules'=>""
                  ),


            /**/


              'tool_builder_emp_name' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_emp_name',
                     'label'   => 'Employer Name',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),

                    'tool_builder_emp_address' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_emp_address',
                     'label'   => 'Employer Address',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),

                    'tool_builder_emp_phone' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_emp_phone',
                     'label'   => 'Employer Corporate Phone Number',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),

                    'tool_builder_emp_start_date' => array(
                    'table'   => $this->_table,
                    'name'   => 'tool_builder_emp_start_date',
                    'label'   => 'Start Date',
                    'type'   => 'date',
                    'attributes'   => array(),
                    'js_rules'   => '',
                    'rules'   => 'trim|htmlentities'
                ),  

                'tool_builder_emp_job' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_emp_job',
                     'label'   => 'Job Title',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),

                    'tool_builder_emp_year' => array(
                     'table'   => $this->_table,
                     'name'   => 'tool_builder_emp_year',
                     'label'   => 'Years in Profession',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),

              'tool_builder_pay_type' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_pay_type',
                'label' => 'Pay Type',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
           


      'tool_builder_hour_rate' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_hour_rate',
                 'label'   => 'Hourly Rate',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 
            

              'tool_builder_hour_week' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_hour_week',
                'label' => '# Hours / Week',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                'tool_builder_annual_overtime' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_annual_overtime',
                 'label'   => 'Annual Overtime',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 


                'tool_builder_annual_bonus' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_annual_bonus',
                 'label'   => 'Annual Bonus',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 

              'tool_builder_annual_commission' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_annual_commission',
                 'label'   => 'Annual Commission',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 
            



            /**/

           
              'tool_builder_real_property_type' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_real_property_type',
                'label' => 'Property Type',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


              'tool_builder_real_property_address' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_real_property_address',
                'label' => 'Property Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

              'tool_builder_real_value' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_real_value',
                 'label'   => 'Property Value',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 
              


              'tool_builder_real_current' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_real_current',
                'label' => 'Currently Use This Property',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


           
              'tool_builder_real_trans' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_real_trans',
                'label' => 'Real Transaction',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),


           
              'tool_builder_real_rental' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_real_rental',
                'label' => 'Rental Income',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

            
              'tool_builder_real_month' => array(
                 'table'   => $this->_table,
                 'name'   => 'tool_builder_real_month',
                 'label'   => 'Monthly Rent',
                 'type'   => 'text',
                 'attributes'   => array(),
                 'js_rules'   => '',
                 'rules'=>'trim|htmlentities|min_length[1]|regex_match[/^[\d\(\)\.+ ]+$/]'
              ), 
              
            'tool_builder_real_mortgages' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_real_mortgages',
                'label' => 'Mortgages',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                'tool_builder_bank_account_type' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_bank_account_type',
                'label' => 'Account Type',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

                'tool_builder_account_balance' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_account_balance',
                'label' => 'Account Balance',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),    

            /**/

             'tool_builder_reason' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_reason',
                'label' => 'Reason',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

             'tool_builder_approval_status' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_approval_status',
                'label' => 'Approval Status',
                'type' => 'switch',
                'default' => '0',
                'attributes' => array(),
                'rules' => 'trim'
            ),

           'tool_builder_status' => array(
                'table' => $this->_table,
                'name' => 'tool_builder_status',
                'label' => 'Status?',
                'type' => 'switch',
                'default' => '1',
                'attributes' => array(),
                'rules' => 'trim'
            ),

              
              
              
            );
        
        if($specific_field)
            return $fields[ $specific_field ];
        else
            return $fields;
    }

}
?>
<?
class Model_tool_builder_lts extends MY_Model {
    /**
     * tool_builder MODEL
     *
     * @package     tool_builder Model
     * @author      
     * @version     2.0
     * @since       2016 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'tool_builder_lts';
    protected $_field_prefix    = 'toolb_lts_';
    protected $_pk    = 'toolb_lts_id';
    protected $_status_field    = 'toolb_lts_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model construtool_builderr
        $this->pagination_params['fields'] = "toolb_lts_id,toolb_lts_user_id,toolb_lts_identify_parties,toolb_lts_jv_comp_obligations,toolb_lts_approval_status,toolb_lts_status";
        
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
        
              'toolb_lts_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'toolb_lts_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

                'toolb_lts_user_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'toolb_lts_user_id',
                     'label'   => 'User ID',
                     'type'   => 'hidden',
                     'type_filter_dt'   => 'dropdown',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"10%"),
                     'js_rules'   => '',
                     'rules'   => 'trim|required'
                ),



                'toolb_lts_step_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'toolb_lts_step_id',
                     'label'   => 'Step ID',
                     'type'   => 'hidden',
                     'type_filter_dt'   => 'dropdown',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"10%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

              'toolb_lts_identify_parties' => array(
                     'table'   => $this->_table,
                     'name'   => 'toolb_lts_identify_parties',
                     'label'   => 'Identify the Parties',
                     'type'   => 'textarea',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'trim|htmlentities'
                  ),
         
                'toolb_lts_jv_comp_obligations' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_jv_comp_obligations',
                'label' => 'Will the JV Company also have obligations',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
             
            // thtere

            'toolb_lts_business_jv_company' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_business_jv_company',
                'label' => 'toolb_lts_business_jv_company',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_likely_turnover' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_likely_turnover',
                'label' => 'toolb_lts_likely_turnover',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_regulatory_consents' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_regulatory_consents',
                'label' => 'toolb_lts_regulatory_consents',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_business_based' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_business_based',
                'label' => 'toolb_lts_business_based',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_regulatory_approvals' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_regulatory_approvals',
                'label' => 'toolb_lts_regulatory_approvals',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_regulatory_approvals_overseas_jurisdictions' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_regulatory_approvals_overseas_jurisdictions',
                'label' => 'toolb_lts_regulatory_approvals_overseas_jurisdictions',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_collective_investment_scheme' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_collective_investment_scheme',
                'label' => 'toolb_lts_collective_investment_scheme',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_regulatory_enquiry' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_regulatory_enquiry',
                'label' => 'toolb_lts_regulatory_enquiry',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_structure_settingup_jv_company' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_structure_settingup_jv_company',
                'label' => 'toolb_lts_structure_settingup_jv_company',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_legal_form_of_jv_company' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_legal_form_of_jv_company',
                'label' => 'toolb_lts_legal_form_of_jv_company',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_jv_company_established' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_jv_company_established',
                'label' => 'toolb_lts_jv_company_established',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_formalities_required_establishing' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_formalities_required_establishing',
                'label' => 'toolb_lts_formalities_required_establishing',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_applicable_tax_considerations' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_applicable_tax_considerations',
                'label' => 'toolb_lts_applicable_tax_considerations',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_financing_jv_company' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_financing_jv_company',
                'label' => 'toolb_lts_financing_jv_company',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_unding_through_debt_rather_than_equity' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_unding_through_debt_rather_than_equity',
                'label' => 'toolb_lts_unding_through_debt_rather_than_equity',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_party_funding_required_banks_security' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_party_funding_required_banks_security',
                'label' => 'toolb_lts_party_funding_required_banks_security',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_continuing_funding_requirements' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_continuing_funding_requirements',
                'label' => 'toolb_lts_continuing_funding_requirements',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_parties_defaults' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_parties_defaults',
                'label' => 'toolb_lts_parties_defaults',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_contribution_assets' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_contribution_assets',
                'label' => 'toolb_lts_contribution_assets',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_assets_need_to_valued' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_assets_need_to_valued',
                'label' => 'toolb_lts_assets_need_to_valued',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_assets_be_contributed' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_assets_be_contributed',
                'label' => 'toolb_lts_assets_be_contributed',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_competition_restrictions' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_competition_restrictions',
                'label' => 'toolb_lts_competition_restrictions',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_soliciting_customers_employees' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_soliciting_customers_employees',
                'label' => 'toolb_lts_soliciting_customers_employees',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_purposes_of_such_restrictions' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_purposes_of_such_restrictions',
                'label' => 'toolb_lts_purposes_of_such_restrictions',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_business_to_the_joint_venture' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_business_to_the_joint_venture',
                'label' => 'toolb_lts_business_to_the_joint_venture',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_purposes_of_such_restrictions2' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_purposes_of_such_restrictions2',
                'label' => 'toolb_lts_purposes_of_such_restrictions2',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_board_of_directors' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_board_of_directors',
                'label' => 'toolb_lts_board_of_directors',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_general_manager_ceo_appointed' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_general_manager_ceo_appointed',
                'label' => 'toolb_lts_general_manager_ceo_appointed',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_shareholder_board_management_matters' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_shareholder_board_management_matters',
                'label' => 'toolb_lts_shareholder_board_management_matters',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_conflict_situations' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_conflict_situations',
                'label' => 'toolb_lts_conflict_situations',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_ownership_jv_company' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_ownership_jv_company',
                'label' => 'toolb_lts_ownership_jv_company',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_shareholder_meetings' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_shareholder_meetings',
                'label' => 'toolb_lts_shareholder_meetings',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_locations_for_shareholders_meetings' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_locations_for_shareholders_meetings',
                'label' => 'toolb_lts_locations_for_shareholders_meetings',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_minority_protection' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_minority_protection',
                'label' => 'toolb_lts_minority_protection',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_rights_attaching_to_shares' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_rights_attaching_to_shares',
                'label' => 'toolb_lts_rights_attaching_to_shares',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_matters_for_decision' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_matters_for_decision',
                'label' => 'toolb_lts_matters_for_decision',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_if_minority_rights' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_if_minority_rights',
                'label' => 'toolb_lts_if_minority_rights',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_transfer_of_Shares' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_transfer_of_Shares',
                'label' => 'toolb_lts_transfer_of_Shares',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_shares_be_valued' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_shares_be_valued',
                'label' => 'toolb_lts_shares_be_valued',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_new_shareholder_be_required' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_new_shareholder_be_required',
                'label' => 'toolb_lts_new_shareholder_be_required',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_joint_ventures_name' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_joint_ventures_name',
                'label' => 'toolb_lts_joint_ventures_name',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_leaving_shareholder' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_leaving_shareholder',
                'label' => 'toolb_lts_leaving_shareholder',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_monies_owed_to_the_JV_Company' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_monies_owed_to_the_JV_Company',
                'label' => 'toolb_lts_monies_owed_to_the_JV_Company',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_key_Person_arrangements' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_key_Person_arrangements',
                'label' => 'toolb_lts_key_Person_arrangements',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_change_in_control_of_shareholder' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_change_in_control_of_shareholder',
                'label' => 'toolb_lts_change_in_control_of_shareholder',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_breach_of_undertakings' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_breach_of_undertakings',
                'label' => 'toolb_lts_breach_of_undertakings',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_death_of_shareholder' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_death_of_shareholder',
                'label' => 'toolb_lts_death_of_shareholder',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_deadlock' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_deadlock',
                'label' => 'toolb_lts_deadlock',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_deadlock_issues_resolved' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_deadlock_issues_resolved',
                'label' => 'toolb_lts_deadlock_issues_resolved',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cooling_off' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cooling_off',
                'label' => 'toolb_lts_cooling_off',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_if_deadlock_occurs' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_if_deadlock_occurs',
                'label' => 'toolb_lts_if_deadlock_occurs',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_continuous_business_involvement_jv_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_continuous_business_involvement_jv_parties',
                'label' => 'toolb_lts_continuous_business_involvement_jv_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_continuing_trading_arrangements' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_continuing_trading_arrangements',
                'label' => 'toolb_lts_continuing_trading_arrangements',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_flow_of_information' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_flow_of_information',
                'label' => 'toolb_lts_flow_of_information',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_employees' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_employees',
                'label' => 'toolb_lts_employees',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_consider_the_management_structure' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_consider_the_management_structure',
                'label' => 'toolb_lts_consider_the_management_structure',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_consider_share_option' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_consider_share_option',
                'label' => 'toolb_lts_consider_share_option',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_pension_arrangements' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_pension_arrangements',
                'label' => 'toolb_lts_pension_arrangements',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),
            'toolb_lts_cost_be_borne_by_the_parties' => array(
                'table' => $this->_table,
                'name' => '	toolb_lts_cost_be_borne_by_the_parties',
                'label' => 'toolb_lts_cost_be_borne_by_the_parties',
                'type' => 'textarea',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
            ),

            // thtere
             'toolb_lts_approval_status' => array(
                'table' => $this->_table,
                'name' => 'toolb_lts_approval_status',
                'label' => 'Approval Status',
                'type' => 'switch',
                'default' => '0',
                'attributes' => array(),
                'rules' => 'trim'
            ),

           'toolb_lts_status' => array(
                'table' => $this->_table,
                'name' => 'toolb_lts_status',
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
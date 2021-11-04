<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends MY_Controller {

	/**
	 * Contact US Controller
	 */
	
	public function __construct()
    {
    	// Call the Model constructor latest_product
        parent::__construct();
    }

        public function quiz_instruction($token="",$course_id,$order_item_id)
      {
        global $config;
        if ($this->userid < 1) {
          redirect("?msgtype=error&msg=Please Login First");   
        }

        if (md5($course_id.$order_item_id) != $token) {
         redirect("?msgtype=error&msg=Invalid Try");    
        }

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;

        $data['token'] = (md5($this->userid.$course_id.$order_item_id));
        $data['course_id'] = $course_id;
        $data['order_item_id'] = $order_item_id;

        $this->load_view("quiz_instruction",$data);
      }



      public function quiz($token="",$course_id,$order_item_id)
      {
        global $config;
        if ($this->userid < 1) {
          redirect("?msgtype=error&msg=Please Login First");   
        }

        if (md5($this->userid.$course_id.$order_item_id) != $token) {
         redirect("?msgtype=error&msg=Invalid Try");    
        }

        $method_title = ucwords($this->uri->segment(1));
        $this->layout_data['title'] = g('db.admin.site_title')." | ".$method_title;


        $data['course_id'] = $course_id;
        $data['order_item_id'] = $order_item_id;

        $only['fields'] = "tutorial_name,course_quiz_time";
        $course = $this->model_tutorial->find_by_pk_active($course_id,false,$only);
        $data['course'] = $course;

        $param = array();
        $param['order'] = "RAND()";
        $data['questions'] = $this->model_questions->questions_with_options($course_id,$param);

  
        $this->load_view("quiz",$data);

      }

      public function ajax_quiz_evaluation()
      {
    
        $course = $this->input->post('course');
        $itemid = $this->input->post('itemid');

        $answer = $_POST['qs'];
        $marks = 0;
        $total = count($_POST['qs']);
        if (isset($answer) && array_filled($answer)) {
            foreach ($answer as $key => $value) {
                    
            $correct_ans = $this->model_questions_options->find_by_pk($value);
                if ($correct_ans['qo_correct_answer'] == 1) {
                    $marks++;
                }
            }
        }

        $percent = ($marks/$total) * 100;
        $percentage = number_format($percent,2);

        $param = array();
        $param['quiz_total'] = $total;
        $param['quiz_marks'] = $marks;
        $param['quiz_course_id'] = $course;
        $param['quiz_order_item_id'] = $itemid;
        $param['quiz_percentage'] = $percent;
        $param['quiz_user_id'] = $this->userid;
        $param['quiz_status'] = 1;
        $quiz_id = $this->model_quiz->insert_record($param);
      
    $param = array();
    $param['quiz_certificate_number'] = date("dmy").'-'.$this->userid.'-'.$quiz_id;
    $this->model_quiz->update_by_pk($quiz_id,$param);

      $passing_range = g('db.admin.passing_percentage'); //80

        if ($percent > $passing_range) {
            $url = l('quiz-success/').md5($this->userid.$quiz_id).'/'.$quiz_id;
        }else{
            $url = l('quiz-fail/').md5($this->userid.$quiz_id).'/'.$quiz_id;
        }

        $json_param['status'] = true;
        $json_param['url'] = $url;
        echo json_encode($json_param);
      }
    

      public function success($token="",$quizid="")
      {
        
        if ($this->userid < 1) {
          redirect("?msgtype=error&msg=Please Login First");   
        }


        //EVALUATION
        $ev = array();
        $ev['where']['evaluation_quiz_id'] = $quizid;
        $evaluated = $this->model_evaluation->find_one($ev);

        if (count($evaluated) < 1) {
          redirect(l('course-evaluation').'?quiz-id='.$quizid.'&record-id='.$token.'&msg=Please fill up Evaluation Form to proceed&msgtype=success');
        }
      
         $quiz = $this->model_quiz->find_by_pk($quizid);
         $data['quiz'] = $quiz;


        if (md5($quiz['quiz_user_id'].$quizid) != $token) {
         redirect("?msgtype=error&msg=Page not Found");    
        }

         $course = $this->model_tutorial->find_by_pk($quiz['quiz_course_id']);
         $data['course'] = $course;
          
          $call = $this->uri->segment(1);
          $data['call'] = $call;
    
          $pu = array();
          $pu['fields'] = "user_firstname,user_lastname";
          $user_data = $this->model_user->find_by_pk($this->userid,false,$pu);
          $data['user_data'] = $user_data;

      //CERTIFICATE VARIABLES
      // $data['completion_date'] = csl_date($quiz['quiz_createdon'],'d-m-Y');
      // $data['certificate_number']  = $quiz['quiz_certificate_number'];
      // $data['course_title'] = $course['course_name'];
      // $data['course_tracking_number'] = $course['course_identity'];
      // $data['username'] = $user_data['user_firstname'].' '.$user_data['user_lastname'];
      // $data['ce_provider'] = '110221021';


         $this->load_view("success",$data);
      }

      public function fail($token="",$quizid="")
      {
        if ($this->userid < 1) {
          redirect("?msgtype=error&msg=Please Login First");   
        }

        if (md5($this->userid.$quizid) != $token) {
         redirect("?msgtype=error&msg=Page not Found");    
        }

         $quiz = $this->model_quiz->find_by_pk($quizid);
         $data['quiz'] = $quiz;

         $data['course'] = $this->model_tutorial->find_by_pk($quiz['quiz_course_id']);

         $this->load_view("fail",$data);
      }
    
     public function pdf_convert($quizid='',$view=0){
      $view =1;

    if (intval($quizid) && intval($quizid) > 0 && $_GET['id'] == md5($quizid)) {
      
    $this->layout_data['template_config']['show_toolbar'] = false ;
      
    $logodata = $this->model_logo->find_by_pk(1);
    $logo = Links::img($logodata['logo_image_path'],$logodata['logo_image']);
    // $data['logo'] = g('dirname').$logodata['logo_image_path'].$logodata['logo_image'];

    $quiz = $this->model_quiz->find_by_pk($quizid);
    $course = $this->model_tutorial->find_by_pk($quiz['quiz_course_id']);

    $pu = array();
    $pu['fields'] = "user_firstname,user_lastname";
    $user_data = $this->model_user->find_by_pk($this->userid,false,$pu);

    //CERTIFICATE VARIABLES
      $data['completion_date'] = csl_date($quiz['quiz_createdon'],'d-m-Y');
      $data['certificate_number']  = $quiz['quiz_certificate_number'];
      $data['course_title'] = $course['tutorial_name'];
      $data['course_tracking_number'] = $course['tutorial_identity'];
      $data['username'] = $user_data['user_firstname'].' '.$user_data['user_lastname'];
      $data['ce_provider'] = '110221021';
      
      $data['certificate'] = g('dirname').'assets/front_assets/images/certificate_pdf.jpg';    //for PDF

      // $data['certificate'] = l('').'assets/front_assets/images/certificate_pdf.jpg';
  
  
  $this->load->view("widgets/pdf_html",$data);

      // // Get output html
   $html = $this->output->get_output();
   // debug($html , 1);

    // Load library
    $this->load->library('dompdf_gen');
  
    // $dompdf = new Dompdf();
    //     $options = $dompdf->getOptions();
    //     $options->set(array('isRemoteEnabled' => true));
    //     $dompdf->setOptions($options);
    //     $dompdf->loadHtml($html);
        
    // Convert to PDF
    $this->dompdf->load_html($html);
    //$paper_size = array(0,0,1050.72,800);
    // $paper_size = array(0,0,1050.72,841.42);
    //$this->dompdf->set_paper($paper_size);
    $this->dompdf->set_paper('A4', 'portrait');
    $this->dompdf->render();

    // if(isset($_GET['view']) AND ($_GET['view'] == 1)) { // just view certificates
    if(isset($view) AND ($view == 1)) { // just view certificates
      $this->dompdf->stream("{$filename}.pdf", array("Attachment" => false));
      exit(0);
    }
    else{ // download certificates
      $this->dompdf->stream("{$filename}.pdf");
    }

    }else{
      redirect('404_override');
    } 

    }


    

    public function cashflow()
    {  
      

      if ($this->userid < 1) {
        redirect("?msgtype=error&msg=Please Login First");   
      }

      else{
      
      $file = APPPATH.'third_party/PHPExcel/finance/test4.xlsx';

 
       $this->load->library('excel');
       $this->load->library('PHPExcel');
  

      $param=array();
      $param['where']['tool_builder_user_id']=$this->userid; 
      $employee_data = $this->model_tool_builder_fm_dcvm->find_one_active($param);
   

      $inputFileType = 'Excel2007';
      $inputFileName = $file;
  
      $objReader = PHPExcel_IOFactory::createReader($inputFileType);
      $objPHPExcelReader = $objReader->load($inputFileName);
  
      $loadedSheetNames = $objPHPExcelReader->getSheetNames();

      $objPHPExcelReader->getActiveSheet()->setCellValue('B4', $employee_data['tool_builder_growth_rate']);

      $objPHPExcelReader->getActiveSheet()->setCellValue('C5', $employee_data['tool_builder_net_profit']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('D5', $employee_data['tool_builder_net_profit_year_2']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('E5', $employee_data['tool_builder_net_profit_year_3']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('F5', $employee_data['tool_builder_net_profit_year_4']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('G5', $employee_data['tool_builder_net_profit_year_5']);

      $objPHPExcelReader->getActiveSheet()->setCellValue('C8', $employee_data['tool_builder_discount_rate']);

      
      // $objPHPExcelReader->getActiveSheet()->setCellValue('C10', $employee_data['tool_builder_discount_rate_year_1']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('D10', $employee_data['tool_builder_discount_rate_year_2']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('E10', $employee_data['tool_builder_discount_rate_year_3']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('F10', $employee_data['tool_builder_discount_rate_year_4']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('G10', $employee_data['tool_builder_discount_rate_year_5']);

      // $objPHPExcelReader->getActiveSheet()->setCellValue('H11', $employee_data['tool_builder_dcf_value']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('B12', $employee_data['tool_builder_currency']);
  
      $object_writer = PHPExcel_IOFactory::createWriter($objPHPExcelReader, 'Excel2007');
      
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="Discounted Cash Flow Valuation.xlsx"');
  
      $object_writer->save('php://output');

      }
 


     }


     public function balance()
    {  
      

      if ($this->userid < 1) {
        redirect("?msgtype=error&msg=Please Login First");   
      }

      else{
      $file = APPPATH.'third_party/PHPExcel/finance/test3.xlsx';
    
       $this->load->library('excel');
       $this->load->library('PHPExcel');
  

      $param=array();
      $param['where']['tool_builder_user_id']=$this->userid; 
      $employee_data = $this->model_tool_builder_fm_bss->find_one_active($param);
      //debug($employee_data);
      // $toolurl= l('account/profile/tools_fm_bss?cat=21');
      // if (empty($employee_data)) {
      //   // header('Location:'.$toolurl);

      //   echo '<script type="text/javascript">'; 
      //   echo 'alert("Fill out the ToolBuilder First To download the Document");';
      //   echo 'window.location.href = "'.l('account/profile/tools_fm_bss?cat=21').'";';
      //   echo '</script>';

      //   // header('Location:'.$toolurl);

      // } else {
     


      $inputFileType = 'Excel2007';
      $inputFileName = $file;
  
      $objReader = PHPExcel_IOFactory::createReader($inputFileType);
      $objPHPExcelReader = $objReader->load($inputFileName);
  
      $loadedSheetNames = $objPHPExcelReader->getSheetNames();

      $objPHPExcelReader->getActiveSheet()->setCellValue('G1', $employee_data['tool_builder_currency']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C4', $employee_data['tool_builder_cash']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C5', $employee_data['tool_builder_accounts_receivable']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C6', $employee_data['tool_builder_inventory']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C7', $employee_data['tool_builder_prepaid_expenses']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C8', $employee_data['tool_builder_short_term']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('C9', $employee_data['tool_builder_total_current_assets']);

      $objPHPExcelReader->getActiveSheet()->setCellValue('C12', $employee_data['tool_builder_long_term']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C13', $employee_data['tool_builder_property_planted']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C14', $employee_data['tool_builder_less_accumulated']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C15', $employee_data['tool_builder_intangible_assets']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('C16', $employee_data['tool_builder_total_fixed_assets']);


      $objPHPExcelReader->getActiveSheet()->setCellValue('C19', $employee_data['tool_builder_deffered_income']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('B20', $employee_data['tool_builder_other_assets_1']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C20', $employee_data['tool_builder_other_assets_2']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('B21', $employee_data['tool_builder_other_assets_3']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('C21', $employee_data['tool_builder_other_assets_4']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('C22', $employee_data['tool_builder_total_other_assets']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('C24', $employee_data['tool_builder_total_assets']);

      $objPHPExcelReader->getActiveSheet()->setCellValue('G4', $employee_data['tool_builder_accounts_payable']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G5', $employee_data['tool_builder_short_term_loans']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G6', $employee_data['tool_builder_taxes_payable']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G7', $employee_data['tool_builder_accrued_salaries']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G8', $employee_data['tool_builder_unearned_revenue']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G9', $employee_data['tool_builder_current_portion']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('F10', $employee_data['tool_builder_other_current_liabilities_1']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G10', $employee_data['tool_builder_other_current_liabilities_2']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('G10', $employee_data['tool_builder_total_current_liabilities']);
     
     
     
      $objPHPExcelReader->getActiveSheet()->setCellValue('G14', $employee_data['tool_builder_long_term_debt']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G15', $employee_data['tool_builder_deffered_income_tax']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('F16', $employee_data['tool_builder_other_long_term_liabilities_1']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G16', $employee_data['tool_builder_other_long_term_liabilities_2']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('G16', $employee_data['tool_builder_total_long_term_liabilities']);

      $objPHPExcelReader->getActiveSheet()->setCellValue('G20', $employee_data['tool_builder_owners_investment']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G21', $employee_data['tool_builder_retained_earnings']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('F22', $employee_data['tool_builder_other_equity_1']);
      $objPHPExcelReader->getActiveSheet()->setCellValue('G22', $employee_data['tool_builder_other_equity_2']);
      // $objPHPExcelReader->getActiveSheet()->setCellValue('G22', $employee_data['tool_builder_total_owners_equity']);


      // $objPHPExcelReader->getActiveSheet()->setCellValue('G24', $employee_data['tool_builder_total_liabilities']);

      $object_writer = PHPExcel_IOFactory::createWriter($objPHPExcelReader, 'Excel2007');
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="Balance Sheet.xlsx"');
    
      $object_writer->save('php://output');

      }
    // }
 
     }



     
    

     public function breaked()
     {  
       
       if ($this->userid < 1) {
         redirect("?msgtype=error&msg=Please Login First");   
       }
 
       else{
       $file = APPPATH.'third_party/PHPExcel/finance/test5.xlsx';
     
        $this->load->library('excel');
        $this->load->library('PHPExcel');
   
       $param=array();
       $param['where']['tool_builder_user_id']=$this->userid; 
       $employee_data = $this->model_tool_builder_fm_beps->find_one_active($param);
     
       $inputFileType = 'Excel2007';
       $inputFileName = $file;
   
       $objReader = PHPExcel_IOFactory::createReader($inputFileType);
       $objPHPExcelReader = $objReader->load($inputFileName);
   
       $loadedSheetNames = $objPHPExcelReader->getSheetNames();

       $objPHPExcelReader->getActiveSheet()->setCellValue('G1', $employee_data['tool_builder_currency']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E2', $employee_data['tool_builder_price_per_unit']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('E3', $employee_data['tool_builder_x']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('E4', $employee_data['tool_builder_s']);
     
       $objPHPExcelReader->getActiveSheet()->setCellValue('F7', $employee_data['tool_builder_advertising']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('F8', $employee_data['tool_builder_accounting']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('F9', $employee_data['tool_builder_depreciation']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('F10', $employee_data['tool_builder_manufacturing']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('F11', $employee_data['tool_builder_payroll']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('F12', $employee_data['tool_builder_rent']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('F13', $employee_data['tool_builder_other']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('F14', $employee_data['tool_builder_other_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('F15', $employee_data['tool_builder_other_2']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('F16', $employee_data['tool_builder_total']);
      
       $objPHPExcelReader->getActiveSheet()->setCellValue('E20', $employee_data['tool_builder_cost_of_goods_sold']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E21', $employee_data['tool_builder_direct_labour']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E22', $employee_data['tool_builder_overhead']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E23', $employee_data['tool_builder_commisions']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('E24', $employee_data['tool_builder_total_1']);
 
          // $objPHPExcelReader->getActiveSheet()->setCellValue('F26', $employee_data['tool_builder_total_1']);
          // $objPHPExcelReader->getActiveSheet()->setCellValue('F27', $employee_data['tool_builder_cm']);
          // $objPHPExcelReader->getActiveSheet()->setCellValue('F28', $employee_data['tool_builder_cmr']);
         
          // $objPHPExcelReader->getActiveSheet()->setCellValue('F31', $employee_data['tool_builder_x']);
          // $objPHPExcelReader->getActiveSheet()->setCellValue('F32', $employee_data['tool_builder_s']);
      
    
       $object_writer = PHPExcel_IOFactory::createWriter($objPHPExcelReader, 'Excel2007');
       header('Content-Type: application/vnd.ms-excel');
       header('Content-Disposition: attachment;filename="Break Event Point.xlsx"');
 
       $object_writer->save('php://output');
 
       }
  
 
 
      }



     public function income()
     {  
       
 
       if ($this->userid < 1) {
         redirect("?msgtype=error&msg=Please Login First");   
       }
 
       else{
       $file = APPPATH.'third_party/PHPExcel/finance/test2.xlsx';
     
        $this->load->library('excel');
        $this->load->library('PHPExcel');
   
 
       $param=array();
       $param['where']['tool_builder_user_id']=$this->userid; 
       $employee_data = $this->model_tool_builder_fm_income->find_one_active($param);
     
       //debug($employee_data,1);
 
       $inputFileType = 'Excel2007';
       $inputFileName = $file;
   
       $objReader = PHPExcel_IOFactory::createReader($inputFileType);
       $objPHPExcelReader = $objReader->load($inputFileName);
   
       $loadedSheetNames = $objPHPExcelReader->getSheetNames();
 
       $objPHPExcelReader->getActiveSheet()->setCellValue('F1', $employee_data['tool_builder_currency']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C4', $employee_data['tool_builder_sales_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D4', $employee_data['tool_builder_sales_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E4', $employee_data['tool_builder_sales_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C5', $employee_data['tool_builder_returns_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D5', $employee_data['tool_builder_returns_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E5', $employee_data['tool_builder_returns_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C6', $employee_data['tool_builder_service_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D6', $employee_data['tool_builder_service_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E6', $employee_data['tool_builder_service_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C7', $employee_data['tool_builder_interest_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D7', $employee_data['tool_builder_interest_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E7', $employee_data['tool_builder_interest_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('B8', $employee_data['tool_builder_other_r_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C8', $employee_data['tool_builder_other_r_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D8', $employee_data['tool_builder_other_r_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E8', $employee_data['tool_builder_other_r_4']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('C9', $employee_data['total_revenues_year_1']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('D9', $employee_data['total_revenues_year_2']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('E9', $employee_data['total_revenues_year_3']);



       $objPHPExcelReader->getActiveSheet()->setCellValue('C12', $employee_data['tool_builder_advertising_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D12', $employee_data['tool_builder_advertising_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E12', $employee_data['tool_builder_advertising_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C13', $employee_data['tool_builder_debt_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D13', $employee_data['tool_builder_debt_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E13', $employee_data['tool_builder_debt_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C14', $employee_data['tool_builder_commissions_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D14', $employee_data['tool_builder_commissions_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E14', $employee_data['tool_builder_commissions_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C15', $employee_data['tool_builder_goods_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D15', $employee_data['tool_builder_goods_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E15', $employee_data['tool_builder_goods_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C16', $employee_data['tool_builder_depreciation_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D16', $employee_data['tool_builder_depreciation_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E16', $employee_data['tool_builder_depreciation_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C17', $employee_data['tool_builder_benefits_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D17', $employee_data['tool_builder_benefits_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E17', $employee_data['tool_builder_benefits_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C18', $employee_data['tool_builder_equipment_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D18', $employee_data['tool_builder_equipment_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E18', $employee_data['tool_builder_equipment_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C19', $employee_data['tool_builder_insurance_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D19', $employee_data['tool_builder_insurance_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E19', $employee_data['tool_builder_insurance_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C20', $employee_data['tool_builder_expense_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D20', $employee_data['tool_builder_expense_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E20', $employee_data['tool_builder_expense_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C21', $employee_data['tool_builder_maintenance_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D21', $employee_data['tool_builder_maintenance_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E21', $employee_data['tool_builder_maintenance_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C22', $employee_data['tool_builder_supplies_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D22', $employee_data['tool_builder_supplies_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E22', $employee_data['tool_builder_supplies_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C23', $employee_data['tool_builder_payroll_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D23', $employee_data['tool_builder_payroll_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E23', $employee_data['tool_builder_payroll_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C24', $employee_data['tool_builder_rent_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D24', $employee_data['tool_builder_rent_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E24', $employee_data['tool_builder_rent_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C25', $employee_data['tool_builder_research_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D25', $employee_data['tool_builder_research_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E25', $employee_data['tool_builder_research_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C26', $employee_data['tool_builder_salaries_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D26', $employee_data['tool_builder_salaries_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E26', $employee_data['tool_builder_salaries_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C27', $employee_data['tool_builder_software_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D27', $employee_data['tool_builder_software_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E27', $employee_data['tool_builder_software_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C28', $employee_data['tool_builder_travel_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D28', $employee_data['tool_builder_travel_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E28', $employee_data['tool_builder_travel_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C29', $employee_data['tool_builder_utilities_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D29', $employee_data['tool_builder_utilities_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E29', $employee_data['tool_builder_utilities_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C30', $employee_data['tool_builder_hosting_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D30', $employee_data['tool_builder_hosting_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E30', $employee_data['tool_builder_hosting_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('B31', $employee_data['tool_builder_other_e_1']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('C31', $employee_data['tool_builder_other_e_2']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('D31', $employee_data['tool_builder_other_e_3']);
       $objPHPExcelReader->getActiveSheet()->setCellValue('E31', $employee_data['tool_builder_other_e_4']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('C32', $employee_data['total_expenses_year_1']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('D32', $employee_data['total_expenses_year_2']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('E32', $employee_data['total_expenses_year_3']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('C34', $employee_data['net_income_year_1']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('D34', $employee_data['net_income_year_2']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('E34', $employee_data['net_income_year_3']);

      //  $objPHPExcelReader->getActiveSheet()->setCellValue('C35', $employee_data['net_income_before_taxes_year_1']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('D35', $employee_data['net_income_before_taxes_year_2']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('E35', $employee_data['net_income_before_taxes_year_3']);

      //  $objPHPExcelReader->getActiveSheet()->setCellValue('C34', $employee_data['net_income_year_1']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('D34', $employee_data['net_income_year_2']);
      //  $objPHPExcelReader->getActiveSheet()->setCellValue('E34', $employee_data['net_income_year_3']);


       $object_writer = PHPExcel_IOFactory::createWriter($objPHPExcelReader, 'Excel2007');
       header('Content-Type: application/vnd.ms-excel');
       header('Content-Disposition: attachment;filename="Income Statement.xlsx"');
 
       $object_writer->save('php://output');
 
       }
  
 
 
      }


      public function cash()
      {  
      
        if ($this->userid < 1) {
          redirect("?msgtype=error&msg=Please Login First");   
        }
  
        else{
        $file = APPPATH.'third_party/PHPExcel/finance/test1.xlsx';
      
         $this->load->library('excel');
         $this->load->library('PHPExcel');
    
  
        $param=array();
        $param['where']['tool_builder_user_id']=$this->userid; 
        $employee_data = $this->model_tool_builder_fm_cfs->find_one_active($param);
        //debug($employee_data);
  
       
  
        $inputFileType = 'Excel2007';
        $inputFileName = $file;
    
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcelReader = $objReader->load($inputFileName);
    
        $loadedSheetNames = $objPHPExcelReader->getSheetNames();
        $objPHPExcelReader->getActiveSheet()->setCellValue('G1', $employee_data['tool_builder_currency']);

        $objPHPExcelReader->getActiveSheet()->setCellValue('C5', $employee_data['tool_builder_begin_current_period']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('D5',  $employee_data['tool_builder_end_current_period']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E5', $employee_data['tool_builder_begin_previous_period']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('F5', $employee_data['tool_builder_end_previous_period']);
  
        $objPHPExcelReader->getActiveSheet()->setCellValue('C7', $employee_data['tool_builder_cash_on_hand_1']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E7', $employee_data['tool_builder_cash_on_hand_2']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('G7', $employee_data['tool_builder_cash_on_hand_3']);

        
        $objPHPExcelReader->getActiveSheet()->setCellValue('C10', $employee_data['tool_builder_cash_sales_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E10', $employee_data['tool_builder_cash_sales_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G10', $employee_data['tool_builder_cash_sales_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C11', $employee_data['tool_builder_account_collection_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E11', $employee_data['tool_builder_account_collection_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G11', $employee_data['tool_builder_account_collection_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C12', $employee_data['tool_builder_cash_injection_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E12', $employee_data['tool_builder_cash_injection_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G12', $employee_data['tool_builder_cash_injection_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C13', $employee_data['tool_builder_interest_income_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E13', $employee_data['tool_builder_interest_income_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G13', $employee_data['tool_builder_interest_income_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C14', $employee_data['tool_builder_tax_refund_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E14', $employee_data['tool_builder_tax_refund_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G14', $employee_data['tool_builder_tax_refund_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C15', $employee_data['tool_builder_other_cash_receipts_1']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E15', $employee_data['tool_builder_other_cash_receipts_2']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G15', $employee_data['tool_builder_other_cash_receipts_3']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C16', $employee_data['tool_builder_other_cash_receipts_4']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E16', $employee_data['tool_builder_other_cash_receipts_5']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G16', $employee_data['tool_builder_other_cash_receipts_6']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C17', $employee_data['tool_builder_other_cash_receipts_7']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E17', $employee_data['tool_builder_other_cash_receipts_8']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G17', $employee_data['tool_builder_other_cash_receipts_9']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C18', $employee_data['tool_builder_other_cash_receipts_10']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E18', $employee_data['tool_builder_other_cash_receipts_11']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G18', $employee_data['tool_builder_other_cash_receipts_12']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('C19', $employee_data['tool_builder_total_cash_receipts_1']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('E19', $employee_data['tool_builder_total_cash_receipts_2']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G19', $employee_data['tool_builder_total_cash_receipts_3']);
        
        $objPHPExcelReader->getActiveSheet()->setCellValue('C23', $employee_data['tool_builder_service_costs_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E23', $employee_data['tool_builder_service_costs_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G23', $employee_data['tool_builder_service_costs_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C24', $employee_data['tool_builder_payroll_benefits_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E24', $employee_data['tool_builder_payroll_benefits_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G24', $employee_data['tool_builder_payroll_benefits_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C25', $employee_data['tool_builder_salaries_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E25', $employee_data['tool_builder_salaries_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G25', $employee_data['tool_builder_salaries_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C26', $employee_data['tool_builder_supplies_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E26', $employee_data['tool_builder_supplies_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G26', $employee_data['tool_builder_supplies_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C27', $employee_data['tool_builder_other_cost_of_goods_current_1']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E27', $employee_data['tool_builder_other_cost_of_goods_previous_1']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G27', $employee_data['tool_builder_other_cost_of_goods_increase_1']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C28', $employee_data['tool_builder_other_cost_of_goods_current_2']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E28', $employee_data['tool_builder_other_cost_of_goods_previous_2']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G28', $employee_data['tool_builder_other_cost_of_goods_increase_2']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C29', $employee_data['tool_builder_other_cost_of_goods_current_3']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E29', $employee_data['tool_builder_other_cost_of_goods_previous_3']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G29', $employee_data['tool_builder_other_cost_of_goods_increase_3']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('C30', $employee_data['tool_builder_total_cost_of_goods_current']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('E30', $employee_data['tool_builder_total_cost_of_goods_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G30', $employee_data['tool_builder_total_cost_of_goods_increase']);
      
        $objPHPExcelReader->getActiveSheet()->setCellValue('C33', $employee_data['tool_builder_account_fees_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E33', $employee_data['tool_builder_account_fees_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G33', $employee_data['tool_builder_account_fees_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C34', $employee_data['tool_builder_advertising_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E34', $employee_data['tool_builder_advertising_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G34', $employee_data['tool_builder_advertising_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C35', $employee_data['tool_builder_bank_fees_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E35', $employee_data['tool_builder_bank_fees_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G35', $employee_data['tool_builder_bank_fees_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C36', $employee_data['tool_builder_continuing_education_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E36', $employee_data['tool_builder_continuing_education_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G36', $employee_data['tool_builder_continuing_education_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C37', $employee_data['tool_builder_dues_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E37', $employee_data['tool_builder_dues_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G37', $employee_data['tool_builder_dues_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C38', $employee_data['tool_builder_insurance_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E38', $employee_data['tool_builder_insurance_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G38', $employee_data['tool_builder_insurance_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C39', $employee_data['tool_builder_internet_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E39', $employee_data['tool_builder_internet_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G39', $employee_data['tool_builder_internet_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C40', $employee_data['tool_builder_licenses_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E40', $employee_data['tool_builder_licenses_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G40', $employee_data['tool_builder_licenses_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C41', $employee_data['tool_builder_meals_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E41', $employee_data['tool_builder_meals_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G41', $employee_data['tool_builder_meals_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C42', $employee_data['tool_builder_office_supplies_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E42', $employee_data['tool_builder_office_supplies_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G42', $employee_data['tool_builder_office_supplies_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C43', $employee_data['tool_builder_payroll_processing_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E43', $employee_data['tool_builder_payroll_processing_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G43', $employee_data['tool_builder_payroll_processing_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C44', $employee_data['tool_builder_payroll_benefits_indirect_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E44', $employee_data['tool_builder_payroll_benefits_indirect_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G44', $employee_data['tool_builder_payroll_benefits_indirect_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C45', $employee_data['tool_builder_postage_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E45', $employee_data['tool_builder_postage_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G45', $employee_data['tool_builder_postage_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C46', $employee_data['tool_builder_printing_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E46', $employee_data['tool_builder_printing_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G46', $employee_data['tool_builder_printing_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C47', $employee_data['tool_builder_professional_svcs_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E47', $employee_data['tool_builder_professional_svcs_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G47', $employee_data['tool_builder_professional_svcs_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C48', $employee_data['tool_builder_occupancy_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E48', $employee_data['tool_builder_occupancy_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G48', $employee_data['tool_builder_occupancy_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C49', $employee_data['tool_builder_rental_fees_previous']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E49', $employee_data['tool_builder_rental_fees_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G49', $employee_data['tool_builder_rental_fees_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C50', $employee_data['tool_builder_salaries_indirect_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E50', $employee_data['tool_builder_salaries_indirect_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G50', $employee_data['tool_builder_salaries_indirect_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C51', $employee_data['tool_builder_subcontractors_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E51', $employee_data['tool_builder_subcontractors_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G51', $employee_data['tool_builder_subcontractors_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C52', $employee_data['tool_builder_telephone_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E52', $employee_data['tool_builder_telephone_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G52', $employee_data['tool_builder_telephone_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C53', $employee_data['tool_builder_transportation_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E53', $employee_data['tool_builder_transportation_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G53', $employee_data['tool_builder_transportation_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C54', $employee_data['tool_builder_travel_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E54', $employee_data['tool_builder_travel_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G54', $employee_data['tool_builder_travel_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C55', $employee_data['tool_builder_utilities_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E55', $employee_data['tool_builder_utilities_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G55', $employee_data['tool_builder_utilities_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C56', $employee_data['tool_builder_web_development_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E56', $employee_data['tool_builder_web_development_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G56', $employee_data['tool_builder_web_development_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C57', $employee_data['tool_builder_web_domain_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E57', $employee_data['tool_builder_web_domain_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G57', $employee_data['tool_builder_web_domain_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C58', $employee_data['tool_builder_other_operating_expenses_current_1']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E58', $employee_data['tool_builder_other_operating_expenses_previous_1']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G58', $employee_data['tool_builder_other_operating_expenses_increase_1']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C59', $employee_data['tool_builder_other_operating_expenses_current_2']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E59', $employee_data['tool_builder_other_operating_expenses_previous_2']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G59', $employee_data['tool_builder_other_operating_expenses_increase_2']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C60', $employee_data['tool_builder_other_operating_expenses_current_3']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E60', $employee_data['tool_builder_other_operating_expenses_previous_3']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G60', $employee_data['tool_builder_other_operating_expenses_increase_3']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('C61', $employee_data['tool_builder_total_operating_expenses_current']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('E61', $employee_data['tool_builder_total_operating_expenses_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G61', $employee_data['tool_builder_total_operating_expenses_increase']);

        $objPHPExcelReader->getActiveSheet()->setCellValue('C64', $employee_data['tool_builder_cash_disbursements_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E64', $employee_data['tool_builder_cash_disbursements_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G64', $employee_data['tool_builder_cash_disbursements_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C65', $employee_data['tool_builder_interest_expense_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E65', $employee_data['tool_builder_interest_expense_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G65', $employee_data['tool_builder_interest_expense_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C66', $employee_data['tool_builder_income_tax_expense_current']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E66', $employee_data['tool_builder_income_tax_expense_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G66', $employee_data['tool_builder_income_tax_expense_increase']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C67', $employee_data['tool_builder_other_additional_expense_current_1']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E67', $employee_data['tool_builder_other_additional_expense_previous_1']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G67', $employee_data['tool_builder_other_additional_expense_increase_1']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C68', $employee_data['tool_builder_other_additional_expense_current_2']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E68', $employee_data['tool_builder_other_additional_expense_previous_2']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G68', $employee_data['tool_builder_other_additional_expense_increase_2']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C69', $employee_data['tool_builder_other_additional_expense_current_3']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E69', $employee_data['tool_builder_other_additional_expense_previous_3']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G69', $employee_data['tool_builder_other_additional_expense_increase_3']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('C70', $employee_data['tool_builder_other_additional_expense_current_4']);
        $objPHPExcelReader->getActiveSheet()->setCellValue('E70', $employee_data['tool_builder_other_additional_expense_previous_4']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G70', $employee_data['tool_builder_other_additional_expense_increase_4']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('C71', $employee_data['tool_builder_total_additional_expense_current']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('E71', $employee_data['tool_builder_total_additional_expense_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G71', $employee_data['tool_builder_total_additional_expense_increase']);
        

        // $objPHPExcelReader->getActiveSheet()->setCellValue('C73', $employee_data['tool_builder_total_cash_payments_current']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('E73', $employee_data['tool_builder_total_cash_payments_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G73', $employee_data['tool_builder_total_cash_payments_increase']);



        // $objPHPExcelReader->getActiveSheet()->setCellValue('C75', $employee_data['tool_builder_net_cash_change_current']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('E75', $employee_data['tool_builder_net_cash_change_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G75', $employee_data['tool_builder_net_cash_change_increase']);



        // $objPHPExcelReader->getActiveSheet()->setCellValue('C77', $employee_data['tool_builder_month_ending_current']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('E77', $employee_data['tool_builder_month_ending_previous']);
        // $objPHPExcelReader->getActiveSheet()->setCellValue('G77', $employee_data['tool_builder_month_ending_increase']);

        $object_writer = PHPExcel_IOFactory::createWriter($objPHPExcelReader, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Cash Flow Statement.xlsx"');

    
        $object_writer->save('php://output');
  
        }
   
  
  
       }
    


  

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		global $config;
		//Set template configurations before calling load_template
		//Visit MY_Controller for details
		$this->layout_data['page_title'] = "Dashboard";
		$this->layout_data['page_title_min'] = "Dashboard";
		$this->layout_data['bread_crumbs'] = array(array("home/"=>"Home"));
		$this->layout_data['additional_tools'] = array(						
														"jquery-ui",
														"bootstrap",
														"bootstrap-hover-dropdown",
														"jquery-slimscroll",
														"boots",
														"font-awesome",
														"simple-line-icons" ,
													);

		$this->add_script("pages/tasks.css");
		$this->add_script(array("tasks.js" , "index.js") , "js");

		$this->register_plugins(
			array(
				"bootstrap-datetimepicker1"
				)
		);  
        $data['ex'] = $this->model_expert->find_all_active();
		$data[ 'category' ] = $this->model_category->find_count_active();
		$data[ 'inquiries' ] = $this->model_inquiry->find_count_active();

		$param = array();
        $param['where_string'] = 'si_status != 2';
        $schedule_data = $this->model_session_inquiry->find_all($param);
		
		
		// exit;

            $json_data = '';
            if(isset($schedule_data) AND array_filled($schedule_data)) {
                foreach($schedule_data as $value) {
                    $ba_appointment_status = $this->model_session_inquiry->get_list_data('si_status');
                    $status = isset($ba_appointment_status[$value['si_status']]) ? $ba_appointment_status[$value['si_status']] : '';

                   $json_data .= '{
                        title:"'.strip_tags($status).'",
                        start:"'.$value['si_date'].' '.$value['si_time'].'",
                        end:"'.$value['si_date'].' '.$value['si_time2'].'",
                        url:"'.la('home/view_appointment?oid='.$value['si_id']).'",
                    },';
                }
            }


    
            // $param = array();
            // $param['where']['v_user_id'] = $_GET['expert'];
            // $param['group'] = 'v_date';
            // $vacation_data = $this->model_vacation->find_all($param);
            // //debug($vacation_data,1);
            // if(isset($vacation_data) AND array_filled($vacation_data)):
            //     foreach($vacation_data as $value):
            //         $json_data .= '{title:"Not Available",
            //             start:"'.$value['v_date'].'",
            //             end:"'.$value['v_date'].'"},';
            //     endforeach;
            // endif;


            $param = array();
            $param['where']['v_user_id'] = $_GET['expert'];
            $param['group'] = 'v_date';
            $vacation_data = $this->model_vacation->find_all($param);
            //debug($vacation_data,1);
            if(isset($vacation_data) AND array_filled($vacation_data)):
                foreach($vacation_data as $value):
                    $json_data .= '{title:"Not Available",
                        start:"'.$value['v_date'].'",
                        end:"'.$value['v_date'].'"},';
                endforeach;
            endif;

            // debug($json_data,1);
            $data['json_data'] = $json_data;

		
		$data['config'] = $this->config->config;
    
		$this->load_view("dashboard",$data);
	}

	public function view_appointment()
	{
		global $config;
		$id = intval($this->input->get('oid'));
		$this->configure_add_page();
		
		$data['appointment'] = $appointment = $this->model_session_inquiry->find_by_pk($id);
		if(isset($appointment) AND array_filled($appointment)) {
			$this->load_view("view_appointment",$data);
		}
		else {
			redirect(la(''));
		}

	}



	public function ajax_on_vacation()
	{
		$data = array();

        $data['open_time'] = strtotime("9:00");
        $data['close_time'] = strtotime("22:00");



        $param['status'] = true;
        $param['html'] = $this->load->view('admin/home/_on_vacation',$data,true);
        echo json_encode($param);
	}


	public function ajax_get_timeslot_to()
    {
        $time = $this->input->post('time');
        $open_time = strtotime($time);
        $close_time = strtotime("22:00");
        $now = time();
        $output = "";

        $var = '';//'<option value="">Select Time</option>';
        $y=1;
        for( $i=$open_time; $i<=$close_time; $i+=3600) {
            $output = date("h:i A",$i);
            if($y > 1)
                $var .= "<option value='".$output."'>$output</option>";
            $y++;
        }
        
        $this->json_param['status'] = true;
        $this->json_param['html'] = $var;

        echo json_encode($this->json_param);
    }
	

    public function ajax_save_on_vacation()
    {
        $post = $this->input->post('vacation');
        $date = $post['v_start_date'];
        $start_time = date("H:i", strtotime($post['v_start_time']));
        $end_time = date("H:i", strtotime($post['v_end_time']));
        $desc = $post['v_description'];
        $uid = $post['v_user_id'];

        $date_time = array();
        $open_time = strtotime($start_time);
        $close_time = strtotime($end_time);
        for( $i=$open_time; $i<$close_time; $i+=3600):
            $output = date("G:i",$i);
            $date_time[] = $date." " .$output.":00";
        endfor;
        

        
        if(isset($date_time) AND array_filled($date_time)) {
            foreach($date_time as $value) {
                $param = array();
                $param['v_user_id'] = $uid;
                $param['v_date'] = $value;
                $param['v_desc'] = $desc;

                $this->model_vacation->set_attributes($param);
                $last_insert_id = $this->model_vacation->save();
            }
        }



        /*
        debug($post,1);
        $start = explode(" ", $post['v_start_date']);
        $v_start_date = $start[0];

        $end = explode(" ", $post['v_end_date']);
        $v_end_date = $end[0];

        $start_date = str_replace("/", "-", $v_start_date);
        $start_time = $start[1];
        // debug($start_date);
        $end_date = str_replace("/", "-", $v_end_date);
        $end_time = $end[1];
        // debug($end_date,1);
        $dates = getDatesFromRange($start_date, $end_date);
        debug($dates,1);
        if(isset($dates) AND array_filled($dates)) {
            foreach($dates as $date) {
                $param = array();
                $param['v_user_id'] = $this->userid;
                $param['v_date'] = $date;
                $param['v_desc'] = $desc;

                $this->model_vacation->set_attributes($param);
                $last_insert_id = $this->model_vacation->save();
            }
        }
        */
        

        $json_param = array();
        $json_param['status'] = true;
        
        echo json_encode($json_param);
    }

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
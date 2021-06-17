<?php
	$open_time = strtotime("9:00");
    $close_time = strtotime("22:00");
    //$now = time();
    $output = "";

?>
<div class="col-md-6 col-xs-8 col-sm-6">
	<select id="ba_reserve_time" class="form-control" name="session_inquiry[si_time]">
		<option value="">Select Reserve Time</option>
		<? for( $i=$open_time; $i<$close_time; $i+=3600):
        	$output = date("h:i A",$i); // show in output
        	$output2 = date("G:i",$i); // just for validation
        	if(!in_array($output2, $booked_slot)) :
		?>
        <option value="<?=$output2?>"><?=$output?></option>
    	<? 
    		endif;
    	endfor;?>
	</select>
	


</div>


<div class="col-md-6 col-xs-8 col-sm-6">
	<select id="ba_arrive_time" readonly="readonly" class="form-control" name="session_inquiry[si_time2]">
		<option value="">Select Time</option>
	</select>
</div>

<!-- 
<div class="col-md-12 col-xs-12 col-sm-12">
<div class="col-md-4 col-xs-4 col-sm-4"></div>
<div class="col-md-4 col-xs-4 col-sm-4">
	<button id="add_schedule" type="button">
		<img src="<?=i('')?>submit.png"> 
		Add Schedule
	</button>
</div>
<div class="col-md-4 col-xs-4 col-sm-4"></div>
</div> -->


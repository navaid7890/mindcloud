<?php
	$open_time = strtotime("11:00");
    $close_time = strtotime("20:00");
    $output = "";
?>

<ul>
           <? for( $i=$open_time; $i<$close_time; $i+=3600):
        	$output = date("h:i A",$i); // show in output
        	$output2 = date("G:i",$i); // just for validation
        	if(!in_array($output2, $booked_slot)) :
		 
	?>
					<li>
                                    <label data-toggle="tooltip" data-placement="top" title="<?=$output?>" data-original-title="<?=$output?>"></label>
                                    <p><span><?=$output?></span></p>

                                 
                    </li>
               
       
        <? endif;
    	endfor;?>

	
	
	
					 
	
	
								</ul>

	<script>

$(document).ready(function() {
	 
	var selector = '.selectTimeSlot li';
	
		$(selector).on('click', function(){
			$(selector).removeClass('selected');
			$(this).addClass('selected');
		});

		$('.selectTimeSlot li').click(function(){
		$('.nextBtn_1').show();
		$('.fResult ul li:nth-child(4)').show();


}); 
$('.selectTimeSlot li label').click(function(){

var target_time = $(this).attr('data-original-title');
$('span.calTime').text(target_time);

// $("#two").val(target_time); 

});

		
	});


	</script>
	

<?php
$logo = $this->model_logo->find_one(
                array('where' => array('logo_status' => 1))
            );
?>

	<html>
        <body>
        <div align="center">
             <div style="max-width: 680px; min-width: 500px; border: 2px solid #e3e3e3; border-radius:5px; margin-top: 20px">   
        	    <div style="background: #f3f3f3">
        	        <img src="<?=i('')?>test1.png" width="250" alt="<?=g('site_title')?>" border="0" style='width: 25%; padding: 15px; margin: 0px auto; display: table;' />
        	    </div> 
        	    <div  style="background-color: #fbfcfd; border-top: thick double #cccccc; text-align: left;">
        	        <div style="margin: 30px;">
             	        <p>
                            <?php

$a=$form_input['booking_user_id'];
$b=$form_input['booking_expert_id'];
                            if(isset($msg)) {
                                echo $msg;
                      
                            }
                            else
                            {
                            ?>
                     	        Hi <?=$form_input['Full Name']?>,<br> <br>
                                 A Mind Cloud Tribe User has requested an expert booking on date  <?=$form_input['booking_date']?> and time <?=$form_input['booking_time']?><br><br>
                                 Please respond to the user via email <?=$form_input['booking_email']?> for booking confirmation and send them a zoom/google meet link accordingly.<br><br>
                                 If the date and time are not suitable for you, please email the user with a suggested date and time.
                     	      
                               <br> <br>


                     	      
                            <?php
                            }
                            ?>
             	        </p>


                        <? if(isset($form_input) && is_array($form_input)) {?>
                        <table style="text-align: left;">
                            <?if($title){?>
                            <tr>
                                <td colspan="2" <?=$body_att1?>>
                                    <h3 style="color: rgb(25, 98, 203); font-size: 25px; padding: 0px; margin: 0px;">
                                        <?=$title?>:
                                    </h3>
                                </td>
                            </tr>
                            <?}
                            else
                            {
                            ?>
                            <tr>
                                <td colspan="2" <?=$body_att1?>>
                                    <h3 style="color: rgb(25, 98, 203); font-size: 25px; padding: 0px; margin: 0px;">
                                        User Input:
                                    </h3>
                                </td>
                            </tr>
                            <? } ?>
                        <?php
                        
                            foreach ($form_input as $key => $value) {?>
                                <tr>
                                    <th><?=ucfirst(str_replace("_", " ", $key))?></th>
                                    <td> :
                                        <?
                                            if(is_array($value))
                                            {
                                                foreach ($value as $sub_value) 
                                                {
                                                    echo $sub_value."<br/>";
                                                }
                                            }
                                            else
                                                echo $value;
                                        ?>
                                    </td>
                                </tr>
                            <?}?>
                        </table>
             	        <br>  <br>
                        <? } ?>



                        See you soon,<br><br>
                        Genny Ghanimeh<br><br>
                        Mind Cloud Tribe Founder.
                        
             	        <div style="text-align: Right;">
             	            With warm regards,<br>
                            <?=g('site_title')?> Team
             	        </div>
             	    </div>
        	    </div>   
        	</div>   
    	</div>
  	    <center><?=date('Y')?> © <?=g('site_title')?>. ALL Rights Reserved.</center>
    	</body>
	</html>	

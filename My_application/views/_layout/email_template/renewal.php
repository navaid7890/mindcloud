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
                      <?
                      $userdata = $this->model_user->find_by_pk($this->session->userdata['logged_in_front']['id']);

                      $dat=date('Y-m-d', strtotime($userdata['user_createdon']));

                      $date = strtotime($dat);
                      $date = strtotime("+7 day", $date);
                      $a= date('Y-m-d',$date);

                      ?>
             	        <p>
                            <?php
                            if(isset($msg)) {
                                echo $msg;
                            }
                            else
                            {
                            ?>
                     	      Dear <?=$this->session->userdata['logged_in_front']['first_name']?>,<br><br>

                               Your Mind Cloud Tribe subscription expires on <?=$a?>, and we sincerely hope that you will join us for another outstanding year of great tutorials and personal / professional development.<br><br>
                               Your subscription is automatically renewed. If you wish to cancel your subscription, please click on <a href="https://mindcloud.tk/subscription">Subscription</a> <br><br>
                               Mind Cloud Tribe values you and aims to support you on your personal and professional growth journey. Our Tribe is constantly being updated with new experts, new tutorials, new podcasts and new resources.<br><br>

                     	   
                               Hope to see you soon, <br><br>
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

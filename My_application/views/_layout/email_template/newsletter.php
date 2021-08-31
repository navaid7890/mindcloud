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
                            if(isset($msg)) {
                                echo $msg;
                            }
                            else
                            {
                            ?>
                     	       Hi, and welcome to Mind Cloud Tribe!<br><br>

                                The journey of a thousand steps starts here. You are now a subscriber in our Tribe, and we are here to support you no matter where you are on your entrepreneurial journey.<br><br>
                                We invite you to explore our <a href="https://mindcloud.tk/learning-journey">Learning Journey</a> (which helps you build your Business Plan and Investment Deck), and our <a href="https://mindcloud.tk/expert-tutorial">Experts Tutorials</a> (which has experts and tutorials, covering over 25 different categories). We hope that you join us as a subscriber and benefit from all the support you will find on Mind Cloud Tribe, whether you are an entrepreneur or an entrepreneurship enthusiast. To find out more, here’s HOW IT WORKS!<br><br>
                                 We also invite you to join us on our Social Media: <a href="<?= g('db.admin.facebook_id') ?>" target="_blank">Facebook</a>, <a href="<?= g('db.admin.instagram_id') ?>" target="_blank">Instagram</a>, <a href="<?= g('db.admin.linkedin_id') ?>" target="_blank">LinkedIn</a> and <a href="<?= g('db.admin.youtube_id') ?>" target="_blank">YouTube</a> to check all the news, resources and podcasts we share with our Tribe.<br> <br>

                     	   
                     	        See you soon,<br><br>
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

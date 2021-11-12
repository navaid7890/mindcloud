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
                     	        Hi <?=$this->session->userdata['logged_in_front']['first_name']?>,<br> <br>
                     	        <!-- Welcome to <?//=g('site_title')?>! -->
								 <br> <br>
                                As you requested, we've cancelled your subscription, effective <?=date("Y-m-d")?>.
                                Obviously, we'd love to have you back. If you change your mind, you can restart your membership to enjoy all the tutorials and resources we have on Mind Cloud Tribe.<br><br>
                                We're here to help if you need it, and you can contact us back anytime at info@mindcloudtribe.com.
                            <?php
                            }
                            ?>
             	        </p>
<!--              	       
             	            Please Contact <?//=g('site_title')?> if you have any questions<br><br>
                            Once again, thank you!!!<br><br> -->
                        
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

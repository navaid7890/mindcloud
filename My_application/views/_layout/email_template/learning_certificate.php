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
                     	        Dear <?=$this->session->userdata['logged_in_front']['first_name']?>,<br> <br>

                                 WOW - We are very proud to see you completing you Learning Journey on Mind Cloud Tribe. <br><br> 
                                 We wish you all the success moving forward on your entrepreneurial journey.<br><br>
                                 In recognition of your efforts, here is your Certificate of Completion. You rock!<br><br>
                                Keep growing,<br><br>
                            <?php
                            }
                            ?>
             	        </p>
						        
						 Genny Ghanimeh<br><br>
                        Mind Cloud Tribe Founder.

             	    </div>
        	    </div>   
        	</div>   
    	</div>

    	</body>
	</html>	

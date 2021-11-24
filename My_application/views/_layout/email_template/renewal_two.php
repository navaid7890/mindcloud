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
                      $date = strtotime("+363 days", $date);
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
                               Your Mind Cloud Tribe Free Trial expires on <?=$a?>, and we sincerely hope that you enjoyed and learned about our Tribe community. We invite you to join us for an outstanding year of great tutorials and personal / professional development. If you wish to subscribe, please click here <a href="https://mindcloudtribe.com/subscription">Subscription</a> <br><br>
                                Don't miss out on our <a href="https://mindcloudtribe.com/learning-journey">Learning Journey</a> (which helps you build your Business Plan and Investment Deck), and our <a href="https://mindcloudtribe.com/expert-tutorial">Experts Tutorials</a> (which has experts and tutorials, covering over 25 different categories). We hope that you join us as a subscriber and benefit from all the support you will find on Mind Cloud Tribe, whether you are an entrepreneur or an entrepreneurship enthusiast. To find out more, here's <a href="https://www.youtube.com/watch?v=EguHzvHS8j4?autoplay=1&showinfo=0&controls=0">HOW IT WORKS!</a><br><br>
                               Mind Cloud Tribe values you and aims to support you on your personal and professional growth journey. Our Tribe is constantly being updated with new experts, new tutorials, new podcasts and new resources.<br><br>
                               Hope to see you soon, <br><br>
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

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
                     	        Hi  <?=$form_input['Full Name']?>, and welcome to Mind Cloud Tribe!<br><br>
                                 The journey of a thousand steps starts here. You are now a member in our Tribe, and we are very excited to have you.<br><br>
                                 We invite you to explore our <a href="https://mindcloudtribe.com/learning-journey">Learning Journey</a> (which helps you build your Business Plan and Investment Deck), and our <a href="https://mindcloudtribe.com/expert-tutorial">Experts Tutorials</a> (which has experts and tutorials, covering over 25 different categories). We hope that you join us as a subscriber and benefit from all the support you will find on Mind Cloud Tribe, whether you are an entrepreneur or an entrepreneurship enthusiast. To find out more, here's <a href="https://www.youtube.com/watch?v=EguHzvHS8j4?autoplay=1&showinfo=0&controls=0">HOW IT WORKS!</a><br><br>
                                 We also invite you to join us on our Social Media: <a href="<?= g('db.admin.facebook_id') ?>" target="_blank">Facebook</a>, <a href="<?= g('db.admin.instagram_id') ?>" target="_blank">Instagram</a>, <a href="<?= g('db.admin.linkedin_id') ?>" target="_blank">LinkedIn</a> and <a href="<?= g('db.admin.youtube_id') ?>" target="_blank">YouTube</a> to check all the news, resources and podcasts we share with our Tribe.<br> <br>

                     	   
                     	        See you soon,<br><br>
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

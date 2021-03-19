

 
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <form class="signinform" id="forms-signup">
          <input type="hidden" name="user[user_type]" value='<?=NORMAL_USER?>'>
          <? if(isset($_GET['url'])):?>
            <input type="hidden" name="url" value='<?=$_GET['url']?>'>
          <? endif;?>
            <div class="container">
                <div style="color:#2790E3;font-size:24px;"> Create an account</div>
                <div class="pb-5" style="color: #858585; font-size:14px;">Please enter your valid data to sign up.</div>
                <label for="uname"><b class="texts">Full Name</b></label><br>
                <input class="signinfield " type="text" placeholder="Enter Full Name" name='user[user_firstname]' required><br>

                <label for="uname"><b class="texts">Email Address</b></label><br>
                <input class="signinfield " type="text" placeholder="Enter Email Address" name='user[user_email]' required><br>

                <label for="psw"><b class="texts">Password</b></label><br>
                <input class="signinfield" type="password" name='user[user_password]' id="user_password" placeholder="Enter Password" required><br>
                <label class="texts pb-2 pt-3">
                    <input type="checkbox" name="remember" required> Terms And Conditions & Privacy Policy
                </label> 
                <br>
                <button class="formbutton" type="submit" style="color:white;">Register</button><br>

                <div class="already-account-text" style="width: 40%; text-align: center;">
                    <div class="mt-4" style="color:#858585;text-align:center;">Already have an account? <a href="<?=l('login')?>">Sign In</a></div>
                </div> 
            </div>

        </form>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="behind" >
              <a href=""> <img class="newmind" style="width: 200px;"  src="<?=i('')?>footerlogo.png"></a>
          </div>
      </div>
    </div>

 
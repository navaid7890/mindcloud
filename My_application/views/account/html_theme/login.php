



  <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <form class="signinform" id="forms-signin">
            <?php 
                $redirect_url = isset($_GET['url']) ? $_GET['url'] :  $this->agent->referrer(); 
                ?> 
            <input type="hidden" name="url" value='<?=$redirect_url?>'>
            <div class="container">
                <div style="color:#2790E3;font-size:24px;"> Log In</div>
                <div class="pb-5" style="color: #858585; font-size:14px;">Log in with your data that your entered during <br>your registration</div>
                <label for="uname"><b class="texts">Email Address</b></label><br>
                <input class="signinfield" type="text" placeholder="Enter Email Address" name="user[user_email]" id="defaultForm-email" required><br>

                <label for="psw"><b class="texts">Password</b></label><br>
                <input class="signinfield" type="password" placeholder="Enter Password" name="user[user_password]" id="defaultForm-pass" required><br>
                <label class="texts pt-3 pb-2">
                    <input type="checkbox" checked="checked" name="remember"> Keep me logged in
                <span class="forgotpassword" > <a href="<?=l('forgot-password')?>"> Forgot password?</a></span></label> 
                <br>
                <button class="formbutton" type="submit" style="color:white;">SignIn</button>
                <div class="already-account-text" style="width: 40%; text-align: center;">
                  <div class="mt-3" style="color:#858585; ">Don't have an account? <a href="<?=l('signup')?>">Register</a></div>
                </div>


            </div>

          </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="behind" >
              <a href=""> <img class="newmind" style="width: 200px;" src="<?=i('')?>footerlogo.png"></a>
          </div>
        </div>
    </div>
 
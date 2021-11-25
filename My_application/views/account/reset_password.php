

<style>

#ilny-password {
    width: 100%;
    height: 60px;
    background: #F3F6FA;
    border-radius: 8px;
    padding: 0 15px;
    margin-bottom: 30px;
}

button#reset_password-btn {
    width: 100%;
    height: 100%;
    font-size: 18px;
    color: #fff;
    font-weight: 700;
}
</style>

<div class="login-banner">
        <div class="container-fluid pad-zero para w-100">
            <div class="row ">
                <div class="col-lg-6 col-md-12">
                    <div class="login-wrap">
                        <div  class="w-100">
                        <div class="login-content">
                            <h4>Reset Password</h4>
                            <div class="space"><br></div>
                            <p>Enter Your Password</p>
                        </div>
                        <div class="space"><br><br></div>

                        <div class="login-form">
                            <div>
                            <form role="form" id='forms-reset_password' class="signinform">
                                  
                              <input type="hidden" name="user[user_id]" value="<?=$data['user_id']?>"></input>
                              <input class="signinfield" type="password" name="user[user_password]" id="ilny-password" placeholder="Your password...(Required)" required><br>


                                    <div class="fld-btn">
                                    <button class="formbutton" href="javascript:void(0);" id='reset_password-btn' style="color:white;">Reset</button>
                                    </div>
                                </form>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="login-mdl">
                        <span><img src="<?=i('')?>login.png" alt=""></span>
                        <a href="./" class="white-logo"><img src="<?=i('')?>footer-logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
     </div>   
     </div>
<style>
.fld-login select#mySelectboxsituation_found {
    width: 100%;
    height: 60px;
    background: #F3F6FA;
    border-radius: 8px;
    padding: 0 15px;
}
</style>
<div class="login-banner">
    <div class="container-fluid pad-zero para w-100">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="login-wrap">
                    <div class="w-100">
                        <div class="login-content">
                            <h4>Create an account</h4>
                            <div class="space"><br></div>
                            <p>Please enter your valid data to sign up.</p>
                            <hr />
                        </div>
                        <div class="space"><br><br></div>

                        <div class="login-form signup-form">
                            <div>
                                <form id="forms-signup">
                                    <input type="hidden" name="user[user_type]" value='<?= NORMAL_USER ?>'>
                                    <? if (isset($_GET['url'])) : ?>
                                        <input type="hidden" name="url" value='<?= $_GET['url'] ?>'>
                                    <? endif; ?>
                                    <div class="fld-login">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Full Name" name='user[user_firstname]' required>
                                    </div>
                                    <!-- <div class="fld-login">
                                        <label>Select Type</label>
                                        <select name='user[user_type]' id="mySelectboxsituation_found">
                                            <option value="">Select Type</option>
                                            <option value="0">User</option>
                                            <option value="2">Epert</option>
                                        </select>
                                    </div> -->
                                    <div class="fld-login">
                                        <label>Email Address</label>
                                        <input type="email" placeholder="someexample@gmail.com" name='user[user_email]' required>
                                    </div>

                                    <div class="fld-login">
                                        <label>Password</label>
                                        <input type="password" type="password" name='user[user_password]' id="user_password" required>
                                    </div>

                                    <div class="fld-html row">
                                        <div class="col-md-12">
                                            <label for="checkbox" style="color: #5C677D;"><input type="checkbox" id="checkbox" required> I agree to the MindCloudTribe <a href="<?= l('terms-and-conditions') ?>" target="_blank">Terms of Service</a> and <a href="<?= l('privacy-policy') ?>" target="_blank">Privacy Policy</a></label>
                                        </div>
                                    </div>

                                    <div class="fld-btn">
                                        <input type="submit" value="Register">
                                    </div>
                                </form>

                                <div class="for-register">
                                    <p>Already have an account? <a href="<?= l('login') ?>">Sign In</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="login-mdl">
                    <span><img src="<?= i('') ?>login.png" alt=""></span>
                    <a href="./" class="white-logo"><img src="<?= i('') ?>footer-logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
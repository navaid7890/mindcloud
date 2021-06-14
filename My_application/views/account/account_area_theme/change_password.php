<style>
    .joinContent strong {
        font-weight: 700;
    }

    .consult-left h2 strong span strong,
    .consult-head strong,
    .mainBanner strong,
    .joinContent strong {
        font-weight: 700;
    }

    .consult-left h2 strong {
        font-weight: 400;
    }
    .vid-content h4 {
    min-height: 56px;
}

.aboutForm h2 {
    font-size: 25px;
    color: #202020;
    font-weight: 600;
    text-transform: uppercase;
    padding-bottom: 35px;
}

textarea, select, input[type], textarea, select, button {
    background: transparent;
    border: none;
    border-radius: 0px;
    font-family: 'Open Sans';
    font-weight: 400;
    border: 1px solid #bfc2c5;
    /* padding: 30px 0; */
    margin-bottom: 30px;
}


#update-change_password-btn{
    background-color: #e28f26;
    color: #fff;
    padding: 10px 30px;
    border: 1px solid;
    border-radius: 4px;
    display: block;
    width: 100%;
}

input#current {
    position: relative;
}

a#show {
    position: absolute;
    right: 41px;
    top: 12px;
}
</style>
<div class="index-page">
    <section class="dashboard">
        <ul class="dashboard-layout">
            <li>
                <div class="front-dashboard">
                    <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
                    <? $this->load->view("widgets/dashboard-menu-box"); ?>
                </div>
            </li>

            <li>
            <div class="aboutForm">
  <div class="col-md-8 col-xs-12 col-sm-8 center">
    <!-- <form id='update-change_password-form'>
      <h2>Password Change</h2>
      <p>Change your password</p>
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-3 no-margin">
          <label>Current Password</label>
        </div>
        <div class="col-md-9 col-xs-12 col-sm-9 no-margin">
          <input type="password" name="current_password" placeholder="Enter Here" class="form-control">
        </div>  
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-3 no-margin">
          <label>New Passoword</label>
        </div>
        <div class="col-md-9 col-xs-12 col-sm-9 no-margin">
          <input type="password" name="new_password" placeholder="Enter Here" class="form-control">
        </div>
      </div>
      <div class="row">
        
      <div class="col-md-3 col-xs-12 col-sm-3 no-margin">
        <label>Retype Password</label>
      </div>
      <div class="col-md-9 col-xs-12 col-sm-9 no-margin">
        <input type="password" name="repeat_password" placeholder="Enter Here" class="form-control">
      </div>

      </div>

      <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-9 no-margin">
          <button type="submit" id='update-change_password-btn'>Save</button>
        </div>  
      </div>
      
    </form> -->
    <form id='update-change_password-form'>
      <h2>Password Change</h2>

      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-3 no-margin">
          <label>Current Password</label>
        </div>
        <div class="col-md-7 col-xs-12 col-sm-9 no-margin password_row">
          <input type="password" name="current_password" placeholder="Enter Here" class="form-control" id="current">
          <a href="javascript:void(0)" id="show" class="pass_eye">
            <i class="fa fa-eye-slash" id="eye"></i>
            <i class="fa fa-eye" style="display: none" id="close"></i>
          </a>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-3 no-margin">
          <label>New Password</label>
        </div>
        <div class="col-md-7 col-xs-12 col-sm-9 no-margin password_row">
          <input type="password" name="new_password" placeholder="Enter Here" class="form-control">
        </div>
      </div>
      <div class="row">
        
      <div class="col-md-3 col-xs-12 col-sm-3 no-margin">
        <label>Retype Password</label>
      </div>
      <div class="col-md-7 col-xs-12 col-sm-9 no-margin password_row">
        <input type="password" name="repeat_password" placeholder="Enter Here" class="form-control">
      </div>

      </div>

      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 col-xs-12 col-sm-4 col-md-offset-4">
          <button type="submit" id='update-change_password-btn'>Save</button>
        </div>  
      </div>
      
    </form>
  </div>
</div>


            </li>
        </ul>
    </section>
</div>


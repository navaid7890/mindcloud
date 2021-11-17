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

  textarea,
  select,
  input[type],
  textarea,
  select,
  button {
    background: transparent;
    border: none;
    border-radius: 0px;
    font-family: 'Open Sans';
    font-weight: 400;
    border: 1px solid #bfc2c5;
    /* padding: 30px 0; */
    margin-bottom: 30px;
  }


  #update-contact_info-btn {
    background-color: #e28f26;
    color: #fff;
    padding: 10px 30px;
    border: 1px solid;
    border-radius: 4px;
    display: block;
    width: 100%;
  }

  .popAling {
    text-align: center;
    padding: 30px;
  }

  .popAling button {
    margin-bottom: 0px !important;
  }
  .modal {
    top: 30% !important;
}
</style>
<div class="index-page">
  <section class="dashboard">
    <ul class="dashboard-layout">
      <li>
        <div class="front-dashboard open">
          <a href="javascript:;" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
          <!-- <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a> -->
          <? $this->load->view("widgets/dashboard-menu-box"); ?>
        </div>
      </li>

      <li class="open">
        <div class="aboutForm">

          <div class="col-md-12 col-xs-12 col-sm-12">
            <form id='update-contact_info-form'>
              <input type="hidden" name="user[user_id]" value="<?= $this->userid ?>">
              <h2> Personal Info</h2>

              <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-2 no-margin">
                  <label>First Name * </label>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-4 no-margin">
                  <input type="text" class="form-control" value="<?= $user_data['user_firstname'] ?>" required name='user[user_firstname]' placeholder="Enter Here">
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-2 no-margin">
                  <label>Last Name * </label>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-4 no-margin">
                  <input type="text" class="form-control" value="<?= $user_data['user_lastname'] ?>" required name='user[user_lastname]' placeholder="Enter Here">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-2 no-margin">
                  <label>User Name * </label>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-4 no-margin">
                  <input type="text" class="form-control" value="<?= $user_data['user_username'] ?>" required name='user[user_username]' placeholder="Enter Here">
                </div>
              </div>

              <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-2 no-margin">
                  <label>Phone *</label>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-4 no-margin">
                  <input type="text" class="form-control" value="<?= $user_data['ui_phone'] ?>" required name='user_info[ui_phone]' placeholder="Phone Number">
                </div>
              </div>

              <!-- <div class="row">
    <div class="col-md-3 col-xs-12 col-sm-2 no-margin">
        <label>Mobile *</label>
      </div>
      <div class="col-md-8 col-xs-12 col-sm-4 no-margin">
        <input type="text" class="form-control" value="<?= $user_data['ui_phone'] ?>"  required name='user_info[ui_mobile]' placeholder="Phone Number">
      </div>
    </div> -->



              <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-2 no-margin">
                  <label>Email *</label>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-10 no-margin">
                  <input type="email" value="<?= $user_data['user_email'] ?>" required name='user[user_email]' placeholder="Email" class="form-control">
                </div>
              </div>


              <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-2 no-margin">
                  <label>Profession *</label>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-10 no-margin">
                  <input type="text" value="<?= $user_data['ui_profession'] ?>" required name='user_info[ui_profession]' placeholder="Profession" class="form-control">
                </div>
              </div>

              <!-- <div class="row"> 
      <div class="col-md-3 col-xs-12 col-sm-2 no-margin">
        <label>Profession License Number *</label>
      </div>
      <div class="col-md-8 col-xs-12 col-sm-10 no-margin">
        <input type="text"  value="<? //= $user_data['ui_profession_license'] 
                                    ?>"  required name='user_info[ui_profession_license]'  placeholder="Profession" class="form-control">
      </div>
    </div>      
           -->
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-4">
                  <button id='update-contact_info-btn' type="submit">Update Info</button>
                </div>
                <div class="col-md-4"></div>
              </div>

            </form>

            <?
            $upaid = array();
            $upaid['where']['user_id'] = $this->userid;
            $datapaid = $this->model_user->find_all_active($upaid);
            ?>
            <? if ($datapaid[0]['user_paid'] == 1) : ?>
              <!-- <form id="canclesubscribeform">
                <div class="row">
                  <div class="col-md-3">Subscription</div>
                  <input type="hidden" name="user[user_id]" value="<?= $this->userid ?>">
                  <input type="hidden" name="user[user_paid]" value="0">
                  <input type="hidden" name="user[user_email]" value=<?= $datapaid[0]['user_email'] ?>>
                  <div class="col-md-4">
                    <button id='cancle-subscription' class="btn btn-danger" type="submit">Cancel Subscription</button>
                  </div>
                </div>
              </form> -->
              <div class="row">
                <div class="col-md-3">Subscription</div>
                <div class="col-md-4">
                  <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel Subscription</a>
                </div>
              </div>

            <? else : ?>
              <div class="row">
                <div class="col-md-3">Subscription</div>
                <div class="col-md-4">
                  <a href="<?= l('subscription') ?>" class="btn btn-primary">Subscribe</a>
                </div>
              </div>
            <? endif; ?>

          </div>
        </div>
      </li>
    </ul>
  </section>
</div>



<div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="canclesubscribeform">
        <div class="row">
          <div class="col-md-12 popAling">
            <p>Are you sure you want to cancel Subscription</p></br>
            <input type="hidden" name="user[user_id]" value="<?= $this->userid ?>">
            <input type="hidden" name="user[user_paid]" value="0">
            <input type="hidden" name="user[user_email]" value=<?= $datapaid[0]['user_email'] ?>>
            <button id='cancle-subscription' class="btn btn-danger" type="submit">Yes</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

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


  #update-address_info-btn {
    background-color: #e28f26;
    color: #fff;
    padding: 10px 30px;
    border: 1px solid;
    border-radius: 4px;
    display: block;
    width: 100%;
  }
</style>
<div class="index-page">
  <section class="dashboard">
    <ul class="dashboard-layout">
      <li>
        <div class="front-dashboard open">
          <!-- <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a> -->
          <? $this->load->view("widgets/dashboard-menu-box"); ?>
        </div>
      </li>

      <li class="open">
        <div class="aboutForm">

          <div class="col-md-12 col-xs-12 col-sm-12">

            <form id='update-address_info-form'>
              <h2>Address Info</h2>
              <input type="hidden" name="user_info[ui_user_id]" value="<?= $user_data['user_id'] ?>">
              <div class="row">
                <div class="col-md-12">
                  <input id="paddress" name="user_info[ui_address_primary]" value='<?= $user_data['ui_address_primary'] ?>' type="text" class="form-control" required placeholder="Primary Address" />
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <input id="saddress" name="user_info[ui_address_secondary]" value='<?= $user_data['ui_address_secondary'] ?>' type="text" class="form-control" placeholder="Secondary Address" />
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <input id="city" name="user_info[ui_city]" value='<?= $user_data['ui_city'] ?>' type="text" class="form-control" required placeholder="City" />
                </div>
                <div class="col-md-6">
                  <input id="city" name="user_info[ui_state]" value='<?= $user_data['ui_state'] ?>' type="text" class="form-control" required placeholder="State" />
                </div>
                <div class="col-md-6">
                  <select name="user_info[ui_country_id]" class="form-control" required>
                    <option value="">Select Country</option>
                    <? if (isset($country) and array_filled($country)) { ?>
                      <? foreach ($country as $id => $value) {
                        if ($user_data['ui_country_id'] > 0)
                          $selected = ($id == $user_data['ui_country_id']) ? 'selected=""' : '';
                        else
                          $selected = ($id == 223) ? 'selected=""' : '';
                      ?>
                        <option <?= $selected ?> value="<?= $id ?>"><?= $value ?></option>
                      <? } ?>
                    <? } ?>
                  </select>
                </div>
                <div class="col-md-6">
                  <input id="zip" name="user_info[ui_zip]" value='<?= $user_data['ui_zip'] ?>' type="text" class="form-control" placeholder="Zip Code" />
                </div>

                <? /*
    <div class="col-sm-4 col-xs-12 col-md-4">
      <select name="days" required="">
        <option value="">Select Day</option>
        <?php
        for ($i=1; $i <= 31; $i++) { 
          $selected = (isset($dob['day']) AND ($dob['day'] == $i)) ? 'selected=""' : '';
          echo "<option $selected value='$i'>$i</option>";
        }
        ?>
      </select>
    </div>
    <div class="col-sm-4 col-xs-12 col-md-4">
      <select name="month" required="">
        <option value="">Select Month</option>
        <?php
        for ($i=0; $i < 12; $i++) { 
          $selected = (isset($dob['month']) AND ($dob['month'] == ($i+1))) ? 'selected=""' : '';
          echo "<option $selected value='".($i+1)."'>".date("M",strtotime("17-01-01 +$i months"))."</option>";
        }
        ?>
      </select>
    </div>
    <div class="col-sm-4 col-xs-12 col-md-4">
      <select name="year" required="">
        <option value="">Select Year</option>
        <?php
        for ($i=0; $i <= 50; $i++) { 
          $year = date("Y",strtotime("17-01-01 -$i years"));
          $selected = (isset($dob['year']) AND ($dob['year'] == $year)) ? 'selected=""' : '';
          echo "<option $selected value='".$year."'>".$year."</option>";
        }
        ?>
      </select>
    </div>
	*/
                ?>

              </div>
              <button type="submit" id='update-address_info-btn'>Update Info</button>
            </form>
          </div>
        </div>
</div>
</div>


</li>
</ul>
</section>
</div>
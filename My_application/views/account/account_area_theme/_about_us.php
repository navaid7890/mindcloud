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


  #update-about-btn {
    background-color: #e28f26;
    color: #fff;
    padding: 10px 30px;
    border: 1px solid;
    border-radius: 4px;
    display: block;
    width: 100%;
    margin-top: 15px;
  }

  form#update-about-form label {
    margin-bottom: 10px;
    color: #888686;
  }

  .index-page ul.dashboard-layout>li.last {
    height: 80vh;
    overflow-y: scroll;
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
        <div class="col-md-6">
          <form role="form" class="" id='update-about-form'>
            <div class="row">
              <input type="hidden" name="user_info[ui_user_id]" value="<?= $user_data['user_id'] ?>">
              <div class="col-md-12">
                <label>Job Title </label>
                <input name="user_info[ui_exp_title]" value='<?= $user_data['ui_exp_title'] ?>' type="text" class="form-control" placeholder="Your Title" />
              </div>
              <div class="col-md-12">
                <label>Your Company Name </label>
                <input name="user_info[ui_exp_company]" value='<?= $user_data['ui_exp_company'] ?>' type="text" class="form-control" placeholder="Your Company Name" />
              </div>
              <div class="col-md-12">
                <label>Company Description </label>
                <textarea name="user_info[ui_exp_desc]" rows="7" class="form-control" placeholder="Your Company Description"><?= $user_data['ui_exp_desc'] ?></textarea>
              </div>
              <div class="col-md-12">
                <label>Website </label>
                <input id="website" name="user_info[ui_website]" value='<?= $user_data['ui_website'] ?>' type="text" class="form-control" placeholder="Your Website Link" />
              </div>
              <div class="col-md-12">
                <label>Description </label>
                <textarea id="description" rows="7" name="user_info[ui_description]" class="form-control" placeholder="Description"><?= $user_data['ui_description'] ?></textarea>
              </div>
              <div class="col-md-12">
                <label>Work Designation </label>
                <textarea id="ui_exp_title" rows="7" name="user_info[ui_exp_title]" class="form-control" placeholder="Description"><?= $user_data['ui_exp_title'] ?></textarea>
              </div>
              <div class="col-md-12">
                <label>School </label>
                <input name="user_info[ui_exp_school]" value='<?= $user_data['ui_exp_school'] ?>' type="text" class="form-control" placeholder="Your Title" />
              </div>
              <div class="col-md-12">
                <label>Degree </label>
                <input name="user_info[ui_exp_degree]" value='<?= $user_data['ui_exp_degree'] ?>' type="text" class="form-control" placeholder="Your Title" />
              </div>
              <div class="col-md-12">
                <label>Are you an </label>
                <select class="form-control select2me " name="<?=$user_data['ui_are_you_an']?>">
                  <option value="0">Are you an</option>
                  <option value="Entrepreneur">Entrepreneur</option>
                  <option value="Intrapreneur">Intrapreneur </option>
                  <option value="Growth Entrepreneur">Growth Entrepreneur</option>
                  <option value="Industry">Industry</option>

                </select>
              </div>


              <div class="col-md-3">
                <div class="addfile">
                  <!-- <label class="custom-file-upload" style="margin-top: 5px;">
          <input type="file" name="file" class="inputfile inputfile-1" style='position: absolute; opacity: 0;padding:5px' />
          Choose a profile image 
          </label> -->


                  <label class="fileContainer filelabel" style="margin: 10px 0px; border: 1px solid rgb(193, 193, 193);">
                    <img src="<?= get_image($user_data['ui_profile_image'], $user_data['ui_profile_image_path']) ?>" class="img-responsive" id='profile-img-tag' style="display: table;height: 120px;margin: 0 auto;width: 120px;" />
                    <input type="file" id='profile-img' name="file" style="display: none">
                  </label><br />
                  <span style="color:green">Recommendation : 120px x 120px</span>

                </div>
              </div>
            </div>
            <button type="submit" id='update-about-btn'>Update Info</button>
          </form>
        </div>


      </li>
    </ul>
  </section>
</div>
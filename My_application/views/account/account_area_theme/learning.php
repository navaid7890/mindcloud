<section class="dashboard">

   <ul class="dashboard-layout">
      <li>
         <div class="front-dashboard">
            <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
            <? $this->load->view("widgets/dashboard-menu-box"); ?>
         </div>
      </li>

      <li>
         <? $this->load->view("widgets/course-box"); ?>
      </li>

      <li>
         <div class="tutorial-box">
            <div class="tutorial-scroll-content">
               <div class="tutorial-content">
                  <div class="tutorial-head">
                     <div class="row align-items-center">
                        <div class="col-md-7">
                           <ul class="bredcum-links">
                              <li><a href="#">Learning Journey</a></li>
                              <li><a href="#">Introduction</a></li>
                           </ul>
                        </div>
                        <!-- <div class="col-md-5 text-right">
                           <div class="bredcum-right">
                              <a href="#" class="btn-round btn-hover">In progress <span></span></a>

                              <ul class="indicator-links">
                                 <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                                 <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                              </ul>
                           </div>
                        </div> -->
                     </div>
                  </div>

                  <div class="tutorial-mid hding-4 hding-3 para">
                     <div class="tutorial-mid-content">
                        <h4>What kind of Entrepreneur are you?</h4>
                        <div class="space"><br></div>
                        <p>Our Learning Journey is designed for entrepreneurs at all different stages </p>
                     </div>
                     <div class="space"><br><br></div>
                     <?

                     // debug($startup);
                     ?>
                     <ul class="tutorial-box-list">
                        <li>
                           <a href="https://mindcloud-bucket.s3.amazonaws.com/assets/Learning Journey_Intro 1_New Entrepreneur_Social Cut.mp4" data-fancybox>
                              <div class="tutorial-list-box">
                                 <div class="tutorial-box-content">
                                    <span><img src="<?= i('') ?>dashboard/home/icons/1.svg" style="margin-top: 5px;"></span>
                                    <div class="space"><br></div>
                                    <h3>New</h3>
                                    <p>Entrepreneur</p>
                                 </div>
                              </div>
                           </a>
                        </li>

                        <li>
                           <a href="https://mindcloud-bucket.s3.amazonaws.com/assets/Learning Journey_Intro 2_Corporate Intrapreneur_Social Cut.mp4" data-fancybox>
                              <div class="tutorial-list-box">
                                 <div class="tutorial-box-content">
                                    <span><img src="<?= i('') ?>dashboard/home/icons/5.svg"></span>
                                    <div class="space"><br></div>
                                    <h3>Corporate</h3>
                                    <p>Intrapreneurs</p>
                                 </div>
                              </div>
                           </a>
                        </li>

                        <li>
                           <a href="https://mindcloud-bucket.s3.amazonaws.com/assets/Learning Journey_Intro 3_Growth Entrepreneur_Social Cut.mp4" data-fancybox="media">
                              <div class="tutorial-list-box">
                                 <div class="tutorial-box-content">
                                    <span><img src="<?= i('') ?>dashboard/home/icons/6.png"></span>
                                    <div class="space"><br></div>
                                    <h3>Growth</h3>
                                    <p>Entrepreneur</p>
                                 </div>
                              </div>
                           </a>
                        </li>
                        <li style="display: none;">
                           <a href="https://mindcloud-bucket.s3.amazonaws.com/assets/Video_Fundraising_Entrepreneur_Intro_4.mp4" data-fancybox="media">
                              <div class="tutorial-list-box">
                                 <div class="tutorial-box-content">
                                    <span><img src="<?= i('') ?>dashboard/home/icons/6.png"></span>
                                    <div class="space"><br></div>
                                    <h3>Growth</h3>
                                    <p>Entrepreneur</p>
                                 </div>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <?

                  $param = array();
                  $param['order'] = "startup_id DESC";
                  $param['where']['startup_user_id'] = $this->userid;
                  $tool = $this->model_startup->find_one_active($param);
                  //debug($tool);

                  ?>
                  <div class="tutorial-footer hding-4">
                     <div class="tutorial-footer-content">
                        <h4>What is the name of your Startup?</h4>
                        <div classs="space"><br><br></div>
                        <form id="forms-content-statup">
                           <input type="hidden" name="startup[startup_user_id]" value="<?= $this->userid ?>">
                           <div class="fld-email">
                              <input type="text" name="startup[startup_name]" placeholder="Write Startup name here" required="" value="<?= $tool['startup_name'] ?>">
                           </div>
                           <div class="fld-btn">
                              <input type="submit" value="Confirm" id="forms-startup-btn">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </li>
   </ul>
</section>
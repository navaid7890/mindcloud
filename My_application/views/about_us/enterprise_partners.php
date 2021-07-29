<style>
.InnerBanner {
    background-image: url(<?= g('db.admin.bucketimg') . "cms_image/" . $con1['cms_page_image'] ?>);
}
.hding-1 strong {
    font-weight: 700;
}
</style>
<div class="forEnterprise-page">
            
         <section class="InnerBanner hding-1 para">
            <div class="container">
               <div class="bannerContent">
                  <h1><?= html_entity_decode($con1['cms_page_title']) ?></h1>  
                  <div class="space"><br><br></div>
                  <?= html_entity_decode($con1['cms_page_content']) ?>
                  <div class="space"><br><br></div>
<<<<<<< HEAD
                  <a href="<?=l('contact_us')?>" class="btn-theme btn-hover">Contact Us <span></span></a>
=======
                  <a href="<?= l('contact_us') ?>" class="btn-theme btn-hover">Contact Us <span></span></a>
>>>>>>> QA
               </div>   
            </div>   
         </section>
        <section class="whyPartSec hding-1 hding-2 para bg-white pt-100">
          <div class="container">
            <h1>Why <strong>Partner?</strong></h1>
            <div class="space"><br><br><br></div>

            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="whypart-content">
                  <h2><?= html_entity_decode($con2['cms_page_title']) ?></h2>
                  <div class="space"><bR></div>
                  <?= html_entity_decode($con2['cms_page_content']) ?>
                </div>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="whypart-mdl">
                  <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con2['cms_page_image'] ?>"></span>
                </div>
              </div>
            </div>

            <div class="hding-2 whypart-mid text-center">
              <h2>OR</h2>
            </div>

            <div class="row">

              <div class="col-lg-6 col-md-12">
                <div class="whypart-mdl">
                  <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con3['cms_page_image'] ?>"></span>
                </div>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="whypart-content">
                <?= html_entity_decode($con3['cms_page_content']) ?>
                </div>
              </div>

            </div>
          </div>
        </section>

        <section class="internSec hding-1 bg-white pad-sec">
          <div class="container">
            <div class="internHead">
              <h1>Intrapreneurship <strong>Insights</strong></h1>
            </div> 
            <div class="row">
              <div class="col-lg-4 col-md-12">
                <div class="internBox">
                  <span class="text-center d-block"><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>"></span>
                  <div class="space"><br><br></div>
                  <?= html_entity_decode($con4['cms_page_content']) ?>
                </div>
              </div>

              <div class="col-lg-4 col-md-12">
                <div class="internBox">
                  <span class="text-center d-block"><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>"></span>
                  <div class="space"><br><br></div>
                  <?= html_entity_decode($con5['cms_page_content']) ?>
                </div>
              </div>

              <div class="col-lg-4 col-md-12">
                <div class="internBox">
                  <span class="text-center d-block"><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>"></span>
                  <div class="space"><br><br></div>
                  <?= html_entity_decode($con6['cms_page_content']) ?>
                </div>
              </div>
            </div>

            <div class="space"><br><br><br><br></div>

            <div class="row align-items-center">
              <div class="col-lg-4 col-md-12">
                <div class="internBox">
                  <span class="text-center d-block"><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>"></span>
                  <div class="space"><br><br></div>
                  <?= html_entity_decode($con7['cms_page_content']) ?>
                </div>
              </div>

              <div class="col-md-4 d-none-mob">
                <div class="intern-steps">
                  <span><img src="https://mindcloud-bucket.s3.amazonaws.com/assets/images/cms_image/steps-mdl.jpg"></span>
                </div>
              </div>

              <div class="col-lg-4 col-md-12">
                <div class="internBox">
                  <span class="text-center d-block"><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>"></span>
                  <div class="space"><br><br></div>
                  <?= html_entity_decode($con8['cms_page_content']) ?>
                </div>
              </div>
            </div>

            <div class="space"><br><br><br><br></div>


            <div class="row">
              <div class="col-lg-4 col-md-12">
                <div class="internBox">
                  <span class="text-center d-block"><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>"></span>
                  <div class="space"><br><br></div>
                  <?= html_entity_decode($con9['cms_page_content']) ?>
                </div>
              </div>

              <div class="col-lg-4 col-md-12">
                <div class="internBox">
                  <span class="text-center d-block"><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>"></span>
                  <div class="space"><br><br></div>
                  <?= html_entity_decode($con10['cms_page_content']) ?>
                </div>
              </div>

              <div class="col-lg-4 col-md-12">
                <div class="internBox">
                  <span class="text-center d-block"><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>"></span>
                  <div class="space"><br><br></div>
                  <?= html_entity_decode($con11['cms_page_content']) ?>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="arrowmdlSec hding-1 pad-sec"> 
          <div class="container">
            <div class="arrowmdHead">
              <h1>Entrepreneurship <strong>Insights</strong></h1>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-12">
                <div class="arrowmdl-box mt-100">
                  <div class="arrowmdl-content">
                    <h6><?= html_entity_decode($con12['cms_page_title']) ?></h6>
                    <div class="space"><br></div>
                    <?= html_entity_decode($con12['cms_page_content']) ?>
                  </div>
                  <div class="space"><br><br></div>

                  <div class="arrowmdl-content">
                    <h6><?= html_entity_decode($con13['cms_page_title']) ?></h6>
                    <div class="space"><br></div>
                    <?= html_entity_decode($con13['cms_page_content']) ?>
                  </div>
                  <div class="space"><br><br></div>


                  <div class="arrowmdl-content">
                    <h6><?= html_entity_decode($con14['cms_page_title']) ?></h6>
                    <div class="space"><br></div>
                    <?= html_entity_decode($con14['cms_page_content']) ?>
                  </div>
                  <div class="space"><br><br></div>


                  <div class="arrowmdl-content">
                    <h6><?= html_entity_decode($con15['cms_page_title']) ?></h6>
                    <div class="space"><br></div>
                    <?= html_entity_decode($con15['cms_page_content']) ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 d-none-mob">
                <span><img src="https://mindcloud-bucket.s3.amazonaws.com/assets/images/cms_image/arrow.jpg"></span>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="arrowmdl-box mt-60  ">
                  <div class="arrowmdl-content">
                    <h6><?= html_entity_decode($con16['cms_page_title']) ?></h6>
                    <div class="space"><br></div>
                    <?= html_entity_decode($con16['cms_page_content']) ?>
                  </div>
                  <div class="space"><br><br></div>

                  <div class="arrowmdl-content">
                    <h6><?= html_entity_decode($con17['cms_page_title']) ?></h6>
                    <div class="space"><br></div>
                    <?= html_entity_decode($con17['cms_page_content']) ?>
                  </div>
                  <div class="space"><br><br></div>


                  <div class="arrowmdl-content">
                    <h6><?= html_entity_decode($con18['cms_page_title']) ?></h6>
                    <div class="space"><br></div>
                    <?= html_entity_decode($con18['cms_page_content']) ?>
                  </div>
                  <div class="space"><br><br></div>


                  <div class="arrowmdl-content">
                    <h6><?= html_entity_decode($con19['cms_page_title']) ?></h6>
                    <div class="space"><br></div>
                    <?= html_entity_decode($con19['cms_page_content']) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="dubbleboxSec hding-1 pad-sec bg-white">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="dubblbox-content">
                  <h1>Intrapreneur<strong>ship</strong></h1>
                  <h6><?= html_entity_decode($con20['cms_page_title']) ?></h6>
                  <?= html_entity_decode($con20['cms_page_content']) ?>

                  <ul>
                    <li>
                      <div class="dubble-box-inner">
                        <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con22['cms_page_image'] ?>"></span>
                        <div class="space"><br></div>
                        <h5><?= html_entity_decode($con22['cms_page_title']) ?></h5>
                        <div class="space"><br><br></div>
                        <?= html_entity_decode($con22['cms_page_content']) ?>
                      </div>
                    </li>

                    <li>
                      <div class="dubble-box-inner">
                        <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con23['cms_page_image'] ?>"></span>
                        <div class="space"><br></div>
                        <h5><?= html_entity_decode($con23['cms_page_title']) ?></h5>
                        <div class="space"><br><br></div>
                        <?= html_entity_decode($con23['cms_page_content']) ?>
                      </div>
                    </li>

                    <li>
                      <div class="dubble-box-inner">
                        <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con24['cms_page_image'] ?>"></span>
                        <div class="space"><br></div>
                        <h5><?= html_entity_decode($con24['cms_page_title']) ?></h5>
                        <div class="space"><br><br></div>
                        <?= html_entity_decode($con24['cms_page_content']) ?>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-6 col-md-6">
                <div class="dubblbox-content">
                  <h1>Entrepreneur<strong>ship</strong></h1>
                  <h6><?= html_entity_decode($con21['cms_page_title']) ?></h6>
                  <?= html_entity_decode($con21['cms_page_content']) ?>
                  <ul>
                    <li>
                      <div class="dubble-box-inner">
                        <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con25['cms_page_image'] ?>"></span>
                        <div class="space"><br></div>
                        <h5><?= html_entity_decode($con25['cms_page_title']) ?></h5>
                        <div class="space"><br><br></div>
                        <?= html_entity_decode($con25['cms_page_content']) ?>
                      </div>
                    </li>

                    <li>
                      <div class="dubble-box-inner">
                        <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con26['cms_page_image'] ?>"></span>
                        <div class="space"><br></div>
                        <h5><?= html_entity_decode($con26['cms_page_title']) ?></h5>
                        <div class="space"><br><br></div>
                        <?= html_entity_decode($con26['cms_page_content']) ?>
                      </div>
                    </li>

                    <li>
                      <div class="dubble-box-inner">
                        <span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con27['cms_page_image'] ?>"></span>
                        <div class="space"><br></div>
                        <h5><?= html_entity_decode($con27['cms_page_title']) ?></h5>
                        <div class="space"><br><br></div>
                        <?= html_entity_decode($con27['cms_page_content']) ?>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </section>

        <!-- <section class="reportSec hding-1 pad-sec">
          <div class="container">
            <div class="reportHead">
              <h1>Sustainability and <strong>Impact Reports</strong></h1>
            </div>

            <div class="reportBox">

                <div class="row">

                  <div class="col-lg-8 col-md-12">
                    <h5>Enterprise Dashboard gives 5 Reporting Graphs</h5>

                    <div class="row align-items-center">
                      <div class="col-md-4">
                        <p>Total Users</p>
                      </div>

                      <div class="col-md-6">
                        <div class="progress-light">
                          <div class="progress-dark"></div>
                        </div>
                      </div>

                      <div class="col-md-2 text-right">
                        <p>10,0000</p>
                      </div>
                    </div>
                    <div class="space"><br></div>

                    <div class="row align-items-center">
                      <div class="col-md-4">
                        <p>Completed Journeys</p>
                      </div>

                      <div class="col-md-6">
                        <div class="progress-light">
                          <div class="progress-dark"></div>
                        </div>
                      </div>

                      <div class="col-md-2 text-right">
                        <p>980</p>
                      </div>
                    </div>

                    <div class="space"><br></div>

                    <div class="row align-items-center">
                      <div class="col-md-4">
                        <p>Watched Experts Tutorials</p>
                      </div>

                      <div class="col-md-6">
                        <div class="progress-light">
                          <div class="progress-dark"></div>
                        </div>
                      </div>

                      <div class="col-md-2 text-right">
                        <p>12%</p>
                      </div>
                    </div>

                    <div class="space"><br></div>

                    <div class="row align-items-center">
                      <div class="col-md-4">
                        <p>Issued Certificates</p>
                      </div>

                      <div class="col-md-6">
                        <div class="progress-light">
                        </div>
                      </div>

                      <div class="col-md-2 text-right">
                        <p>10,000</p>
                      </div>
                    </div>

                    <div class="space"><br></div>

                    <div class="row align-items-center">
                      <div class="col-md-4">
                        <p>Users per Month</p>
                      </div>

                      <div class="col-md-6">
                        <div class="progress-light">
                        </div>
                      </div>

                      <div class="col-md-2 text-right">
                        <p>999</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-12">
                    <div class="circle-progress text-center">
                      <h4>Total Progress</h4>

                      <div id="activeBorder" class="active-border">
                        <div id="circle" class="circle">
                            <span class="prec">60</span>
                            <span id="startDeg" class="60"></span>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              
            </div>

          </div>
        </section> -->
        <? $this->load->view('widgets/_clients'); ?>
      
      </div>
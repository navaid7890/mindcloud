<style>
   .joinSec {
      background-image: linear-gradient(to left, rgba(8, 74, 147, 0.8), rgba(8, 74, 147, 0.8)), url(<?= g('db.admin.bucketimg') . "cms_image/" . $con4['cms_page_image'] ?>);
   }

   .InnerBanner {
      background-image: url(<?= g('db.admin.bucketimg') . "cms_image/" . $con3['cms_page_image'] ?>);
   }

   .abt-col-content strong {
      font-weight: 700;
   }

   .Philosophy h2 strong {
      color: #fdbe41;
      font-weight: 700;
   }

   .abtContent strong {
      font-weight: 700;
   }

   .abtContent {
      font-weight: 300;
      width: 92%;
      font-size: 20px;
      line-height: normal;
      color: hsl(220, 29%, 28%);
      margin: 20px 0px;
   }

   .abtContent h6 {
      font-size: 13px;
      font-weight: 800;
      margin: 10px 0px;
   }
</style>
<div class="abt-page">

   <section class="InnerBanner hding-1 para">
      <div class="container">
         <div class="bannerContent text-center">
            <h1><?= html_entity_decode($con3['cms_page_title']) ?></h1>
            <div class="space"><br><br></div>

            <p><?= html_entity_decode($con3['cms_page_content']) ?></p>
            <div class="space"><br><br></div>

            <a href="<?= l('contact_us') ?>" class="btn-theme btn-hover">Contact Us <span></span></a>
         </div>
      </div>
   </section>

   <section class="abt-col hding-2 para pad-sec bg-white">
      <div class="container">
         <div class="row align-items-center pb-100">
            <div class="col-lg-6 col-md-12">
               <span>
                  <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con1['cms_page_image'] ?>">
               </span>
            </div>

            <div class="col-lg-6 col-md-12">
               <div class="abt-col-content">

                  <h2><?= html_entity_decode($con1['cms_page_title']) ?></h2>
                  <div class="space"><br></div>
                  <p><?= html_entity_decode($con1['cms_page_content']) ?></p>
                  <div class="space"><br></div>
                  <a href="#" class="btn-theme btn-hover">Explore Experts Tutorials <span></span></a>
               </div>
            </div>
         </div>

         <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 order-2">
               <div class="abt-col-content">
                  <h2><?= html_entity_decode($con2['cms_page_title']) ?></h2>
                  <div class="space"><br></div>
                  <p><?= html_entity_decode($con2['cms_page_content']) ?></p>
                  <div class="space"><br></div>
                  <a href="#" class="btn-theme btn-hover">Explore Experts Tutorials <span></span></a>
               </div>
            </div>

            <div class="col-lg-6 col-md-12 order-1">
               <span>
                  <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con2['cms_page_image'] ?>">
               </span>
            </div>
         </div>
      </div>
   </section>

   <section class="joinSec hding-2 para">
      <div class="joinContent Philosophy">
         <div class="container">
            <h2><?= html_entity_decode($con4['cms_page_title']) ?></h2>
            <div class="space"><br></div>
            <p><?= html_entity_decode($con4['cms_page_content']) ?></p>
         </div>
      </div>
   </section>

   <section class="abt-col hding-2 para pad-sec bg-white">
      <div class="container">


         <div class="row align-items-center pb-100">
            <div class="col-lg-6 col-md-12 order-2">
               <div class="abt-col-content">
                  <h2><?= html_entity_decode($con5['cms_page_title']) ?></h2>
                  <div class="space"><br></div>
                  <p><?= html_entity_decode($con5['cms_page_content']) ?></p>
               </div>
            </div>

            <div class="col-lg-6 col-md-12 order-1">
               <span>
                  <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con5['cms_page_image'] ?>">
               </span>
            </div>
         </div>

         <div class="row align-items-center pb-100">
            <div class="col-lg-6 col-md-12">
               <span>
                  <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con6['cms_page_image'] ?>">
               </span>
            </div>

            <div class="col-lg-6 col-md-12">
               <div class="abt-col-content">
                  <h2><?= html_entity_decode($con6['cms_page_title']) ?></h2>
                  <div class="space"><br></div>
                  <p><?= html_entity_decode($con6['cms_page_content']) ?></p>
               </div>
            </div>
         </div>

         <div class="counterSec">
            <ul>
               <li>
                  <div class="counterBox">
                     <h6><span>130</span> Graduates</h6>
                  </div>
               </li>

               <li>
                  <div class="counterBox">
                     <h6><span>11</span> Cohorts</h6>
                  </div>
               </li>

               <li>
                  <div class="counterBox">
                     <h6><span>09</span> Demo Days</h6>
                  </div>
               </li>
               <li>
                  <div class="counterBox">
                     <h6><span>07</span> VC Firms-Jury</h6>
                  </div>
               </li>

            </ul>
         </div>
      </div>
   </section>

   <section class="abtSec para pad-sec">
      <div class="container">
         <div class="abtBox">
            <div class="row">
               <div class="col-lg-6 col-md-12 flex-center">
                  <div class="abtContent">
                     <h3><?= html_entity_decode($con7['cms_page_title']) ?></h3>


                     <div class="disp-cont" style="display:block;">
                        <p>
                           <?= short_text($con7['cms_page_content'], 368) ?>
                        </p>
                     </div>
                     <div class="more-cont" style="display:none;">
                        <?= html_entity_decode($con7['cms_page_content']) ?>
                     </div>
                     <a href="#" class="more">more</a>

                     <div class="space"><br></div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 text-right">
                  <a href="<?= g('db.admin.bucket') . $con7['tutorial_video'] ?>" data-fancybox="media">
                     <div class="video-box">
                        <img src="<?= g('db.admin.bucketimg') . "cms_image/" . $con7['cms_page_image'] ?>">
                        <span><i class="fas fa-play"></i></span>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="teamSec hding-2 para bg-white">
      <div class="container">
         <? if (!empty($advisory)) : ?>
            <div class="ad-bord">
               <h2>Mind Cloud Tribe <strong>Advisory Board</strong></h2>
               <div class="space"><br><br></div>
               <ul>
                  <?php if (isset($advisory) && array_filled($advisory)) : ?>
                     <?php foreach ($advisory as $key => $value) : ?>
                        <li>
                           <div class="userBox">
                              <div class="useBox-profile">
                                 <span><img src="<?= g('db.admin.bucketimg') . "team/" . $value['team_image'] ?>"></span>
                                 <h5><?= $value['team_name'] ?></h5>
                              </div>
                              <div class="userBox-content">
                                 <p><?= $value['team_description'] ?></p>
                              </div>
                           </div>

                        </li>
                     <?php endforeach; ?>
                  <?php endif ?>
               </ul>
            </div>
         <?php endif ?>
         <div class="space"><br><br><br><br><br></div>
         <? if (!empty($team)) : ?>
            <div class="mng-bord">
               <h2>Mind Cloud Tribe <strong> Management Team</strong></h2>
               <div class="space"><br><br></div>
               <ul>
                  <?php if (isset($team) && array_filled($team)) : ?>
                     <?php foreach ($team as $key => $value) : ?>
                        <li>
                           <div class="userBox">
                              <div class="useBox-profile">
                                 <span><img src="<?= g('db.admin.bucketimg') . "team/" . $value['team_image'] ?>"></span>
                                 <h5><?= $value['team_name'] ?></h5>
                              </div>
                              <div class="userBox-content">
                                 <p><?= $value['team_description'] ?></p>
                              </div>
                           </div>

                        </li>
                     <?php endforeach; ?>
                  <?php endif ?>
               </ul>
            </div>
         <?php endif ?>
         
      </div>
   </section>

   <section class="joinSec abt-joinSec hding-2 para">
      <div class="joinContent">
         <h2><?= html_entity_decode($con8['cms_page_title']) ?></h2>
         <div class="space"><br></div>
         <p><?= html_entity_decode($con8['cms_page_content']) ?></p>
         <div class="space"><br><br></div>
         <a href="<?= l('contact_us') ?>" class="btn-theme btn-hover">Contact Us <span></span></a>
      </div>
   </section>


   <? $this->load->view('widgets/_clients'); ?>


</div>

<script>
   $('.more').click(function(e) {
      $(".disp-cont").toggle();
      e.preventDefault();
      $(this).text(function(i, t) {
         return t == 'close' ? 'more' : 'close';
      }).prev('.more-cont').slideToggle()
   });
</script>
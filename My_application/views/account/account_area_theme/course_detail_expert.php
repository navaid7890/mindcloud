<style>
   .faqBox a {
      font-size: 20px;
      color: #5C677D;
      text-transform: capitalize;
      display: block;
      width: 100%;
   }

   .faqBox a i {
      opacity: 0.5;
      margin-right: 34px;
   }

   .dashboard {
      margin-top: 0px;
   }

   header {
      position: sticky;
      top: 0;
      background: #fff;
      z-index: 2;
   }

   .contentArea {
      color: #fff;
      padding-top: 15px;
   }

   .toBeLocked strong.locked {
      display: none;
   }

   .index-page ul.dashboard-layout>li.last {
      padding: 0px;
   }
</style>
<div class="abt-tut-page index-page">
   <?
   $upaid = array();
   $upaid['where']['user_id'] = $this->userid;
   $datapaid = $this->model_user->find_all_active($upaid);
   ?>
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
            <div class="index-page-wrap">
               <div class="mainBanner hding-1 para">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-7 col-md-12 offset-lg-1">
                           <div>
                              <?
                              $a = $course[0]['tutorial_category_id'];
                              $dt = $this->model_category->find_by_pk($a);

                              ?>
                              <ul class="bnr-cate">
                                 <li>Category</li>
                                 <li><a href="javascript:void(0)">

                                       <? foreach ($ct as $key => $value) :
                                          $a = $value['category_name'];
                                          if ($key >= 1) {
                                             echo " , ";
                                          }
                                          echo $value['category_name'];

                                       ?>
                                       <? endforeach; ?>


                                    </a></li>
                              </ul>
                              <ul>
                                 <li>
                                    <div class="tutorialName">
                                       <h1><?= $course[0]['tutorial_name'] ?></h1>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="contentArea">
                                       <?= html_entity_decode($course[0]['tutorial_desc']) ?><br>
                                    </div>
                                 </li>
                              </ul>
                              <ul class="usr-rating">
                                 <?
                                 $rating = $this->model_learning_journey_course_review->get_avg_reating($course[0]['tutorial_id']);
                                 ?>
                                 <?php
                                 for ($x = 1; $x <= $rating[0]['Rating']; $x++) { ?>
                                    <li><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                 <? } ?>
                              </ul>
                           </div>

                           <div class="row pt-100 icon-box-wrap">
                              <div class="col-md-4">
                                 <div class="icon-box">
                                    <span>
                                       <i class="fas fa-user"></i>
                                    </span>
                                    <h6><span>Created by</span><?= $course[0]['expert_name'] ?></h6>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="icon-box">
                                    <span>
                                       <i class="fas fa-comment"></i>
                                    </span>
                                    <h6><span>Course Language</span><?= $course[0]['language_name'] ?></h6>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="icon-box">
                                    <span>
                                       <i class="fas fa-calendar-plus"></i>
                                    </span>
                                    <h6><span>Last updated</span><?= $course[0]['tutorial_createdon'] ?></h6>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                           <?
                           // debug($value);
                           $vidcat = array();
                           $vidcat['where']['cp_course_id'] = $course[0]['tutorial_id'];
                           $vidcat = $this->model_course_tutorial->find_all_active($vidcat);
                           // debug($cate) ;
                           $vid_name = array();
                           $vid_name['where']['videos_id'] = $vidcat[0]['cp_tutorial_id'];
                           $vid_name = $this->model_videos->find_all_active($vid_name);

                           ?>
                           <div class="video-card">
                              <? if (!empty($course[0]['tutorial_youtube_video'])) : ?>
                                 <a href="<?= $course[0]['tutorial_youtube_video'] ?>" data-fancybox>
                                 <? else : ?>
                                    <a href="<?= g('db.admin.bucket') . $course[0]['tutorial_video'] ?>" data-fancybox>
                                    <? endif; ?>
                                    <div class="video-box">
                                       <img src="<?= g('db.admin.bucketimg') . $vid_name[0]['videos_image2'] ?>" />
                                       <span><i class="fas fa-play"></i></span>
                                    </div>
                                    </a>
                                    <div class="video-content">
                                       <div>
                                          <span><?= html_entity_decode($course[0]['tutorial_duration']) ?></span>
                                          <ul class="tut-info">
                                             <li><i><img src="<?= i('') ?>icons/1.png"></i> Professional Certification </li>

                                             <? if ($datapaid[0]['user_paid'] == 0) : ?>
                                                <li><a href="<?= l('subscription') ?>">1-Year Access </a></li>
                                             <? endif; ?>

                                             <!-- <form> -->
                                             <input type="hidden" name="product_qty" class="qtystyle" value="1" min="1" max="1">
                                             <input type="hidden" name="product_img" value="<?= get_image($course[0]['tutorial_image'], $course[0]['tutorial_image_path']) ?>" class="productimage" value="">
                                             <input type="hidden" name="product_price" value="0" class="productprice">
                                             <input type="hidden" name="product_id" value="<?= $course[0]['tutorial_id'] ?>" class="productid">
                                             <input type="hidden" name="product_name" value="7- Day Access to Mind Cloud Tribe: allows you to see 7 tutorial" class="productname">
                                             <li><a href="<?= l('account/profile/expert-detail-tutorial') ?>?courseid=<?= $course[0]['tutorial_id'] ?>">Continue Expert Tutorial
                                                   <!--  -->
                                                </a></li>
                                             <!-- 
                           </form> -->
                                          </ul>
                                       </div>
                                    </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <? //= debug($datapaid[0]['user_paid']) 
               ?>
               <?
               $courfreecheck = array();
               $courfreecheck['where']['tutorial_id'] = $course[0]['tutorial_id'];
               $datacourfreecheck = $this->model_tutorial->find_all_active($courfreecheck);
               ?>

               <? //= debug($datacourfreecheck[0]['tutorial_free_status']) 
               ?>



               <section class="jrnySec hding-2 pad-sec para">
                  <div class="container">
                     <div class="jr-top row">
                        <div class="jrnyHead col-lg-10 col-md-10 offset-lg-1 offset-md-1">
                           <h2>In This <strong>Tutorial</strong> You Will Learn</h2>
                           <p><?= html_entity_decode($course[0]['tutorial_desc2']) ?></p>
                        </div>
                        <div class="space"><br><br><br></div>


                        <div class="jrnyFaq col-lg-10 col-md-10 offset-lg-1 offset-md-1">
                           <div class="space"><br><br><br></div>
                           <h2>Tutorial Content</h2>
                           <div class="sapace"><br><br></div>
                           <?php if ($datapaid[0]['user_paid'] == 0  && $datacourfreecheck[0]['tutorial_free_status'] == 0) : ?>
                              <style>
                                 .toBeLocked strong.locked {
                                    margin-left: 5px;
                                    display: initial;
                                    float: right;
                                 }
                              </style>
                              <script>
                                 $(document).ready(function() {
                                    var newUrl = "<?= l('subscription') ?>";
                                    // $('.toBeLocked').click(false);
                                    $(".toBeLocked .faqBoxLock a").attr('href', newUrl);

                                 });
                              </script>
                           <?php endif ?>
                           <ul class="colasebar">
                              <li class="toBeLocked">
                                 <div class="faqBoxLock">
                                    <a href="<?= l('account/profile/expert-detail-tutorial-intro-video') ?>?courseid=<?= $course[0]['tutorial_id'] ?>">
                                       <i class="fas fa-info"></i> Tutorial - 1 Minute Intro<strong class="locked"><i class="fas fa-lock"></i></strong></a>
                                 </div>
                              </li>
                              <li>
                                 <div class="faqBox">
                                    <span><i class="fas fa-scroll"></i>Tutorial Description</span>
                                    <div class="expandable">
                                       <?= html_entity_decode($course[0]['tutorial_desc2']) ?>
                                    </div>
                                 </div>
                              </li>

                              <? if (isset($lc) and array_filled($lc)) : ?>
                                 <? foreach ($lc as $key => $value) : ?>

                                    <li class="toBeLocked">
                                       <div class="faqBoxLock">
                                          <a href="<?= l('account/profile/expert-detail-tutorial-video') ?>?courseid=<?= $course[0]['tutorial_id'] ?>&tutorialid=<?= $value['videos_id'] ?>">
                                             <i class="fas fa-video"></i>Tutorial - Video and Transcript<strong class="locked"><i class="fas fa-lock"></i></strong></a>
                                       </div>
                                    </li>

                                 <? endforeach; ?>
                              <? endif; ?>
                           </ul>
                        </div>
                     </div>

                     <div class="jr-btm col-lg-10 col-md-10 offset-lg-1 offset-md-1">
                        <div class="user-review">

                           <?php if (isset($review) && array_filled($review)) : ?>
                              <h2>User <strong> Reviews </strong></h2>
                              <div class="space"><br><br></div>
                              <?php foreach ($review as $key => $value) : ?>
                                 <div class="row">
                                    <div class="col-lg-1 col-md-12">
                                       <div class="profile-img">
                                          <img src="<?= get_image($this->layout_data['user_data']['ui_profile_image'], $this->layout_data['user_data']['ui_profile_image_path']) ?>">
                                       </div>
                                    </div>

                                    <div class="col-lg-11 col-md-12">

                                       <div class="usr-review">
                                          <?
                                          $user_name = array();
                                          $user_name['where']['user_id'] = $review[$key]['learning_journey_course_review_user_id'];
                                          $user = $this->model_user->find_all_active($user_name);
                                          ?>
                                          <h3><?= $user[0]['user_firstname'] ?></h3>
                                          <div class="space"><br></div>
                                          <ul class="usr-rating">
                                             <?php
                                             for ($x = 1; $x <= $review[$key]['learning_journey_course_review_stars']; $x++) { ?>
                                                <li><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                             <? } ?>
                                          </ul>
                                          <p><?= $review[$key]['learning_journey_course_review_createdon'] ?></p>
                                       </div>
                                       <div class="user-content">
                                          <p><?= $review[$key]['learning_journey_course_review_desc'] ?></p>
                                       </div>

                                    </div>
                                 </div>
                                 <div class="space"><br><br><br></div>
                              <?php endforeach; ?>
                           <?php endif ?>


                        </div>
                     </div>

                  </div>
               </section>
               <section class="faqSec hding-2 para">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1">

                           <div class="faqHead">
                              <h2>FAQs about <strong>Experts Tutorials</strong></h2>
                           </div>
                           <ul class="colasebar">
                              <? if (isset($faq) and array_filled($faq)) : ?>
                                 <? foreach ($faq as $key => $value) : ?>
                                    <li>
                                       <div class="faqBar">
                                          <span><?= $value['faq_question'] ?> <i class="fal fa-angle-down"></i></span>
                                          <div class="expandable">
                                             <?= html_entity_decode($value['faq_answer']) ?>
                                          </div>
                                       </div>
                                    </li>
                                 <? endforeach; ?>
                              <? endif; ?>
                           </ul>

                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </li>
      </ul>
   </section>
</div>
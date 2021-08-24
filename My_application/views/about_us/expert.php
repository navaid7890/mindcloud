<style>
   .my p {
      font-size: 20px;
      line-height: normal;
      color: #fff;
   }

   .joinSec {
      background-image: linear-gradient(to left, rgba(8, 74, 147, 0.8), rgba(8, 74, 147, 0.8)), url(' <?= g('db.admin.bucketimg') . "cms_image/" . $check['cms_page_image'] ?>');
      text-align: center;
      padding: 80px 0 90px;
      background-size: cover;
      background-position: center center;
   }

   .bannerSeactionArea a {
      /* color: #e18e25; */
      color: yellow;
   }

   .consult-left h2 strong span strong,
   .consult-head strong,
   .mainBanner strong,
   .joinContent strong {
      font-weight: 700;
   }

   .consult-left h2 strong {
      font-weight: 700;
   }

   .joinContent .hding-2 h2 {
      font-size: 36px;
      font-weight: 400;
      color: #33415C;
      text-transform: inherit;
      line-height: normal;
   }

   .mainBanner h1 {
      border-bottom: 8px solid #F4C150;
      display: inline-block;
   }

   ul.paginationMC>li.active a {
      background: #fdbe41;
      color: #fff;
   }

   ul.paginationMC>li>a {
      padding: 15px;
      background: #fff;
      border-radius: 5px;
      color: #000;
   }

   ul.paginationMC>li {
      display: inline-block;
      margin-right: 15px;
   }

   ul.paginationMC li.first {
      display: none;
   }

   ul.paginationMC li.first.active {
      display: inline-block;
   }

   .my h1:after {
      content: "";
      height: 12px;
      display: block;
      width: 12px;
      border: 3px solid #356da2;
      background: #1d90d9;
      position: absolute;
      bottom: -14px;
      border-radius: 100px;
      right: -4px;
   }

   .btnExpertWatch {
      color: #fff;
      margin-top: 10px;
      float: right;
   }

   @media (max-width:1200px) {
      .btnExpertWatch {
         float: none;
      }
   }
</style>

<div class="mainBanner home-banner para" style="background-image:url('<?= g('db.admin.bucketimg') . "cms_image/" . $con1['cms_page_image'] ?>');">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-12 col-md-12">
            <div class="my">
               <h1><?= html_entity_decode($cont1['cms_page_title']) ?> </strong></h1>
               <div class="space"><br><br></div>
               <div class="row">
                  <div class="col-lg-6 col-md-12 bannerSeactionArea">
                     <?= html_entity_decode($cont1['cms_page_content']) ?>
                  </div>
                  <div class="col-lg-6 col-md-12 bannerSeactionArea">
                     <?= html_entity_decode($cont2['cms_page_content']) ?>
                     <a href="https://mindcloud-bucket.s3.amazonaws.com/assets/HOW_IT_WORKS_COMPLETE.mp4" class="btn-links btnExpertWatch" data-fancybox="media"><i class="fas fa-play-circle"></i> watch how it works</a>
                  </div>

               </div>
               <div class="space"><br><br></div>

               <? if ($this->userid > 0) {
                  $usdata = $this->layout_data['user_data'];
               } ?>
               <? if ($usdata['user_paid'] == 0) { ?>
                  <a href="javascript:void(0)" class="btn-theme btn-hover">Start your Free Trial <span></span></a>

               <? } ?>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="expert-page-Sec pad-sec">
   <div class="container">
      <div class="experttut-Sec">
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="side-bar sticky-top">
                  <div class="searchBox">
                     <h4>What do you want to learn?</h4>

                     <form action="" method="GET">
                        <div class="fld-search">
                           <input type="text" name="search" placeholder="Search by Keyword">
                           <button type="submit"><i class="fal fa-search"></i></button>
                        </div>
                     </form>
                  </div>
                  <div class="space"><br><br><br></div>
                  <div class="select-cate">
                     <h4>Select by Expert </h4>
                     <div class="fld-select">
                        <select id='forum_category'>
                           <option>All Experts</option>
                           <? if (isset($ex) and array_filled($ex)) : ?>
                              <? foreach ($ex as $key => $value) : ?>
                                 <option value="<?= $value['expert_id'] ?>" <?= $this->input->get('expert') == $value['expert_id'] ? 'selected=""' : '' ?>>
                                    <?= $value['expert_name'] ?>
                                 </option>
                              <? endforeach; ?>
                           <? endif; ?>
                        </select>
                        <span><i class="fal fa-angle-down"></i></span>
                     </div>
                  </div>
                  <div class="sapce"><br><br><br></div>
                  <div class="cate-wrap">
                     <h4>Select by Category</h4>
                     <div class="cate-box">
                        <h5>All Categories</h5>
                        <ul>
                           <? if (isset($main_categories) and array_filled($main_categories)) : ?>
                              <? foreach ($main_categories as $key => $value) : ?>
                                 <?
                                 $a = $value['category_id'];

                                 ?>
                                 <!-- ( <? //= $value['tutorials'] 
                                          ?> ) -->
                                 <li><a href="<?= l('expert-tutorial') ?>?cat=<?= $a ?>"><?= $value['category_name'] ?> ( <?= $value['tutorials'] ?> )</a> </li>
                              <? endforeach; ?>
                           <? endif; ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-8 col-md-6">
               <div class="xpert-box">
                  <div class="xpert-content">
                     <div class="sapce"><br><br></div>
                     <? if (empty($art)) { ?>
                        <h1 class="text-center" style="color: #000; font-size:30px; font-weight:700;">Course Not Found</h1>
                     <? } else { ?>
                        <ul class="who-list tut-list">
                           <?php if (isset($art) && array_filled($art)) : ?>
                              <?php foreach ($art as $key => $value) : ?>
                                 <li>
                                    <div class="vid-box">

                                       <a href="<?= g('db.admin.bucket') . $value['tutorial_video'] ?>" data-fancybox="media">
                                          <div class="video-box">
                                             <img src="<?= g('db.admin.bucketimg') . $value['tutorial_image2'] ?>">
                                             <span><i class="fas fa-play"></i> </span>
                                             <?
                                             // debug($value);
                                             $coursecat = array();
                                             $coursecat['where']['cp_course_id'] = $value['tutorial_id'];
                                             $cate = $this->model_course_category->find_all_active($coursecat);

                                             $cat_name = array();
                                             $cat_name['where']['category_id'] = $cate[0]['cp_category_id'];
                                             $cat_name = $this->model_category->find_all_active($cat_name);
                                             ?>
                                             <!-- <a href="javascript:;" class="cate-tag"><? // $value['tutorial_level'] 
                                                                                          ?></a> -->
                                             <a href="javascript:;" class="cate-tag"><?= $cat_name[0]['category_name'] ?></a>
                                          </div>

                                       </a>

                                       <div class="vid-content">
                                          <h4><a href="<?= l('course-detail') . '/' . $value['tutorial_slug'] ?>" style="color:#33415C;"><?= $value['tutorial_name'] ?></a></h4>
                                          <div class="row align-items-center">
                                             <div class="col-md-12">
                                                <ul class="login-btnExpert">
                                                   <li><a href="javascript:;"><span><img src="<?= g('db.admin.bucketimg') . $value['expert_image'] ?>"></span> <?= $value['expert_name'] ?> </a></li>
                                                </ul>
                                             </div>
                                             <div class="col-md-8 coutArea">
                                                <ul class="rating">
                                                   <? $rating = $this->model_learning_journey_course_review->get_avg_reating($value['tutorial_id']); ?>
                                                   <?php
                                                   for ($x = 1; $x <= $rating[0]['Rating']; $x++) { ?>
                                                      "
                                                      <li><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                                      ";
                                                   <? } ?>
                                                </ul>

                                             </div>
                                             <div class="col-md-4 text-right">
                                                <h6><?= price($value['tutorial_price']) ?></h6>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              <?php endforeach; ?>
                           <?php endif ?>
                        </ul>
                     <? } ?>

                     <? if (empty(isset($_GET['cat']) || isset($_GET['expert']) || isset($_GET['search']))) { ?>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="text-center">
                                 <nav><br /><br />
                                    <ul class="paginationMC">
                                       <?= $links ?>
                                    </ul>
                                 </nav>
                              </div>
                           </div>
                        </div>

                     <? } ?>
                     <!-- <div class="space"><br><br></div>
                     <a href="#" class="btn-links">See more Experts Tutorials</a>
                     
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
<? $this->load->view('widgets/_cant_find_what_youre_looking_for'); ?>


<section class="whoSec hding-2 para pad-sec">
   <div class="container">
      <? $this->load->view('widgets/_most_watched_tutorials'); ?>


      <!-- <div class="mostcateSec">
         <div class="mostHead">
            <h2>Most Popular <strong> Categories </strong></h2>
         </div>
         <div class="space"><br><br></div>
         <ul class="cate-list">
            <? //if (isset($popular) and array_filled($popular)) : 
            ?>
               <? //foreach ($popular as $key => $value) : 
               ?>
                  <li>
                     <p><span><img src="<?= i('') ?>icons/category/1.svg"></span> <?= $value['category_name'] ?></p>
                  </li>
               <? //endforeach; 
               ?>
            <? //endif; 
            ?>
         </ul>
      </div> -->
      <? $this->load->view('widgets/_most_popular_categories'); ?>

   </div>
</section>
<section class="expertsdash">
   <div class="container">
      <div class="consult-sec hding-2 para">
         <div class="consult-head">
            <h2><?= html_entity_decode($con1['cms_page_title']) ?> </h2>
            <div class="space"><br><br></div>
            <?= html_entity_decode($con1['cms_page_content']) ?>
         </div>
         <div classs="sapce"><br><br><br></div>
         <div class="row border-box">
            <div class="col-lg-4 col-md-5 pad-zero">
               <div class="consult-left">
                  <div>
                     <h2>Select <strong> Expert <br>Category </strong></h2>
                     <ul class="consult-left-slide">
                        <li>
                           <div class="consult-left-content">
                              <?= html_entity_decode($con2['cms_page_content']) ?>
                           </div>
                           <a href="<?= l('booking') ?>" class="btn-theme" style="margin-top: 60px;padding: 22px;">Start Consulting <span style="top: 194.7px; left: 165.303px;"></span></a>

                        </li>


                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-8 col-md-7 pad-zero">
               <div class="consult-content">
                  <h2>Select <strong>Topic</strong></h2>
                  <ul class="cate-list">
                     <? if (isset($main_categories) and array_filled($main_categories)) : ?>
                        <? foreach ($main_categories as $key => $value) : ?>
                           <li>
                              <a href="<?= l('booking') ?>">
                                 <p><span><img src="<?= i('') ?>icons/category/1.svg"></span> <?= $value['category_name'] ?> </p>
                              </a>
                           </li>
                        <? endforeach; ?>
                     <? endif; ?>
                  </ul>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="joinSec hding-2 para">
   <div class="joinContent">
      <h2><?= html_entity_decode($check['cms_page_title']) ?></h2>
      <div class="space"><br></div>
      <?= html_entity_decode($check['cms_page_content']) ?>
      <div class="space"><br><br></div>

      <? if ($usdata['user_paid'] == 0) { ?>
         <a href="<?= l('learning-journey') ?>" class="btn-theme btn-hover">Start Free Trial <span></span></a>
      <? } ?>
   </div>
</section>
<section class="faqSec hding-2 para">
   <div class="container">
      <div class="faqHead">
         <h2>FAQs about <strong>Experts Tutorials.</strong></h2>
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
</section>
<? $this->load->view('widgets/_clients'); ?>
<script type="text/javascript">
   $("body").on('change', '#forum_category', function() {
      var id = $(this).val();
      if (id > 0) {
         window.location.href = base_url + "expert-tutorial?expert=" + id;
      } else {
         window.location.href = base_url + "expert-tutorial";
      }
   });
</script>
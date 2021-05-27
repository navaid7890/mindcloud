<style>
   .my p {
      font-size: 20px;
      line-height: normal;
      color: #fff;
   }

   .joinSec {
      background-image: linear-gradient(to left, rgba(8, 74, 147, 0.8), rgba(8, 74, 147, 0.8)), url('<?= get_image($check['cms_page_image'], $check['cms_page_image_path']) ?>');
      text-align: center;
      padding: 80px 0 90px;
      background-size: cover;
      background-position: center center;
   }

   .bannerSeactionArea a {
      color: #e18e25;
   }
</style>

<div class="mainBanner home-banner para" style="background-image:url('<?= get_image($cont1['cms_page_image'], $cont1['cms_page_image_path']) ?>');">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-12 col-md-12">
            <div class="my">
               <h1><?= $cont1['cms_page_title'] ?> </strong></h1>
               <div class="space"><br><br></div>
               <div class="row">
                  <div class="col-lg-6 col-md-12 bannerSeactionArea">
                     <?= html_entity_decode($cont1['cms_page_content']) ?>
                  </div>
                  <div class="col-lg-6 col-md-12 bannerSeactionArea">
                     <?= html_entity_decode($cont2['cms_page_content']) ?>
                  </div>
               </div>
               <div class="space"><br><br></div>
               <a href="javascript:void(0)" class="btn-theme btn-hover">Start your Free Trial <span></span></a>
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
                          <input type="text" placeholder="Search Expert Tutorials" name="keyword">
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
                                 <option value="<?= $value['expert_id'] ?>" <?= $this->input->get('expert') == $id ? 'selected=""' : '' ?>>
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
                                 <!-- ( <?//= $value['tutorials'] ?> ) -->
                                 <li><a href="<?= l('expert-tutorial') ?>?cat=<?= $a ?>"><?= $value['category_name'] ?></a> </li>
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
                                          </div>
                                       </a>
                                       <?
                                       // debug($value);
                                       $coursecat = array();
                                       $coursecat['where']['cp_course_id'] = $value['tutorial_id'];
                                       $cate = $this->model_course_category->find_all_active($coursecat);

                                       $cat_name = array();
                                       $cat_name['where']['category_id'] = $cate[0]['cp_category_id'];
                                       $cat_name = $this->model_category->find_all_active($cat_name);
                                       ?>
                                       <!-- <a href="javascript:;" class="cate-tag"><? // $value['tutorial_level'] ?></a> -->
                                       <a href="javascript:;" class="cate-tag"><?= $cat_name[0]['category_name'] ?></a>
                                       <div class="vid-content">
                                          <h4><a href="<?= l('course-detail') . '/' . $value['tutorial_slug'] ?>" style="color:#33415C;"><?= $value['tutorial_name'] ?></a></h4>
                                          <div class="row align-items-center pt-70">
                                             <div class="col-md-12">
                                             <ul class="login-btn">
                                                            <li><a href="javascript:;"><span><img src="<?= g('db.admin.bucketimg') . $value['expert_image'] ?>"></span> <?= $value['expert_name'] ?> </a></li>
                                                        </ul>
                                             </div>
                                             <div class="col-md-8">
                                             <ul class="rating">
                                                   <?php
                                                   for ($x = 1; $x <= $value['tutorial_rating']; $x++) { ?>
                                                      "
                                                      <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
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
                     <!-- <div class="space"><br><br></div>
                     <a href="#" class="btn-links">See more Experts Tutorials</a>
                     
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
<section class="joinSec hding-2 para">
        <div class="joinContent">
            <h2><strong>Can’t find </strong> what you’re looking for?</h2>
            <div class="space"><br></div>
            <p>Get limited access to your <strong>7-day free trial.</strong></p>
            <div class="space"><br><br></div>
            <a href="#" class="btn-theme btn-hover">Post your Requirement <span></span></a>
        </div>
    </section>
<section class="whoSec hding-2 para pad-sec">
   <div class="container">
   <div class="whoHead">
               <h2>Most watched  <strong> Tutorials</strong></h2>
               <div class="space"><br></div>
            </div>
            <div class="space"><br><br><br></div>

            <ul class="who-list tut-list pb-100">
            <li>
                  <div class="vid-box">
                     <a href="https://mindcloud-bucket.s3.amazonaws.com/assets/SOCIAL_CUT_Christian_Expert_23%20May_Digital%20Marketing_INTRO.mp4" data-fancybox="media" data-fancybox data-ratio="15">
                        <div class="video-box">
                           <img src="<?= i('') ?>/whoSec/1.png">
                           <span><i class="fas fa-play"></i>  <p>Preview Course</p> </span>
                        </div>
                     </a>
                     <a href="#" class="cate-tag">business model</a>

                     <div class="vid-content">
                        <h4>Building the Right<br> Team</h4>
                        <div class="row align-items-center pt-70">
                           <div class="col-md-9">
                              <ul class="rating">
                                 <li><img src="<?= i('') ?>icons//rat-d.svg"></li>
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>/icons/rat-l.svg"></li>
                                 <li><p>(250)</p></li>
                              </ul>
                           </div>

                           <div class="col-md-3 text-right">
                              <h6>$15</h6>      
                           </div>
                        </div>
                     </div>
                  </div>
               </li>

               <li>
                  <div class="vid-box">
                     <a href="https://mindcloud-bucket.s3.amazonaws.com/assets/SOCIAL_CUT_Christian_Expert_23%20May_Digital%20Marketing_INTRO.mp4" data-fancybox="media" data-fancybox data-ratio="15">
                        <div class="video-box">
                           <img src="<?= i('') ?>/whoSec/2.png">
                           <span><i class="fas fa-play"></i>  <p>Preview Course</p> </span>
                        </div>
                     </a>
                     <a href="#" class="cate-tag">business model</a>

                     <div class="vid-content">
                        <h4>Business Protection for Entrepreneurs </h4>
                        <div class="row align-items-center pt-70">
                           <div class="col-md-9">
                              <ul class="rating">
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>/icons/rat-l.svg"></li>
                                 <li><p>(250)</p></li>
                              </ul>
                           </div>

                           <div class="col-md-3 text-right">
                              <h6>$15</h6>      
                           </div>
                        </div>
                     </div>
                  </div>
               </li>

               <li>
                  <div class="vid-box">
                     <a href="https://mindcloud-bucket.s3.amazonaws.com/assets/SOCIAL_CUT_Christian_Expert_23%20May_Digital%20Marketing_INTRO.mp4" data-fancybox="media" data-fancybox data-ratio="15">
                        <div class="video-box">
                           <img src="<?= i('') ?>/whoSec/3.png">
                           <span><i class="fas fa-play"></i> <p>Preview Course</p></span>
                        </div>
                     </a>
                     <a href="#" class="cate-tag">business model</a>

                     <div class="vid-content">
                        <h4>Basics of Brands and Branding</h4>

                        <div class="row align-items-center pt-70">
                           <div class="col-md-9">
                              <ul class="rating">
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>icons//rat-d.svg">"></li>
                                 <li><img src="<?= i('') ?>/icons/rat-l.svg"></li>
                                 <li><p>(250)</p></li>
                              </ul>
                           </div>

                           <div class="col-md-3 text-right">
                              <h6>$15</h6>      
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
      <div class="mostcateSec">
         <div class="mostHead">
            <h2>Most Popular <strong> Categories </strong></h2>
         </div>
         <div class="space"><br><br></div>
         <ul class="cate-list">
            <? if (isset($popular) and array_filled($popular)) : ?>
               <? foreach ($popular as $key => $value) : ?>
                  <li>
                     <p><span><img src="<?= i('') ?>icons/category/1.svg"></span> <?= $value['category_name'] ?></p>
                  </li>
               <? endforeach; ?>
            <? endif; ?>
         </ul>
      </div>
   </div>
</section>
<section class="expertsdash">
   <div class="container">
      <div class="consult-sec hding-2 para">
         <div class="consult-head">
            <h2><?= $con1['cms_page_title'] ?> </h2>
            <div class="space"><br><br></div>
            <?= html_entity_decode($con1['cms_page_content']) ?>
         </div>
         <div classs="sapce"><br><br><br></div>
         <div class="row border-box">
            <div class="col-lg-4 col-md-5 pad-zero">
               <div class="consult-left">
                  <div>
                     <h2><strong><?= $con1['cms_page_title'] ?></strong></h2>
                     <ul class="consult-left-slide">
                        <li>
                           <div class="consult-left-content">
                              <?= html_entity_decode($con2['cms_page_content']) ?>
                           </div>
                        </li>
                        <li>
                           <div class="consult-left-content">
                              <?= html_entity_decode($con3['cms_page_content']) ?>
                           </div>
                        </li>
                        <li>
                           <div class="consult-left-content">
                              <?= html_entity_decode($con4['cms_page_content']) ?>
                           </div>
                        </li>
                        <li>
                           <div class="consult-left-content">
                              <?= html_entity_decode($con5['cms_page_content']) ?>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-8 col-md-7 pad-zero">
               <div class="consult-content">
                  <h2>Select <strong>Topic</strong></h2>
                  <ul class="cate-list">
                     <? if (isset($art) and array_filled($art)) : ?>
                        <? foreach ($art as $key => $value) : ?>
                           <li>
                              <a href="javascript:void(0)">
                                 <p><span><img src="<?= i('') ?>icons/category/1.svg"></span> <?= $value['tutorial_name'] ?> </p>
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
      <h2><?= $check['cms_page_title'] ?></h2>
      <div class="space"><br></div>
      <?= html_entity_decode($check['cms_page_content']) ?>
      <div class="space"><br><br></div>
      <a href="javascript:void(0)" class="btn-theme btn-hover">Start Free Trial <span></span></a>
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
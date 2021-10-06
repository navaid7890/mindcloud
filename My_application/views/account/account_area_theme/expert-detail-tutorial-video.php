<style>
   div#video_text,
   div#video_text p {
      color: #A3A5A9;
      font-size: 13px;
      font-weight: 500;
   }

   input#forms-expert-tutorial-video-btn {
      padding: 13px 26px;
      background: #FDBE41;
      font-size: 14px;
      font-weight: 700;
      color: #F8F9FA;
      text-transform: uppercase;
      border-radius: 25px;
      margin-bottom: 30px;
   }

   input#forms-expert-tutorial-video-btn:hover {
      position: static;
      display: block;
      background-color: #e28f26;
   }
</style>
<div class="business-page">
   <section class="dashboard">

      <ul class="dashboard-layout">
         <li>
            <div class="front-dashboard open">
               <!-- <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a> -->
               <? $this->load->view("widgets/dashboard-menu-box"); ?>
            </div>
         </li>

         <li class="open">
            <? $this->load->view("widgets/expert-course-box"); ?>
         </li>
         <?
         //   debug($expert_course);
         $vidcat = array();
         $vidcat['where']['cp_course_id'] = $expert_course['tutorial_id'];
         $vidcat = $this->model_course_tutorial->find_all_active($vidcat);
         //  debug($vidcat) ;
         $vid_name = array();
         $vid_name['where']['videos_id'] = $vidcat[0]['cp_tutorial_id'];
         $vid_name = $this->model_videos->find_all_active($vid_name);
         // debug($vid_name[0]['videos_name']);

         ?>
         <li class="open">
            <div class="tutorial-box">
               <div class="tutorial-scroll-content">
                  <div class="tutorial-content">
                     <div class="tutorial-head">
                        <div class="row align-items-center">
                           <div class="col-md-7">
                              <ul class="bredcum-links">
                                 <li><a href="#">Experts Tutorials</a></li>
                                 <!-- <li><a href="#">Business Model Canvas</a></li> -->
                                 <li><a href="#"><?= $vid_name[0]['videos_name'] ?></a></li>
                                 <li><a href="#">Video and Transcript</a></li>
                              </ul>
                           </div>
                           <div class="col-md-5 text-right">
                              <div class="bredcum-right">
                                 <?
                                 $completTut = array();
                                 $completTut['where']['mytutorial_user_id'] = $this->userid;
                                 $completTut['where']['mytutorial_tutorial_id'] = $_GET['courseid'];
                                 $completTut['where']['mytutorial_desc_percent'] = 1;
                                 $completTut['where']['mytutorial_intro_percent'] = 1;
                                 $completTut['where']['mytutorial_video_percent'] = 1;
                                 $completTutProgress = $this->model_mytutorial->find_all_active($completTut);
                                 ?>
                                 <? if (!empty($completTutProgress)) : ?>
                                    <a href="#" class="btn-round btn-hover">Completed <span></span></a>
                                 <? else : ?>
                                    <a href="#" class="btn-round btn-hover">In progress <span></span></a>
                                 <? endif; ?>


                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="tutorial-mid hding-4 hding-3 para">
                        <div class="row">
                           <div class="col-md-5">
                              <div class="tutorial-mid-content">
                                 <h4>Tutorial and Transcript </h4>
                                 <div class="space"><br></div>
                                 <div class="video-caption">

                                    <? if ($tutorial_detail['videos_ppt_status'] == 1) : ?>
                                       <p>
                                       <div id="video_text">
                                          <img id="pptimg">
                                       </div>
                                       </p>
                                       <?php
                                       $arr_time = explode('|', html_entity_decode($tutorial_detail['videos_ppt_time']));
                                       $pptarr = explode(',', html_entity_decode($tutorial_detail['videos_ppt_slides']));
                                       $ppt_time_text = [];

                                       foreach ($arr_time as $arr_time_key => $ppttime) {
                                          $ppttime = explode(':', $ppttime);
                                          $sec = ($ppttime[0] * 60) + $ppttime[1];
                                          $ppt_time_text[] = [
                                             'time' => $sec,
                                             'text' => $pptarr[$arr_time_key],
                                             'img' => l('') . 'assets/' . html_entity_decode($tutorial_detail['videos_name']) . '/' . $pptarr[$arr_time_key] . '.jpg',
                                          ];
                                       }

                                       ?>

                                    <? else : ?>
                                       <p>
                                       <div id="video_text"></div>
                                       </p>
                                       <?php
                                       $arr[] = html_entity_decode($tutorial_detail['videos_transcript']);
                                       ?>
                                       <?php
                                       $text_time_arr = [];
                                       foreach ($arr as $result) {
                                          //  echo $result['v_text'];
                                          $v_text = explode("|", html_entity_decode($tutorial_detail['videos_transcript']));
                                          for ($i = 0; $i < sizeof($v_text); $i++) {
                                             $v_wait = explode("~", html_entity_decode($v_text[$i]));
                                             $video_time = new \stdClass();
                                             $video_time->text = $v_wait[0];
                                             $video_time->time = $v_wait[1];
                                             $text_text_arr[] = $video_time;
                                             $timeConvert = explode(":", $v_wait[1]);
                                             $secondtime = $timeConvert[0] * 60;
                                             $minutetime = $timeConvert[1];
                                             $requiredtime = $secondtime + $minutetime;

                                             $text_time_arr[] = $requiredtime;
                                             // debug($text_time_arr);
                                          }
                                       }
                                       ?>
                                    <? endif; ?>

                                    <div class="space"><br></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <? if ($tutorial_detail['videos_ppt_status'] == 1) : ?>
                                 <div class="video-box">
                                    <video controlsList="nodownload" onclick="plusOne(<?= $tutorial_detail['videos_views']; ?>)" ontimeupdate="myPPTTime(this)" width="100%" height="100%" poster="<?= g('db.admin.bucketimg') . $tutorial_detail['videos_image2'] ?>" controls>
                                       <source src="<?= g('db.admin.bucket') . 'videos/' . $tutorial_detail['videos_image'] ?>" type="video/mp4">
                                       <source src="<?= g('db.admin.bucket') . 'videos/' . $tutorial_detail['videos_image'] ?>" type="video/ogg">
                                       Your browser does not support the video tag.
                                    </video>
                                 </div>
                              <? else : ?>
                                 <div class="video-box">
                                    <video controlsList="nodownload" onclick="plusOne(<?= $tutorial_detail['videos_views']; ?>)" ontimeupdate="myFunction(this)" width="100%" height="100%" poster="<?= g('db.admin.bucketimg') . $tutorial_detail['videos_image2'] ?>" controls>
                                       <source src="<?= g('db.admin.bucket') . 'videos/' . $tutorial_detail['videos_image'] ?>" type="video/mp4">
                                       <source src="<?= g('db.admin.bucket') . 'videos/' . $tutorial_detail['videos_image'] ?>" type="video/ogg">
                                       Your browser does not support the video tag.
                                    </video>
                                 </div>
                              <? endif; ?>
                           </div>
                        </div>
                     </div>
                     <div class="space"><br><br></div>
                     <!-- <p>All rights belong to their respective owners. The Business Model Canvas was created and owned by <a href="https://www.strategyzer.com/">Strategyzer</a></p> -->
                  </div>
                  <div class="tutorial-footer vid-tran para">
                     <div class="tutorial-footer-content">
                        <form id="forms-expert-tutorial-video">
                           <input type="hidden" name="mytutorial[mytutorial_user_id]" value="<?= ($this->userid) ?>">
                           <input type="hidden" name="mytutorial[mytutorial_tutorial_id]" value="<?= $_GET['courseid'] ?>">
                           <input type="hidden" name="mytutorial[mytutorial_video_percent]" value="1">
                           <input type="submit" class="btn-round btn-hover" value="Mark As Complete" id="forms-expert-tutorial-video-btn">
                        </form>

                        <p>Complete this tutorial and write a review in order to receive Certificate</p>
                        <div classs="space"><br><br></div>
                        <form id="forms-review_us">
                           <div class="fld-textarea">

                              <input type="hidden" name="learning_journey_course_review[learning_journey_course_review_user_id]" value="<?= ($this->userid) ?>">

                              <input type="hidden" name="learning_journey_course_review[learning_journey_course_review_course_id]" value="<?= $_GET['courseid'] ?>">
                              <input type="hidden" name="learning_journey_course_review[learning_journey_course_review_stars]" id="reviewId" value="">
                           </div>
                           <div class="fld-textarea">
                              <textarea name="learning_journey_course_review[learning_journey_course_review_desc]" placeholder="Write a Review…"></textarea>
                           </div>
                           <div class="space"><br></div>

                           <div class="row align-items-center">
                              <div class="col-md-4">
                                 <section class='rating-widget'>

                                    <div class='rating-stars'>
                                       <ul id='stars'>
                                          <li class='star' title='Poor' data-value='1'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                          <li class='star' title='Fair' data-value='2'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                          <li class='star' title='Good' data-value='3'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                          <li class='star' title='Excellent' data-value='4'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                          <li class='star' title='WOW!!!' data-value='5'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                       </ul>
                                    </div>

                                 </section>
                              </div>
                              <div class="col-md-8 text-right">
                                 <div class="fld-btn">
                                    <input type="submit" value="Submit Your Review" id="forms-review_us-btn">
                                 </div>
                              </div>
                           </div>
                        </form>


                        <!-- <form id="forms-tutorial-review_us">
                           <div class="fld-textarea">

                              <input type="hidden" name="expert_tutorial_review[tutorial_review_user_id]" value="<?= ($this->userid) ?>">
                              <input type="hidden" name="expert_tutorial_review[tutorial_review_course_id]" value="<?= $courseid ?>">
                              <input type="hidden" name="expert_tutorial_review[tutorial_review_tutorial_id]" value="<?= $_GET['tutorialid'] ?>">
                              <input type="hidden" name="expert_tutorial_review[tutorial_review_stars]" id="reviewId" value="">
                           </div>
                           <div class="fld-textarea">
                              <textarea name="expert_tutorial_review[tutorial_review_desc]" placeholder="Write a Review…"></textarea>
                           </div>
                           <div class="space"><br></div>

                           <div class="row align-items-center">
                              <div class="col-md-4">
                                 <section class='rating-widget'>
                                    <div class='rating-stars'>
                                       <ul id='stars'>
                                          <li class='star' title='Poor' data-value='1'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                          <li class='star' title='Fair' data-value='2'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                          <li class='star' title='Good' data-value='3'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                          <li class='star' title='Excellent' data-value='4'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                          <li class='star' title='WOW!!!' data-value='5'>
                                             <i class='fa fa-star fa-fw'></i>
                                          </li>
                                       </ul>
                                    </div>

                                 </section>
                              </div>
                              <div class="col-md-8 text-right">
                                 <div class="fld-btn">
                                    <input type="submit" value="Submit Your Review" id="forms-tutorial-review_us-btn">
                                 </div>
                              </div>
                           </div>
                        </form> -->
                     </div>
                  </div>
               </div>
            </div>
</div>
</li>
</ul>
</section>
</div>
<style>
   * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
   }

   *:before,
   *:after {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
   }


   .text-center {
      text-align: center;
   }


   /* Rating Star Widgets Style */
   .rating-stars ul {
      list-style-type: none;
      padding: 0;

      -moz-user-select: none;
      -webkit-user-select: none;
   }

   .rating-stars ul>li.star {
      display: inline-block;

   }

   /* Idle State of the stars */
   .rating-stars ul>li.star>i.fa {
      font-size: 18px;
      /* Change the size of the stars */
      color: #ccc;
      /* Color on idle state */
   }

   /* Hover state of the stars */
   .rating-stars ul>li.star.hover>i.fa {
      color: #FFCC36;
   }

   /* Selected state of the stars */
   .rating-stars ul>li.star.selected>i.fa {
      color: #FF912C;
   }
</style>

<script>
   var v = <?php echo json_encode($text_text_arr, TRUE); ?>;
   var w = <?php echo json_encode($text_time_arr, TRUE); ?>;
   var ppt_time_text = <?php echo json_encode($ppt_time_text, TRUE); ?>;


   console.log(v);
   // console.log(w);
   console.log(ppt_time_text);

   function myPPTTime(e) {
      var currentTime = e.currentTime;

      for (var i = 0; i < ppt_time_text.length; i++) {
         if (i < (ppt_time_text.length - 1)) {
            console.log('current time ppt', ppt_time_text[i].time);
            console.log('current time asdsdd', currentTime);
            // break;
            if (ppt_time_text[i].time < currentTime && ppt_time_text[i + 1].time > currentTime) {
               $('#pptimg').attr("src", ppt_time_text[i].img);
               console.log('src', ppt_time_text[i].img)
            }
         } else {
            if (ppt_time_text[i].time < currentTime && ppt_time_text[i - 1].time < currentTime) {
               $('#pptimg').attr("src", ppt_time_text[i].img);
               console.log('src', ppt_time_text[i].img)
            }
         }
      }
   }

   function myFunction(e) {
      var currentTime = e.currentTime;
      console.log('current time ', e.currentTime);
      for (var i = 0; i < w.length; i++) {
         if (i < (w.length - 1)) {
            if (w[i] < currentTime && w[i + 1] > currentTime) {
               $('#video_text').html(v[i].text);
            }
         } else {
            if (w[i] < currentTime && w[i - 1] < currentTime) {
               $('#video_text').html(v[i].text);
            }
         }
      }
   }
</script>
<script>
   $(document).ready(function() {

      /* 1. Visualizing things on Hover - See next part for action on click */
      $('#stars li').on('mouseover', function() {
         var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

         // Now highlight all the stars that's not after the current hovered star
         $(this).parent().children('li.star').each(function(e) {
            if (e < onStar) {
               $(this).addClass('hover');
            } else {
               $(this).removeClass('hover');
            }
         });

      }).on('mouseout', function() {
         $(this).parent().children('li.star').each(function(e) {
            $(this).removeClass('hover');
         });
      });


      /* 2. Action to perform on click */
      $('#stars li').on('click', function() {
         var onStar = parseInt($(this).data('value'), 10); // The star currently selected
         var stars = $(this).parent().children('li.star');

         for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
         }

         for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
         }

         // JUST RESPONSE (Not needed)

         var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
         var msg = "";
         if (ratingValue > 0) {
            msg = parseInt(ratingValue);

            $('#reviewId').val(msg)
         } else {
            msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
         }
         responseMessage(msg);

      });

   });


   function responseMessage(msg) {
      $('.success-box').fadeIn(200);
      $('.success-box div.text-message').html("<span>" + msg + "</span>");
   }

   function plusOne(id) {

      id = Number(id) + 1;
      // alert(id);
      var hours = 1;
      var now = new Date().getTime();
      var setupTime = localStorage.getItem('count_time');


      var x = localStorage.getItem("count_id");
      if (x !== '1') {
         if (setupTime == null) {
            localStorage.setItem("count_id", "1");

            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search + '&count_id=' + id;
            window.history.pushState({
               path: newurl
            }, '', newurl);

            localStorage.setItem('count_time', now);


         } else {
            if (now - setupTime > hours * 60 * 1) {
               localStorage.clear()
               localStorage.setItem('count_time', now);
            }
         }
      } else {}
   }
</script>
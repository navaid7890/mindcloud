<style>
   /* .videoPage ul.dropdown-box {
      display: block !important;
   } */
   div#video_text,
   div#video_text p {
      color: #A3A5A9;
      font-size: 13px;
      font-weight: 500;
   }

   input#forms-mark-complete-btn {
      padding: 13px 26px;
      background: #FDBE41;
      font-size: 14px;
      font-weight: 700;
      color: #F8F9FA;
      text-transform: uppercase;
      border-radius: 25px;
   }

   input#forms-mark-complete-btn:hover {
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
               <a href="javascript:;" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
               <!-- <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a> -->
               <? $this->load->view("widgets/dashboard-menu-box"); ?>
            </div>
         </li>
         <li class="open">
            <div class="videoPage">
               <? $this->load->view("widgets/course-box"); ?>
            </div>
         </li>
         <li class="open">
            <div class="tutorial-box">

               <div class="tutorial-scroll-content">
                  <div class="tutorial-content">
                     <div class="tutorial-head">
                        <div class="row align-items-center">
                           <div class="col-md-7">
                              <ul class="bredcum-links">
                                 <li><a href="#">Learning Journey</a></li>
                                 <li><a href="#"><?= $learn_content[0]['learning_journey_content_name'] ?></a></li>
                                 <li><a href="#">Video and Transcript</a></li>

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
                        <div class="row">
                           <div class="col-md-5">
                              <div class="tutorial-mid-content">
                                 <h4>Tutorial and Transcript</h4>
                                 <div class="space"><br></div>
                                 <div class="video-caption">
                                    <!-- <p>00:00:00</p> -->
                                    <div class="space"><br></div>

                                    <div id="video_text">

                                    </div>

                                    <?php
                                    $arr[] = html_entity_decode($learn_content[0]['learning_journey_content_tags']);
                                    ?>
                                    <?php
                                    $text_time_arr = [];
                                    foreach ($arr as $result) {
                                       //  echo $result['v_text'];
                                       $v_text = explode("|", html_entity_decode($learn_content[0]['learning_journey_content_tags']));
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
                                       }
                                    }
                                    ?>
                                    <div class="space"><br><br></div>
                                    <!-- <p><span id="duration"></span> seconds.</p> -->
                                    <div class="space"><br></div>
                                    <!-- <p>We will learn - What is CX and what is</p> -->
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div class="video-box">
                                 <!-- poster="<? //= g('db.admin.bucket') . 'images/learning_journey_content/' . $learn_content['0']['learning_journey_content_image'] 
                                                ?>" -->
                                 <video controlsList="nodownload" width="100%" ontimeupdate="myFunction(this)" controls="true" id="video" height="100%">
                                    <source src="<?= g('db.admin.bucket') . 'videos/' . $learn_content[0]['learning_journey_video'] ?>#t=2" type="video/mp4">
                                    <source src="<?= g('db.admin.bucket') . 'videos/' . $learn_content[0]['learning_journey_video'] ?>" type="video/ogg">
                                    Your browser does not support the video tag.
                                 </video>
                              </div>
                              <!-- <div id="status" class="incomplete">
                                 <span>Play status: </span>
                                 <span class="status complete">COMPLETE</span>
                                 <span class="status incomplete">INCOMPLETE</span>
                                 <br />
                              </div> -->
                              <div>
                                 <!-- <span id="played">0</span> seconds out of
                                 <span id="duration"></span> seconds. (only updates when the video pauses) -->
                              </div>
                           </div>
                        </div>
                        <div class="space"><br><br></div>
                        <p><?= html_entity_decode($learn_content[0]['learning_journey_content_legal_terms']) ?></p>
                     </div>
                     <? //= debug($learn_content) 
                     ?>
                     <div class="tutorial-footer vid-tran para">
                        <div class="tutorial-footer-content">
                           <form id="forms-mark-complete">
                              <input type="hidden" name="learning_journey_transcript[learning_journey_transcript_user_id]" value="<?= ($this->userid) ?>">
                              <input type="hidden" name="learning_journey_transcript[learning_journey_transcript_content_id]" value="<?= $_GET['cat'] ?>">
                              <input type="hidden" name="learning_journey_transcript[learning_journey_transcript_percent]" value="1">

                              <input type="submit" class="btn-round btn-hover" value="Mark As Complete" id="forms-mark-complete-btn">
                           </form>
                           <div classs="space"><br><br></div>
                           <p>Complete all tutorials of Learning Journey to receive Certificate.</p>
                           <div classs="space"><br><br></div>
                           <form id="forms-content-review_us">
                              <div class="fld-textarea">

                                 <input type="hidden" name="learning_journey_content_review[learning_journey_content_review_user_id]" value="<?= ($this->userid) ?>">

                                 <input type="hidden" name="learning_journey_content_review[learning_journey_content_review_content_id]" value="<?= $_GET['cat'] ?>">
                                 <input type="hidden" name="learning_journey_content_review[learning_journey_content_review_stars]" id="reviewId" value="">
                              </div>
                              <div class="fld-textarea">
                                 <textarea name="learning_journey_content_review[learning_journey_content_review_desc]" placeholder="Write a Review???"></textarea>
                              </div>
                              <div class="space"><br></div>

                              <div class="row align-items-center">
                                 <div class="col-md-4">
                                    <!-- <ul class="rating">
                                       <li><span>1</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                       <li><span>2</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                       <li><span>3</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                       <li><span>4</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                       <li><span>5</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                    </ul> -->
                                    <section class='rating-widget'>
                                       <!-- Rating Stars Box -->
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
                                    <!-- <div class="fld-link">
                                       <button>Skip</button>
                                    </div> -->
                                    <div class="fld-btn">
                                       <input type="submit" value="Submit Your Review" id="forms-review_us-btn">
                                    </div>
                                 </div>
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


   console.log(v);
   console.log(w);

   function myFunction(e) {
      var currentTime = e.currentTime;
      // console.log('current time ', e.currentTime);
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
</script>




<script>
   // var video = document.getElementById("video");

   // var timeStarted = -1;
   // var timePlayed = 0;
   // var duration = 0;

   // if (video.readyState > 0)
   //    getDuration.call(video);

   // else {
   //    video.addEventListener('loadedmetadata', getDuration);
   // }
   // // remember time user started the video
   // function videoStartedPlaying() {
   //    timeStarted = new Date().getTime() / 1000;
   // }

   // function videoStoppedPlaying(event) {

   //    if (timeStarted > 0) {
   //       var playedFor = new Date().getTime() / 1000 - timeStarted;
   //       timeStarted = -1;
   //       timePlayed += playedFor;
   //    }
   //    document.getElementById("played").innerHTML = Math.round(timePlayed) + "";

   //    if (timePlayed >= duration && event.type == "ended") {
   //       document.getElementById("status").className = "complete";
   //    }
   // }

   // function getDuration() {
   //    duration = video.duration;
   //    document.getElementById("duration").appendChild(new Text(Math.round(duration) + ""));
   //    console.log("Duration: ", duration);

   //    console.log(time_convert(duration));

   // }

   // video.addEventListener("play", videoStartedPlaying);
   // video.addEventListener("playing", videoStartedPlaying);

   // video.addEventListener("ended", videoStoppedPlaying);
   // video.addEventListener("pause", videoStoppedPlaying);

   // $(function() {
   //    var vid = $('#video'),
   //       check,
   //       reached25 = false,
   //       reached50 = false,
   //       reached75 = false;

   //    vid.bind("play", function(event) {
   //       var duration = vid.get(0).duration;

   //       check = setInterval(function() {
   //          var current = vid.get(0).currentTime,
   //             perc = (current / duration * 100).toFixed(2);


   //          if (Math.floor(perc) >= 25 && !reached25) {
   //             console.log("25% reached");
   //             reached25 = true;
   //          }
   //          console.log(perc);
   //          document.getElementById("played1").innerHTML = Math.round(perc) + "";

   //          document.getElementById("status").className = perc;
   //       }, 1000);
   //    });

   //    vid.bind("ended pause", function(event) {
   //       clearInterval(check);
   //    });

   // });
   // var red =128;
   // function time_convert(num) {
   //    var hours = Math.floor(num / 60);
   //    var minutes = num % 60;
   //    return hours + ":" + minutes;
   // }

   // console.log(time_convert(red));
</script>
<div class="business-page">
   <section class="dashboard">
      <ul class="dashboard-layout">
         <li>
            <? $this->load->view("widgets/dashboard-menu-box");?>
         </li>

         <li>
            <? $this->load->view("widgets/course-box");?>
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
                                 <li><a href="#">Business Model Canvas</a></li>
                                 <li><a href="#">Video and Transcript</a></li>
                              </ul>
                           </div>
                           <div class="col-md-5 text-right">
                              <div class="bredcum-right">
                                 <a href="#" class="btn-round btn-hover">In progress <span></span></a>

                                 <ul class="indicator-links">
                                    <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="tutorial-mid hding-4 hding-3 para">
                        <div class="row">
                           <div class="col-md-5">
                              <div class="tutorial-mid-content">

                                 <h4>Tutorial and Transcript</h4>
                                 <div class="space"><br></div>
                                 <div class="video-caption">
                                    <p>00:00:00</p>
                                    <div class="space"><br></div>
                                    <? if(isset($learn_content) AND array_filled($learn_content)) :?>
                                    <? foreach($learn_content as $key=>$value):?>

                                    <?  //debug($learn_Content); ?>
                                    <p><?= html_entity_decode($value['learning_journey_content_tags']) ?></p>
                                    <? endforeach;?>
                                    <? endif;?>
                                    <div class="space"><br><br></div>
                                    <p>00:01:16</p>
                                    <div class="space"><br></div>
                                    <p>We will learn - What is CX and what is</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div class="video-box">
                                 <? if(isset($learn_content) AND array_filled($learn_content)) :?>
                                 <? foreach($learn_content as $key=>$value):?>
                                 <video width="100%" height="100%" poster="<?= i('') ?>banner/3.png" controls>
                                    <source src="<?=base_url()?><?=$value['learning_journey_video_path'] ?><?= $value['learning_journey_video'] ?>" type="video/mp4">
                                    <source src=<?=base_url()?><?=$value['learning_journey_video_path'] ?><?= $value['learning_journey_video'] ?>" type="video/ogg">
                                    Your browser does not support the video tag.
                                 </video>
                                 <p><?= html_entity_decode($value['learning_journey_content_desc']) ?></p>
                                 <? endforeach;?>
                                 <? endif;?>



                              </div>
                           </div>
                        </div>
                        <div class="space"><br><br></div>
                        <p>All rights belong to their respective owners. The Business Model Canvas was created and owned by <a href="https://www.strategyzer.com/">Strategyzer</a></p>
                     </div>

                     <div class="tutorial-footer vid-tran para">
                        <div class="tutorial-footer-content">
                           <p>Complete all tutorials of Learning Journey to receive Certificate.</p>
                           <? //ucfirst($this->session_data['username']);?>
                           <? //print_r($this->session->userdata); ?>
                           <? //print_r($this->session_data['id']); ?>
                           <? //print_r($this->session_data['username']); ?>
                           
                           <div classs="space"><br><br></div>
                           <form action="">
                              <div class="fld-textarea">
                              
                              <input type="hidden" name="review_user_id" value="<?= html_entity_decode($this->session_data['id'])?>">
                                 <? if(isset($learn_content) AND array_filled($learn_content)) :?>
                                 <? foreach($learn_content as $key=>$value):?>
                                    <input type="hidden" name="review_course_id" value="<?= html_entity_decode($value['learning_journey_content_id']) ?>">
                                 <? endforeach;?>
                                 <? endif;?>
                              </div>      
                              <div class="fld-textarea">
                                 <textarea name="review_desc" placeholder="Write a Review…"></textarea>
                              </div>
                              <div class="space"><br></div>

                              <div class="row align-items-center">
                                 <div class="col-md-4">
                                    <ul class="rating">
                                       <li><span>1</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                       <li><span>2</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                       <li><span>3</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                       <li><span>4</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                       <li><span>5</span><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                    </ul>
                                 </div>
                                 <div class="col-md-8 text-right">
                                    <div class="fld-link">
                                       <button>Skip</button>
                                    </div>
                                    <div class="fld-btn">
                                       <input type="submit" value="Submit Your Review">
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


<script type="text/javascript">
   // $('.rating li').click(function() {
   //  var rating = parseInt($(this).text());
   //  alert(rating);
   // });

    $('form').submit(function(e) {
        e.preventDefault();
       var course_id = $("input[name='review_course_id']").val();
       var description = $("textarea[name='review_desc']").val();
       var review_user_id = $("input[name='review_user_id']").val();
      //  var rating = $("textarea[name='review_desc']").val();
        $.ajax({
           url: '/ajax-requestPost',
           type: 'POST',
           data: {course_id: course_id, description: description, review_user_id: review_user_id},
           error: function() {
              alert(review_user_id);
           },
           success: function(data) {
               alert('Review added Successfully');
           }
        });
    });
</script>

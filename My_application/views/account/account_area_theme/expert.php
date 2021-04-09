<div class="index-page">
    <section class="dashboard">
         <ul class="dashboard-layout">
              <li> 
                <? $this->load->view("widgets/dashboard-menu-box");?>
              </li>
 
            <li>
               <div class="index-page-wrap">
                    <div class="index-page-content hding-2">
                        <div class="experttut-Sec">
                            <div class="row">
                       

                                <div class="col-md-12">
                                    <div class="xpert-box">
                                        <div class="xpert-content">
                                            <h2>What to Learn next in <strong>Experts Tutorials </strong></h2>
                                            <div class="sapce"><br></div>

                                            <?if(empty($art))
                     {?>
                  <h1 class="text-center" style="color: #000; font-size:70px; font-weight:500; padding:10% 0;">Course Not Found</h1>
                  <?}else{?>
                  <ul class="who-list tut-list">
                     <?php if (isset($art) && array_filled($art)): ?>
                     <?php foreach ($art as $key => $value): ?>
                     <li>
                        <div class="vid-box">
                           <a href="<?=get_image($value['course_video'],$value['course_video_path'])?>" data-fancybox="media">
                              <div class="video-box">
                                 <img src="<?=get_image($value['course_image'],$value['course_image_path'])?>">
                                 <span><i class="fas fa-play"></i> </span>
                              </div>
                           </a>
                           <a href="javascript:;" class="cate-tag"><?=$value['course_level']?></a>
                           <div class="vid-content">
                              <h4><a href="<?=l('course-detail').'/'.$value['course_slug']?>" style="color:#33415C;"><?=$value['course_name']?></a></h4>
                              <h4><?=$value['expert_name']?></h4>
                              <div class="row align-items-center pt-70">
                                 <div class="col-md-8">
                                    <ul class="rating">
                                       <?php
                                          for ($x = 1; $x <= $value['course_rating']; $x++) {?>
                                       "
                                       <li><img src="<?=i('')?>icons/rat-l.svg"></li>
                                       ";
                                       <?}?>
                                    </ul>
                                 </div>
                                 <div class="col-md-4 text-right">
                                    <h6><?=price($value['course_price'])?></h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <?php endforeach ?>
                     <?php endif ?>
                  </ul>
                  <?}?>



                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        
               
                    </div>
      


                </div> 
            </li>
         </ul>
      </section>
</div>
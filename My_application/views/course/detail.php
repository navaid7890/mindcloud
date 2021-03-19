
  <!-- Begin: Crousel -->
    <div class="ban">
      <h2>Course Details</h2>
    </div>
    <!-- END: Crousel -->

    <section class="courseDetail">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12 col-sm-8">
            <ul class="nav nav-tabs" role="tablist">
              
              <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
              <?php if (!empty($course['course_desc3'])): ?>
              <li role="presentation"><a href="#curriculum" aria-controls="curriculum" role="tab" data-toggle="tab">Curriculum</a></li>
              <?php endif ?>

              <li role="presentation"><a href="#loginEnroll" aria-controls="loginEnroll" role="tab" data-toggle="tab">Drop Reviews</a></li>
              <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="description">
                <h2><?=$course['course_name']?></h2>
                <div class="row">
                  <ul class="list-inline detail">
                <div class="col-md-8">
                  <li>
                    <span>Categories</span>
                    <?php if (isset($cp) && array_filled($cp)): ?>
                      <?php foreach ($cp as $key => $value): ?>
                        <strong><?=$value['profession_name']?><?=array_filled($cp[$key+1]) ? ',': ''?></strong>

                      <?php endforeach ?>
                    <?php endif ?>
                  </li>
                  </div>
                  <div class="col-md-4">
                  <li>
                    <span>Review</span>
                <div class="avg_rating">
              <div class="star-rating" > <span style="width:<?=$comment_info['average_ratingstars']?>"></span> </div>
              </div>
                    <strong>(<?=$comment_info['comments_count']?> Reviews)</strong>
                  </li>
                  </div>
                </ul>
                </div>
                <div class="clearfix"></div>
                <!-- <img src="<?=i('')?>img30.jpg" alt="" class="img-responsive"> -->
                <img src="<?=get_image($course['course_image'],$course['course_image_path'])?>" alt="" class="img-responsive">

                <div class="row courseDescription">
                  <div class="col-md-6 col-sm-6">
                  <?=html_entity_decode($course['course_desc2'])?></div>
                  <div class="col-md-6 col-sm-6">
                    <div class="courseDetail">
                      <div class="title">
                        <h4>Course Detail</h4>
                      </div>
                      <div class="detail">
                        <!-- <p><i class="fa fa-calendar"></i> Starts<span>Ongoing</span></p> -->
                        <p><i class="fa fa-clock-o"></i> Duration<span><?=$course['course_duration']?></span></p>
                        <p><i class="fa fa-file"></i> Lectures<span><?=count($lectures)?></span></p>
                        <p><i class="fa fa-arrow-up"></i> Level<span><?=$course['course_level']?></span></p>
                      </div>
              <!-- <a href="<?=l('course-payment').'?item-id='.$course['course_id'].'&token='.md5($course['course_id'])?>" 
                class="buyCourse"><span><?=price($course['course_price'])?></span>Buy This Course</a>-->
      <a href="javascript:void(0)" class="buyCourse cpackage" data-id="<?=$course['course_id']?>" data-type="course"><span><?=price($course['course_price'])?></span>Buy This Course</a>


<!-- <form>
       <input type="hidden" name="product_qty" class="qtystyle" value="1" min="1" max="10">
        <input type="hidden" name="product_image"  value="<?=get_image($course['course_image'],$course['course_image_path'])?>" class="productimage" value="">
        <input type="hidden" name="product_price" value="<?=$course['course_price']?>" class="productprice">
        <input type="hidden" name="product_type" value="1" class="product_type">
        <input type="hidden" name="product_id" value="<?=$course['course_id']?>" class="productid">
        <input type="hidden" name="product_name" value="<?=$course['course_name']?>" class="productname">
        <input type="hidden" name="box_product_ids" value="<?=$ids?>" class="product_item_ids">
        <a href="javascript:void(0)" class="buyCourse"><span><?=price($course['course_price'])?></span>Buy This Course</a>
</form> -->
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="curriculum"><?=html_entity_decode($course['course_desc3'])?></div>
              <div role="tabpanel" class="tab-pane" id="loginEnroll">
                <!-- <form action="post" class="formStyle">
                  <div class="input-group">
                    <label>User Name or Email *</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group">
                    <label>Password *</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group">
                    <p><input type="checkbox"> Remember me <a href="#">Forget Password?</a></p>
                  </div>
                  <div class="input-group">
                    <button class="btnStyle">Login</button>
                  </div>
                </form> -->

                <?$this->load->view("widgets/_widget-comment_section")?>
              </div>
              <div role="tabpanel" class="tab-pane" id="reviews">
                <div class="reviewsTab">
                  <div class="starSor">
                    <div class="left">
                    
                      <div class="cell">
                        <p>5 Star<span>2</span></p>
                        <div class="progres full"></div>
                      </div>
                      <div class="cell">
                        <p>4 Star<span>1</span></p>
                        <div class="progres full"></div>
                      </div>
                      <div class="cell">
                        <p>3 Star<span>0</span></p>
                        <div class="progres"></div>
                      </div>
                      <div class="cell">
                        <p>2 Star<span>0</span></p>
                        <div class="progres"></div>
                      </div>
                      <div class="cell">
                        <p>1 Star<span>0</span></p>
                        <div class="progres"></div>
                      </div>
                    
                       
                     </div>
                    <div class="right">
                      <h2>8.0</h2>

               <div class="avg_rating2">
              <div class="star-rating" > <span style="width:<?=$comment_info['average_ratingstars']?>"></span> </div>
              </div>

                    </div>
                  </div>
                  <div class="commentWrap">
                    <div class="title">
                      <h4><?=$comments_count?> Comments</h4>
                    </div>
                    <div class="commentCell">
                    <?php if (isset($comments) && array_filled($comments)): ?>
                      <?php foreach ($comments as $key => $value): ?>
                      
                      <div class="media">
                        <div class="media-left">
                          <img src="<?=$value['comment_profile']?>" alt="" style="height: 112px">
                        </div>
                        <div class="media-body">
                          <h4><?=$value['comment_name']?> <span><?=$value['ago']?></span>

                         <div class="star">
              <div class="rating">
              <div class="star-rating" > <span style="width:<?=$value['stars']?>;"></span> </div>
              </div>
                           </div>

                          </h4>

                          <p><?=$value['comment_comment']?></p>
                          
                        </div>
                      </div>

                      <?php endforeach ?>
                    <?php endif ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-xs-12 col-sm-4">
            <div class="sidebar">
              <?php if (!empty($course['course_image2'])): ?>
              <img src="<?=get_image($course['course_image2'],$course['course_image_path'])?>" alt="" class="img-responsive" style="max-height: 300px">
              <?php endif ?>

              <div class="cell">
                <div class="title">
                  <h4>Popular Courses</h4>
                </div>
                <?php if (isset($pop_course) && array_filled($pop_course)): ?>
                    <?php foreach ($pop_course as $key => $value): ?>
                  
                  <div class="media">
                  <div class="media-left">
                   <a href="<?=l('course-detail').'/'.$value['course_slug']?>"><img src="<?=get_image($value['course_image'],$value['course_image_path'])?>" alt="" class="media-object" style="max-height: 68px"></a> 
                  </div>
                  <idiv class="media-body">
                    <h4 class="media-title"><?=$value['course_name']?></h4>
                    <div class="star">
                      <span><?=price($value['course_price'])?></span>

                      <!-- <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i> -->
                    </div>
                  </idiv>
                </div>

                  <?php endforeach ?>
                <?php endif ?>
                
              </div>
              <div class="cell">
                <div class="title">
                  <h4>Categories</h4>
                </div>
                <div class="list">
                  <?php if (isset($profession) && array_filled($profession)): ?>
                    <?php foreach ($profession as $key => $value): ?>
                      <p><?=$value['profession_name']?></p>
                    <?php endforeach ?>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      
    <?
    $this->load->view('widgets/-widget_paymentMethodModal')
    ?>


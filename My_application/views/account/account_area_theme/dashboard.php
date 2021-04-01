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
                                    <li><a href ="#">Learning Journey</a></li>
                                    <li><a href="#">Introduction</a></li>
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
                           <div class="tutorial-mid-content">
                              <h4>What kind of Entrepreneur are you?</h4>
                              <div class="space"><br></div>
                              <p>Our Learning Journey is designed for entrepreneurs at all different stages </p>
                           </div>
                           <div class="space"><br><br></div>

                           <ul class="tutorial-box-list">
                              <li>
                                 <a href="#" data-fancybox="media">
                                    <div class="tutorial-list-box">
                                       <div class="tutorial-box-content">
                                          <span><img src="<?=i('')?>dashboard/home/icons/1.svg"></span>
                                          <div class="space"><br></div>
                                          <h3>New</h3>
                                          <p>Entrepreneur</p>
                                       </div>
                                    </div>
                                 </a>
                              </li>

                              <li>
                                 <a href="#" data-fancybox="media">
                                    <div class="tutorial-list-box">
                                       <div class="tutorial-box-content">
                                          <span><img src="<?=i('')?>dashboard/home/icons/5.svg"></span>
                                          <div class="space"><br></div>
                                          <h3>Corporate</h3>
                                          <p>Entrepreneur</p>
                                       </div>
                                    </div>
                                 </a>
                              </li>

                              <li>
                                 <a href="#" data-fancybox="media">
                                    <div class="tutorial-list-box">
                                       <div class="tutorial-box-content">
                                          <span><img src="<?=i('')?>dashboard/home/icons/6.png"></span>
                                          <div class="space"><br></div>
                                          <h3>Growth</h3>
                                          <p>Entrepreneur</p>
                                       </div>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </div>

                        <div class="tutorial-footer hding-4">
                           <div class="tutorial-footer-content">
                              <h4>What is the name of your Startup?</h4>
                              <div classs="space"><br><br></div>
                              <form action="">
                                 <div class="fld-email">
                                    <input type="email" placeholder="Write Startup name here" required="">
                                 </div>
                                 <div class="fld-btn">
                                    <input type="submit" value="Confirm">
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

<!-- 

<div class="aboutForm">
  <div class="col-md-12 col-xs-12 col-sm-8 center">
    <div class="dashbinfo">

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

          <? //if(isset($this->navigation_data) AND array_filled($this->navigation_data)) :?>
            <ul class="dashboard">
            <?php 
            // foreach($this->navigation_data as $key=>$value){
            //   if($value['is_dashboard']) {
            //     if($value['is_dropdown']){
            //       if(isset($value['navigation']) AND array_filled($value['navigation'])) {
            //         foreach($value['navigation'] as $sub_k=>$sub_v){ 
            //           if($sub_v['is_dashboard']) {
            //             echo '<li><a href="'.$sub_v['href'].'"><i class="'.$sub_v['icon'].'" aria-hidden="true"></i> '.$sub_v['name'].' </a></li>';
            //           }  
            //         }
            //       }
            //     }
            //     else {
            //       echo '<li><a href="'.$value['href'].'"><i class="'.$value['icon'].'" aria-hidden="true"></i> '.$value['name'].' </a></li>';
            //     }
            //   }
            // }
            ?>
            </ul>
          <? //endif;?>

        </div>
      </div>
    </div>
  </div>
</div> -->
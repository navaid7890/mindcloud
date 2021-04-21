<style>
ul.dashboard-layout>li:nth-child(1) {
    width: 30%;
}
ul.dashboard-layout>li:nth-child(2) {
    width: 70%;
}
ul.dashboard-layout {
        margin-top: 80px;
    }
.front-dashboard .dashboard-menu-box {
        left: -20%;
        transition: 0.5s;
    }
    

    a.menu-dash-front {
        display: block;
        padding: 20px 25px;
        font-size: 20px;
        font-weight: 700;
        background: #33415c;
        vertical-align: middle;
        color: #fff;
        position: fixed;
        top: 112px;
        z-index: 3;
        width: 100%;
    }

    a.menu-dash-front i {
        position: absolute;
        right: 20px;
        font-size: 26px;
        vertical-align: middle;
        line-height: 16px;
    }
</style>
<section class="dashboard">
        <div class="front-dashboard">
            <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
            <? $this->load->view("widgets/dashboard-menu-box");?>
        </div>
         <ul class="dashboard-layout">
            <!-- <li> 
                <? // $this->load->view("widgets/dashboard-menu-box");?>
            </li> -->

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
                                    <li><a href="#">Business Model Canvas</a></li>
                                    <li><a href="#">My Startup</a></li>
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
                                <h4>My <strong>Startup: App Monster</strong></h4>
                            </div>
                            <div class="space"><br><br></div>
                            <ul class="work-list">
                            <li>
                                    <div class="work-box">
                                        <div>
                                        <span><img src="<?=i('')?>logo.png" alt=""></span>
                                        <h6>My SWOT<br> Analysis</h6>
                                        <div class="work-prew">
                                            <img src="<?=i('')?>dashboard/work/1.png" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Business Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="<?=i('')?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                        <span><img src="<?=i('')?>logo.png" alt=""></span>
                                        <h6>My SWOT<br> Analysis</h6>
                                        <div class="work-prew">
                                            <img src="<?=i('')?>dashboard/work/1.png" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Business Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="<?=i('')?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                        <span><img src="<?=i('')?>logo.png" alt=""></span>
                                        <h6>My SWOT<br> Analysis</h6>
                                        <div class="work-prew">
                                            <img src="<?=i('')?>dashboard/work/1.png" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Business Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="<?=i('')?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                        <span><img src="<?=i('')?>logo.png" alt=""></span>
                                        <h6>My SWOT<br> Analysis</h6>
                                        <div class="work-prew">
                                            <img src="<?=i('')?>dashboard/work/1.png" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Business Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="<?=i('')?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                        <span><img src="<?=i('')?>logo.png" alt=""></span>
                                        <h6>My SWOT<br> Analysis</h6>
                                        <div class="work-prew">
                                            <img src="<?=i('')?>dashboard/work/1.png" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Business Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                                <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="<?=i('')?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                        <span><img src="<?=i('')?>logo.png" alt=""></span>
                                        <h6>My SWOT<br> Analysis</h6>
                                        <div class="work-prew">
                                            <img src="<?=i('')?>dashboard/work/1.png" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Business Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="<?=i('')?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                        <span><img src="<?=i('')?>logo.png" alt=""></span>
                                        <h6>My SWOT<br> Analysis</h6>
                                        <div class="work-prew">
                                            <img src="<?=i('')?>dashboard/work/1.png" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Business Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="<?=i('')?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                        <span><img src="<?=i('')?>logo.png" alt=""></span>
                                        <h6>My SWOT<br> Analysis</h6>
                                        <div class="work-prew">
                                            <img src="<?=i('')?>dashboard/work/1.png" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Business Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                                <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="<?=i('')?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                
                            </ul>
                        </div>
                     </div>
                  </div>
               </div> 
            </li>
         </ul>
      </section>
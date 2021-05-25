<section class="dashboard">

    <ul class="dashboard-layout">
        <li>
            <div class="front-dashboard">
                <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
                <? $this->load->view("widgets/dashboard-menu-box"); ?>
            </div>
        </li>

        <li>
            <? $this->load->view("widgets/course-box"); ?>
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
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Business <br> Model <br> Canvas</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Business Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                                <a href="<?= base_url()?>account/profile/dl_tools"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Value<br> Proposition<br> Canvas</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Value Proposition Canvas .</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a href="<?= base_url()?>account/profile/dl_tools_vp"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>SWOT<br> Analysis</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My SWOT Analysis.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a href="<?= base_url()?>account/profile/dl_tools_swot"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Positioning<br> and <br> Marketing<br> Mix</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Positioning and Marketing Mix.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a href="<?= base_url()?>account/profile/dl_tools_pmmt"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Strategic <br> Marketing <br> Plan</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Strategic Marketing Plan.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a href="<?= base_url()?>account/profile/dl_tools_smp"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Customer <br> Journey</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Customer Journey Demand Generation.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a href="<?= base_url()?>account/profile/dl_tools_cjdg"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Marketing<br> Campaign<br> Model<br> Canvas</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Marketing Campaign Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a href="<?= base_url()?>account/profile/dl_tools_mc"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Online Sales <br> Funnel</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Online Sales Funnel.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a href="<?= base_url()?>account/profile/dl_tools_osf"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Legal<br> Term<br> Sheet</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Legal Term Sheet.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a href="<?= base_url()?>account/profile/dl_tools_lts"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Investment<br> Deck<br> Slides</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Investment Deck Slides.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                            <a href="<?= base_url()?>account/profile/dl_tools_ids"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
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
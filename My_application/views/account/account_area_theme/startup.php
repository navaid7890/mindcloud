<style>
    .tutorial-mid p:last-child,
    .tutorial-mid p:last-child a {
        min-height: 66px;
    }


    ul.dashboard-layout>li:nth-child(2).open {
        width: 82%;
        margin-left: auto;
    }
</style>
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
            <div class="tutorial-box">
                <div class="tutorial-scroll-content">
                    <div class="tutorial-content">
                        <div class="tutorial-head">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <ul class="bredcum-links">
                                        <li><a href="#">Learning Journey</a></li>
                                        <!-- <li><a href="#">Business Model Canvas</a></li> -->
                                        <li><a href="#">My Startup</a></li>
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
                            <div class="tutorial-mid-content">

                                <h4>My <strong>Startup:
                                        <? if (!empty($startup)) : ?>
                                            <?= $startup[0]['startup_name'] ?>
                                        <? else : ?>
                                            -- -- --
                                        <? endif; ?>

                                    </strong></h4>
                            </div>
                            <div class="space"><br><br></div>
                            <ul class="work-list">
                                <li class="unlockedItem">
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
                                            <div class="col-md-3">
                                                <a href="<?= base_url() ?>account/profile/dl_tools"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools?cat=11" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Value<br> Proposition<br> Canvas</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/value.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Value Proposition Canvas .</p>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="<?= base_url() ?>account/profile/dl_tools_vp"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_vp?cat=12" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>SWOT<br> Analysis</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/swot.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My SWOT Analysis.</p>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="<?= base_url() ?>account/profile/dl_tools_swot"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_swot?cat=13" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Positioning<br> and <br> Marketing<br> Mix</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/Positioning.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Positioning and Marketing Mix.</p>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="<?= base_url() ?>account/profile/dl_tools_pmmt"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_pmmt?cat=14" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Strategic <br> Marketing <br> Plan</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/stratigic.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Strategic Marketing Plan.</p>
                                            </div>
                                            <div class="col-md-3 ">
                                                <a href="<?= base_url() ?>account/profile/dl_tools_smp"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_smp?cat=15" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Customer <br> Journey</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/customer_journey.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Customer Journey Demand Generation.</p>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="<?= base_url() ?>account/profile/dl_tools_cjdg"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_cjdg?cat=16" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Marketing<br> Campaign<br> Model<br> Canvas</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/Marketing_Campaign_Model_Canvas.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Marketing Campaign Model Canvas.</p>
                                            </div>
                                            <div class="col-md-3 ">
                                                <a href="<?= base_url() ?>account/profile/dl_tools_mc"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_mc?cat=17" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Online Sales <br> Funnel</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/online_sales.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Online Sales Funnel.</p>
                                            </div>
                                            <div class="col-md-3 ">
                                                <a href="<?= base_url() ?>account/profile/dl_tools_osf"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_osf?cat=18" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Legal<br> Term<br> Sheet</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/leagal_Sheet.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Legal Term Sheet.</p>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="<?= base_url() ?>account/profile/dl_tools_lts"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_lts?cat=25" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Income </br> Statement</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/income_statement.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Income Statement.</p>
                                            </div>
                                            <div class="col-md-3 ">
                                                <a href="<?= base_url() ?>quiz/income"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_fm_income?cat=20" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Balance </br> Sheet</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/balance_sheet.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Balance Sheet.</p>
                                            </div>
                                            <div class="col-md-3 ">
                                                <a href="<?= base_url() ?>quiz/balance"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_fm_bss?cat=21" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Cash<br> Flow<br> Statement</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/cashflow.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Cash Flow Statement.</p>
                                            </div>
                                            <div class="col-md-3 ">
                                                <a href="<?= base_url() ?>quiz/cash"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_fm_cfs?cat=22" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Break-Event</br> Point</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/break_event.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Break-Event Point.</p>
                                            </div>
                                            <div class="col-md-3 ">
                                                <a href="<?= base_url() ?>quiz/breaked"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_fm_beps?cat=23" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Discounted<br> Cash Flow<br> Valuation</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/discouted.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>Discounted Cash Flow Valuation.</p>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="<?= base_url() ?>quiz/cashflow"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_fm_dcvm?cat=24" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="lockedItem">
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6>Investment<br> Deck<br> Slides</h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/investment.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My Investment Deck Slides.</p>
                                            </div>
                                            <div class="col-md-3 ">
                                                <a href="<?= base_url() ?>account/profile/dl_tools_ids"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                                <a href="<?= base_url() ?>account/profile/tools_ids?cat=26" style="margin-top: 3px"><img src="<?= i('') ?>dashboard/home/icons/edit.png" alt=""></a>
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


<?
$upaid = array();
$upaid['where']['user_id'] = $this->userid;
$upaid['where']['user_paid'] = 1;
$datapaid = $this->model_user->find_all_active($upaid);
?>


<? if ($datapaid[0]['user_paid'] == 0) : ?>
    <style>

    </style>
    <script>
        // $('.catLj12').click(false);
        // $(".lockedItem a").removeAttr("href");
        var newUrl = "<?= l('subscription') ?>";
        $(".lockedItem a").attr('href', newUrl);
    </script>
    <? // else : 
    ?>
<? endif; ?>
<style>
    ul.work-list>li {
        width: 50.7%;
    }

    .work-box {
        height: 250px;
    }

    .yourWork ul.dropdown-box {
        display: block !important;
    }
</style>
<section class="dashboard">

    <ul class="dashboard-layout">
        <li>
            <div class="front-dashboard">
                <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
                <? $this->load->view("widgets/dashboard-menu-box"); ?>
            </div>
        </li>

        <li>
            <div class="yourWork">
                <? $this->load->view("widgets/course-box"); ?>
            </div>
        </li>

        <li>

            <?
            $dt = array(
                'account/profile/dl_tools',
                'account/profile/dl_tools_vp',
                'account/profile/dl_tools_swot',
                'account/profile/dl_tools_pmmt',
                'account/profile/dl_tools_smp',
                'account/profile/dl_tools_cjdg',
                'account/profile/dl_tools_mc',
                'account/profile/dl_tools_osf',
                'account/profile/dl_tools_lts',
                '',
                'quiz/income',
                'quiz/balance',
                'quiz/cash',
                'quiz/breaked',
                'quiz/cashflow',
                'account/profile/dl_tools_ids'
            );
            ?>
            <?
            $toolName = array(
                'Business Model Canvas.',
                'Value Proposition Canvas ',
                'SWOT Analysis.',
                'Positioning and Marketing Mix.',
                'Strategic Marketing Plan.',
                'Customer Journey Demand Generation.',
                'Marketing Campaign Model Canvas.',
                'Online Sales Funnel.',
                'Legal Term Sheet.',
                '',
                'Income Statement',
                'Balance Sheet',
                'Cash Flow Statement',
                'Break-Event Point',
                'Discounted Cash Flow Valuation',
                'Investment Deck Slides'
            );
            ?>

            <? foreach ($dt as $toolbuilder => $value) : ?>
                <? //$val=$_GET['tool']
                ?>



            <? endforeach; ?>
            <? // debug($dt[$_GET['tool']]) 
            ?>
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
                                <h4>My <strong>Startup: <?= $startup[0]['startup_name'] ?></strong></h4>
                            </div>
                            <div class="space"><br><br></div>
                            <ul class="work-list">
                                <li>
                                    <div class="work-box">
                                        <div>
                                            <span><img src="<?= i('') ?>logo.png" alt=""></span>
                                            <h6><?= $toolName[$_GET['tool']] ?></h6>
                                            <div class="work-prew">
                                                <img src="<?= i('') ?>dashboard/work/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-9">
                                                <p>My <?= $toolName[$_GET['tool']] ?>.</p>
                                            </div>
                                            <div class="col-md-3 text-right">
                                                <a href="<?= base_url() ?><?= $dt[$_GET['tool']] ?>"><img src="<?= i('') ?>dashboard/home/icons/4.svg" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="">
                                    <!-- <form id="form-percent">
                                            <input type="hidden" name="tool_builder[tool_builder_percent_work]" value="1">
                                            <button type="submit" class="btn btn-primary mt-5" id="forms-tool_builder-btn1">Complete</button>
                                    </form> -->
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
<style>
    .progres-dark {
        width: 10%;
    }

    #expertGraph .expertCount {
        font-size: 36px;
        color: #33415C;
        font-weight: 800;
        line-height: 122px;
        position: absolute;
        top: 80px;
        right: 35%;
    }

    #expertGraph .progres-circle-box {
        position: relative;
    }

    #expertGraph span.prec {
        display: none;
    }
</style>

<div class="index-page">
    <section class="dashboard">
        <ul class="dashboard-layout">
            <li>
                <div class="front-dashboard">
                    <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
                    <? $this->load->view("widgets/dashboard-menu-box"); ?>
                </div>
            </li>
            <li>
                <div class="index-page-wrap">
                    <div class="index-page-content hding-2">
                        <h2>Welcome <strong><?= $this->session_data['username'] ?></strong></h2>
                        <div class="space"><br><br></div>
                        <div class="index-graph-box">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="progress-box">
                                        <h2>My <strong> Learning Journey  </strong></h2>
                                        <div class="space"><br><br><br></div>
                                        <div class="progres-bar" id="LearingJourney">
                                            <div class="progres-text">
                                                <p>Intro to Learning Journey</p>
                                            </div>
                                            <div class="progres-gray">
                                                <div class="progres-dark"></div>
                                            </div>
                                            <div class="progres-percentage">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar" id="businessCalculate">
                                            <div class="progres-text">
                                                <p>Business Model Canvas</p>
                                            </div>

                                            <div class="progres-gray">
                                                <div class="progres-dark"></div>
                                            </div>
                                            <div class="progres-percentage">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar" id="Goto_market_strategies">
                                            <div class="progres-text">
                                                <p>Go-to market strategies</p>
                                            </div>

                                            <div class="progres-gray">
                                                <div class="progres-dark"></div>
                                            </div>

                                            <div class="progres-percentage">
                                                <span>12%</span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar" id="Financ_management">
                                            <div class="progres-text">
                                                <p>Financial management</p>
                                            </div>

                                            <div class="progres-gray">
                                                <div class="progres-dark"></div>
                                            </div>

                                            <div class="progres-percentage">
                                                <span>0%</span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar" id="L_Structure">
                                            <div class="progres-text">
                                                <p>Legal Structure</p>
                                            </div>

                                            <div class="progres-gray">
                                                <div class="progres-dark"></div>
                                            </div>

                                            <div class="progres-percentage">
                                                <span>0%</span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar" id="Invest_Deck">
                                            <div class="progres-text">
                                                <p>Investment Deck</p>
                                            </div>

                                            <div class="progres-gray">
                                                <div class="progres-dark"></div>
                                            </div>

                                            <div class="progres-percentage">
                                                <span>0%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-btn btn-group">
                                        <a href="<?= l('account/profile/learning') ?>" class="btn-theme btn-hover">Continue Learning Journey <span></span></a>
                                        <a href="<?= l('account/profile/startup') ?>" class="btn-theme btn-hover btn-transparent">My Startup <span></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="progress-wrap">
                                        <div class="progres-circle-box">
                                            <p>Journey completion</p>
                                            <div class="space"><br><br></div>
                                            <div id="activeBorder1" class="active-border">
                                                <div id="circle1" class="circle">
                                                    <span class="prec allpercent">0</span>
                                                    <span id="startDeg1" class="8"></span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="progress-footer">
                                            <h6>My Certificate</h6>
                                            <div id="certificateBtn" style="display: none;">
                                                <a href="">Download Learing Journey Certificate</a>
                                            </div>
                                            <div id="certificateNotComplete" style="display: block;">
                                                <p>Complete your Learning<br> Journey to receive Certificate</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space"><br><br></div>
                        <div class="index-graph-box">
                            <div class="row graph-box-2" id="expertGraph">
                                <div class="col-lg-7 col-md-12">
                                    <div class="progress-box">
                                        <h2>My <strong> Experts Tutorials </strong></h2>
                                        <?php if (isset($art) && array_filled($art)) : ?>
                                            <?php foreach ($art as $key => $value) : ?>
                                                <?
                                                $param = array();
                                                $param['where']['mytutorial_user_id'] = $this->userid;
                                                $param['where']['mytutorial_tutorial_id'] =  $value['tutorial_id'];
                                                $mypercentage = $this->model_mytutorial->find_one_active($param);
                                                ?>
                                                <div class="space"><br><br></div>
                                                <div class="progres-bar">
                                                    <div class="progres-text">
                                                        <p><?= $value['tutorial_name'] ?></p>
                                                    </div>
                                                    <div class="progres-gray">
                                                        <div class="progres-dark forSumAll percentCss<?= $value['tutorial_id'] ?>"></div>
                                                    </div>
                                                    <script>
                                                        $(document).ready(function() {
                                                            var totalDesc = 0
                                                            var totalIntro = 0
                                                            var totalVideo = 0
                                                            <? if ($mypercentage['mytutorial_desc_percent'] == 1) : ?>
                                                                $(".tutPer<?= $value['tutorial_id'] ?>").html('100');
                                                                var totalDesc = parseInt($(".tutPer<?= $value['tutorial_id'] ?>").html());
                                                            <? endif; ?>
                                                            <? if ($mypercentage['mytutorial_intro_percent'] == 1) : ?>
                                                                $(".tutPer<?= $value['tutorial_id'] ?>").html('100');
                                                                var totalIntro = parseInt($(".tutPer<?= $value['tutorial_id'] ?>").html());
                                                            <? endif; ?>
                                                            <? if ($mypercentage['mytutorial_video_percent'] == 1) : ?>
                                                                $(".tutPer<?= $value['tutorial_id'] ?>").html('100');
                                                                var totalVideo = parseInt($(".tutPer<?= $value['tutorial_id'] ?>").html());
                                                            <? endif; ?>

                                                            TotalSum = totalDesc + totalIntro + totalVideo
                                                            var totalPercent = Math.round((TotalSum / 300) * 100);
                                                            $(".tutPer<?= $value['tutorial_id'] ?>").html(totalPercent);
                                                            var totalPercentSign = totalPercent + "%"
                                                            $(".progres-dark.percentCss<?= $value['tutorial_id'] ?>").css("width", totalPercentSign);

                                                        });
                                                    </script>
                                                    <div class="progres-percentage tutPer<?= $value['tutorial_id'] ?>" id="tuztPer">
                                                        <span>0</span>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif ?>
                                    </div>
                                    <div class="progress-btn btn-group">
                                        <a href="<?= l('account/profile/expert') ?>" class="btn-theme btn-hover">Continue Experts Tutorials <span></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="progress-wrap">
                                        <div class="progres-circle-box" id="circlePercent">
                                            <p>Journey completion</p>
                                            <div class="space"><br><br></div>
                                            <div id="activeBorder2" class="active-border">
                                                <div id="circle2" class="circle">
                                                    <span class="prec">8.45</span>
                                                    <span id="startDeg2" class="8"></span>
                                                </div>
                                            </div>
                                            <div class="expertCount">4/<?= count($art) ?></div>

                                        </div>

                                        <div class="progress-footer">
                                            <h6>My Certificate</h6>
                                            <p>Complete Expert Tutorials<br> to receive Certificate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="expert-tut-sec pb-80">
                                <div class="exper-head">
                                    <h2>Your <strong>Expert Tutorials</strong></h2>
                                </div>
                                <div class="space"><br><br></div>
                                <? //= debug($data['popular']); 
                                ?>
                                <ul>
                                    <?php if (isset($your_tut) && array_filled($your_tut)) : ?>
                                        <?php foreach ($your_tut as $key => $value) : ?>
                                            <li>
                                                <div class="vid-box">
                                                    <a href="<?= g('db.admin.bucket') . $value['tutorial_video'] ?>" data-fancybox="media">
                                                        <div class="video-box">
                                                            <img src="<?= g('db.admin.bucketimg') . $value['tutorial_image2'] ?>">
                                                            <span><i class="fas fa-play"></i>
                                                                <p>Preview Course</p>
                                                            </span>
                                                            <?
                                                    $coursecat = array();
                                                    $coursecat['where']['cp_course_id'] = $value['tutorial_id'];
                                                    $cate = $this->model_course_category->find_all_active($coursecat);

                                                    $cat_name = array();
                                                    $cat_name['where']['category_id'] = $cate[0]['cp_category_id'];
                                                    $cat_name = $this->model_category->find_all_active($cat_name);
                                                    ?>
                                                            <a href="javascript:;" class="cate-tag"><?= $cat_name[0]['category_name'] ?></a>
                                                        </div>
                                                    </a>
                                                   
                                                   
                                                    <div class="vid-content">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-8">
                                                                <h4><?= $value['tutorial_name'] ?></h4>
                                                                <ul class="rating">
                                                                    <?
                                                                    $rating = $this->model_learning_journey_course_review->get_avg_reating($value['tutorial_id']);
                                                                    ?>
                                                                    <?php
                                                                    for ($x = 1; $x <= $rating[0]['Rating']; $x++) { ?>
                                                                        "
                                                                        <li><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                                                        ";
                                                                    <? } ?>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="progres-box">
                                                                    <div id="activeBorder1" class="active-border">
                                                                        <div id="circle1" class="circle">
                                                                            <span class="prec">8</span>
                                                                            <span id="startDeg1" class="8"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space"><br><br><br><br></div>
                                                        <div class="row align-items-center">
                                                            <div class="col-md-10">
                                                                <?
                                                                $exp_name = array();
                                                                $exp_name['where']['expert_id'] = $value['tutorial_expert_id'];
                                                                $exp_name = $this->model_expert->find_all_active($exp_name);

                                                                // debug($exp_name);
                                                                // debug($exp_name['expert_image']);
                                                                ?>
                                                                <ul class="login-btn">
                                                                    <li><a href="#"><span><img src="<?= g('db.admin.bucketimg') . $exp_name[0]['expert_image'] ?>"></span> <?= $exp_name[0]['expert_name'] ?> <i class="fal fa-angle-down"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <a href="#" class="arrow-links"><i class="far fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </ul>
                            </div>
                            <div class="want-lern-sec expert-tut-sec">
                                <div class="exper-head">
                                    <h2>What to learn next in <strong>Expert Tutorials</strong></h2>
                                </div>
                                <div class="space"><br><br></div>
                                <ul>
                                    <?php if (isset($next_tut) && array_filled($next_tut)) : ?>
                                        <?php foreach ($next_tut as $key => $value) : ?>
                                            <li>
                                                <div class="vid-box">
                                                    <a href="<?= g('db.admin.bucket') . $value['tutorial_video'] ?>" data-fancybox="media">
                                                        <div class="video-box">
                                                            <img src="<?= g('db.admin.bucketimg') . $value['tutorial_image2'] ?>">
                                                            <span><i class="fas fa-play"></i>
                                                                <p>Preview Course</p>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <?
                                                    $coursecat = array();
                                                    $coursecat['where']['cp_course_id'] = $value['tutorial_id'];
                                                    $cate = $this->model_course_category->find_all_active($coursecat);

                                                    $cat_name = array();
                                                    $cat_name['where']['category_id'] = $cate[0]['cp_category_id'];
                                                    $cat_name = $this->model_category->find_all_active($cat_name);
                                                    ?>
                                                    <a href="javascript:;" class="cate-tag"><?= $cat_name[0]['category_name'] ?></a>
                                                    <div class="vid-content">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-8">
                                                                <h4><?= $value['tutorial_name'] ?></h4>
                                                                <ul class="rating">
                                                                    <?
                                                                    $rating = $this->model_learning_journey_course_review->get_avg_reating($value['tutorial_id']);
                                                                    ?>
                                                                    <?php
                                                                    for ($x = 1; $x <= $rating[0]['Rating']; $x++) { ?>
                                                                        "
                                                                        <li><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                                                        ";
                                                                    <? } ?>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="progres-box">
                                                                    <div id="activeBorder1" class="active-border">
                                                                        <div id="circle1" class="circle">
                                                                            <span class="prec">8</span>
                                                                            <span id="startDeg1" class="8"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space"><br><br><br><br></div>
                                                        <div class="row align-items-center">
                                                            <div class="col-md-10">
                                                                <?
                                                                $exp_name = array();
                                                                $exp_name['where']['expert_id'] = $value['tutorial_expert_id'];
                                                                $exp_name = $this->model_expert->find_all_active($exp_name);

                                                                // debug($exp_name);
                                                                // debug($exp_name['expert_image']);
                                                                ?>
                                                                <ul class="login-btn">
                                                                    <li><a href="#"><span><img src="<?= g('db.admin.bucketimg') . $exp_name[0]['expert_image'] ?>"></span> <?= $exp_name[0]['expert_name'] ?> <i class="fal fa-angle-down"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <a href="#" class="arrow-links"><i class="far fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </ul>
                                <div class="space"><br><br><br></div>
                                <a href="#" class="btn-links">See All Experts</a>
                            </div>
                        </div>
                        <div class="space"><br><br></div>
                        <div class="index-graph-box">
                            <div class="certificate-box">
                                <h2>My <strong>Certificates</strong></h2>
                                <div class="space"><br><br></div>
                                <? //= debug($mytutorial) 
                                ?>
                                

                                <ul class="certificate-slide">
                                <?php if (isset($mytutorial) && array_filled($mytutorial)) : ?>
                                    <?php foreach ($mytutorial as $key => $value) : ?>
                                        <?= $value['mytutorial_tutorial_id'] ?>
                                        <?
                                        $cer = array();
                                        $cer['order'] = "tutorial_id ASC";
                                        $cer['where']['tutorial_id'] = $value['mytutorial_tutorial_id'];
                                        $cer['where']['tutorial_status'] = 1;
                                        // $param['where_in']['tutorial_id'] = $all;
                                        $certificate = $this->model_tutorial->find_all_active($cer);
                                        ?>
                                        
                                        <?
                                        $al = array();
                                        $al['where']['expert_id'] = $certificate[0]['tutorial_expert_id'];
                                        $expert = $this->model_expert->find_all_active($al);
                                        ?>
                                    <li>
                                        <div style="text-align: center;">
                                            <div style="padding: 20px 20px 35px;margin-bottom: 15px;text-align: center;background: #f3f7fb;border: 10px solid #71c2fd;">
                                                <div>
                                                    <h2 style="font-size: 26px;color: #4b647a;font-weight: 400;text-transform: uppercase;">certificate of completion</h2>
                                                    <div class="space"><br><br></div>
                                                    <h3 style="color: #425c73; font-weight: 700;text-transform: capitalize;font-size: 32px;"><?= $this->session_data['username'] ?></h3>
                                                    <div class="space"><br></div>
                                                    <p style="font-size: 14px;color: #4b647a;">has successfully completed on the <?= date("jS \of F Y") ?> the tutorial</p>
                                                    <div class="space"><br></div>
                                                    <h3 style="color: #425c73; font-weight: 700;text-transform: capitalize;font-size: 32px;">"<?=$certificate[0]['tutorial_name'] ?>"</h3>
                                                    <div class="space"><br></div>
                                                    <h6 style="font-style: italic;font-size: 18px;color: #4b647a;">by Expert <span> <?= $expert[0]['expert_name'] ?></span></h6>
                                                    <div class="space"><br><br></div>
                                                    <div class="space"><br><br></div>

                                                    <div style="display: flex;justify-content: space-between; align-items: center;">
                                                        <div>
                                                            <span><img src="<?= base_url() ?>assets/front_assets/images/logo.png" alt=""></span>
                                                        </div>

                                                        <div>
                                                            <span><img src="<?= base_url() ?>assets/front_assets/images/certificate.png" alt=""></span>
                                                        </div>

                                                        <div>
                                                            <img src="<?= base_url() ?>assets/front_assets/images/signature.jpg" alt="" style="text-align: left; mix-blend-mode: darken;">
                                                            <h6 style="font-weight: 600;padding-bottom: 4px;text-transform: capitalize;font-size: 16px;">genny ghanimeh</h6>
                                                            <p style="font-style: italic;text-transform: capitalize;font-size: 13px;font-weight: 300;">founder mind cloud tribe</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <h6 style="font-size: 18px;font-weight: 700;color: #425C73;"><?=$certificate[0]['tutorial_name'] ?></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                <?php endif ?>
                                </ul>

                            </div>
                        </div>
                        <div class="index-graph-box">
                            <div class="consult-sec hding-2 para">
                                <div class="consult-head">
                                    <h2>Consult with <strong>Experts</strong></h2>
                                    <div class="space"><br><br></div>
                                    <p><?= html_entity_decode($con1['cms_page_content']) ?></p>
                                </div>
                                <div classs="sapce"><br><br><br></div>

                                <div class="row border-box">
                                    <div class="col-md-4 pad-zero">
                                        <div class="consult-left">
                                            <div>
                                                <h2><strong><?= html_entity_decode($con1['cms_page_title']) ?></strong></h2>

                                                <ul class="consult-left-slide">
                                                    <li>
                                                        <div class="consult-left-content">
                                                            <p> <?= html_entity_decode($con2['cms_page_content']) ?></p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="consult-left-content">
                                                            <p> <?= html_entity_decode($con3['cms_page_content']) ?></p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="consult-left-content">
                                                            <p><?= html_entity_decode($con4['cms_page_content']) ?></p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="consult-left-content">
                                                            <p><?= html_entity_decode($con5['cms_page_content']) ?></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 pad-zero">
                                        <div class="consult-content">
                                            <h2>Select <strong>Topic</strong></h2>

                                            <ul class="cate-list">
                                                <? if (isset($art) and array_filled($art)) : ?>
                                                    <? foreach ($art as $key => $value) : ?>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <p><span><img src="<?= i('') ?>icons/category/1.svg"></span> <?= $value['tutorial_name'] ?> </p>
                                                            </a>
                                                        </li>
                                                    <? endforeach; ?>
                                                <? endif; ?>
                                            </ul>

                                        </div>
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


<script>
    $(document).ready(function() {
        // Learing Journey Percentage
        $("#LearingJourney .progres-dark").css("width", "100%");
        $("#LearingJourney .progres-percentage span").text("100%");

        // BUSINESS MODEL CANVAS Percentage
        var percent = localStorage.getItem("businessPercent") + "%";
        $("#businessCalculate .progres-dark").css("width", percent);
        $("#businessCalculate .progres-percentage span").text(localStorage.getItem("businessPercent") + "%");
        
        console.log(localStorage.getItem("businessPercent"));
        // GO-TO MARKET STRATEGIES Percentage
        var gtmspercent = localStorage.getItem("GO_TO_MARKET_STRATEGIES") + "%";
        $("#Goto_market_strategies .progres-dark").css("width", gtmspercent);
        $("#Goto_market_strategies .progres-percentage span").text(localStorage.getItem("GO_TO_MARKET_STRATEGIES") + "%");

        // Financial management Percentage
        var fmpercent = localStorage.getItem("Financial_management") + "%";
        $("#Financ_management .progres-dark").css("width", fmpercent);
        $("#Financ_management .progres-percentage span").text(localStorage.getItem("Financial_management") + "%");


        // Legal Structure Percentage
        var lspercent = localStorage.getItem("Legal_Structure") + "%";
        $("#L_Structure .progres-dark").css("width", lspercent);
        $("#L_Structure .progres-percentage span").text(localStorage.getItem("Legal_Structure") + "%");


        // Investment / Pitch Deck Percentage
        var ideskpercent = localStorage.getItem("Investment_Desk") + "%";
        $("#Invest_Deck .progres-dark").css("width", ideskpercent);
        $("#Invest_Deck .progres-percentage span").text(localStorage.getItem("Investment_Desk") + "%");



        if (localStorage.getItem("learingPercent") < "100") {
            $("#certificateBtn").css("display", "block");
            $("#certificateNotComplete").css("display", "none");
        } else {

            $("#certificateBtn").css("display", "none");
            $("#certificateNotComplete").css("display", "block");
        }

        $(".allpercent").text(localStorage.getItem("learingPercent"));


        var ExpAllsum = 0;
        $('#expertGraph .progres-percentage').each(function() {
            ExpAllsum += +$(this).text() || 0;
        });
        var countTutorials = <?= count($art) ?> * 100;
        var ExptotalPerc = Math.round((ExpAllsum / countTutorials) * 100);



        $("#circlePercent .prec").html(ExptotalPerc);

        console.log("all sum", ExptotalPerc);

    });
</script>
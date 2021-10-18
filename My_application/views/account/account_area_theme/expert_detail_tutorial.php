<style>
    input#forms-expert-tutorial-video-btn {
        padding: 13px 26px;
        background: #FDBE41;
        font-size: 14px;
        font-weight: 700;
        color: #F8F9FA;
        text-transform: uppercase;
        border-radius: 25px;
    }

    input#forms-expert-tutorial-video-btn:hover {
        position: static;
        display: block;
        background-color: #e28f26;
    }

    .btnArea {
        display: flex;
    }

    .para p {
        font-size: 20px !important;
        line-height: normal;
        color: hsl(220, 29%, 28%) !important;
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
                <? $this->load->view("widgets/expert-course-box"); ?>
            </li>
            <?
            //   debug($expert_course['tutorial_id']);
            $vidcat = array();
            $vidcat['where']['cp_course_id'] = $expert_course[0]['tutorial_id'];
            $vidcat = $this->model_course_tutorial->find_all_active($vidcat);
            //  debug($vidcat) ;
            $vid_name = array();
            $vid_name['where']['videos_id'] = $vidcat[0]['cp_tutorial_id'];
            $vid_name = $this->model_videos->find_all_active($vid_name);
            // debug($vid_name[0]['videos_name']);
            ?>
            <li class="open">

                <div class="tutorial-box">
                    <div class="tutorial-scroll-content">
                        <div class="tutorial-content">
                            <div class="tutorial-head">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <ul class="bredcum-links">
                                            <li><a href="#">Learning Journey</a></li>
                                            <li><a href="#"><?= $vid_name[0]['videos_name'] ?></a></li>
                                            <li><a href="#">Introduction</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <div class="bredcum-right">
                                            <?
                                            $completTut = array();
                                            $completTut['where']['mytutorial_user_id'] = $this->userid;
                                            $completTut['where']['mytutorial_tutorial_id'] = $_GET['courseid'];
                                            $completTut['where']['mytutorial_desc_percent'] = 1;
                                            $completTut['where']['mytutorial_intro_percent'] = 1;
                                            $completTut['where']['mytutorial_video_percent'] = 1;
                                            $completTutProgress = $this->model_mytutorial->find_all_active($completTut);
                                            ?>
                                            <? if (!empty($completTutProgress)) : ?>
                                                <a href="#" class="btn-round btn-hover">Completed <span></span></a>
                                            <? else : ?>
                                                <a href="#" class="btn-round btn-hover">In progress <span></span></a>
                                            <? endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tutorial-mid hding-4 hding-3 para">
                                <div class="tutorial-mid-content">
                                    <h4>Tutorial Content:</h4>
                                </div>
                                <div class="space"><br><br></div>
                                <p><strong>In this tutorial, you will learn:</strong></p>
                                <div class="space"><br></div>

                                <? if (isset($expert_course) and array_filled($expert_course)) : ?>
                                    <? foreach ($expert_course as $key => $value) : ?>
                                        <h5><?= html_entity_decode($value['tutorial_desc']) ?></h5>
                                    <? endforeach; ?>
                                <? endif; ?>

                                <div class="space"><br><br></div>

                                <? if (isset($expert_course) and array_filled($expert_course)) : ?>
                                    <? foreach ($expert_course as $key => $value) : ?>
                                        <h5><?= html_entity_decode($value['tutorial_desc2']) ?></h5>
                                    <? endforeach; ?>
                                <? endif; ?>
                                <div class="space"><br><br></div>
                                <!-- <a href="javascript:;" data-fancybox data-src="#popup-down" class="btn-dashboard btn-hover">Certificate <span></span></a> -->
                                <!-- <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="assets/images/dashboard/home/icons/4.svg" alt=""></a> -->
                                <?
                                $al = array();
                                $al['where']['expert_id'] = $expert_course[0]['tutorial_expert_id'];

                                $expert = $this->model_expert->find_all_active($al);
                                //   debug($expert[0]['expert_name']);
                                ?>
                                <form id="forms-expert-tutorial-video">
                                    <input type="hidden" name="mytutorial[mytutorial_user_id]" value="<?= ($this->userid) ?>">
                                    <input type="hidden" name="mytutorial[mytutorial_tutorial_id]" value="<?= $_GET['courseid'] ?>">
                                    <input type="hidden" name="mytutorial[mytutorial_desc_percent]" value="1">
                                    <input type="hidden" name="mytutorial[mytutorial_certificate]" value="1">
                                    <div class="btnArea">
                                        <input type="submit" class="btn-round btn-hover" value="Mark As Complete" id="forms-expert-tutorial-video-btn">
                                        <a href="javascript:;" data-fancybox data-src="#popup-down" class="btn-dashboard btn-hover">Certificate <span></span></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
</div>


<div class="popup-main" style="display:none;" id="popup-down">
    <div class="popup-head text-center">
        <h5>Congratulations!</h5>
        <div class="space"><br></div>
        <p>We are very happy that you have successfully completed your Tutorial. Please receive this Certificate as acknowledgment for your effort. Wishing you a lot of success from Mind Cloud Tribe family!</p>
    </div>
    <div class="space"><br><br></div>
    <div class="popup-content text-center">
        <div class="certificate-modal">
            <div>
                <h2>certificate of completion</h2>
                <div class="space"><br><br></div>
                <h3><?= $this->session->userdata['logged_in_front']['first_name'] ?></h3>
                <div class="space"><br></div>
                <p>has successfully completed on the <?= date("jS \of F Y") ?> the tutorial</p>
                <div class="space"><br></div>
                <h3>"<?= $course_name ?>"</h3>
                <div class="space"><br></div>
                <h6>by Expert <span> <?= $expert[0]['expert_name']  ?></span></h6>
                <div class="space"><br><br></div>
                <div class="space"><br><br></div>

                <div class="row align-items-center">
                    <div class="col-md-4">
                        <span><img src="<?= base_url() ?>assets/front_assets/images/logo.png" alt=""></span>
                    </div>

                    <div class="col-md-4">
                        <span><img src="<?= base_url() ?>assets/front_assets/images/certificate.png" alt=""></span>
                    </div>

                    <div class="col-md-4 text-left">
                        <img src="<?= base_url() ?>assets/front_assets/images/signature.jpg" alt="" style="text-align: left; mix-blend-mode: darken;">
                        <h6>genny ghanimeh</h6>
                        <p>founder mind cloud tribe</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="space"><br></div>
    <div class="popup-footer">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="social-links">
                    <li>
                        <p> Share on:</p>
                    </li>
                    <li><a href="<?= g('db.admin.linkedin_id') ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="<?= g('db.admin.youtube_id') ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="<?= g('db.admin.facebook_id') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="<?= g('db.admin.instagram_id') ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="popup-col">

                    <a href="<?= base_url() ?>account/profile/pdf_convert?courseid=<?= $_GET['courseid'] ?>" target="_blank"><img src="<?= base_url() ?>/assets/front_assets/images/dashboard/home/icons/dl.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
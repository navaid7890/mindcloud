<div class="business-page">
    <section class="dashboard">

        <ul class="dashboard-layout">
            <li>
                <div class="front-dashboard">
                    <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
                    <? $this->load->view("widgets/dashboard-menu-box"); ?>
                </div>
            </li>

            <li>
                <? $this->load->view("widgets/expert-course-box"); ?>
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
                                    <h4>Tutorial Contents:</h4>
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
                                <!-- <ul class="mid-list">
                                    <li>What is CX and what is the measure of Cx Success? PURR</li>
                                    <li>How to weave CX & PURR into your business through the Four Pillars; Brand, Segmentation, Insights and Journeys</li>
                                    <li>What is Voice of Customer (VOC) and VOC Tools?</li>
                                </ul> -->
                                <div class="space"><br><br></div>

                                <a href="javascript:;" data-fancybox data-src="#popup-down" class="btn-dashboard btn-hover">Mark Complete <span></span></a>

                                <!-- <a data-fancybox data-src="#popup-down" href="javascript:;"><img src="assets/images/dashboard/home/icons/4.svg" alt=""></a> -->

                                

                                <?
                                $al = array();
                                $al['where']['expert_id'] = $expert_course[0]['tutorial_expert_id'];

                                $expert = $this->model_expert->find_all_active($al);
                                //   debug($expert[0]['expert_name']);
                                ?>




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
                <h3><?= $this->session_data['username'] ?></h3>
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
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="popup-col">
                   
                    <a href="<?= base_url()?>account/profile/pdf_convert?courseid=<?=$_GET['courseid']?>" target="_blank"><img src="<?= base_url()?>/assets/front_assets/images/dashboard/home/icons/dl.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
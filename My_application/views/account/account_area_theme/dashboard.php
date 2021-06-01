<?
$yourt = array();
$yourt['where']['tutorial_free_status'] = '1';
$yourt['limit'] = 3;
$data['yourtutorial'] = $this->model_tutorial->find_all_active($yourt);

$your_tut = $data['yourtutorial'];


$nexttut = array();
$nexttut['where']['tutorial_free_status'] = '0';
$nexttut['limit'] = 3;
$data['nexttutorial'] = $this->model_tutorial->find_all_active($nexttut);

$next_tut = $data['nexttutorial'];


$cat = array();
$data['catagory'] = $this->model_tutorial->find_all_active($cat);

$art = $data['catagory'];

?>
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
                                        <h2>My <strong> Learning Journey </strong></h2>
                                        <div class="space"><br><br><br></div>
                                        <div class="progres-bar">
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
                                        <div class="progres-bar">
                                            <div class="progres-text">
                                                <p>Business Model Canvas</p>
                                            </div>

                                            <div class="progres-gray">
                                                <div class="progres-dark"></div>
                                            </div>

                                            <div class="progres-percentage">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar">
                                            <div class="progres-text">
                                                <p>Go-to market strategies</p>
                                            </div>

                                            <div class="progres-gray">
                                                <div class="progres-dark per-70"></div>
                                            </div>

                                            <div class="progres-percentage">
                                                <span>12%</span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar">
                                            <div class="progres-text">
                                                <p>Financial management</p>
                                            </div>

                                            <div class="progres-gray">

                                            </div>

                                            <div class="progres-percentage">
                                                <span>0%</span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar">
                                            <div class="progres-text">
                                                <p>Legal Structure</p>
                                            </div>

                                            <div class="progres-gray">

                                            </div>

                                            <div class="progres-percentage">
                                                <span>0%</span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar">
                                            <div class="progres-text">
                                                <p>Investment Deck</p>
                                            </div>

                                            <div class="progres-gray">

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
                                                    <span class="prec">8</span>
                                                    <span id="startDeg1" class="8"></span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="progress-footer">
                                            <h6>My Certificate</h6>
                                            <p>Complete your Learning<br> Journey to receive Certificate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space"><br><br></div>
                        <div class="index-graph-box">
                            <div class="row graph-box-2">
                                <div class="col-lg-7 col-md-12">
                                    <div class="progress-box">
                                        <h2>My <strong> Experts Tutorials </strong></h2>
                                        <div class="space"><br><br><br></div>
                                        <div class="progres-bar">
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
                                        <div class="progres-bar">
                                            <div class="progres-text">
                                                <p>Business Model Canvas</p>
                                            </div>

                                            <div class="progres-gray">
                                                <div class="progres-dark"></div>
                                            </div>

                                            <div class="progres-percentage">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                        <div class="space"><br><br></div>
                                        <div class="progres-bar">
                                            <div class="progres-text">
                                                <p>Go-to market strategies</p>
                                            </div>

                                            <div class="progres-gray">
                                                <div class="progres-dark per-70"></div>
                                            </div>

                                            <div class="progres-percentage">
                                                <span>12%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-btn btn-group">
                                        <a href="<?= l('account/profile/expert') ?>" class="btn-theme btn-hover">Continue Experts Tutorials <span></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="progress-wrap">
                                        <div class="progres-circle-box">
                                            <p>Journey completion</p>
                                            <div class="space"><br><br></div>
                                            <div id="activeBorder2" class="active-border">
                                                <div id="circle2" class="circle">
                                                    <span class="prec">8.45</span>
                                                    <span id="startDeg2" class="8"></span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="progress-footer">
                                            <h6>My Certificate</h6>
                                            <p>Complete your Learning<br> Journey to receive Certificate</p>
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
                                                                    <?php
                                                                    for ($x = 1; $x <= $value['tutorial_rating']; $x++) { ?>
                                                                        "
                                                                        <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
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
                                                                <ul class="login-btn">
                                                                    <li><a href="#"><span><img src="<?= i('') ?><?= $this->session_data['profile_image'] ?>"></span> <?= $this->session_data['username'] ?> <i class="fal fa-angle-down"></i></a></li>
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
                                                                    <?php
                                                                    for ($x = 1; $x <= $value['tutorial_rating']; $x++) { ?>
                                                                        "
                                                                        <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
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
                                                                <ul class="login-btn">
                                                                    <li><a href="#"><span><img src="<?= i('') ?><?= $this->session_data['profile_image'] ?>"></span> <?= $this->session_data['username'] ?> <i class="fal fa-angle-down"></i></a></li>
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
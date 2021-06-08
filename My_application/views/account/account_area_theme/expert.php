<style>
    .joinContent strong {
        font-weight: 700;
    }

    .consult-left h2 strong span strong,
    .consult-head strong,
    .mainBanner strong,
    .joinContent strong {
        font-weight: 700;
    }

    .consult-left h2 strong {
        font-weight: 400;
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
                        <div class="experttut-Sec">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="side-bar">
                                        <div class="searchBox">
                                            <h4>What do you want to learn?</h4>
                                            <form action="" method="GET">
                                                <div class="fld-search">
                                                    <input type="text" name="search" placeholder="Search Expert Tutorials">
                                                    <button type="submit"><i class="fal fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="space"><br><br><br></div>

                                        <div class="select-cate">

                                            <h4>Select by Expert</h4>
                                            <div class="fld-select">
                                                <select id='forum_category'>
                                                    <option>All Experts</option>
                                                    <? if (isset($ex) and array_filled($ex)) : ?>
                                                        <? foreach ($ex as $key => $value) : ?>
                                                            <option value="<?= $value['expert_id'] ?>" <?= $this->input->get('expert') == $value['expert_id'] ? 'selected=""' : '' ?>>
                                                                <?= $value['expert_name'] ?>
                                                            </option>
                                                        <? endforeach; ?>
                                                    <? endif; ?>
                                                </select>
                                                <span><i class="fal fa-angle-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="sapce"><br><br><br></div>

                                        <div class="cate-wrap">
                                            <h4>Select by Category</h4>

                                            <div class="cate-box">
                                                <h5>All Categories</h5>

                                                <ul>
                                                    <? if (isset($main_categories) and array_filled($main_categories)) : ?>
                                                        <? foreach ($main_categories as $key => $value) : ?>
                                                            <?
                                                            $a = $value['category_id'];
                                                            ?>
                                                            <!-- (<? // = $value['tutorials'] 
                                                                    ?>) -->
                                                            <li><a href="<?= l('account/profile/expert') ?>?cat=<?= $a ?>"><?= $value['category_name'] ?></a> (<?= $value['tutorials'] ?>) </li>
                                                        <? endforeach; ?>
                                                    <? endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="xpert-box">
                                        <div class="xpert-content">
                                            <h2>What to Learn next in <strong>Experts Tutorials </strong></h2>
                                            <? if (empty($art)) { ?>
                                                <h1 class="text-center" style="color: #000; font-size:30px; font-weight:700;">Course Not Found</h1>
                                            <? } else { ?>
                                                <ul class="who-list tut-list">
                                                    <?php if (isset($art) && array_filled($art)) : ?>
                                                        <?php foreach ($art as $key => $value) : ?>
                                                            <li>
                                                                <div class="vid-box">
                                                                    <a href="<?= g('db.admin.bucket') . $value['tutorial_video'] ?>" data-fancybox="media">
                                                                        <div class="video-box">
                                                                            <img src="<?= g('db.admin.bucketimg') . $value['tutorial_image2'] ?>">
                                                                            <span><i class="fas fa-play"></i> </span>
                                                                        </div>
                                                                    </a>
                                                                    <?
                                                                    // debug($value);
                                                                    $coursecat = array();
                                                                    $coursecat['where']['cp_course_id'] = $value['tutorial_id'];
                                                                    $cate = $this->model_course_category->find_all_active($coursecat);

                                                                    $cat_name = array();
                                                                    $cat_name['where']['category_id'] = $cate[0]['cp_category_id'];
                                                                    $cat_name = $this->model_category->find_all_active($cat_name);
                                                                    //  debug($cat_name);
                                                                    ?>
                                                                    <a href="javascript:;" class="cate-tag"><?= $cat_name[0]['category_name'] ?></a>
                                                                    <!-- <a href="javascript:;" class="cate-tag"><? //= $value['tutorial_level'] 
                                                                                                                    ?></a> -->
                                                                    <div class="vid-content">


                                                                        <div class="row align-items-center ">
                                                                            <div class="col-md-12">
                                                                                <a href="<?= l('course-detail-expert') . '/' . $value['tutorial_slug'] ?>" style="color:#33415C;">
                                                                                    <h4><?= $value['tutorial_name'] ?></h4>
                                                                                </a>
                                                                                <ul class="rating">
                                                                                    <?php
                                                                                    for ($x = 1; $x <= $value['tutorial_rating']; $x++) { ?>
                                                                                        "
                                                                                        <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                                        ";
                                                                                    <? } ?>
                                                                                </ul>
                                                                            </div>
                                                                            <!-- <div class="col-md-4 text-right">
                                                                                <h6><? //= price($value['tutorial_price']) 
                                                                                    ?></h6>
                                                                            </div> -->
                                                                        </div>
                                                                        <div class="space"><br><br></div>
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
                                                                                    <li class="first last"><a href="javascript:;"><span><img src="<?= g('db.admin.bucketimg') . $exp_name[0]['expert_image'] ?>"></span> <?= $exp_name[0]['expert_name'] ?> <i class="fal fa-angle-down"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <a href="javascript:;" class="arrow-links"><i class="far fa-arrow-right"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    <?php endif ?>
                                                </ul>
                                            <? } ?>


                                            <div class="space"><br><br></div>

                                            <a href="#" class="btn-links">See more Experts Tutorials</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tutorialSec">
                            <section class="whoSec hding-2 para pad-sec">
                                <div class="container-fluid pad-zero">
                                    <div class="whoHead">
                                        <h2>Most watched <strong> Tutorials</strong></h2>
                                        <div class="space"><br></div>
                                    </div>
                                    <div class="space"><br><br><br></div>

                                    <ul class="who-list tut-list pb-100">
                                        <li>
                                            <div class="vid-box">
                                                <a href="https://www.youtube.com/watch?v=XIMLoLxmTDw" data-fancybox="media" data-fancybox data-ratio="15">
                                                    <div class="video-box">
                                                        <img src="assets/images/whoSec/1.png">
                                                        <span><i class="fas fa-play"></i>
                                                            <p>Preview Course</p>
                                                        </span>
                                                    </div>
                                                </a>
                                                <a href="#" class="cate-tag">business model</a>

                                                <div class="vid-content">
                                                    <h4>Building the Right<br> Team</h4>
                                                    <div class="row align-items-center pt-70">
                                                        <div class="col-md-9">
                                                            <ul class="rating">
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3 text-right">
                                                            <h6>$15</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="vid-box">
                                                <a href="https://www.youtube.com/watch?v=XIMLoLxmTDw" data-fancybox="media" data-fancybox data-ratio="15">
                                                    <div class="video-box">
                                                        <img src="assets/images/whoSec/2.png">
                                                        <span><i class="fas fa-play"></i>
                                                            <p>Preview Course</p>
                                                        </span>
                                                    </div>
                                                </a>
                                                <a href="#" class="cate-tag">business model</a>

                                                <div class="vid-content">
                                                    <h4>Business Protection for Entrepreneurs </h4>
                                                    <div class="row align-items-center pt-70">
                                                        <div class="col-md-9">
                                                            <ul class="rating">
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3 text-right">
                                                            <h6>$15</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="vid-box">
                                                <a href="https://www.youtube.com/watch?v=XIMLoLxmTDw" data-fancybox="media" data-fancybox data-ratio="15">
                                                    <div class="video-box">
                                                        <img src="assets/images/whoSec/3.png">
                                                        <span><i class="fas fa-play"></i>
                                                            <p>Preview Course</p>
                                                        </span>
                                                    </div>
                                                </a>
                                                <a href="#" class="cate-tag">business model</a>

                                                <div class="vid-content">
                                                    <h4>Basics of Brands and Branding</h4>

                                                    <div class="row align-items-center pt-70">
                                                        <div class="col-md-9">
                                                            <ul class="rating">
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-3 text-right">
                                                            <h6>$15</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="mostcateSec">
                                        <div class="mostHead">
                                            <h2>Most Popular <strong> Categories </strong></h2>
                                        </div>
                                        <div class="space"><br><br></div>

                                        <ul class="cate-list">
                                            <? if (isset($popular) and array_filled($popular)) : ?>
                                                <? foreach ($popular as $key => $value) : ?>
                                                    <li>
                                                        <p><span><img src="<?= g('db.admin.bucketimg') . "cms_image/" . $value['category_image'] ?>"></span> <?= $value['category_name'] ?></p>
                                                    </li>
                                                <? endforeach; ?>
                                            <? endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </section>
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

                    <div class="space"><br><br></div>

                    <section class="joinSec hding-2 para">
                        <div class="joinContent">
                            <h2><?= html_entity_decode($check['cms_page_title']) ?></h2>
                            <div class="space"><br></div>
                            <p><?= html_entity_decode($check['cms_page_content']) ?></p>
                            <div class="space"><br><br></div>
                            <a href="#" class="btn-theme btn-hover">Start Free Trial <span></span></a>
                        </div>
                    </section>


                    <section class="faqSec hding-2 para">
                        <div class="container">
                            <div class="faqHead">
                                <h2>FAQs about <strong>Learning Journey</strong></h2>
                            </div>

                            <ul class="colasebar">
                                <? if (isset($faq) and array_filled($faq)) : ?>
                                    <? foreach ($faq as $key => $value) : ?>
                                        <li>
                                            <div class="faqBar">
                                                <span><?= $value['faq_question'] ?> <i class="fal fa-angle-down"></i></span>
                                                <div class="expandable">
                                                    <?= html_entity_decode($value['faq_answer']) ?>
                                                </div>
                                            </div>
                                        </li>
                                    <? endforeach; ?>
                                <? endif; ?>
                            </ul>

                            <a href="#">See more</a>
                        </div>
                    </section>



                </div>
            </li>
        </ul>
    </section>
</div>

<script type="text/javascript">
    $("body").on('change', '#forum_category', function() {
        var id = $(this).val();
        if (id > 0) {
            window.location.href = base_url + "account/profile/expert?expert=" + id;
        } else {
            window.location.href = base_url + "account/profile/expert";
        }
    });
</script>
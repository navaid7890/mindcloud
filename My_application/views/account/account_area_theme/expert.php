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

    .vid-content h4 {
        height: 53px !important;
    }

    ul.paginationMC>li.active a {
        background: #fdbe41;
        color: #fff;
    }

    ul.paginationMC>li>a {
        padding: 15px;
        background: #fff;
        border-radius: 5px;
        color: #000;
    }

    ul.paginationMC>li {
        display: inline-block;
        margin-right: 15px;
    }

    ul.paginationMC li.first {
        display: none;
    }

    ul.paginationMC li.first.active {
        display: inline-block;
    }

    .my h1:after {
        content: "";
        height: 12px;
        display: block;
        width: 12px;
        border: 3px solid #356da2;
        background: #1d90d9;
        position: absolute;
        bottom: -14px;
        border-radius: 100px;
        right: -4px;
    }

    .pb-10 {
        padding-bottom: 20px;
    }

    ul.login-btn {
        margin-bottom: 10px;
    }

    .xpert-box {
        margin-right: 40px;
    }
</style>
<div class="index-page">
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
                <div class="index-page-wrap">
                    <div class="index-page-content hding-2">
                        <div class="experttut-Sec">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="side-bar sticky-top">
                                        <div class="searchBox">
                                            <h4>What do you want to learn?</h4>
                                            <form action="" method="GET">
                                                <div class="fld-search">
                                                    <input type="text" name="search" placeholder="Search by Keyword">
                                                    <button type="submit"><i class="fal fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="space"><br><br><br></div>
                                        <div class="select-cate">
                                            <h4>Select by Expert </h4>
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
                                        <div class="select-level mt-3">
                     <h4>Select by Level </h4>
                     <div class="fld-select">
                        <select id="level_category" <?= $this->input->get('level')?>>
                           <option>All Level</option>
                           <option value="BEGINNER" <?= $this->input->get('level') == 'BEGINNER' ? 'selected=""' : '' ?>>BEGINNER </option>
                           <option value="INTERMEDIATE" <?= $this->input->get('level') == 'INTERMEDIATE' ? 'selected=""' : '' ?>>INTERMEDIATE</option>
                           <option value="ADVANCED" <?= $this->input->get('level') == 'ADVANCED' ? 'selected=""' : '' ?>>ADVANCED </option>
                        </select>
                        <span><i class="fal fa-angle-down"></i></span>
                     </div>
                  </div>
                  <div class="select-lang mt-3">
                     <h4>Select by Language </h4>
                     <div class="fld-select">
                        <select id="language_category">
                        <option>All Languages</option>
                           <? if (isset($lang) and array_filled($lang)) : ?>
                              <? foreach ($lang as $key => $value) : ?>
                                 <option value="<?= $value['language_id'] ?>" <?= $this->input->get('language') == $value['language_id'] ? 'selected=""' : '' ?>>
                                    <?= $value['language_name'] ?>
                                 </option>
                              <? endforeach; ?>
                           <? endif; ?>
                        </select>
                        <span><i class="fal fa-angle-down"></i></span>
                     </div>
                  </div>


                  <!-- <div class="select-tags mt-3">
                     <h4>Select by Tags </h4>
                     <div class="fld-select">
                        <select id="tags_category">
                           <option>All Tags</option>
                           <option value="14">Christian Farioli </option>
                        </select>
                        <span><i class="fal fa-angle-down"></i></span>
                     </div>
                  </div> -->


                                        <div class="sapce"><br><br><br></div>
                                        <div class="cate-wrap">
                                            <h4>Select by Category</h4>
                                            <div class="cate-box">
                                                <h5>All Categories</h5>
                                                <ul>
                                                    <? if (isset($main_categories) and array_filled($main_categories)) : ?>
                                                        <? foreach ($main_categories as $key => $value) : ?>
                                                            <? $a = $value['category_id']; ?>
                                                            <!-- ( <? //= $value['tutorials'] 
                                                                    ?> ) -->
                                                            <li><a href="<?= l('account/profile/expert') ?>?cat=<?= $a ?>"><?= $value['category_name'] ?> ( <?= $value['tutorials'] ?> )</a> </li>
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

                                            <? if (empty($art)) { ?>
                                                <h1 class="text-center" style="color: #000; font-size:30px; font-weight:700;">Course Not Found</h1>
                                            <? } else { ?>
                                                <h2>What to Learn in <strong>Experts Tutorials</strong></h2>
                                                <div class="sapce"><br><br></div>
                                                <ul class="who-list tut-list">

                                                    <?php if (isset($art) && array_filled($art)) : ?>
                                                        <?php foreach ($art as $key => $value) : ?>
                                                            <li>
                                                                <div class="vid-box" onclick="location.href='<?= l('course-detail-expert') . '/' . $value['tutorial_slug'] ?>';" style="cursor: pointer;">
                                                                    <!-- <a href="<? //= g('db.admin.bucket') . $value['tutorial_video'] 
                                                                                    ?>" data-fancybox> -->
                                                                    <div class="video-box">
                                                                        <img src="<?= g('db.admin.bucketimg') . $value['tutorial_image2'] ?>" loading="lazy">
                                                                        <!-- <span><i class="fas fa-play"></i> </span> -->
                                                                        <?
                                                                        // debug($value);
                                                                        $coursecat = array();
                                                                        $coursecat['where']['cp_course_id'] = $value['tutorial_id'];
                                                                        $cate = $this->model_course_category->find_all_active($coursecat);

                                                                        $cat_name = array();
                                                                        $cat_name['where']['category_id'] = $cate[0]['cp_category_id'];
                                                                        $cat_name = $this->model_category->find_all_active($cat_name);
                                                                        ?>
                                                                        <!-- <a href="javascript:;" class="cate-tag"><? // $value['tutorial_level'] 
                                                                                                                        ?></a> -->
                                                                        <a href="javascript:;" class="cate-tag"><?= $cat_name[0]['category_name'] ?></a>
                                                                    </div>
                                                                    <!-- </a> -->
                                                                    <div class="vid-content">
                                                                        <h4><a href="<?= l('course-detail-expert') . '/' . $value['tutorial_slug'] ?>" style="color:#33415C;"><?= $value['tutorial_name'] ?></a></h4>
                                                                        <div class="row align-items-center pt-60">
                                                                            <div class="col-md-12">
                                                                                <ul class="login-btnExpert pb-10">
                                                                                    <li><a href="javascript:;"><span><img src="<?= g('db.admin.bucketimg') . $value['expert_image'] ?>"></span> <?= $value['expert_name'] ?> </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-md-8 coutArea">
                                                                                <ul class="rating">
                                                                                    <? $rating = $this->model_learning_journey_course_review->get_avg_reating($value['tutorial_id']); ?>
                                                                                    <? if ($rating[0]['Rating'] == 0) { ?>
                                                                                        <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                                        <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                                        <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                                        <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                                        <li><img src="<?= i('') ?>icons/rat-l.svg"></li>
                                                                                        <?php
                                                                                    } else {
                                                                                        for ($x = 1; $x <= $rating[0]['Rating']; $x++) { ?>
                                                                                            "
                                                                                            <li><img src="<?= i('') ?>icons/rat-d.svg"></li>
                                                                                            ";
                                                                                    <? }
                                                                                    } ?>
                                                                                </ul>
                                                                            </div>
                                                                            <!-- <div class="col-md-4 text-right">
                                                                                <h6><? //= price($value['tutorial_price']) 
                                                                                    ?></h6>
                                                                            </div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    <?php endif ?>
                                                </ul>




                                            <? } ?>

                                            <? if (empty(isset($_GET['cat']) || isset($_GET['expert']) || isset($_GET['search']))) { ?>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="text-center">
                                                            <nav><br /><br />
                                                                <ul class="paginationMC">
                                                                    <?= $links ?>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>

                                            <? } ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tutorialSec">
                            <section class="whoSec hding-2 para pad-sec">
                                <div class="container-fluid pad-zero">
                                    <? $this->load->view('widgets/_most_watched_tutorials'); ?>
                                </div>
                            </section>
                        </div>
                        <!-- <div class="index-graph-box">
                            <div class="consult-sec hding-2 para">
                                <div class="consult-head">
                                    <h2>Consult with <strong>Experts</strong></h2>
                                    <div class="space"><br><br></div>
                                    <p><? //= html_entity_decode($con1['cms_page_content']) 
                                        ?></p>
                                </div>
                                <div classs="sapce"><br><br><br></div>
                                <div class="row border-box">
                                    <div class="col-md-4 pad-zero">
                                        <div class="consult-left">
                                            <div>
                                                <h2><strong><? //= html_entity_decode($con1['cms_page_title']) 
                                                            ?></strong></h2>

                                                <ul class="consult-left-slide">
                                                    <li>
                                                        <div class="consult-left-content">
                                                            <p> <? //= html_entity_decode($con2['cms_page_content']) 
                                                                ?></p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="consult-left-content">
                                                            <p> <? //= html_entity_decode($con3['cms_page_content']) 
                                                                ?></p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="consult-left-content">
                                                            <p><? //= html_entity_decode($con4['cms_page_content']) 
                                                                ?></p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="consult-left-content">
                                                            <p><? //= html_entity_decode($con5['cms_page_content']) 
                                                                ?></p>
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
                                                <? // if (isset($dashCatV) and array_filled($dashCatV)) : 
                                                ?>
                                                    <? // foreach ($dashCatV as $key => $value) : 
                                                    ?>
                                                        <li>
                                                            <a href="<? //= l('booking') 
                                                                        ?>">
                                                                <p><span><img src="<? //= i('') 
                                                                                    ?>icons/category/1.svg"></span> <? //= $value['category_name'] 
                                                                                                                    ?> </p>
                                                            </a>
                                                        </li>
                                                    <? // endforeach; 
                                                    ?>
                                                <? // endif; 
                                                ?>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <!-- <div class="space"><br><br></div> -->
                    <!-- 
                    <section class="joinSec hding-2 para">
                        <div class="joinContent">
                            <h2><? //= html_entity_decode($check['cms_page_title']) 
                                ?></h2>
                            <div class="space"><br></div>
                            <p><? //= html_entity_decode($check['cms_page_content']) 
                                ?></p>
                            <div class="space"><br><br></div>


                            <?// if ($this->userid > 0) {
                             //   $usdata = $this->layout_data['user_data'];
                          //  } ?>
                            <?// if ($usdata['user_paid'] == 0) { ?>

                            <a href="#" class="btn-theme btn-hover">Start Free Trial <span></span></a>
                            <?// } ?>

                        </div>
                    </section> -->


                    <section class="faqSec hding-2 para">
                        <div class="container">
                            <div class="faqHead">
                                <h2>FAQs about <strong>Experts Tutorials.</strong></h2>
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

                            <a href="<?= l('faq') ?>">See more</a>
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




   $("body").on('change', '#language_category', function() {
      var id = $(this).val();
      if (id > 0) {
         window.location.href = base_url + "account/profile/expert?language=" + id;
      } else {
         window.location.href = base_url + "account/profile/expert";
      }
   });



   $("body").on('change', '#level_category', function() {
      var id = $(this).val();
    //  alert(id);
      if (id !='') {
         window.location.href = base_url + "account/profile/expert?level=" + id;
      } else {
         window.location.href = base_url + "account/profile/expert";
      }
   });

</script>
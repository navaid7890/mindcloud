<?php if (isset($tut) && array_filled($tut)) : ?>






    <div class="whoHead">
        <h2>Most watched <strong> Tutorials</strong></h2>
        <div class="space"><br></div>
    </div>
    <div class="space"><br><br><br></div>

    <ul class="who-list tut-list pb-100">
        <?php foreach ($tut as $key => $value) : ?>
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
    </ul>
<?php endif ?>
<?php if (isset($tut) && array_filled($tut)) : ?>






    <div class="whoHead">
        <h2>Most watched <strong> Tutorials </strong></h2>
        <div class="space"><br></div>
    </div>
    <div class="space"><br><br><br></div>

    <ul class="who-list tut-list pb-100 homeWho">
        <?php foreach ($tut as $key => $value) : ?>
            <li>

                <div class="vid-box">
                    <a href="<?= g('db.admin.bucket') . $value['tutorial_video'] ?>" data-fancybox="media">
                        <div class="video-box">
                            <img src="<?= g('db.admin.bucketimg') . $value['tutorial_image2'] ?>">
                            <span><i class="fas fa-play"></i>
                                <p>Preview Course</p>
                            </span>
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
                        </div>
                    </a>
                 

                    <div class="vid-content">
                        <?
                        $rating = $this->model_learning_journey_course_review->get_avg_reating($value['tutorial_id']);
                        ?>

                        
                        <h4><?= $value["tutorial_name"] ?></h4>
                        <div class="row align-items-center pt-70">
                            <div class="col-md-9 coutArea">
                            
                                <ul class="rating">
                                   
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
                                <? if (!empty($rating[0]['starCount'])) { ?>
                                <div style="margin-left: 5px;">( <?= $rating[0]['starCount']?> )</div>
                                <?}?>
                            </div>

                            <div class="col-md-3 text-right">
                                <h6>$<?= $value["tutorial_price"] ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
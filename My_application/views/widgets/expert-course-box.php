<div class="course-box hding-3">
    <div class="course-box-content">
        <div class="course-box-head">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3><?= $course_name ?></h3>
                </div>
                <div class="col-md-4 text-right">
                    <div id="activeBorder" class="active-border">
                        <div id="circle" class="circle">
                            <span class="prec">0</span>
                            <span id="startDeg" class="90"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space"><br><br><br></div>
            <div class="course-user-info">
                <ul class="login-btn">
                    <li><a href="#"><span><img src="<?= i('') ?><?= $this->session_data['profile_image'] ?>"></span> <?= $this->session_data['username'] ?> </a></li>
                </ul>
            </div>
        </div>
        <div class="course-list">
            <ul class="course-scroll tut-menu-inner">
                <h5><?= $course_name ?></h5>
                <li><a href="<?= l('account/profile/expert-detail-tutorial') ?>?courseid=<?= $courseid ?>" class="active">Tutorial Description
                        <div id="activeBorder" class="active-border">
                            <div id="circle" class="circle">
                                <span class="prec percTD">100</span>
                                <span id="startDeg" class="90"></span>
                            </div>
                        </div>
                    </a>
                </li>
                <li><a href="<?= l('account/profile/expert-detail-tutorial-intro-video') ?>?courseid=<?= $courseid ?>">Tutorial - 1 minute introduction
                        <div id="activeBorder" class="active-border">
                            <div id="circle" class="circle">
                                <span class="prec percIntro">66</span>
                                <span id="startDeg" class="90"></span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="subVideos">
                    <? if (isset($tutorial_course) and array_filled($tutorial_course)) : ?>
                        <? foreach ($tutorial_course as $key => $tutor) : ?>
                            <ul>
                                <li><a href="<?= l('account/profile/expert-detail-tutorial-video') ?>?courseid=<?= $courseid ?>&tutorialid=<?= $tutor['videos_id'] ?>">Video and Transcript
                                        <div id="activeBorder" class="active-border">
                                            <div id="circle" class="circle">
                                                <span class="prec percVideo">0</span>
                                                <span id="startDeg" class="90"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        <? endforeach; ?>
                    <? endif; ?>
                </li>
                <?
                $param = array();
                // $param['order'] = "mytutorial_id DESC";
                $param['where']['mytutorial_user_id'] = $this->userid;
                $param['where']['mytutorial_tutorial_id'] =  $_GET['courseid'];
                $mypercentage = $this->model_mytutorial->find_one_active($param);


                // debug($mypercentage);
                // [mytutorial_id] => 4
                //     [mytutorial_user_id] => 41
                //     [mytutorial_tutorial_id] => 75
                //     [mytutorial_desc_percent] => 1
                //     [mytutorial_intro_percent] => 0
                //     [mytutorial_video_percent] => 0
                //     [mytutorial_total_percent] => 0
                //     [mytutorial_certificate] => 0
                //     [mytutorial_status] => 1
                //     [mytutorial_createdon] 
                ?>
                <!-- </li> -->
            </ul>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        <? //if ($mypercentage['mytutorial_video_percent'] == 1) : 
        ?>
        // $(".percVideo").html('88');
        <? // endif; 
        ?>

        // url = new URL(window.location.href);
        // var tech = getUrlParameter('courseid');
        //  var urlPercentage = url.searchParams.get('courseid');
        // console.log("urlPercentage",urlPercentage);
        // alert("there" ,tech);
        // console.log("there" ,tech);
        // console.log($.urlParam('courseid'));
        // var params = new window.URLSearchParams(window.location.search);
        // console.log("courseid",params.get('courseid'));


    });
</script>
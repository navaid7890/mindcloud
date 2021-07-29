<div class="course-box hding-3 CBoxExp">
    <div class="course-box-content">
        <div class="course-box-head">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3><?= $course_name ?></h3>
                </div>
                <div class="col-md-4 text-right" id="expTotalPercentage">
                <div class="topCircle">
                        <div class="percent2">
                        <p style="display:none;"><span class="prec allpercent">0</span></p>
                    </div>
                </div>
            </div>
            <div class="space"><br><br><br></div>
            <div class="course-user-info">
                <ul class="login-btn">
                <li><a href="#"><span><img src="<?= get_image($this->layout_data['user_data']['ui_profile_image'], $this->layout_data['user_data']['ui_profile_image_path']) ?>"></span> <?=$this->session->userdata['logged_in_front']['first_name']?>
 </a></li>
                </ul>
            </div>
        </div>
        <div class="course-list">
            <ul class="course-scroll tut-menu-inner">
                <h5><?= $course_name ?></h5>
                <li id="tutorialDescription">
                    <a href="<?= l('account/profile/expert-detail-tutorial') ?>?courseid=<?= $courseid ?>" class="active">Tutorial Description
                    <div class="percent">
                        <p style="display:none;"></p>
                    </div>
                    </a>
                </li>
                <li id="tutorialIntro">
                    <a href="<?= l('account/profile/expert-detail-tutorial-intro-video') ?>?courseid=<?= $courseid ?>">Tutorial - 1 minute introduction
                        <div class="percent">
                            <p style="display:none;"></p>
                        </div>
                    </a>
                </li>
                <li id="tutorialVideo" class="subVideos">
                    <? if (isset($tutorial_course) and array_filled($tutorial_course)) : ?>
                        <? foreach ($tutorial_course as $key => $tutor) : ?>
                            <ul>
                                <li><a href="<?= l('account/profile/expert-detail-tutorial-video') ?>?courseid=<?= $courseid ?>&tutorialid=<?= $tutor['videos_id'] ?>">Video and Transcript
                                <div class="percent">
                                        <p style="display:none;"></p>
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
                ?>
                <!-- </li> -->
            </ul>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        <? if ($mypercentage['mytutorial_desc_percent'] == 1) : ?>
            $("#tutorialDescription .percent p").html('100');
            <?else :?>
                $("#tutorialDescription .percent p").html('0');
        <? endif; ?>

        <? if ($mypercentage['mytutorial_intro_percent'] == 1) : ?>
            $("#tutorialIntro .percent p").html('100');
            <?else :?>
                $("#tutorialIntro .percent p").html('0');
        <? endif; ?>

        <? if ($mypercentage['mytutorial_video_percent'] == 1) : ?>
            $("#tutorialVideo .percent p").html('100');
            <?else :?>
                $("#tutorialVideo .percent p").html('0');
        <? endif; ?>

        // parseInt
        var totalDesc = parseInt($("#tutorialDescription .percent p").html());
        var totalIntro = parseInt($("#tutorialIntro .percent p").html());
        var totalVideo = parseInt($("#tutorialVideo .percent p").html());
        TotalSum = totalDesc + totalIntro + totalVideo
        var totalPercent = Math.round((TotalSum / 300) * 100);
        $("#expTotalPercentage .allpercent").html(totalPercent);

        // $("#expTotalPercentage .prec").html('200');

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

<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js'></script>
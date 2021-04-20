<div class="course-box hding-3">
    <div class="course-box-content">
        <div class="course-box-head">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3>Basics of Customer<br> Experience</h3>
                </div>
                <div class="col-md-4 text-right">
                    <div id="activeBorder" class="active-border">
                        <div id="circle" class="circle">
                            <span class="prec">66</span>
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
                <? if(isset($expert_course) AND array_filled($expert_course)) :?>
                <? foreach($expert_course as $key=>$value):?>
                <h5><?= $value['course_name'] ?></h5>
                <? endforeach;?>
                <? endif;?>

                <? if(isset($expert_course) AND array_filled($expert_course)) :?>
                <? foreach($expert_course as $key=>$value):?>
                <li><a href="<?= l('account/profile/expert-detail-tutorial') ?>?courseid=<?= $value['course_id'] ?>" class="active">Tutorial Description
                        <div id="activeBorder" class="active-border">
                            <div id="circle" class="circle">
                                <span class="prec">66</span>
                                <span id="startDeg" class="90"></span>
                            </div>
                        </div>
                    </a></li>

                <li><a href="<?= l('account/profile/expert-detail-tutorial-intro-video') ?>?courseid=<?= $value['course_id'] ?>">Tutorial - 1 minute introduction
                        <div id="activeBorder" class="active-border">
                            <div id="circle" class="circle">
                                <span class="prec">66</span>
                                <span id="startDeg" class="90"></span>
                            </div>
                        </div>
                    </a></li>

                <li><a href="<?= l('account/profile/expert-detail-tutorial-video') ?>?courseid=<?= $value['course_id'] ?>">Tutorial Video and Transcript
                        <div id="activeBorder" class="active-border">
                            <div id="circle" class="circle">
                                <span class="prec">66</span>
                                <span id="startDeg" class="90"></span>
                            </div>
                        </div>

                    </a>
                    <ul class="subVideos">
                        <? if(isset($tutorial_course) AND array_filled($tutorial_course)) :?>
                        <? foreach($tutorial_course as $key=>$tutor):
                            // $value['cp_tutorial_id']
                            // debug($tutorial_course);
                            ?>
                        <?
                            $al=array();
                            $al['where']['tutorial_id']=$value['cp_tutorial_id'];
                            
                            $ck=$this->model_tutorial->find_all_active($al);
                             // debug($ck);
                            ?>
                       
                        <ul>
                            <li><a href="<?= l('account/profile/expert-detail-tutorial-video') ?>?courseid=<?= $value['course_id'] ?>?tutorialid=<?= $tutor['cp_tutorial_id'] ?>"><?= $tutor['cp_tutorial_id'] ?></a></li>
                        </ul>
                        <? endforeach;?>
                        <? endif;?>
                    </ul>

                </li>
                <? endforeach;?>
                <? endif;?>

            </ul>
        </div>
    </div>
</div>
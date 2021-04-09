<div class="course-box hding-3">
    <div class="course-box-content">
        <div class="course-box-head">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3>Learning Journey</h3>
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
                    <li><a href="#"><span><img src="<?= i('') ?>profile/1.png"></span> Genny Ghanimeh </a></li>
                </ul>
            </div>
        </div>
        
        <div class="course-list">
            <ul class="course-scroll">
                <li><a href="javascript:void(0)" class="active">Introduction <span><i class="far fa-check"></i></span> </a></li>
				<? if(isset($learn_cat) AND array_filled($learn_cat)) :?>
                <? foreach($learn_cat as $key=>$value):?>
                <h5><?= $value['learning_journey_category_name'] ?></h5>
                <?
                $al=array();
                $al['where']['learning_journey_cat_id']=$value['learning_journey_category_id'];
                
                $ck=$this->model_learning_journey_content->find_all_active($al);
                //  debug($ck);
                ?>
				<? if(isset($ck) AND array_filled($ck)) :?>
                <? foreach($ck as $key=>$value):?>
                <li class="dropdown-toggle b-child"><a href="#"><?= $value['learning_journey_content_name'] ?>

                        <div id="activeBorder" class="active-border">
                            <div id="circle" class="circle">
                                <span class="prec">66</span>
                                <span id="startDeg" class="90"></span>
                            </div>
                        </div>

                        <small>0/3</small>
                    </a>
                    <ul class="dropdown-box">
                        
                        <!-- <li><a href="business-model-canvas.php"><i class="fad fa-video"></i>Intro<span><i class="far fa-check"></i></span></a></li> -->
                        <li><a href="<?= l('account/profile/video') ?>"><i class="fad fa-video"></i> Video & Transcript <span><i class="far fa-check"></i></span></a></li>
                        <li><a href="<?= l('account/profile/tools') ?>"><i class="fad fa-video"></i> Tool & Tool Builder <span><i class="far fa-check"></i></span></a></li>
                        <li><a href="<?= l('account/profile/startup') ?>"><i class="fad fa-video"></i> Your Work<span><i class="far fa-check"></i></span></a></li>
                    </ul>
                </li>
				<? endforeach;?>
                <? endif;?>
				<? endforeach;?>
                <? endif;?>
            </ul>
        </div>
    </div>
</div>
<style>
    .video-box {
        position: relative;
        width: 100%;
        /* height: 450px; */
        overflow: hidden;
    }

    input#forms-expert-tutorial-video-btn {
        padding: 13px 26px;
        background: #FDBE41;
        font-size: 14px;
        font-weight: 700;
        color: #F8F9FA;
        text-transform: uppercase;
        border-radius: 25px;
        margin-bottom: 30px;
    }

    input#forms-expert-tutorial-video-btn:hover {
        position: static;
        display: block;
        background-color: #e28f26;
    }
</style>
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
            <?
            //   debug($expert_course);
            $vidcat = array();
            $vidcat['where']['cp_course_id'] = $expert_course['tutorial_id'];
            $vidcat = $this->model_course_tutorial->find_all_active($vidcat);
            //  debug($vidcat) ;
            $vid_name = array();
            $vid_name['where']['videos_id'] = $vidcat[0]['cp_tutorial_id'];
            $vid_name = $this->model_videos->find_all_active($vid_name);
            // debug($vid_name[0]['videos_name']);

            ?>
            <li>
                <div class="tutorial-box">
                    <div class="">
                        <div class="tutorial-content">
                            <div class="tutorial-head">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <ul class="bredcum-links">
                                            <li><a href="#">Experts Tutorials</a></li>
                                            <!-- <li><a href="#">Business Model Canvas</a></li> -->
                                            <li><a href="#"><?= $vid_name[0]['videos_name'] ?></a></li>
                                            <li><a href="#">1 minute introduction</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <div class="bredcum-right">
                                            <?
                                            $completTut = array();
                                            $completTut['where']['mytutorial_user_id'] = $this->userid;
                                            $completTut['where']['mytutorial_tutorial_id'] = $_GET['courseid'];
                                            $completTut['where']['mytutorial_desc_percent'] = 1;
                                            $completTut['where']['mytutorial_intro_percent'] = 1;
                                            $completTut['where']['mytutorial_video_percent'] = 1;
                                            $completTutProgress = $this->model_mytutorial->find_all_active($completTut);
                                            ?>
                                            <? if (!empty($completTutProgress)) : ?>
                                                <a href="#" class="btn-round btn-hover">Completed <span></span></a>
                                            <? else : ?>
                                                <a href="#" class="btn-round btn-hover">In progress <span></span></a>
                                            <? endif; ?>

                                            <!-- <ul class="indicator-links">
                                                <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                                                <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?//= debug($completTutProgress); ?>

                            <div class="tutorial-mid hding-4 hding-3 para">
                                <div class="row">
                                    <div class="col-md-12">



                                        <div class="video-box">


                                            <video controlsList="nodownload" width="100%" height="100%" poster="<?= g('db.admin.bucketimg') . $vid_name[0]['videos_image2'] ?>" controls>
                                                <source src="<?= g('db.admin.bucket') . $expert_course['tutorial_video'] ?>" type="video/mp4">
                                                <source src="<?= g('db.admin.bucket') . $expert_course['tutorial_video'] ?>" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>

                                    </div>
                                    
                                </div>
                                <div class="tutorial-footer vid-tran para">
                                <div class="tutorial-footer-content">
                                    <!-- <p>Complete all tutorial to receive Certificate.</p> -->
                                    <div classs="space"><br><br></div>
                                    <form id="forms-expert-tutorial-video">
                                        <input type="hidden" name="mytutorial[mytutorial_user_id]" value="<?= ($this->userid) ?>">
                                        <input type="hidden" name="mytutorial[mytutorial_tutorial_id]" value="<?= $_GET['courseid'] ?>">
                                        <input type="hidden" name="mytutorial[mytutorial_intro_percent]" value="1">
                                        <input type="submit" class="btn-round btn-hover" value="Mark As Complete" id="forms-expert-tutorial-video-btn">
                                    </form>
                                </div>
                            </div>
                                <div class="space"><br><br></div>
                                <!-- <p>All rights belong to their respective owners. The Business Model Canvas was created and owned by <a href="https://www.strategyzer.com/">Strategyzer</a></p> -->
                            </div>

                            
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
</div>
<style>
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }


    .text-center {
        text-align: center;
    }


    /* Rating Star Widgets Style */
    .rating-stars ul {
        list-style-type: none;
        padding: 0;

        -moz-user-select: none;
        -webkit-user-select: none;
    }

    .rating-stars ul>li.star {
        display: inline-block;

    }

    /* Idle State of the stars */
    .rating-stars ul>li.star>i.fa {
        font-size: 18px;
        /* Change the size of the stars */
        color: #ccc;
        /* Color on idle state */
    }

    /* Hover state of the stars */
    .rating-stars ul>li.star.hover>i.fa {
        color: #FFCC36;
    }

    /* Selected state of the stars */
    .rating-stars ul>li.star.selected>i.fa {
        color: #FF912C;
    }
</style>


<script>
    $(document).ready(function() {

        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function() {
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function(e) {
                if (e < onStar) {
                    $(this).addClass('hover');
                } else {
                    $(this).removeClass('hover');
                }
            });

        }).on('mouseout', function() {
            $(this).parent().children('li.star').each(function(e) {
                $(this).removeClass('hover');
            });
        });


        /* 2. Action to perform on click */
        $('#stars li').on('click', function() {
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');

            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            // JUST RESPONSE (Not needed)

            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var msg = "";
            if (ratingValue > 0) {
                msg = parseInt(ratingValue);

                $('#reviewId').val(msg)
            } else {
                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
            }
            responseMessage(msg);

        });


    });


    function responseMessage(msg) {
        $('.success-box').fadeIn(200);
        $('.success-box div.text-message').html("<span>" + msg + "</span>");
    }
</script>
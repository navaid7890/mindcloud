<style>
    ul.dashboard-layout>li:nth-child(1) {
        width: 30%;
    }

    ul.dashboard-layout>li:nth-child(2) {
        width: 70%;
    }

    .video-caption p {
        font-size: 12px !important;
    }

    ul.dashboard-layout {
        margin-top: 80px;
    }
</style>
<div class="business-page">
    <section class="dashboard">
        <div class="front-dashboard">
            <a href="#" class="menu-dash-front">MENU<i class="fal fa-bars"></i></a>
            <? $this->load->view("widgets/dashboard-menu-box");?>
        </div>
        <ul class="dashboard-layout">
            <!-- <li>
            <? // $this->load->view("widgets/dashboard-menu-box");?>
         </li> -->

            <li>
                <? $this->load->view("widgets/expert-course-box");?>
            </li>

            <li>

                <div class="tutorial-box">
                    <div class="tutorial-scroll-content">
                        <div class="tutorial-content">
                            <div class="tutorial-head">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <ul class="bredcum-links">
                                            <li><a href="#">Learning Journey</a></li>
                                            <li><a href="#">Introduction</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <div class="bredcum-right">
                                            <a href="#" class="btn-round btn-hover">In progress <span></span></a>

                                            <ul class="indicator-links">
                                                <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                                                <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tutorial-mid hding-4 hding-3 para">
                                <div class="tutorial-mid-content">
                                    <h4>Tutorial Contents:</h4>
                                </div>
                                <div class="space"><br><br></div>
                                <p><strong>In this tutorial, you will learn:</strong></p>
                                <div class="space"><br></div>

                                <? if(isset($expert_course) AND array_filled($expert_course)) :?>
                                <? foreach($expert_course as $key=>$value):?>
                                <h5><?= html_entity_decode($value['course_desc']) ?></h5>
                                <? endforeach;?>
                                <? endif;?>

                                <div class="space"><br><br></div>

                                <? if(isset($expert_course) AND array_filled($expert_course)) :?>
                                <? foreach($expert_course as $key=>$value):?>
                                <h5><?= html_entity_decode($value['course_desc2']) ?></h5>
                                <? endforeach;?>
                                <? endif;?>
                                <!-- <ul class="mid-list">
                                    <li>What is CX and what is the measure of Cx Success? PURR</li>
                                    <li>How to weave CX & PURR into your business through the Four Pillars; Brand, Segmentation, Insights and Journeys</li>
                                    <li>What is Voice of Customer (VOC) and VOC Tools?</li>
                                </ul> -->
                                <div class="space"><br><br></div>

                                <a href="#" class="btn-dashboard btn-hover">Mark Complete <span></span></a>
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
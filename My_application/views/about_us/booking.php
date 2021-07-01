<style>
    /*Main Css */
    ::selection {
        background: rgb(226, 143, 38);
        color: #fff;
        text-shadow: none;
    }

    ::-webkit-scrollbar {
        width: 5px;
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-button:start:decrement,
    ::-webkit-scrollbar-button:end:increment {
        display: none;
    }

    ::-webkit-scrollbar-track-piece {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #fff;
    }

    ::-webkit-scrollbar-thumb:vertical {
        border-radius: 10px;
        background-color: rgb(226, 143, 38);
    }

    [class^="box-"] {
        display: none
    }

    [class^="box-"].showfirst {
        display: block
    }






    /* Custom Slick Css */
    .slick-list {
        margin: 0 -15px;
    }

    .slick-slide {
        margin: 0 15px;
    }

    .slick-dots {
        padding: 50px 0 0;
        text-align: center;
    }

    .slick-dots li {
        margin: 0 20px 0 0px;
        width: auto;
        display: inline-block;
        vertical-align: middle;
        overflow: hidden;
        padding: 0px;
        border: none;
    }

    .slick-dots li button:before,
    .slick-dots li button:before {
        color: #FFF;
        opacity: 1;
        font-size: 20px;
    }

    .slick-dots li button {
        height: 8px;
        width: 8px;
        border-radius: 50%;
        padding: 0px;
        background: #d6d6d6;
        border: none;
        cursor: pointer;
        font-size: 0px;
        padding: 0px;
        -webkit-transition: all 0.4s ease-In-out;
        -moz-transition: all 0.4s ease-In-out;
        -o-transition: all 0.4s ease-In-out;
        transition: all 0.4s ease-In-out;
        box-sizing: border-box;
    }

    .slick-dots li.slick-active button {
        background: #f3c919;
        width: 11px;
        height: 11px;
    }



    /* Main Banner CSS */

    .topTileMain {
        margin-top: 50px;
        margin-bottom: 30px;
    }

    .topTileMain h2 {
        font-size: 24px;
        font-weight: 700;
        color: #222;
        margin-bottom: 10px;
    }

    .topTileMain p {
        font-size: 16px;
        color: #222;
    }

    .topicTitle {
        background: #f5f5f5;
    }

    .navigator {
        padding: 30px 0 30px 0;
        display: flex;
        align-items: flex-start;
        height: 33.33%;
        justify-content: center;
    }

    .navigator ul {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navigator ul li {
        height: 7px;
        width: 7px;
        background: #e4e4e4;
        border-radius: 50%;
        margin: 0 0;
        margin-right: 10px;
        cursor: pointer;
    }

    .navigator ul li.active {
        background: #616161;
    }

    .expertTopic {
        display: flex;
        align-items: center;
        height: 33.33%;
        justify-content: center;
        text-align: center;
    }

    .fQuesContact {
        display: flex;
        align-items: flex-end;
        height: 33.33%;
        justify-content: center;
    }

    .expertTopic ul {}

    .expertTopic ul li {
        display: none;
    }

    .expertTopic ul li img {
        width: 30%;
        margin: 0 auto;
    }

    .expertTopic ul li h3 {
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 15px;
    }

    .expertTopic ul li p {
        font-size: 14px;
        color: #999;
        line-height: normal;
        padding: 0 30px;
    }

    .fQuesContact {
        text-align: center;
    }

    .fQuesContact h5 {
        font-size: 15px;
        margin-bottom: 5px;
        line-height: 1.4;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .fQuesContact h5 span {
        color: #999;
        font-size: 14px;
        font-weight: 400;
    }


    .selectAreaBox {
        background: #fff;
    }

    .selectAreaBoxInner {
        height: 750px;
        overflow-x: hidden;
    }

    .bbtn p {
        cursor: pointer;
    }


    .selectAreaBox h4 {
        font-size: 18px;
        color: #000;
        line-height: 1.2;
        text-align: center;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        font-weight: 600;
        padding: 15px 0;
        margin-bottom: 20px;
    }

    .selectAreaBox ul.tSelectBtn {
        padding: 30px;
        display: flex;
        flex-wrap: wrap;
    }

    .selectAreaBox ul.tSelectBtn li {
        width: 120px;
        height: 100px;
        border: 2px solid #E5E7EE;
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
        margin: 9px 5px;
    }

    .selectAreaBox ul.tSelectBtn li span {
        transition: ease all 0.2s;
        display: block;
    }

    .selectAreaBox ul.tSelectBtn li:hover {
        border-color: #222;
    }

    .selectAreaBox ul.tSelectBtn li:hover span {
        padding-left: 5px;
    }

    .selectAreaBox #experts ul.tSelectBtn {
        display: inline-block;
        padding: 20px;
    }

    .selectAreaBox #experts ul.tSelectBtn img {
        width: 65px;
        height: 65px;
        border-radius: 50%;
    }

    .selectAreaBox #experts ul.tSelectBtn li {
        height: auto;
        display: inline-block;
        text-align: center;
    }

    .selectAreaBox #experts ul.tSelectBtn li img {
        border-radius: 50%;
        height: 63px;
        width: 63px;
    }

    .selectAreaBox #experts ul.tSelectBtn li span {
        padding-top: 10px;
        line-height: normal;
    }

    .selectAreaBox #experts ul.tSelectBtn li:hover span {
        padding-left: 0;
        transform: translateY(-11px);
    }


    #one {
        width: 100% !important;
    }

    .calendar-inner {
        width: 100% !important;
    }

    /* Calender CSS */

    .calendar {
        width: 280px;
        height: 330px;
    }

    .calendar-modal {
        display: none;
        position: absolute;
        background: #fdfdfd;
        border: 1px solid #e8e8e8;
    }

    .calendar-modal .view {
        box-shadow: 1px 2px 3px #ddd;
    }

    .calendar-inner {
        position: relative;
        z-index: 1;
        -webkit-perspective: 1000;
        -moz-perspective: 1000;
        perspective: 1000;
        -webkit-transform: perspective(1000px);
        transform: perspective(1000px);
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .calendar-views {
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .calendar .view {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;
        background: #fff;
        overflow: hidden;
        -webkit-transition: .6s;
        transition: .6s;
    }

    .calendar-d .view-month,
    .calendar-m .view-date {
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg);
        visibility: hidden;
        z-index: 1;
    }

    .calendar-d .view-date,
    .calendar-m .view-month {
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
        visibility: visible;
        z-index: 2;
    }

    .calendar-ct,
    .calendar-hd,
    .calendar-views .week,
    .calendar-views .days {
        overflow: hidden;
    }

    .calendar-views {
        width: 100%;
    }

    .calendar .view,
    .calendar-display,
    .calendar-arrow .prev,
    .calendar .date-items li {
        float: left;
    }

    .calendar-arrow,
    .calendar-arrow .next {
        float: right;
    }

    .calendar-ct {
        height: 280px;
    }

    .calendar-hd {
        padding: 10px 0;
    }

    .calendar-display {
        font-size: 28px;
        text-indent: 10px;
    }

    .view-month .calendar-hd {
        padding: 10px;
    }

    .calendar-arrow,
    .calendar-display {
        color: #ddd;
    }

    .calendar li[disabled] {
        color: #bbb;
    }

    .calendar li.old[disabled],
    .calendar li.new[disabled] {
        color: #eee;
    }

    .calendar-display .m,
    .calendar-views .week,
    .calendar-display:hover,
    .calendar-arrow span:hover {
        color: #888;
    }

    .calendar-views .days .old,
    .calendar-views .days .new {
        color: #ccc
    }

    .calendar-arrow span,
    .calendar-views .days li[data-calendar-day],
    .calendar-views .view-month li[data-calendar-month] {
        cursor: pointer;
    }

    .calendar li[disabled] {
        cursor: not-allowed;
    }

    .calendar-arrow {
        width: 50px;
        margin-right: 10px;
    }

    .calendar-arrow span {
        font: 500 26px sans-serif;
    }

    .calendar ol li {
        position: relative;
        float: left;
        text-align: center;
        border-radius: 50%;
    }

    .calendar .week li,
    .calendar .days li {
        width: 40px;
        height: 40px;
        line-height: 40px;
    }

    .calendar .month-items li {
        width: 70px;
        height: 70px;
        line-height: 70px;
    }

    .calendar .days li[data-calendar-day]:hover,
    .calendar .view-month li[data-calendar-month]:hover {
        background: #eee;
    }

    .calendar .calendar-views .now {
        color: #fff;
        background: #66be8c !important;
    }

    .calendar .calendar-views .selected {
        color: #66be8c;
        background: #CDE9D9 !important;
    }

    .calendar .calendar-views .dot {
        position: absolute;
        left: 50%;
        bottom: 4px;
        margin-left: -2px;
        width: 4px;
        height: 4px;
        background: #66be8c;
        border-radius: 50%;
    }

    .calendar-views .now .dot {
        background: #fff;
    }

    .calendar .date-items {
        width: 300%;
        margin-left: -100%;
    }

    .calendar-label {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        padding: 5px 10px;
        line-height: 22px;
        color: #fff;
        background: #000;
        border-radius: 3px;
        opacity: .7;
        filter: alpha(opacity=70);
    }

    .calendar-label i {
        display: none;
        position: absolute;
        left: 50%;
        bottom: -12px;
        width: 0;
        height: 0;
        margin-left: -3px;
        border: 6px solid transparent;
        border-top-color: #000;
    }

    .selectTimeSlot {
        margin: 30px 0;
    }

    .selectTimeSlot ul {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .selectTimeSlot ul li {
        height: 30px;
        width: 11px;
        margin-right: 2px;
        cursor: pointer;
        position: relative;
    }

    .selectTimeSlot ul li:hover {
        background: #222222;
    }

    .selectTimeSlot ul li.selected label {
        background: #222222;
    }

    .selectTimeSlot ul li label {
        width: 100%;
        height: 100%;
        background: #8fe286;
        cursor: pointer;
    }

    .selectTimeSlot ul li label:hover {
        background: #222222;
    }

    .selectTimeSlot ul li p {
        font-size: 8px;
        text-align: center;
    }

    /*.selectTimeSlot li:nth-child(4n + 1) {background-color: red;}
.selectTimeSlot li:nth-child(4n + 1):after{ content: "8"; display: block; font-size: 10px; }*/


    .navigatorWrap {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .btnHolders {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .btnHolders .nbtn p {
        background: #222;
        font-weight: 500;
        box-shadow: none;
        padding: 8px 14px;
        letter-spacing: 0.2px;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }


    #information .tab-content form {}

    #information .tab-content form input[type='text'] {
        width: 100%;
        border-radius: 4px;
        border: 1px solid #cad2e0;
        padding: 12px 10px 12px 10px;
        line-height: 1.3;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.2s ease;
        height: auto;
        margin-bottom: 15px;
    }

    #information .tab-content form input[type='password'] {
        width: 100%;
        border-radius: 4px;
        border: 1px solid #cad2e0;
        padding: 12px 10px 12px 10px;
        line-height: 1.3;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.2s ease;
        height: auto;
        margin-bottom: 15px;
    }

    #information .tab-content form textarea {
        width: 100%;
        border-radius: 4px;
        border: 1px solid #cad2e0;
        padding: 12px 10px 12px 10px;
        line-height: 1.3;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.2s ease;
        height: auto;
        margin-bottom: 15px;
    }

    #information .tab-content form input[type='submit'] {
        background-color: #222;
        border-radius: 4px;
        padding: 12px 25px;
        font-size: 15px;
        position: relative;
        color: #fff;
        border: 1px solid #222;
    }

    #information .tab-content form input[type='submit']:hover {
        background: #fff;
        color: #222;
    }

    #information .tab-content form a {
        color: #222;
        font-size: 14px;
    }

    #information ul li a {
        border: none !important;
        margin: 0 !important;
        color: #222;
    }

    #information ul.nav-tabs {
        border-bottom: 1px solid #ddd !important;
        justify-content: space-between;
    }

    #information ul li a.active {
        border-bottom: 2px solid #222 !important;
    }





    .fResult {
        width: 0;
        background: #f5f5f5;
        margin-top: 80px;
    }

    .fResultShow {
        transition: ease all;
        max-width: 100%;
        flex: 0 0 100%;
    }


    .fResult ul {
        display: flex;
        flex-wrap: wrap;
        padding: 20px;
    }

    .fResult ul li {
        margin-bottom: 20px;
        color: #222222;
        display: block;
        width: 50%;
        line-height: normal;
        display: none;
    }

    .fResult ul li p {
        line-height: normal;
        font-weight: 700;
    }

    .fResult ul li span {
        font-weight: 600;
        font-size: 13px;
    }

    .finalResult {
        padding-bottom: 20px;
    }

    .finalResult h5 {
        font-size: 18px;
        color: #000;
        line-height: 1.2;
        text-align: center;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        font-weight: 600;
        padding: 15px 0;
        margin-bottom: 20px;
        text-align: center;
    }

    .finalResult p {
        font-size: 14px;
        color: #ccc3c3;
        line-height: normal;
        text-align: center;
    }

    .userInformation {
        margin-top: 30px;
    }

    .userInformation h3 {
        border-bottom: 1px solid #222;
        color: #222;
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 15px;
    }

    .userInformation ul {
        display: flex;
        flex-wrap: wrap;
    }

    .userInformation ul li {
        width: 50%;
        margin-bottom: 15px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .userInformation ul li label {
        font-size: 12px;
        text-transform: uppercase;
        color: #ccc3c3;
        font-weight: 600;
        display: block;
        margin-bottom: 10px;
    }

    .userInformation ul li span {
        font-weight: 600;
        font-size: 13px;
    }




    @media (max-width: 1200px) {}

    @media (max-width: 1440px) {}

    @media (max-width: 824px) {}


    @media (max-width: 767px) {}
</style>

<section class="myjoin">
    <div class="container">
        <div class="row">
            <div class="col-md-3 topicTitle">
                <div class="navigatorWrap">
                    <div class="navigator">
                        <ul>
                            <li data-toggle="tooltip" data-placement="top" title="Select Expert Topic" class="active"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Select An Expert"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Select Date & Time"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Enter Your Information"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Verify Booking Detail"></li>
                            <li data-toggle="tooltip" data-placement="top" title="Appointment Confirmation"></li>
                        </ul>
                    </div>

                    <div class="expertTopic">

                        <ul>
                            <li style="display: block;">
                                <img src="assets/images/services.png" alt="">
                                <h3>Select Expert Topic</h3>
                                <p>From the menu on the right, choose the expertise topic you are interested in.</p>
                            </li>

                            <li>
                                <img src="assets/images/agents.png" alt="">
                                <h3>Select An Expert</h3>
                                <p>From the menu on the right, choose the expert you’d like to work with, corresponding to the expertise of your interest.</p>
                            </li>

                            <li>
                                <img src="assets/images/datepicker.png" alt="">
                                <h3>Select Date & Time</h3>
                                <p>Check the expert’s available time & date to book an appointment that works for you. The hourly rate is 300 AED.</p>
                            </li>

                            <li>
                                <img src="assets/images/contact.png" alt="">
                                <h3>Enter your Information</h3>
                                <p>Fill the fields on the right with your name, email, phone number. You can also add any comment relevant for the expert to read.</p>
                            </li>

                            <li>
                                <h3>Verify Booking Detail</h3>
                                <p>Your booking is now received. Please wait to receive an email from your expert to confirm your booking and send you an invoice for the payment of 300 AED for one-hour session. Good luck!</p>
                            </li>


                        </ul>

                    </div>

                    <div class="fQuesContact">
                        <h5>Questions? <br><span> Email : <a href="mailto:info@mindcloudtribe.com">info@mindcloudtribe.com</a> <br> Call (971) 506508595 for help</span> </h5>
                    </div>
                </div>
            </div><!-- // Col // -->
            <div class="col-md-5 selectAreaBox">
                <div class="selectAreaBoxInner">
                    <h4>Select Topic</h4>
                    <h4>Select Expert</h4>
                    <h4>Select Date & Time</h4>
                    <h4>Enter Information</h4>
                    <div id="topics">
                        <ul class="tSelectBtn">
                            <? if (isset($category) and array_filled($category)) : ?>
                                <? foreach ($category as $key => $value) : ?>
                                    <li class="selectTopicBtn" onclick="get_expert('<?= $value['category_id'] ?>')"><span><?= $value['category_name'] ?></span></li>
                                <? endforeach; ?>
                            <? endif; ?>
                        </ul>
                    </div>
                    <div id="experts">
                        <ul class="expertlist tSelectBtn">

                        </ul>
                        <div class="bbtn backBtn_1">
                            <p><i class="fal fa-long-arrow-left"></i> Back </p>
                        </div>
                    </div>

                    <div id="selectT_D">

                        <div id="demo">
                            <div id="one"></div>
                        </div>

                        <div class="selectTimeSlot">
                            <ul>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="08:00 am - 09:00 am"></label>
                                    <p>8<span>AM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="08:15 am - 09:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="08:30 am - 09:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="08:45 am - 09:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="09:00 am - 10:00 am"></label>
                                    <p>9<span>AM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="09:15 am - 10:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="09:30 am - 10:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="09:45 am - 10:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="10:00 am - 11:00 am"></label>
                                    <p>10<span>AM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="10:15 am - 11:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="10:30 am - 11:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="10:45 am - 11:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="11:00 am - 12:00 am"></label>
                                    <p>11<span>AM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="11:15 am - 12:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="11:30 am - 12:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="11:45 am - 12:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="12:00 am - 01:00 am"></label>
                                    <p>12<span>PM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="12:15 am - 01:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="12:30 am - 01:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="12:45 am - 01:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="01:00 am - 02:00 am"></label>
                                    <p>1<span>PM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="01:15 am - 02:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="01:30 am - 02:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="01:45 am - 02:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="02:00 am - 03:00 am"></label>
                                    <p>2<span>PM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="02:15 am - 03:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="02:30 am - 03:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="02:45 am - 03:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="03:00 am - 04:00 am"></label>
                                    <p>3<span>PM</span></p>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="03:15 am - 04:15 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="03:30 am - 04:30 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="03:45 am - 04:45 am"></label>
                                </li>
                                <li>
                                    <label data-toggle="tooltip" data-placement="top" title="04:00 am - 05:00 am"></label>
                                    <p>4<span>PM</span></p>
                                </li>
                            </ul>

                        </div>
                        <div class="btnHolders">
                            <div class="bbtn backBtn_2">
                                <p><i class="fal fa-long-arrow-left"></i> Back </p>
                            </div>
                            <div class="nbtn nextBtn_1">
                                <p> Next <i class="fal fa-long-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>

                    <div id="information">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">New Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1">Already have an account?</a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" onkeyup="getName(this.value)" name="name" placeholder="Your First Name"></div>
                                        <div class="col-md-6"><input type="text" onkeyup="getLastName(this.value)" name="last-name" placeholder="Your Last Name"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" onkeyup="getPhone(this.value)" name="phone" placeholder="Your Phone Number"></div>
                                        <div class="col-md-6"><input type="text" onkeyup="getEmail(this.value)" name="email" placeholder="Your Email Address"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><textarea name="comment" id="" placeholder="Add Comment"></textarea></div>

                                    </div>
                                </form>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-12"><input type="text" name="name" placeholder="Your Email Address"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12"><input type="password" name="pwd" placeholder="Your Password"></div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-md-6 text-left">
                                            <input type="submit" name="" value="Log Me In">
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="#"> Forgot Password?</a>
                                        </div>
                                    </div>


                                </form>
                            </div>

                        </div>

                        <div class="btnHolders">
                            <div class="bbtn backBtn_3">
                                <p><i class="fal fa-long-arrow-left"></i> Back </p>
                            </div>
                            <div class="nbtn nextBtn_2">
                                <p> Next <i class="fal fa-long-arrow-right"></i></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="finalResult">
                    <h5>Verify Booking Details</h5>
                    <p>Double check your booking information, you can go back to edit it or click submit button to confirm your booking.</p>

                    <div class="userInformation">
                        <h3>Appointment Info</h3>
                        <ul>
                            <li>
                                <label>Date:</label>
                                <span class="calDate"></span>
                            </li>
                            <li>
                                <label>Time:</label>
                                <span class="calTime"></span>
                            </li>
                            <li>
                                <label>Agent:</label>
                                <span class="agentName"></span>
                            </li>
                            <li>
                                <label>Service:</label>
                                <span class="serv"></span>
                            </li>
                        </ul>

                        <h3>Customer Info</h3>
                        <ul>
                            <li>
                                <label>Name:</label>
                                <span id="firstName2"></span> <span id="lastName2"></span>
                            </li>
                            <li>
                                <label>Phone:</label>
                                <span id="phoneNumber"></span>
                            </li>
                            <li>
                                <label>Email:</label>
                                <span id="emailAdress"></span>
                            </li>

                        </ul>


                    </div>
                    <div class="btnHolders">
                        <div class="bbtn backBtn_4">
                            <p><i class="fal fa-long-arrow-left"></i> Back </p>
                        </div>
                        <div class="nbtn nextBtn_3">
                            <p> Submit <i class="fal fa-long-arrow-right"></i></p>
                        </div>
                    </div>
                </div>


            </div><!-- // Col // -->

            <div class="col-md-4 resultMain" style="background: white;">
                <div class="fResult">
                    <ul>
                        <li>
                            <p>Service<br> <span class="serv"></span></p>
                        </li>
                        <li>
                            <p>Agent <br><span class="agentName"></span></p>
                        </li>
                        <li>
                            <p>Date <br><span class="calDate"></span></p>
                        </li>
                        <li>
                            <p>Time <br><span class="calTime"></span></p>
                        </li>
                        <li>
                            <p>Customer <br><span id="firstName"></span> <span id="lastName"></span></p>
                        </li>
                        <li>
                            <p>Total Price <br><span class="price"></span></p>
                        </li>
                    </ul>
                </div>
            </div><!-- // Col // -->


        </div>
    </div>


</section>

<? $this->load->view('widgets/_clients'); ?>



<script type="text/javascript">
    function getName(id) {
        document.getElementById('firstName').innerHTML = id;
        document.getElementById('firstName2').innerHTML = id;
    }

    function getLastName(id) {
        document.getElementById('lastName').innerHTML = id;
        document.getElementById('lastName2').innerHTML = id;
    }

    function getPhone(id) {
        document.getElementById('phoneNumber').innerHTML = id;
    }

    function getEmail(id) {
        document.getElementById('emailAdress').innerHTML = id;
    }

    function get_expert(category_id) {
        var my_url = base_url + "about_us/get_experts_by_category_id/" + category_id
        // console.log('url', my_url)
        $.ajax({
            url: my_url,
            method: 'get',
            success: function(res) {
                var experts = '';
                res = $.parseJSON(res);
                for (var i = 0; i < res.length; i++) {
                    // console.log('res', res[i])
                    experts = experts + get_expert_html(res[i]);
                }
                // console.log('res', experts)
                // console.log('res', experts)
                $('.expertlist').html(experts);
            }
        })
    }


    function show_detail(expert_name,category_name) {
        // expert = JSON.parse(expert);
        // console.log('expert',expert)
        $('h4:nth-child(1)').hide();
        $('h4:nth-child(2)').hide();
        $('h4:nth-child(3)').show();

        $('.fResult ul li:nth-child(2)').show();
        $('.fResult ul li:nth-child(6)').show();

        $('#experts').slideUp();
        $('#selectT_D').slideDown();

        $('.navigator ul li:nth-child(3)').addClass('active');

        var target_price = $(this).attr('data-price');
        $('span.price').text(target_price);

        $('.expertTopic ul li:nth-child(2)').hide();
        $('.expertTopic ul li:nth-child(3)').show();

        $('.serv').html(category_name);
        $('.agentName').html(expert_name);



    };

    var path = '<?= g('db.admin.bucketimg') ?>'
//category_name
    function get_expert_html(expert) {
        var s_e = JSON.stringify(expert);
        console.log('s_e',s_e);
        return `
        <li class="selectTopicBtn" data-price="AED 300" onclick="show_detail('`+expert.expert_name+`','`+expert.category_name+`')" id=` 
        + expert.expert_id + `>
            <img src="` + path + expert.expert_image + `" alt="">
            <span>` + expert.expert_name + `</span>
        </li>
        `;
    }
</script>


<script src="<?= l('') ?>assets/front_assets/js/account/slick.js"></script>
<script src="<?= l('') ?>assets/front_assets/js/account/custombooking.js"></script>
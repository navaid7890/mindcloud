<style>
textarea, select, input[type], textarea, select, button {
    background: transparent;
    border: 1px solid #ccc;
    border-radius: 0px;
    font-family: 'Open Sans';
    font-weight: 400;
    margin-top: 10px;
    padding: 5px;
}

textarea
{

    resize: none;
    width: 100%;
    height: 130px;
}

input#forms-booking_us-btn {
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
                            <li data-toggle="tooltip" data-placement="top" title="Verify Booking Detail"></li>
                            <!-- <li data-toggle="tooltip" data-placement="top" title="Enter Your Information"></li> -->
                            <!-- <li data-toggle="tooltip" data-placement="top" title="Appointment Confirmation"></li> -->
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
                                <h3>Verify Booking Detail</h3>
                                <p>Your booking is now received. Please wait to receive an email from your expert to confirm your booking and send you an invoice for the payment of 300 AED for one-hour session. Good luck!</p>
                            </li>
                            <!-- <li>
                                <img src="assets/images/contact.png" alt="">
                                <h3>Enter your Information</h3>
                                <p>Fill the fields on the right with your name, email, phone number. You can also add any comment relevant for the expert to read.</p>
                            </li> -->

                            


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
                                <? foreach ($category as $key => $value) :
                                    
                                 $a=$value['category_id'];
                                ?>
                                    <li class="selectTopicBtn" onclick="get_expert('<?= $value['category_id'] ?>')"><span> <?= $value['category_name'] ?></span></li>
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
                        <?
                        $us=$this->model_user->find_by_pk($this->userid);
                        ?>
                        <form  class="form-booking_us" id="forms-book_us">

                        <div class="row">
                        <div class="col-md-6">
                        <input type="hidden" name="booking[booking_user_id]" value="<?=$us['user_id']?>">

                        <input type="hidden" name="booking[booking_expert_id]" class="ex">
                        <input type="hidden" name="booking[booking_category_id]" class="cat">

                        <input type="hidden" name="booking[booking_date]" id="ones">
                        <input type="hidden" name="booking[booking_time]" id="two"> 


                        <input type="text"  value="<?=$us['user_firstname']?>" readonly placeholder="Name">
                        </div>

                        <div class="col-md-6">
                        <input type="email" name="booking[booking_email]" value="<?=$us['user_email']?>" readonly placeholder="Email">
                        </div>

                        
                        </div>



                        <div class="row">
                        <div class="col-md-12">
                        <input type="text" name="booking[booking_phone]"  placeholder="Phone" required> 
                        </div>

                        <div class="col-md-12">
                    <textarea name="booking[booking_message]" placeholder="Message" required></textarea>
                        </div>

                        
                        </div>


                     <input type="submit" id="forms-booking_us-btn" class="forms-booking_us-btn nbtn nextBtn_3">

                        </form>
             


                    </div>
                    <div class="btnHolders">
                        <div class="bbtn backBtn_4">
                            <p><i class="fal fa-long-arrow-left"></i> Back </p>
                        </div>
                        <!-- <div class="nbtn nextBtn_3">
                            <p> Submit <i class="fal fa-long-arrow-right"></i></p>

                        </div> -->
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


    function show_detail(expert_name, category_name,expert_price,catid,expertid) {
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
        $('.price').html(expert_price);

        $('.cat').val(catid);
        $('.ex').val(expertid);

        



}

    var path = '<?= g('db.admin.bucketimg') ?>'

    function get_expert_html(expert) {
        var s_e = JSON.stringify(expert);
        console.log('s_e', s_e);
        return `
        <li class="selectTopicBtn" data-price="AED 300" onclick="show_detail('` + expert.expert_name + `','` + expert.category_name + `','` + expert.expert_price + `','` + expert.cp_category_id + `','` + expert.expert_id + `')" id=` +
            expert.expert_id + `>
            <img src="` + path + expert.expert_image + `" alt="">
            <span>` + expert.expert_name + `</span>
        </li>
        `;
    }
</script>


<script src="<?= l('') ?>assets/front_assets/js/account/slick.js"></script>

<script>

var now = new Date();
        var year = now.getFullYear();
        var month = now.getMonth() + 1;
        var date = now.getDate();


        var data = [{
            date: year + '-' + month + '-' + (date - 1),
          //  value: 'hello'
        }, {
            date: year + '-' + month + '-' + date,
            //value: 'Go to work'
        }, {
            date: new Date(year, month - 1, date + 1),
           // value: 'Eat sleep play Peas'
        }, {
            date: new Date(now.date),
            //value: '2021-06-31'
        }];

        // inline
        var $ca = $('#one').calendar({
            // view: 'month',
            width: 440,
            height: 440,
            // startWeek: 0,
            // selectedRang: [new Date(), null],
            data: data,
            monthArray: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            date: new Date(),
            onSelected: function (view, date, data) {
                console.log('view:' + view)
                console.log('date:' + date)
                console.log('data:' + (data || 'no'));
            },
            viewChange: function (view, y, m) {
                console.log(view, y, m)

            }
        });

        // picker
        $('#two').calendar({
            trigger: '#dt',
            // offset: [0, 1],
            zIndex: 999,
            data: data,
            onSelected: function (view, date, data) {
                console.log('event: onSelected')
            },
            onClose: function (view, date, data) {
                console.log('event: onClose')
                //console.log('view:' + view)
                console.log('date:' + date)
                console.log('data:' + (data || '无'));
            }
        });

        // Dynamic elements
        var $demo = $('#demo');
        var UID = 1;
        $('#add').click(function () {
            $demo.append('<input id="input-' + UID + '"><div id="ca-' + UID + '"></div>');
            $('#ca-' + UID).calendar({
                trigger: '#input-' + UID++
            })
        })
    

$(document).ready(function() {
    switchDiv();

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");

    $('[href="#"]').attr("href", "javascript:;");

    $('.menu-Bar').click(function() {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
    });

    $('.loginUp').click(function(){
        $('.LoginPopup').fadeIn();
        $('.overlay').fadeIn();
    });

    $('.signUp').click(function(){
        $('.signUpPop').fadeIn();
        $('.overlay').fadeIn();
    });

     $('.closePop,.overlay').click(function(){
        $('.popupMain').fadeOut();
        $('.overlay').fadeOut();
    });



    $('.index-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
    });

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})



/*Form Wizard Code Start Here*/


$('.fResult').hide();
$('#experts').hide();
$('h4:nth-child(2)').hide();
$('h4:nth-child(3)').hide();
$('h4:nth-child(4)').hide();
$('#selectT_D').hide();
$('.selectTimeSlot').hide();
$('.nextBtn_1').hide();
$('#information').hide();
 $('.finalResult').hide();



$('#topics li').click(function(){

$('.fResult').show();
$('.fResult').animate({
        width:'100%',
        display: 'flex'
            }) 

        $('h4:nth-child(2)').show();
        $('h4:nth-child(1)').hide();

        $('.fResult ul li:first-child').show();

        $('#experts').slideDown();
        $('#topics').slideUp();

        $('.navigator ul li:nth-child(2)').addClass('active'); 

         $('.expertTopic ul li:nth-child(1)').hide();
        $('.expertTopic ul li:nth-child(2)').show();


});

$('#topics li.selectTopicBtn span').click(function(){
       var getSpanValOne = ($(this).text());
        $('span.serv').text(getSpanValOne);
    });

$('#experts li.selectTopicBtn span').click(function(){
       var getSpanValTwo = ($(this).text());
        $('span.agentName').text(getSpanValTwo);


    });


$('.backBtn_1').click(function(){

        $('#experts').slideUp();
        $('#topics').slideDown();
        $('h4:nth-child(2)').hide();
        $('h4:nth-child(1)').show();
        $('.navigator li:nth-child(2)').removeClass('active');
         $('.expertTopic ul li:nth-child(1)').show();
        $('.expertTopic ul li:nth-child(2)').hide();


});

$('.backBtn_2').click(function(){

        $('#selectT_D').slideUp();
        $('#experts').slideDown();
        $('h4:nth-child(2)').show();
        $('h4:nth-child(1)').hide();
         $('h4:nth-child(3)').hide();
        $('.navigator li:nth-child(2)').removeClass('active');


        $('.expertTopic ul li:nth-child(2)').show();
        $('.expertTopic ul li:nth-child(3)').hide();


});

$('.backBtn_3').click(function(){

        $('#selectT_D').slideDown();
        $('#information').slideUp();
        $('h4:nth-child(2)').hide();
        $('h4:nth-child(1)').hide();
         $('h4:nth-child(3)').show();
        $('.navigator li:nth-child(2)').removeClass('active');


        $('.expertTopic ul li:nth-child(2)').hide();
        $('.expertTopic ul li:nth-child(3)').show();
        $('.expertTopic ul li:nth-child(4)').hide();

});


$('#experts li').click(function(){

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
   
    

});

$('ul.date-items li').click(function(){
    var target_date = $(this).attr('data-calendar-day');
    $('span.calDate').text(target_date);
    $('.selectTimeSlot').slideDown();
    $('.fResult ul li:nth-child(3)').show();

var date= $('span.calDate').html();
var us=$('.ex').val();

    var e = date;
    e.length > 0 ? $.ajax({
    url: base_url + "about_us/ajax_get_timeslot",
    type: "POST",
    data: {
        date: e,
        professional_id: us
    },
    dataType: "json",
    success: function(e) {
        $("#preloader").hide(), e.status ? ($(".selectTimeSlot").html(e.html)) : Toastr.error(e.txt, "")
    },
    beforeSend: function(e) {
        $("#preloader").show()
    }
}) : console.log("do nothing");

return false;

});

// $('.selectTimeSlot li label').click(function(){

//      var target_time = $(this).attr('data-original-title');
//     $('span.calTime').text(target_time);

 
 
// });



//var selector = '.selectTimeSlot li';



//  $('.selectTimeSlot li').click(function(){

//     $('.nextBtn_1').show();
//     $('.fResult ul li:nth-child(4)').show();

 
// }); 

//   $('.nextBtn_1').click(function(){
//     console.log('i am in');
//     $('#information').show();
//     $('#selectT_D').hide();
//      $('.navigator ul li:nth-child(4)').addClass('active');

//      $('.expertTopic ul li:nth-child(4)').show();
//      $('.expertTopic ul li:nth-child(3)').hide();

//       $('.fResult ul li:nth-child(5)').show();
   
// });

 $('.nextBtn_1').click(function(){

    $('.resultMain').hide();
    $('.finalResult').show();
    $('.selectAreaBoxInner').hide();

     $('.navigator ul li:nth-child(4)').addClass('active');
     $('.expertTopic ul li:nth-child(3)').hide();
     $('.expertTopic ul li:nth-child(4)').show();
     
     $("#ones").val($('.calDate').html());


     $("#two").val($('.calTime').html());
   


});  

 $('.backBtn_4').click(function(){
      $('.resultMain').show();
    $('.finalResult').hide();
    $('.selectAreaBoxInner').show();
    $('.expertTopic ul li:nth-child(4)').hide();
    $('.expertTopic ul li:nth-child(3)').show();
 });

//  $('.days li').on('click', function(){
//     // $(this).removeClass('selected');
//     // alert('Hello')
//     $(this).toggleClass('selected');
// });


// $('.days li').on('click', function () {
//     $(this).toggleClass('selected')
// });

var selector = '.days li';

$(selector).on('click', function(){
    $(selector).removeClass('selected');
    $(this).addClass('selected');
});
 
  
});


//console.log("kjasdkjhaskdhas", target_date)


$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }
});
     

$(window).on('load', function() {
    var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('ul.menu li a').each(function() {
        var hrefVal = $(this).attr('href');
        if (hrefVal == currentUrl) {
            $(this).removeClass('active');
            $(this).closest('li').addClass('active')
            $('ul.menu li.first').removeClass('active');
        }
    });

});


/* RESPONSIVE JS */
if ($(window).width() < 824) {


}



function switchDiv() {
    var $window = $(window).outerWidth();
    if ($window <= 768) {
        $('.topAppendTxt').each(function() {
            var getdtd = $(this).find('.cloneDiv').clone(true);
            $(this).find('.cloneDiv').remove();
            $(this).append(getdtd);
        });
    };
}

</script>


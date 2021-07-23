
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
            date: '2021-06-31',
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
            date: new Date(2021, 6, 31),
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

        // var getSpan = $('').text();
        // console.log(getSpan);

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
    

});

$('.selectTimeSlot li label').click(function(){

     var target_time = $(this).attr('data-original-title');
    $('span.calTime').text(target_time);
});

// $('.selectTimeSlot li').on('click', function(){
//     $(this).removeClass('selected');
//     $(this).addClass('selected');
// });

var selector = '.selectTimeSlot li';

$(selector).on('click', function(){
    $(selector).removeClass('selected');
    $(this).addClass('selected');
});
 

 $('.selectTimeSlot li').click(function(){

    $('.nextBtn_1').show();
    $('.fResult ul li:nth-child(4)').show();

 
}); 

  $('.nextBtn_1').click(function(){
    console.log('i am in');
    $('#information').show();
    $('#selectT_D').hide();
     $('.navigator ul li:nth-child(4)').addClass('active');

     $('.expertTopic ul li:nth-child(4)').show();
     $('.expertTopic ul li:nth-child(3)').hide();

      $('.fResult ul li:nth-child(5)').show();
   
});

 $('.nextBtn_2').click(function(){

    $('.resultMain').hide();
    $('.finalResult').show();
    $('.selectAreaBoxInner').hide();

     $('.navigator ul li:nth-child(5)').addClass('active');
     $('.expertTopic ul li:nth-child(4)').hide();
     $('.expertTopic ul li:nth-child(5)').show();
});  

 $('.backBtn_4').click(function(){
      $('.resultMain').show();
    $('.finalResult').hide();
    $('.selectAreaBoxInner').show();
 });


  // $(".firstName").val();

  // var bla = $('#firstName').val();
  // $('firstName').val(bla);

  
});




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


/*Calender Script*/



/*Calender Script Close*/


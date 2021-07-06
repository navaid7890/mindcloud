$(document).ready(function() {

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");

    $('[href="#"]').attr("href", "javascript:;");

  


   

    // $("ul.login-btn .dropdown-toggle > a").click(function(e) {
    //     $(this).toggleClass('open');
    //     $('body').toggleClass('open');
    //     $(".dropdown-box").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
    //         e.stopPropagation()
    // })


    // $('ul.course-scroll .dropdown-toggle > a').click(function() {
    //     $(this).parent('li').find('.dropdown-toggle').addClass('open');
    //     // $(this).parent('li').addClass('active');
    //     $(this).parent('li').siblings().find('.dropdown-toggle').removeClass('open');
    //     $(this).parent('li').siblings().removeClass('active');
    //     $(this).parent('li').find('.dropdown-box').slideDown();
    //     $(this).parent('li').siblings().find('.dropdown-box').slideUp();
    // });

    $(function() {
        $('.dropdown-toggle > a').click(function() {
          var dropDown = $(this).closest('.dropdown-toggle').find('.dropdown-box');
          $(this).closest('.mCSB_container').find('ul.dropdown-box').not(dropDown).slideUp();
          
          if ($(this).hasClass('tCurrent')) {
            $(this).removeClass('tCurrent');
          } else {
            $(this).closest('.mCSB_container').find('.tCurrent').removeClass('tCurrent');
            $(this).addClass('tCurrent');
          }
          
          dropDown.stop(false, true).slideToggle();
       
        });
      });

      var para = (window.location.search);
      $('.dropdown-toggle').click(function(j) {
         console.log('i am in', para);
   });
  
   url = new URL(window.location.href);
   var toolb = url.searchParams.get('cat');
          if (url.searchParams.get('cat')) {
             var toolb = url.searchParams.get('cat');
             var tool = "activeId-"+toolb;
             $("."+tool).addClass('testing');
             $('.dropdown-toggle').addClass('testing');
          }
  
         $('body').addClass("page"+toolb);
          console.log('i am inn', toolb);




    $('[data-targetit]').on('click', function(e) {
        $(this).addClass('current');
        $(this).siblings().removeClass('current');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class^="box-"]').hide();
        $('.' + target).fadeIn();
        $('.form-tabing').slick('setPosition');
    });

    // $('.dropdown-toggle').click(function() {
    //     $('.dashboard-child-links').slideToggle();
    // });



    $('.loginUp').click(function() {
        $('.LoginPopup').fadeIn();
        $('.overlay').fadeIn();
    });

    $('.signUp').click(function() {
        $('.signUpPop').fadeIn();
        $('.overlay').fadeIn();
    });

    $('.closePop,.overlay').click(function() {
        $('.popupMain').fadeOut();
        $('.overlay').fadeOut();
    });



    $('.testi-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
    });

    $(function() {
        $('.btn-hover')
            .on('mouseenter', function(e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('span').css({ top: relY, left: relX })
            })
            .on('mouseout', function(e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('span').css({ top: relY, left: relX })
            });
        $('[href=#]').click(function() { return false });
    });

});




// $(document).ready(function() {
//     $('ul.dashboard-nav li a').click(function() {
//         $('ul.dashboard-nav li a').removeClass("active");
//         $(this).addClass("active");
//     });
// });

// $(document).ready(function() {
//     $('ul.course-scroll li a').click(function() {
//         $('ul.course-scroll li a').removeClass("active");
//         $(this).addClass("active");
//     });
// });



$(window).load(function() {
    var url = window.location.href;
    $('ul.dashboard-nav li').find('.active').removeClass('active');
    $('ul.dashboard-nav li a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
});

$(window).load(function() {
    var url = window.location.href;
    $('ul.tut-menu-inner li').find('.active').removeClass('active');
    $('ul.tut-menu-inner li a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
});

$(window).load(function() {
    var url = window.location.href;
    $('ul.dropdown-box li').find('.active').removeClass('active');
    $('ul.dropdown-box li a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
});

$('.colasebar li .faqBox').click(function() {
    $(this).parent('li').find('.faqBox').addClass('open');
    $(this).parent('li').addClass('active');
    $(this).parent('li').siblings().find('.faqBox').removeClass('open');
    $(this).parent('li').siblings().removeClass('active');
    $(this).parent('li').find('.expandable').slideDown();
    $(this).parent('li').siblings().find('.expandable').slideUp();
});

$('.colasebar li .faqBar').click(function() {
    $(this).parent('li').find('.faqBar').addClass('open');
    $(this).parent('li').addClass('active');
    $(this).parent('li').siblings().find('.faqBar').removeClass('open');
    $(this).parent('li').siblings().removeClass('active');
    $(this).parent('li').find('.expandable').slideDown();
    $(this).parent('li').siblings().find('.expandable').slideUp();
});


$('.certificate-slide').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
            breakpoint: 824,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
            }
        },

        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },


    ]
});

$('.consult-left-slide').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    responsive: [{
            breakpoint: 824,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },

    ]
});


$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }
});

$("ul.course-scroll, .tutorial-scroll-content, .video-caption, .index-page-wrap, .order-confirm, .place-order ").mCustomScrollbar({
    scrollButtons: { enable: true },
    theme: "dark"
});

// $("ul.fld-progress").mCustomScrollbar({
//     scrollButtons: { enable: true },
//     theme: "dark",
//     axis: "x"
// });

$('.fld-html input:checkbox').click(function() {
    $('.fld-html input:checkbox').not(this).prop('checked', false);
});


$(function drawSector() {
    var activeBorder = $("#activeBorder");
    var prec = activeBorder.children().children().text();
    if (prec > 100)
        prec = 100;
    var deg = prec * 3.6;
    if (deg <= 180) {
        activeBorder.css('background-image', 'linear-gradient(' + (deg - 90) + 'deg, transparent 50%, #FDBE41 50%),linear-gradient(90deg, #FDBE41 50%, transparent 50%)');
    } else {
        activeBorder.css('background-image', 'linear-gradient(' + (90 + deg)   + 'deg, transparent 50%, #fff 50%),linear-gradient(90deg, #FDBE41 50%, transparent 50%)');
    }

    var startDeg = $("#startDeg").attr("class");
    activeBorder.css('transform', 'rotate(' + startDeg + 'deg)');
    $("#circle").css('transform', 'rotate(' + (-startDeg) + 'deg)');
});



$(function drawSector() {
    var activeBorder = $("#activeBorder1");
    var prec = activeBorder.children().children().text();
    if (prec > 100)
        prec = 100;
    var deg = prec * 3.6;
    if (deg <= 180) {
        activeBorder.css('background-image', 'linear-gradient(' + (90 + deg) + 'deg, transparent 50%, #F3F7FB 50%),linear-gradient(90deg, #F3F7FB 50%, transparent 50%)');
    } else {
        activeBorder.css('background-image', 'linear-gradient(' + (deg - 90) + 'deg, transparent 50%, #1BA8E8 50%),linear-gradient(90deg, #F3F7FB 50%, transparent 50%)');
    }

    var startDeg = $("#startDeg1").attr("class");
    activeBorder.css('transform', 'rotate(' + startDeg + 'deg)');
    $("#circle1").css('transform', 'rotate(' + (-startDeg) + 'deg)');
});



$(function drawSector() {
    var activeBorder = $("#activeBorder2");
    var prec = activeBorder.children().children().text();
    if (prec > 100)
        prec = 100;
    var deg = prec * 3.6;
    if (deg <= 180) {
        activeBorder.css('background-image', 'linear-gradient(' + (90 + deg) + 'deg, transparent 50%, #F3F7FB 50%),linear-gradient(90deg, #F3F7FB 50%, transparent 50%)');
    } else {
        activeBorder.css('background-image', 'linear-gradient(' + (deg - 90) + 'deg, transparent 50%, #1BA8E8 50%),linear-gradient(90deg, #F3F7FB 50%, transparent 50%)');
    }

    var startDeg = $("#startDeg2").attr("class");
    activeBorder.css('transform', 'rotate(' + startDeg + 'deg)');
    $("#circle2").css('transform', 'rotate(' + (-startDeg) + 'deg)');
});




function shows_form_part(n) {
    var i = 1,
        p = document.getElementById("form_part" + 1);
    while (p !== null) {
        if (i === n) {
            p.style.display = "";
        } else {
            p.style.display = "none";
        }
        i++;
        p = document.getElementById("form_part" + i);
    }
}

function submit_form() {
    var sum = parseInt(document.getElementById("num1").value) +
        parseInt(document.getElementById("num2").value) +
        parseInt(document.getElementById("num3").value);
    alert("Your result is: " + sum);
}



/* RESPONSIVE JS */
if ($(window).width() < 824) {


}

$(document).ready(function() {

    !function(a){a.fn.percentageLoader=function(b){this.each(function(){function q(){p.customAttributes.arc=function(a,b,c){var h,d=360/b*a,e=(90-d)*Math.PI/180,f=j+c*Math.cos(e),g=k-c*Math.sin(e);return h=b==a?[["M",j,k-c],["A",c,c,0,1,1,j-.01,k-c]]:[["M",j,k-c],["A",c,c,0,+(d>180),1,f,g]],{path:h}},p.path().attr({arc:[100,100,l],"stroke-width":d.strokeWidth,stroke:d.bgColor}),e&&(m=p.path().attr({arc:[.01,100,l],"stroke-width":d.strokeWidth,stroke:d.ringColor,cursor:"pointer"}),r(e,100,l,m,2)),n=p.text(j,k,e+"%").attr({font:d.fontWeight+" "+d.fontSize+" Arial",fill:d.textColor})}function r(a,b,c,d){f?d.animate({arc:[a,b,c]},900,">"):a&&a!=b?d.animate({arc:[a,b,c]},750,"elastic"):(a=b,d.animate({arc:[a,b,c]},750,"bounce",function(){d.attr({arc:[0,b,c]})}))}var c=a(this),d=a.extend({},a.fn.percentageLoader.defaultConfig,b),e=parseInt(c.children(d.valElement).text()),f=!0,h=parseInt(c.css("width")),i=parseInt(c.css("height")),j=h/2,k=i/2,l=j-d.strokeWidth/2,m=null,n=null,p=Raphael(this,h,i);q()})},a.fn.percentageLoader.defaultConfig={valElement:"p",strokeWidth:20,bgColor:"#d9d9d9",ringColor:"#d53f3f",textColor:"#9a9a9a",fontSize:"12px",fontWeight:"normal"}}(jQuery);

    $('.percent').percentageLoader({
        bgColor: 'rgba(0,0,0,.2)',
        ringColor: '#FDBE41',
        textColor: '#33415C',
        fontSize: '8px',
        strokeWidth: 2
    });

    $('.percent2').percentageLoader({
        bgColor: 'rgba(255,255,255,1)',
        ringColor: '#FDBE41',
        textColor: '#33415C',
        fontSize: '20px',
        strokeWidth: 3
    });



});

$(document).ready(function() {

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");

    $('[href="#"]').attr("href", "javascript:;");

    $('.menu-Bar').click(function() {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
    });

    $(".comment-toggle").click(function(e) {
        $(this).toggleClass('open');
        $(".comment-dlt").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
            e.stopPropagation()
    })


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

    $('[data-targetit]').on('click', function(e) {
        $(this).addClass('current');
        $(this).siblings().removeClass('current');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class^="box-"]').hide();
        $('.' + target).fadeIn();
    });

    $("ul.login-btn .dropdown-toggle > a").click(function(e) {
        $(this).toggleClass('open');
        $(".dropdown-box").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
            e.stopPropagation()
    })

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

    $('.client-logo').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
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


$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }
});


(function($) {
    $(window).on("load", function() {
        $(".pack-spec-scroll").mCustomScrollbar();
    });
})(jQuery);


$(function drawSector() {
    var activeBorder = $("#activeBorder");
    var prec = activeBorder.children().children().text();
    if (prec > 100)
        prec = 100;
    var deg = prec * 3.6;
    if (deg <= 180) {
        activeBorder.css('background-image', 'linear-gradient(' + (90 + deg) + 'deg, transparent 50%, #F3F7FB 50%),linear-gradient(90deg, #F3F7FB 50%, transparent 50%)');
    } else {
        activeBorder.css('background-image', 'linear-gradient(' + (deg - 90) + 'deg, transparent 50%, #F3F7FB 50%),linear-gradient(90deg, #FDBE41 50%, transparent 50%)');
    }

    var startDeg = $("#startDeg").attr("class");
    activeBorder.css('transform', 'rotate(' + startDeg + 'deg)');
    $("#circle").css('transform', 'rotate(' + (-startDeg) + 'deg)');
});



/* RESPONSIVE JS */
if ($(window).width() < 824) {


}

$(document).ready(function() {
    $('.loadMore').loadMoreResults({
        button: {
            'class': 'btn-load-more',
            'text': 'Load More'
        },
        tag: {
            name: 'li',
            'class': 'items'
        },
        showItems: 2,
        displayedItems: 2,

    });
})
/*
 Template Name: Mulan / CV Template + RTL
 Template URI: https://elmanawy.info/demo/mulan
 Description: Mulan for resume / cv / portfolio template that's suitable for freelanner and anyone want to create online portflolio
 Author: Marwa El-Manawy
 Author URL: https://elmanawy.info
 Version: 1.0
 */

/*================================================
 [  Table of contents  ]
 ================================================
 :: Preloader
 :: Site Header
 :: Page loader
 :: Typing Text
 :: Text rotation
 :: Counter - Fun Fact
 :: Testenomials
 :: Clients
 :: Portfolio Filter
 :: LightBox
 :: AJAX Contact Form
 :: Google Map
 :: WOW Animation
 ======================================
 [ End table content ]
 ======================================*/

jQuery(document).ready(function () {
    "use strict";

    /*======================================
     Site Header
     ======================================*/

    if (window.location.hash) {
        $(".sub-page").hide();
        $('.header-main-menu li a').removeClass('active');
        $('section' + window.location.hash + ':first').show();
    }

    $('#header-main-menu li a, .home-buttons a').on("click", function (e) {
        if ($(e.target).is('.header-main-menu a, .home-buttons a')) {
            $('.header-main-menu li a').removeClass('active');
            $(this).addClass('active');
            $(".sub-page").hide();
            var target = $(e.target.hash);
            if (target.length) {
                var gap = 0;
                $(e.target.hash, 'html', 'body').animate({
                    opacity: 'show',
                    duration: "slow",
                    scrollTop: target.offset().top - gap
                });
            }
            if ($(e.target).is('.home-buttons a')) {
                $("#header-main-menu li a[href='#contact']").addClass('active');
            }

        }
    });


    /*************************
     Responsive Menu
     *************************/
    $('.responsive-icon').on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            $('.header').animate({'margin-left': 285}, 300);
        } else {
            $(this).removeClass('active');
            $('.header').animate({'margin-left': 0}, 300);
        }
        return false;
    });

    $('.header a').on("click", function (e) {
        $('.responsive-icon').removeClass('active');
        $('.header').animate({'margin-left': 0}, 300);

    });
    /*======================================
     Typing Text
     ======================================*/
    $(".cd-words-wrapper b:first-child").addClass("is-visible");


    /*======================================
     Counter - Fun Fact
     ======================================*/
    $('.counter-block-value').each(function () {
        var $this = $(this),
                countTo = $this.attr('data-count');
        $({countNum: $this.text()}).animate({
            countNum: countTo
        },
        {
            duration: 8000,
            easing: 'linear',
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
            }
        });
    });


    /*======================================
     Testenomials
     ======================================*/
    $('.testimonials').owlCarousel({
        navigation: false,
        pagination: false,
        autoPlay: true,
        items: 2,
        loop: !1,
        dots: true,
        margin: 25,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 2
            }
        }
    });


    /*======================================
     Clients
     ======================================*/
    $('.clients').owlCarousel({
        navigation: false,
        pagination: false,
        dots: false,
        loop: true,
//        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        margin: 10,
        autoHeight: !1,
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    });


    /*======================================
     Portfolio Filter
     ======================================*/
    $(function () {
        var selectedClass = "";
        $(".filter-tabs").find('button:first-child').addClass('active-filter');
        $(".fil-cat").click(function () {
            $(".filter-tabs").find('button').removeClass('active-filter');
            $(this).addClass('active-filter');
            selectedClass = $(this).attr("data-rel");
            $("#portfolio-page").fadeTo(100, 0.1);
            $("#portfolio-page .portfolio-item").not("." + selectedClass).fadeOut().removeClass('portfolio-item');
            setTimeout(function () {
                $("." + selectedClass).fadeIn().addClass('portfolio-item');
                $("#portfolio-page").fadeTo(300, 1);
            }, 300);

        });
    });


    /*======================================
     LightBox
     ======================================*/
    $('[data-rel^=lightcase]').lightcase({
        maxWidth: 1100,
        maxHeight: 800
    });

    /*======================================
     WOW Animation
     ======================================*/
    new WOW().init();
    /*======================================
     Preloader
     ======================================*/
    $('#preloader').fadeOut('slow', function () {
        $(this).remove();
    });
});

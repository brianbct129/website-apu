$(function() {
    
    "use strict";
    
   //===== Prealoder
    $(window).load(function() {
        $("#loading").fadeOut(500);
    });
    

    //===== Mobile Menu 
    
    $(".navbar-toggler").on('click', function() {
        $(this).toggleClass('active');
    });
    
    $(".navbar-nav a").on('click', function() {
        $(".navbar-toggler").removeClass('active');
    });
    var subMenu = $(".sub-menu-bar .navbar-nav .sub-menu");

    if (subMenu.length) {
        subMenu.parent('li').children('a').append(function () {
            return '<button class="sub-nav-toggler"> <i class="fa fa-angle-down"></i> </button>';
        });

        var subMenuToggler = $(".sub-menu-bar .navbar-nav .sub-nav-toggler");

        subMenuToggler.on('click', function () {
            $(this).parent().parent().children(".sub-menu").slideToggle();
            return false
        });

    }
    
    //===== Sticky
    
    $(window).on('scroll', function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll < 235) {
            $(".navigation").removeClass("sticky");
        } else{
            $(".navigation").addClass("sticky");
        }
    });





    //===== testimonials slide slick slider
    $('.testimonials-active').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        prevArrow: '<span class="prev"><i class="fal fa-long-arrow-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-long-arrow-right"></i></span>',
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }
        }
      ]
    });





    //===== testimonials slide slick slider
    $('.testimonials-2-active').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }
        }
      ]
    });







    //===== testimonials slide slick slider
    $('.testimonials-3-active').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }
        }
      ]
    });



    //===== team slide slick slider
    $('.team-active').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow: '<span class="prev"><i class="flaticon-left-arrow"></i></span>',
        nextArrow: '<span class="next"><i class="flaticon-right-arrow-1"></i></span>',
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                }
        },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }
        }
      ]
    });



    //===== business way slide slick slider
    $('.business-way-slide').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow: '<span class="prev"><i class="flaticon-left-arrow"></i></span>',
        nextArrow: '<span class="next"><i class="flaticon-right-arrow-1"></i></span>',
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    slidesToShow: 2,
                    arrows: true,
                }
        },
            {
                breakpoint: 992,
                settings: {
                    arrows: true,
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                }
        },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }
        }
      ]
    });

    //===== portfolio slide slick slider
    $('.portfolio-active').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    slidesToShow: 4,
                }
        },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 4,
                }
        },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                }
        },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                }
        }
      ]
    });

    //===== brand slide slick slider
    $('.brand-active').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    slidesToShow: 5,
                }
        },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 4,
                }
        },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                }
        },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                }
        }
      ]
    });
    
    
    //===== Isotope Project 1
    
    $('.container').imagesLoaded(function () {
        var $grid = $('.grid').isotope({
        // options
            transitionDuration: '1s'
        });
        
        // filter items on button click
        $('.project-menu ul').on( 'click', 'li', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
        });
        
        //for menu active class
        $('.project-menu ul li').on('click', function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
    });
    
    
    //====== Magnific Popup
    
    $('.video-popup').magnificPopup({
        type: 'iframe'
        // other options
    });
    
    
    //===== Magnific Popup
    
    $('.image-popup').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });



    //===== counter up
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    
    
    //===== niceSelect js
    
    $('select').niceSelect();


    //===== circleProgress

    $('#circle1').circleProgress({
        value: 0.90,
        size: 160,
        lineCap: "round",
        emptyFill: "#cbdced",
        thickness: "10",
        fill: {
            gradient: ["#428cd4" ,"#004e9a"]
        }
    });
    $('#circle2').circleProgress({
        value: 0.76,
        size: 160,
        lineCap: "round",
        emptyFill: "#cbdced",
        thickness: "10",
        fill: {
            gradient: ["#428cd4" ,"#004e9a"]
        }
    });
    $('#circle3').circleProgress({
        value: 0.62,
        size: 160,
        lineCap: "round",
        emptyFill: "#cbdced",
        thickness: "10",
        fill: {
            gradient: ["#428cd4" ,"#004e9a"]
        }
    });
    $('#circle4').circleProgress({
        value: 0.85,
        size: 160,
        lineCap: "round",
        emptyFill: "#cbdced",
        thickness: "10",
        fill: {
            gradient: ["#428cd4" ,"#004e9a"]
        }
    });
    
    $('select').niceSelect();


    //===== circleProgress

    $('#circle5').circleProgress({
        value: 0.90,
        size: 160,
        lineCap: "round",
        emptyFill: "#cbdced",
        thickness: "10",
        fill: {
            gradient: ["#d1651a" ,"#c1282a"]
        }
    });
    $('#circle6').circleProgress({
        value: 0.76,
        size: 160,
        lineCap: "round",
        emptyFill: "#cbdced",
        thickness: "10",
        fill: {
            gradient: ["#d1651a" ,"#c1282a"]
        }
    });
    $('#circle7').circleProgress({
        value: 0.62,
        size: 160,
        lineCap: "round",
        emptyFill: "#cbdced",
        thickness: "10",
        fill: {
            gradient: ["#d1651a" ,"#c1282a"]
        }
    });
    $('#circle8').circleProgress({
        value: 0.85,
        size: 160,
        lineCap: "round",
        emptyFill: "#cbdced",
        thickness: "10",
        fill: {
            gradient: ["#d1651a" ,"#c1282a"]
        }
    });
    
    
    
    // Go to Top
    
    // Scroll Event
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    // Click Event
    $('.go-top').on('click', function () {
        $("html, body").animate({
            scrollTop: "0"
        }, 1200);
    });


    
    
    //=====  wow js active
    
    new WOW().init();
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});
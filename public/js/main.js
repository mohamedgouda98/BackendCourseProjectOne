(function ($) {
    "use strict";

// Scroll Nav Bar Links
$('.mean-nav ul li a').click(function () {
    $('html, body').animate({
        
        scrollTop: $('#' + $(this).data('value')).offset().top
        
    }, 1000);
    
});

// Scroll Nav Bar Links
$('ul li a').click(function () {
    $('html, body').animate({
        
        scrollTop: $('#' + $(this).data('value')).offset().top
        
    }, 1000);
    
});

// Scroll To Contact Us Section
$('.make-apoinmant-button').click(function () {
    $('html, body').animate({
        
        scrollTop: $('#contact').offset().top
        
    }, 1000);
    
});

// Scroll To About Us section
$('.slider-button').click(function () {
    $('html, body').animate({
        
        scrollTop: $('#about').offset().top
        
    }, 1000);
    
});

/*--
    Menu Sticky
-----------------------------------*/
var windows = $(window);
var sticky = $('.header-sticky');

windows.on('scroll', function() {
    var scroll = windows.scrollTop();
    if (scroll < 300) {
        sticky.removeClass('is-sticky');
    }else{
        sticky.addClass('is-sticky');
    }
});

/*--
    Mobile Menu
------------------------*/
var menuNav = $('nav.main-navigation');
menuNav.meanmenu({
    meanScreenWidth: '991',
    meanMenuContainer: '.mobile-menu',
    meanMenuClose: '<span class="menu-close"></span>',
    meanMenuOpen: '<span class="menu-bar"></span>',
    meanRevealPosition: 'right',
    meanMenuCloseSize: '0',
});
    
/*--
    Service Slider
--------------------------------------------*/
var serviceSlider = $('.service-slider-active');
serviceSlider.slick({
    accessibility: false,
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow:true,
    nextArrow: true,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icofont-thin-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"> <i class="icofont-thin-right"></i> </button>',
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
    
/*--
    Latest Blog Slider
--------------------------------------------*/
var latestBlog = $('.latest-blog-active');
latestBlog.slick({
    accessibility: false,
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow:true,
    nextArrow: true,
    prevArrow: '<button type="button" class="slick-prev"> <i class="icofont-thin-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"> <i class="icofont-thin-right"></i> </button>',
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

/*--
    Gallery Mesonry Activation
--------------------------------------*/
$('.masonry-wrap').imagesLoaded(function () {

    // filter items on button click
    $('.gallery-menu').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
          filter: filterValue
        });
    });

    // change is-checked class on buttons
    $('.gallery-menu button').on('click', function () {
        $('.gallery-menu button').removeClass('is-checked');
        $(this).addClass('is-checked');
        var selector = $(this).attr('data-filter');
        $containerpage.isotope({
          filter: selector
        });
        return false;
    });

    // init Isotope
    var $grid = $('.masonry-wrap').isotope({
        itemSelector: '.gallery-item',
        percentPosition: true,
        transitionDuration: '0.4s',
        layoutMode: 'fitRows',
        masonry: {
          // use outer width of grid-sizer for columnWidth
          columnWidth: '.gallery__item',
        }
    });
});
    
/*--
    Accordion
-------------------------*/
$(".faequently-accordion").collapse({
    accordion:true,
  open: function() {
    this.slideDown(300);
  },
  close: function() {
    this.slideUp(300);
  }		
});	 
    
    
/*--
    Magnific Popup
------------------------*/
$('.img-popup').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});
    
/* --
    counterUp 
-----------------------------*/
$('.counter-active').counterUp({
    delay: 10,
    time: 1000
});

/*--
    ScrollUp Active
-----------------------------------*/
$.scrollUp({
    scrollText: '<i class="icofont-bubble-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
});   


$("#menuBtn").on("click", function () {
    $("#menuRight").toggleClass("show");
  });

  $("#closeMenu").on("click", function () {
    $("#menuRight").toggleClass("show");
  });


  $("#menuRight ul li a").on("click", function () {
    $("#menuRight").toggleClass("show");
  });
    
})(jQuery);	

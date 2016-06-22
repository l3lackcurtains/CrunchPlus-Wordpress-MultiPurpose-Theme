/*=====================================================
VC row property
========================================================
*/
function vc_row_property(){
  var win = $( window ).width();
  var width = $('.container').width();
  var cOffset = (width - win)/2;
  console.log(cOffset);
  var css_property_container = {'position': 'relative',
        'left': cOffset +30,
        'box-sizing': 'border-box',
        'width': win,
        'padding-left': -cOffset,
        'padding-right': -cOffset
    };
    var css_property_full_width = {'position': 'relative',
        'left': cOffset +30,
        'box-sizing': 'border-box',
        'width': win,
    };
    $('.container_in').css(css_property_container);
    $('.container_full_width').css(css_property_full_width);
}


$(window).on('resize', function(){
    vc_row_property();
});
$(document).ready(function(){
    vc_row_property();
});
/*=====================================================
Scroll Property
========================================================
*/
//variables
var top_bar = $('.header-top-bar');
var scrolltop = $('.scroll-top');

$(window).scroll(function(){
  // Sticky header
  if(window.scrollY > 10){
      top_bar.addClass("attach");

  }else{
      top_bar.removeClass("attach");
  }

  // scroll top
  if(window.scrollY > 300){
      scrolltop.addClass("show");
  }else{
      scrolltop.removeClass("show");
  }

});

/*=====================================================
full screen header
========================================================
*/

function header_property() {
  $window_height = $(window).height(),
  $('.headers-wrapper').css('height',$window_height);
  }
$(window).on('resize', function(){
    header_property();
});
$(document).ready(function(){
    header_property();
});

/*******************************************************
========================================================
After document is ready ********************************
========================================================
********************************************************
*/

$(document).ready(function() {
  // Menu icon on mobile devices
  $(".navbar-toggle").on("click", function(){
      if( $(".menu-icon").hasClass("open") ){
        $(".menu-icon").removeClass('open');
      }else{
        $(".menu-icon").addClass("open");
      }
    });

    // Testinominals
   $("#slider-lines").owlCarousel({
       navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay : 4000,
      stopOnHover : false,
      transitionStyle : "backSlide"
   });
   // Companies
  var companies = $("#companies");
  companies.imagesLoaded( function() {
      companies.owlCarousel({
          autoPlay: 3000,
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,2],
          stopOnHover : true,
          paginationSpeed : 400,
          baseClass : "owl-carousel",
          theme : "owl-theme",
          pagination : false,
          navigation : true,
          navigationText : ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
         });
  });

/*=====================================================
Parallax Effects
========================================================
*/
  // Wow Parallax
  new WOW().init();
/*=====================================================
Isotope
========================================================
*/

  // portfolio isotope
  var $portfolio = $('.portfolio-items');
  $portfolio.isotope({
      filter: '*',
      layoutMode: 'fitRows',
      itemSelector: '.portfolio-single',
      animationOptions: {
          duration: 750,
          easing: 'easeInBounce',
          queue: false,
      },
  });
  $('.portfoliolist li a').click(function(){
    var selector = $(this).attr('data-filter');
    $portfolio.isotope({
        filter: selector,
        itemSelector: '.portfolio-single',
        animationOptions: {
            duration: 750,
            easing: 'easeInBounce',
        }
    });
  return false;
  });

/*=====================================================
Google Map
========================================================
*/
  var map = new GMaps({
        el: '.gmap',
        lat: 28.2006,
        lng: 83.9814
      });

/*=====================================================
MorphextWW
========================================================
*/
  $(".rotate-text").Morphext({
      animation: "bounceInUp",
      separator: ",",
      speed: 3000,
      complete: function () {
          // Called after the entrance animation is executed.
      }
  });

/*=====================================================
Scroll Property
========================================================
*/
  //smooth scroll
  smoothScroll.init({
    selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
    selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
    speed: 600, // Integer. How fast to complete the scroll in milliseconds
    easing: 'easeInOutQuint', // Easing pattern to use
    updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
    callback: function ( toggle, anchor ) {} // Function to run after scrolling
  });
  // Nice scroll
  $("html, .side-menu").niceScroll({
    scrollspeed: 40,
    mousescrollstep: 50,
    smoothscroll: true,
    cursorwidth: "10px",
    cursorborderradius: "5px",
    cursorborder: "none",
    zindex: "9999"
  });


  //ratings
  $(".rateyo").rateYo();

});

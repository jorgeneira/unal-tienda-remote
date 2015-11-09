$(document).ready(function () {

  /* ========================================================================
     Fullscreen burger menu
   ========================================================================== */
  $(".menu-trigger, .mobilenav").click(function () {
    $(".mobilenav").fadeToggle(500);
	  $(".top-menu").toggleClass("top-animate");
	  $(".mid-menu").toggleClass("mid-animate");
	  $(".bottom-menu").toggleClass("bottom-animate");
  });


  /* ========================================================================
   Header carousel
   ========================================================================== */

  var wow = new WOW({
    mobile: false
  });
  wow.init();

  /* Header Height Control
   ========================================================================== */
  var height = $(window).height();
  if(height<600) {
    height = 600;
  }
  $('header').css({
    'minHeight': 0,
    'maxHeight': 'none',
    'height': height
  });



  /* ========================================================================
     Collapse event
   ========================================================================== */
  $('.panel-collapse').on('shown.bs.collapse', function () {
   $(this).parent().find(".state").html('<strong>-</strong>');
  }).on('hidden.bs.collapse', function () {
    $(this).parent().find(".state").html('<strong>+</strong>');
  });


/* ========================================================================
   Nivo Lightbox
 ========================================================================== */
  $('.portfolio a').nivoLightbox({
    effect: 'fall'
  });


});

/* ========================================================================
  Portfolio Filter
 ========================================================================== */

jQuery(window).load(function() {
  jQuery(document).ready(function($) {
  /* ========================================================================
     On click menu item animate to the section
   ========================================================================== */
  $('.mobilenav li').on('click', function() {
      var target = $(this).data('rel');
      var $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing');
  });
    var container = $('.portfolio-wrapper');

        container.isotope({
            itemSelector: '.portfolio-item',
            animationEngine: 'best-available',
            animationOptions: {
                duration: 200,
                queue: false
            },
            layoutMode: 'fitRows'
        });

        // sort items on button click
        $('.filters a').on( 'click', function() {
          $('.filters a').removeClass('active');
          $(this).addClass('active');
          var filterValue = $(this).attr('data-filter');
          container.isotope({
            filter: filterValue
          });
          setProjects();
          return false;
        });

        function splitColumns() {
            var winWidth = $(window).width(),
                columnNumb = 1;
            if (winWidth > 1200) {
                columnNumb = 4;
            } else if (winWidth > 900) {
                columnNumb = 3;
            } else if (winWidth > 600) {
                columnNumb = 2;
            }
            return columnNumb;
        }

        function setColumns() {
          var winWidth = $(window).width(),
              columnNumb = splitColumns(),
              postWidth = Math.floor(winWidth / columnNumb);

          container.find('.portfolio-item').each(function() {
              $(this).css({
                  width: postWidth + 'px'
              });
          });
        }
        function setProjects() {
            setColumns();
            container.isotope('layout');
        }
        container.imagesLoaded(function() {
            setColumns();
        });
        $(window).bind('resize', function() {
            setProjects();
        });
      setProjects();
  });
});
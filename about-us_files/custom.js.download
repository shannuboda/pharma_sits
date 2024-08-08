$(document).ready(function(){
	$(document).on("click",".menuIcon",function(){
		$(this).toggleClass("change");
	});

	var owl = $('.owl-carousel.type1');
      owl.owlCarousel({
        loop: true,
        nav: false,
        margin: 80,
        dots: false,
        autoplay:true,
        autoplayTimeout:4000,
        // stagePadding: 100, 

        responsive: {
          0: {
            items: 2,
          },
          480: {
            items: 3,
          },
          768: {
            items: 4,
          },
          1200: {
            items: 6
          }
        }
      });

	var owl = $('.owl-carousel.type2');
      owl.owlCarousel({
        loop: true,
        nav: false,
        margin: 80,
        dots: true,
        autoplay:true,
        autoplayTimeout:6000,
        smartSpeed:600,
        // stagePadding: 100, 

        responsive: {
          0: {
            items: 1,
          },
          1200: {
            items: 1
          }
        }
      });

  var owl = $('.owl-carousel.type3');
      owl.owlCarousel({
        loop: true,
        nav: true,
        margin: 80,
        dots: false,
        autoplay:true,
        autoplayTimeout:4000,
        // stagePadding: 100, 

        responsive: {
          0: {
            items: 1,
          },
          480: {
            items: 2,
          },
          768: {
            items: 3,
          },
          1200: {
            items: 4
          }
        }
      });

  $("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  function toggle_top(){
    var scrollTop = $(window).scrollTop();
    if(scrollTop > 300){
        $(".moveToTop").show();
    }
    else{
        $(".moveToTop").hide();
    }
  }
  
  toggle_top();
  $(window).scroll(function(){
      toggle_top();
      sticky_courses();
  });

  /*$(document).on("click",".nav-link", function(){
    $(".toggle_menu_btn").not($(this).children(".toggle_menu_btn")).removeClass("minus");
    $(this).children(".toggle_menu_btn").toggleClass("minus");
    $(".submenu").not($(this).next(".submenu")).slideUp();
    $(this).next(".submenu").slideToggle();
    $('html, body').animate({
        scrollTop: $("body").offset().top + 700
    }, 700);
  })*/

  $(document).on('click', '.nav-item .submenu a', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 25
    }, 700);
  });

  $(document).on('click', '.menuIcon', function () {
    var window_width = $(window).width();
    $(".more_menu").slideToggle(200);
    if (window_width <= 992) {
          $(".menu").slideToggle();
      } 
  });

  $(document).on('click', '.has-sub > a', function(event) {
            event.preventDefault();
            $(this).next("ul").slideToggle();
            $(this).toggleClass("current");
        });

  $(document).on('click', '.pages_tabs .nav-item a', function (event) {
    //event.preventDefault();
    $('html, body').animate({
        scrollTop: $("#tab_parent").offset().top - 160
    }, 700);
  });

  function sticky_courses(){
    var scrollTop = $(window).scrollTop();
      var window_width = $(window).width()
      if (scrollTop > 550 || (window_width < 992 &&  scrollTop > 10) ) {
          $(".sticky_courses").addClass("sticky");
      } else {
          $(".sticky_courses").removeClass("sticky");
      }
  }
    
  setInterval(function(){ 
     //var videoTime = $(".bpt_video").currentTime;
     
     var videoTime = document.getElementById("bpt_video1");
     console.log(videoTime.currentTime);
     
     if(videoTime.currentTime > 6){
         $(".video_caption").show();
     }
     else{
         $(".video_caption").hide();
     }
     
  }, 100);    
    
    
    
});
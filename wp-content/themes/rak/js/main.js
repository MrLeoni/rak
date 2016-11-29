$(document).ready(function() {
  
  // Parallax Efect
  $('.parallax').each(function(){
		var $obj = $(this);
		var windowWidth = $(window).width();
		
		// Don't apply this efect on mobile devices or devices with screen smaller than 1200px
		if( windowWidth < 1200 ) {
			  		
			// Empty
			
		} else {
			  	  
			$(window).scroll(function() {
        var yPos = -($(window).scrollTop() / $obj.data('speed')); 
        var bgpos = '50% '+ yPos + 'px';
        $obj.css('background-position', bgpos );
      });
			  	  
		}
  });
  
  // Mobile, open and close main-nav
  $(".nav-btn").click(function() {
    // Variables
    var nav = $(".nav-wrapper");
    var btn = $(this);
    var btnIcon = $(".nav-btn i");
    var getNavLeft = nav.css("left");
    
    // If nav is expanded, close
    // If is close, expand
    if(getNavLeft === "0px") {
      nav.css("left", "-217px");
      // Move button back to position and change chevron direction
      btn.removeClass("active-btn").css("left", "10px");
      btnIcon.addClass("fa-chevron-right").removeClass("fa-chevron-left");
    } else {
      nav.css("left", "0px");
      // Move button to clear the nav and change chevron direction
      btn.addClass("active-btn").css("left", "230px");
      btnIcon.addClass("fa-chevron-left").removeClass("fa-chevron-right");
    }
    
    /* Yeah, i know, not the best way to do this, but it works! */
  });
  
  //About posts
  $(".about-post-title").click(function() {
    
    // Variables
    var button = $(this).attr("data-title");
    var target = $("#"+button);
    
    // Hide & Show content
    $(".about-post-content").fadeOut(200);
    target.fadeIn(500);
    
    // Toggle between class
    $(".about-post-title").removeClass('active');
    $(this).addClass('active');
    
  });
  
  // Make a function to get a element css heihgt and using it to clear another element
  function alignAboutPost() {
    var height = $(".about-post-title").css("height");
    $(".about-post-content").css("top", height);
  }
  // Call the function
  alignAboutPost();
    
  
  // About Slider
  $(".about-slider").bxSlider({
    controls: false,
    mode: "fade",
    auto: true,
    pause: 5000,
    speed: 600,
    autoHover: true,
    adaptiveHeight: true
  });
  
});
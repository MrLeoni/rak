$(document).ready(function() {
  
  // Parallax Efect
  $('.parallax').each(function(){
  	var $obj = $(this);
  	$(window).scroll(function() {
  		var yPos = -($(window).scrollTop() / $obj.data('speed')); 
  		var bgpos = '50% '+ yPos + 'px';
  		$obj.css('background-position', bgpos );
  	}); 
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
  
});
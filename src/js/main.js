jQuery(function($) {
  $(window).scroll(function() {

  	var yPos = ( $(window).scrollTop()  );
  	if (yPos > 200) {
  		$('nav.front-page').addClass('background');
  	} else {
  		$('nav.front-page').removeClass('background');
  	}
  });
});

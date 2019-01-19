$(function() {
	$('a[href^="#"]').click(function() {
		var target = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(target).offset().top
		}, 500);
	});
});

$(document).ready(function(){
  $(".owl-carousel").owlCarousel( {
  	loop: true,
  	items: 1,
  });
});
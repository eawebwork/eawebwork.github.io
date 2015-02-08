var istouch = ( !! ('ontouchstart' in window)) ? 'touchstart' : 'click';
$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
	$('.menu_hide').on(istouch, function(e){
		e.preventDefault();
		$('.header_nav').slideToggle();
	})
	$('.slide_menu_field_title').on(istouch, function(e){
		e.preventDefault();
		$(this).parent().toggleClass('close');
		$(this).next('.side_menu_field_content').slideToggle();
	})
});
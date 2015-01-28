$(function() {
	var hideNavMenu = '.nav-hide-menu',
		hideNavTrigger = $(hideNavMenu + '__trigger'),
		body = $('body'),
		slider = '.slider',
		sliderItem = $(slider + '__item'),
		sliderImageArr = $('[data-img]').find('img:visible'),
		sliderLink = $(slider).find('.nav__link'),
		i = 0,
		slideShow,
		articleTrigger = $('.article__trigger'),
		articleTab = $('.article__tab');

	$(hideNavTrigger).on('click', function() {
		$(hideNavMenu).slideToggle(200);
	})

	$('[data-img = 0]').fadeIn();

	$(window).on('resize', function() {
		if(body.width() > 945) {
			stableImage();
		} else {
			sliderImageArr.each(function() {
				$(this).css({
					marginLeft: 0
				})
			})
		}
	})
	if(body.width() > 945) {
		stableImage();
	} else {
		sliderImageArr.each(function() {
			$(this).css({
				marginLeft: 0
			})
		})
	}

	function stableImage() {
		var widthImg = sliderImageArr.width()

		sliderImageArr.each(function() {
			$(this).css({
				marginLeft: -(widthImg/2) + 'px',
				position: 'absolute',
				left: '50%'
			})
		})
	}

	sliderLink.on('click', function(e) {
		e.preventDefault();
		$('[data-img]').fadeOut();
		$('[data-img=' + $(this).parent().index() + ']').fadeIn();
	})

	setInterval(function() {
		i++;
		if(i > 4) {
			i = 0;
		}
		$('[data-img]').fadeOut();
		$('[data-img=' + i + ']').fadeIn();
		
	}, 5000)
	articleTrigger.on('click', function(){
		articleTrigger.removeClass('active');
		articleTab.removeClass('active');
		$(this).addClass('active');
		$('[data-count = '+$(this).index()+']').addClass('active');
	})
	$('.footer .nav-hide-menu__trigger').on('click', function() {
		$("html, body").animate({ scrollTop: $(document).height() }, 1000);
	})

})
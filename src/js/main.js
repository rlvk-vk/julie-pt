$(document).ready(() => {
	menuHandler()
	scrollHandler()
	lazyloader()
	dialogHandler()
});

const menuHandler = () => {
	$('#toggle-menu').on('click', function(){
		$('#overlay').fadeToggle()
		$('header').toggleClass('toggled')
		$('header nav').toggle()

		const menuLinks = $(this).next().find('li')

		menuLinks.each(function(i) {
			setTimeout(() => {
				$(this).toggleClass('showing')
			}, i * 50)
		})
	})
}

const scrollHandler = () => {
	const headerHandler = () => {
		let currentScroll = $(document).scrollTop()
		const body = $('body')

		if(currentScroll > 60){
			if(!body.hasClass('scrolled')){
				body.addClass('scrolled')
			}
		} else {
			if(body.hasClass('scrolled')){
				body.removeClass('scrolled')
			}
		}
	}
	headerHandler()

	$(document).on('scroll', () => {
		headerHandler()
	})
}

const lazyloader = () => {
	const handler = () => {
		const viewport = {
			top: $(document).scrollTop() - ($(document).scrollTop() * 0.1),
			bottom: $(window).height() + $(document).scrollTop() + (($(window).height() + $(document).scrollTop()) * 0.1)
		}

		const images = $('.lazyload')

		images.each(function(){
			const position = {
				top: $(this).offset().top,
				bottom: $(this).offset().top + $(this).height()
			}

			if (((position.top <= viewport.bottom && position.top >= viewport.top) || (position.bottom >= viewport.top && position.bottom <= viewport.bottom)) && !$(this).hasClass('loaded')){
				const src = $(this).data('src')

				$(this).css('background-image', 'url("' + src + '")')
				$(this).addClass('lazyloaded').removeClass('lazyload')
			}
		})
	}
	
	handler()

	$(window).on('resize', () => {
		handler()
	})

	$(document).on('scroll', () => {
		handler()
	})
}

const dialogHandler = () => {
	$('.dialog i').on('click', function(){
		$(this).parent().fadeOut()
	})
}
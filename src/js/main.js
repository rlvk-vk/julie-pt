$(document).ready(() => {
	menuHandler()
	scrollHandler()
});

const menuHandler = () => {
	$('#toggle-menu').on('click', function() {
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
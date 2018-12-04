$(document).ready(() => {
	menuHandler()
});

const menuHandler = () => {
	$('#toggle-menu').on('click', function() {
		$('#overlay').fadeToggle()
		$('header').toggleClass('toggled')
		$('header nav').toggle()

		const menuLinks = $(this).next().find('li')

		menuLinks.each(function(i) {
			setTimeout(() => {
				$(this).css('right', '0')
			}, i * 100)
		})
	})
}
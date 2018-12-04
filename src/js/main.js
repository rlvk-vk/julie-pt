$(document).ready(() => {
	menuHandler()
});

const menuHandler = () => {
	$('#toggle-menu').on('click', function() {
		$('#overlay').fadeToggle()
		$('header').toggleClass('toggled')

		console.log($(this).find('li'))
	})
}
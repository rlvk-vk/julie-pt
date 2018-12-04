$(document).ready(() => {
	menuHandler()
});

const menuHandler = () => {
	$('#toggle-menu').on('click', function() {
		console.log($(this))
	});
}
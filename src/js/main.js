$(document).ready(() => {
	menuHandler()
});

const menuHandler = () => {
	$('#toggle-menu').on('click', () => {
		console.log($(this))
	});
}
$(document).ready(function () {
	$('.menu-toggle').on('click', function () {
		$(this).toggleClass('active');
		$('.nav').fadeToggle();
	})
});
$(document).ready(function () {
	$('a.slide_sekcia').on('click', function(e) {
		let cil = $(this).attr('href');
		let menu = $('#osobny_trener');
		let rychlost =  2* 1000;
		efekt = "easeInOutExpo";

		$("html, body").stop().animate(
			{ scrollTop: $(cil).offset().top - menu.height() },
			rychlost, efekt);

		e.preventDefault();
	});

});


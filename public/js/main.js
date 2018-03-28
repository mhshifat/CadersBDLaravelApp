$(document).ready(function () {

	$(".middle-profile-logo-box").click(function () {

		$(".profile-link-box").toggleClass('open', 700);

	});

	$(".message-icon").click(function () {

		$(".message-box-link-box").toggleClass("open_1", 700);

	});

	$("#dropdown-click").click(function () {

		$("#dropdown-toggle").toggle('slow');

	});

	$("#dropdown-click-2").click(function () {

		$("#dropdown-toggle-2").toggle('slow');

	});

	$("#dropdown-click-3").click(function () {

		$("#dropdown-toggle-3").toggle('slow');

	});

	$("#hamburger-icon").click(function () {

		$("#leftNavbar").toggleClass("open_2", 700);

	})

	$("#main").click(function () {

		$("#leftNavbar").removeClass("open_2", 700);

	});

});


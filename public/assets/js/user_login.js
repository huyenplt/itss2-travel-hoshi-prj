$(document).ready(function(){
	const signUpButton = $('#signUp');
	const signInButton = $('#signIn');
	const container = $('#container');

	$("sign-up-container").css("animation", "show 0.6s");

	signUpButton.click(() => {
		container.addClass("right-panel-active");
		$('.sign-in-container input').prop('disabled', true);
		$('.sign-up-container input').prop('disabled', false);
	});

	signInButton.click(() => {
		container.removeClass("right-panel-active");
		$('.sign-in-container input').prop('disabled', false);
		$('.sign-up-container input').prop('disabled', true);
	});
});
$(function () {
	$('form.user button').click(function() {
		fetch('/login', {
			method:'POST',
			headers: {'Authorization': 'Basic ' + btoa($('#usernameInput').val() + ':' + $('#passwordInput').val())},
			credentials: 'include',
		}).then(() => location.href = '/');

		return false;
	});
});
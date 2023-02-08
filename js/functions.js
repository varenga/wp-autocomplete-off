function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
	
document.addEventListener('DOMContentLoaded', function () {
	document.getElementById( "user_login" ).autocomplete = "nope"+getRandomInt(1000, 9999);
	document.getElementById( "user_pass" ).autocomplete = "nope"+getRandomInt(1000, 9999);
	document.getElementById( "loginform" ).autocomplete = "off";
}, false);
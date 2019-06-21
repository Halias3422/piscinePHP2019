$(document).ready(function() {
	console.log("bonjouuuuur");
});

$('#foorm').click(function() {
	$.Prompt("new to-do: ", "");
	var entry = prompt("new to-do: ", "");
	if (entry == "" || entry == null)
		return ;
});

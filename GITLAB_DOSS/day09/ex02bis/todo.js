$(document).ready(function() {
	var cook = document.cookie.split(";");
	if (cook == "")
		return ;
		for (i = 0; i < cook.length; i++)
	{
		var value = cook[i].split("=");
		console.log(value[1]);
		var child_nb = $('#ft_list').children().length - 1;
	$('<div>', {
		id: 'baby_div'+child_nb,
		class: 'baby',
		text: value[1],
	}).prependTo('#ft_list');
	document.cookie = "baby_div"+child_nb+"="+value[1];
	}
});

$(document).on('click', '#new', function() {
	var todo = prompt("new todo: ");
	var child_nb = $('#ft_list').children().length - 1;
		if (todo == "" || todo == null)
			return;
		else {
	$('<div>', {
		id: 'baby_div'+child_nb,
		class: 'baby',
		text: todo,
	}).prependTo('#ft_list');
}
	document.cookie = "baby_div"+child_nb+"="+todo;
});

$(document).on('click', '.baby', function() {
	if (!confirm("Are you sure you want to delete this task ?"))
		return ;
	$('#'+this.id).remove();
	document.cookie = this.id+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
});



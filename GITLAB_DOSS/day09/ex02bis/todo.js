$(document).ready(function() {
	var cook = document.cookie.split(";");
	if (cook == "")
		return ;
	var len = cook.length;
	console.log("len = "+len);

		for (i = 0; i < len; i++)
	{
		var value = cook[i].split("=");
		document.cookie = value[0]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
		document.cookie = "baby_div"+i+"="+value[1];
		var name = 'baby_div'+i;
		console.log("baby_div = "+name);
	$('<div>', {
		id: 'baby_div'+i,
		class: 'baby',
		text: value[1],
	}).prependTo('#ft_list');
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



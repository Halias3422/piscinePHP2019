function PromptMessage()
{
	var entry = prompt("new to-do: ", "");
	if (entry == "" || entry == null)
		return;
	var mother = document.getElementById("ft_list");
	var nb_nodes = mother.childElementCount - 1;
	var new_div = document.createElement("div");
	new_div.setAttribute("onclick", "delete_node(this.id, this)");
	new_div.setAttribute("id", "child"+nb_nodes);
	new_div.appendChild(document.createTextNode(entry));
	mother.insertBefore(new_div, mother.childNodes[0]);
	console.log("nb_nodes = "+ nb_nodes);
	document.cookie = "child"+nb_nodes+"="+entry;
	var cook = document.cookie;
}

function delete_node(id, object)
{
	if (!confirm("Are you sure you want to delete this task ?"))
		return;
	document.cookie = id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	object.parentNode.removeChild(object);
	console.log("deleting node");
}

function Onload_cookie(cook)
{
	var mother = document.getElementById("ft_list");
	var nb_nodes = mother.childElementCount - 1;
	var new_div = document.createElement("div");
	new_div.setAttribute("onclick", "delete_node(this.id, this)");
	new_div.setAttribute("id", "child"+nb_nodes);
	var value = cook.split("=");
	document.cookie = value[0]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	document.cookie = "child"+nb_nodes+"="+value[1];
	new_div.appendChild(document.createTextNode(value[1]));
	mother.insertBefore(new_div, mother.childNodes[0]);
	console.log("nb_nodes = "+ nb_nodes);
	var cook = document.cookie;
}

function getCookies()
{
	var cook = document.cookie.split(";");
	console.log(cook.length);
	var i = 0;
	if (cook == "")
		return;
	for (i = 0; i < cook.length; i++)
	{
		console.log(cook[i]);
		Onload_cookie(cook[i]);
	}
}


function PromptMessage()
{
	var entry = prompt("new to-do: ", "");
	if (entry == "" || entry == null)
		return;
	console.log("entry="+entry);
	var new_div = document.createElement("div");
	new_div.setAttribute("onclick", "delete_node(this, entry)");
	new_div.setAttribute("class", "baby_div");
	new_div.appendChild(document.createTextNode(entry));
	var mother = document.getElementById("ft_list");
	mother.insertBefore(new_div, mother.childNodes[0]);
	var nb_nodes = mother.childElementCount - 1;
	console.log("nb_nodes = "+ nb_nodes);
	document.cookie = "cookie["+nb_nodes+"]="+entry;
	var cook = document.cookie;

}

function delete_node(name, entry)
{
	console.log(name);
	console.log(entry);
	name.parentNode.removeChild(name);
	array = name.split(">");
	print(array);
	document.cookie = name+"; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	console.log("deleting node");
}

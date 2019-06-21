function PromptMessage()
{
	var entry = prompt("new to-do: ", "Enter text");
	console.log(entry);
	var new_div = document.createElement("div");
	new_div.setAttribute("onclick", "delete_node(this)");
	new_div.appendChild(document.createTextNode(entry));
	var mother = document.getElementById("ft_list");
	mother.insertBefore(new_div, mother.childNodes[0]);
}

function delete_node(name)
{
	console.log(name);
	name.parentNode.removeChild(name);
console.log("deleting node");
}

<?php

if (file_exists("../htdocs/") === FALSE)
	mkdir("../htdocs");

function find_already_existing_account($res)
{
	foreach ($res as $tmp => $value)
	{
		if ($value['login'] === $_POST['login'])
			return (0);
	}
	return (1);
}

function merge_passwd()
{
	$poulet = file_get_contents("../htdocs/private/passwd");
	$res = unserialize($poulet);
	if (find_already_existing_account($res) == 0)
	{
		echo "ERROR\n";
		exit;
	}
	else
	{
		$res[] = array("login" => $_POST['login'], "passwd" => hash('whirlpool', $_POST['passwd']));
		file_put_contents("../htdocs/private/passwd", serialize($res));
	}
}

if ($_POST && $_POST['submit'] == "OK")
{
	if (!$_POST['login'] || !$_POST['passwd'])
	{
		echo "ERROR\n";
		exit;
	}
	if (file_exists("../htdocs/private") === FALSE)
		mkdir("../htdocs/private");
	else if (file_exists("../htdocs/private/passwd") === TRUE)
	{
		merge_passwd();
	}
	else
	{
		$res[] = array("login" => $_POST['login'], "passwd" => hash('whirlpool', $_POST['passwd']));
		file_put_contents("../htdocs/private/passwd", serialize($res));
	}
}
else
{
	echo "ERROR\n";
	exit;
}
echo "OK\n";
?>

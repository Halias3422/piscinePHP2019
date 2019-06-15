<?php

if (file_exists("../htdocs/") === FALSE)
	mkdir("../htdocs");

function error()
{
	echo "ERROR\n";
	exit;
}

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
		error();
	else
	{
		$res[] = array("login" => $_POST['login'], "passwd" => hash('whirlpool', $_POST['passwd']));
		file_put_contents("../htdocs/private/passwd", serialize($res));
	}
}

function find_already_existing_account_and_passwd($res)
{
	$i = 0;
	foreach ($res as $tmp => $value)
	{
		if ($value['login'] === $_POST['login'] && $value['passwd'] === hash('whirlpool', $_POST['oldpw']))
		{
			$res[$tmp]['passwd'] = hash('whirlpool', $_POST['newpw']);
			$i++;
		}

	}
	if ($i == 1)
		return $res;
	error();
}

function change_passwd()
{
	$poulet = file_get_contents("../htdocs/private/passwd");
	$res = unserialize($poulet);
	$res = find_already_existing_account_and_passwd($res);
	file_put_contents("../htdocs/private/passwd", serialize($res));
}

if ($_POST && isset($_POST['submit']) && $_POST['submit'] == "OK")
{
	if (isset($_POST['login']) == 0)
		error();
	if (file_exists("../htdocs/private") === FALSE)
		mkdir("../htdocs/private");
	else if (file_exists("../htdocs/private/passwd") === TRUE)
	{
		if (isset($_POST['passwd']) && isset($_POST['oldpw']) == 0 && isset($_POST['newpw']) == 0)
			merge_passwd();
		else if (isset($_POST['oldpw']) && isset($_POST['newpw']) && isset($_POST['passwd']) == 0)
			change_passwd();
		else
			error();
	}
	else if (isset($_POST['passwd']) && isset($_POST['oldpw']) == 0 && isset($_POST['newpw']) == 0)
	{
			$res[] = array("login" => $_POST['login'], "passwd" => hash('whirlpool', $_POST['passwd']));
			file_put_contents("../htdocs/private/passwd", serialize($res));
	}
	else
		error();
}
else
	error();
echo "OK\n";
?>

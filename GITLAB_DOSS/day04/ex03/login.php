<?php
include ('auth.php');
if ($_GET && isset($_GET['login']) && isset($_GET['passwd']))
{
	$login = $_GET['login'];
	$passwd = $_GET['passwd'];
	session_start();
	if (auth($login, $passwd) === TRUE)
	{
		$_SESSION['loggued_on_user'] = $login;
		echo "OK\n";
	}
	else
	{
		echo "ERROR\n";
		$_SESSION['loggued_on_user'] = "";
	}
}
?>

<?php
session_start();
	echo "<html><body>\n";
	echo '<form action="./index.php">'."\n";
	if ($_GET && $_GET['login'] && $_GET['submit'] == "OK")
	{
		echo '   Identifiant: <input name="login" value="'.$_GET['login'].'" />'."\n";
		$_SESSION['login']=$_GET['login'];
	}
	else if ($_SESSION && isset($_SESSION['login']))
		echo '   Identifiant: <input name="login" value="'.$_SESSION['login'].'" />'."\n";
	else
		echo '   Identifiant: <input name="login" value="" />'."\n";
	echo '   <br />'."\n";
	if ($_GET && $_GET['passwd'] && $_GET['submit'] == "OK")
	{
		echo '   Mot de passe: <input name="passwd" value="'.$_GET['passwd'].'" />'."\n";
		$_SESSION['passwd'] = $_GET['passwd'];
	}
	else if ($_SESSION && isset($_SESSION['passwd']))
		echo '   Mot de passe: <input name="passwd" value="'.$_SESSION['passwd'].'" />'."\n";
	else
		echo '   Mot de passe: <input name="passwd" value="" />'."\n";
	echo '  <input type="submit" name="submit" value="OK" />'."\n";
	echo '</form>'."\n";
	echo '</body></html>'."\n";
?>

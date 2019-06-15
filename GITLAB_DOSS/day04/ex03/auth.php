<?php

function auth($login, $passwd)
{
	$file = file_get_contents("../htdocs/private/passwd");
	if ($file === FALSE)
	{
		echo "ERROR\n";
		exit;
	}
	$file = unserialize($file);
	foreach ($file as $key => $value)
	{
		if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $passwd))
			return (TRUE);
	}
	return (FALSE);
}

?>

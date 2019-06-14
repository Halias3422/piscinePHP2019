<?php
if ($_GET)
{
	foreach ($_GET as $name => $value)
		setcookie($name, $value, time() + 3600);
}
if ($_COOKIE)
{
	foreach ($_COOKIE as $cookie => $cookie_value)
	{
		$i = 0;
		foreach ($_GET as $get => $get_value)
		{
			if ($cookie == $get)
				$i = 1;
		}
		if ($i == 0)
		{
			echo "$cookie_value\n";
			setcookie($cookie, "$cookie_value", time() - 3600);
		}
	}
}
?>

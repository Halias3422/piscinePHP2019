#!/usr/bin/php
<?PHP
while (1)
{
	echo "Entrez un nombre: ";
	$stdin = fopen("php://stdin", "r");
	$res = fgets($stdin);
	if ($res == NULL)
	{
		echo "^D\n";
		exit (0);
	}
	$str = explode("\n", $res);
	if (is_numeric($str[0]) == true)
	{
		if ($str[0] % 2 == 0)
			echo "Le chiffre $str[0] est Pair\n";
		else
			echo "Le chiffre $str[0] est Impair\n";
	}
	else
		echo "'$str[0]' n'est pas un chiffre\n";
	fclose($stdin);
}
?>

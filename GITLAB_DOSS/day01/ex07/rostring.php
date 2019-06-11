#!/usr/bin/php
<?PHP
if ($argv[1])
{
	$i = 1;
	$tab = preg_split('/\s+/', $argv[1], -1, PREG_SPLIT_NO_EMPTY);
	while ($tab[$i])
	{
		echo $tab[$i];
		echo " ";
		$i++;
	}
	echo $tab[0];
	echo "\n";
}
?>

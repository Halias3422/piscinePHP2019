#!/usr/bin/php
<?PHP
$i = 0;
if ($argv[1])
{
	$tab = preg_split('/\s+/', $argv[1], -1, PREG_SPLIT_NO_EMPTY);
	while ($tab[$i])
	{
		echo $tab[$i];
		if ($tab[$i + 1])
			echo " ";
		$i++;
	}
	echo "\n";
}
?>

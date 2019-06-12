#!/usr/bin/php
<?PHP
if ($argc < 3)
	exit (0);
$key = str_replace(" ", "", $argv[1]);
$i = 2;
while ($argv[$i])
{
	$tab = explode(':', $argv[$i]);
	$final_tab[$tab[0]] = $tab[1];
	$i++;
}
if ($final_tab[$key])
	echo $final_tab[$key]."\n";
?>

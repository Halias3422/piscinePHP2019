#!/usr/bin/php
<?PHP
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	exit (0);
}
$nb1 = preg_split('/\s+/', $argv[1], -1, PREG_SPLIT_NO_EMPTY);
$op = preg_split('/\s+/', $argv[2], -1, PREG_SPLIT_NO_EMPTY);
$nb2 = preg_split('/\s+/', $argv[3], -1, PREG_SPLIT_NO_EMPTY);

if ($op[0] == '+')
	echo $nb1[0] + $nb2[0];
if ($op[0] == '-')
	echo $nb1[0] - $nb2[0];
if ($op[0] == '*')
	echo $nb1[0] * $nb2[0];
if ($op[0] == '/')
	echo $nb1[0] / $nb2[0];
if ($op[0] == '%')
	echo $nb1[0] % $nb2[0];
echo "\n";
?>

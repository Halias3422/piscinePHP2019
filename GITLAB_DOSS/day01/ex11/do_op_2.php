#!/usr/bin/php
<?PHP

function get_new_str($str)
{
	$i = 0;
	$j = strlen($str);
	while ($i < strlen($str) && $str[$i] == ' ')
		$i++;
	while (j > 0 && $str[$j] == ' ')
		$j--;
	while ($i < $j)
	{
		$new_str = $new_str.$str[$i];
		$i++;
	}
	return ($new_str);
}

	$i = 0;
	while ($str[$i] >= '0' && $str[$i] <= '9')
		$nb1 = $nb1.$str[$i];

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit (0);
}

$str = get_new_str($argv[1]);
$i = 0;
if ($str[$i] && $str[$i] == '-')
{
	$nb1 = $str[$i];
	$i++;
}

while ($str[$i] != '\0' && $str[$i] >= '0' && $str[$i] <= '9')
{
	$nb1 = $nb1.$str[$i];
	$i++;
}
while ($i < strlen($str) && $str[$i] == ' ')
	$i++;
if ($str[$i] && ($str[$i] == '+' || $str[$i] == '-'|| $str[$i] == '/' || $str[$i] == '*' || $str[$i] == '%'))
	$op = $str[$i];
else
{
	echo "Syntax Error\n";
	exit (0);
}
$i++;
while ($i < strlen($str) && $str[$i] == ' ')
	$i++;
if ($str[$i] && $str[$i] == '-')
{
	$nb2 = $str[$i];
	$i++;
}
while ($str[$i] != '\0' && $str[$i] >= '0' && $str[$i] <= '9')
{
	$nb2 = $nb2.$str[$i];
	$i++;
}
if ($i < strlen($str) || $nb1 == NULL || $nb2 == NULL)
{
	echo "Syntax Error\n";
	exit (0);
}
if ($op == '+')
	echo $nb1 + $nb2."\n";
else if ($op == '-')
	echo $nb1 - $nb2."\n";
else if ($op == '/' && $nb2 != 0)
	echo $nb1 / $nb2."\n";
else if ($op == '%' && $nb2 != 0)
	echo $nb1 % $nb2."\n";
else if ($op == '*')
	echo $nb1 * $nb2."\n";
?>

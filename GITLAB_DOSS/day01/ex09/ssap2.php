#!/usr/bin/php
<?PHP

function unsensitive_case($a, $b)
{
	if ((ord($a) - 32 == ord($b)))
		return 0;
	return 1;
}

function ft_strchr($model, $char)
{
	$i = 0;
	while ($model[$i] != '\0')
	{
		if (ord($char) == ord($model[$i]) || (ord($char) >= 65 && ord($char) <= 90 && unsensitive_case($model[$i], $char) == 0))
			return $i;
		$i++;
	}
	return -1;
}

function is_sorted($str1, $str2)
{
	$i = 0;
	$model = "abcdefghijklmnopqrstuvwxyz0123456789 !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while ($str1[$i] && $str2[$i] && ft_strchr($model, $str1[$i]) == ft_strchr($model, $str2[$i]))
		$i++;
	return (ft_strchr($model, $str1[$i]) - ft_strchr($model, $str2[$i]));
}

function cut_av($str)
{
	$tab = preg_split('/\s+/', $str, -1, PREG_SPLIT_NO_EMPTY);
	return ($tab);
}

$i = 1;
$j = 0;
$final_res = array();
$tmp_tab = array();

while ($argv[$i])
{
	$tmp_tab = cut_av($argv[$i]);
	$final_res = array_merge($final_res, $tmp_tab);
	$i++;
}
usort($final_res, is_sorted);
$i = 0;
while ($final_res[$i])
{
	echo "$final_res[$i]\n";
	$i++;
}
?>

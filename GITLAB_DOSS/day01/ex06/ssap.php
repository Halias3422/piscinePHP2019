#!/usr/bin/php
<?PHP

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
sort($final_res);
while ($final_res[$j])
{
	echo $final_res[$j]."\n";
	$j++;
}

?>

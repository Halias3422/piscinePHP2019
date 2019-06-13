#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
$file = fopen("/var/run/utmpx", "r");
$res = array();
while ($utmpx = fread($file, 314))
{
	$tab = unpack("a256host/a4id/a32line/ipid/itype/I2time", $utmpx);
	if ($tab["type"] == 7)
	{
		$date = date("M j H:i", $tab["time1"]);
		$format = $tab["host"]." ".$tab["line"]."  ".$date;
		array_push($res, $format);
	}
}
sort($res);
foreach($res as $elem)
	echo $elem."\n";
?>

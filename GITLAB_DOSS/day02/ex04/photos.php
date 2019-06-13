#!/usr/bin/php
<?php
if ($argc < 2)
	exit (0);
function get_images($tab)
{
	global $url;
	global $mkdir;
if (file_exists($mkdir) === FALSE)
	mkdir($mkdir);
	if ($tab[2][0] === '/')
		$tab[2] = $url.$tab[2];
	$img_content = @file_get_contents($tab[2]);
	$name_img = preg_split('/\/+/', $tab[2], -1, PREG_SPLIT_NO_EMPTY);
	$nb = count($name_img);
	$name_img = $name_img[$nb - 1];
	if (file_exists("$mkdir/$name_img"))
		return ;
	else
	{
		$img_fd = fopen("$mkdir/$name_img", 'w+');
		fwrite($img_fd, $img_content);
		fclose($img_fd);
	}
}

$url = $argv[1];
	$mkdir = preg_split('/^https?:\/\/(www.*)/', $argv[1], -1, PREG_SPLIT_DELIM_CAPTURE);
	$url = "https://".$mkdir[1];
	$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$source = curl_exec($ch);
if ($url[strlen($url) - 1] === '/')
	$url = substr($url, 0, -1);
$mkdir = explode("/", $mkdir[1]);
$mkdir = "./".$mkdir[0];
preg_replace_callback('/(<img.*src=\")([^\"^\?]*)([\"\?])/i', get_images, $source);
curl_close($ch);
?>

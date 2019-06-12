#!/usr/bin/php
<?PHP
function replace_content($tab)
{
	return ($tab[1].strtoupper($tab[2]).$tab[3]);
}
if (file_exists($argv[1]) === FALSE)
	exit (0);
$file = file_get_contents($argv[1]);
$file = preg_replace_callback('/(<a\ href.*>)(.*)(<\/a>)/i', replace_content, $file);
$file = preg_replace_callback('/(<a\ href.*>)(.*)(<.*<\/a>)/i', replace_content, $file);
$file = preg_replace_callback('/(<a\ href.*title=\")([^\"]*)(\")/i', replace_content, $file);
echo $file;
?>

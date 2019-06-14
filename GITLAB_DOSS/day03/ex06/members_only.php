<?PHP
if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
{
	echo "<html><body>\nBonjour Zaz<br />\n";
	$encoded_img = base64_encode(file_get_contents("../img/42.png"));
	echo "<img src='data:image/png;base64,$encoded_img'>\n</body></html>\n";
}
else
{
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	header('WWW-Authenticate: Basic');
	header('HTTP/1.0 401 Unauthorized');
}
?>

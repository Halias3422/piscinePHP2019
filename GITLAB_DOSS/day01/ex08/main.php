#!/usr/bin/php
<?PHP
include("ft_is_sort.php");

$tab = array("aaa", "bbbbb", "ccccc");
$tab[] = "et qu’est-ce qu’on fait maintenant ?";
print_r($tab);
if (ft_is_sort($tab))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";
?>

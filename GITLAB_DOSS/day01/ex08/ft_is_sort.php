<?PHP
function ft_is_sort($tab)
{
	$new_tab = $tab;
	sort($tab);
	if ($new_tab === $tab)
		return (true);
	else
		return (false);
}
?>

<?PHP

function ft_is_sort($tab)
{
	$tmp = ($tab);
	sort($tmp);
	$ret = array_diff_assoc($tmp, $tab);
	print_r($ret);
	if ($ret)
		return (FALSE);
	else
		return (TRUE);
}

?>

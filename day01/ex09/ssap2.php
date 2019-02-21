#!/usr/bin/PHP
<?PHP

function ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	return($tab);
}

unset($argv[0]);
foreach($argv as $elem)
	$str .=$elem." ";
$tab = ft_split($str);
foreach($tab as $elem)
{
	if (is_numeric($elem))
		$num_str .= $elem ." ";
	else if (ctype_alpha($elem))
		$alpha_str .= $elem ." ";
	else
		$other_str .= $elem ." ";
}
$alpha = ft_split($alpha_str);
$num = ft_split($num_str);
$other = ft_split($other_str);
sort($num, SORT_STRING);
sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);
sort($other);
foreach($alpha as $elem)
	echo $elem."\n";
foreach($num as $elem)
	echo $elem."\n";
foreach($other as $elem)
	echo $elem."\n";

?>

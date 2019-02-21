#!/usr/bin/PHP
<?PHP

function ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	sort($tab);
	return($tab);
}
unset($argv[0]);
foreach($argv as $elem)
	$str .=$elem." ";
$ret = ft_split($str);
$i = 0;
while ($i < count($ret))
{
	echo $ret[$i]."\n";
	$i++;
}
?>

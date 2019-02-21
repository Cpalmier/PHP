#!/usr/bin/PHP
<?PHP

function ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	return($tab);
}

if ($argc > 1)
{
	$tab = ft_split($argv[1]);
	$i = 0;
	foreach($tab as $elem)
	{
		if ($i != 0)
			echo $elem." ";
		$i++;
	}
	echo $tab[0]."\n";
}
?>

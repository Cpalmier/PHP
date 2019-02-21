#!/usr/bin/PHP
<?PHP

$src = file_get_contents($argv[1]);

$tab = explode("title=", $src);
$i = 1;
while ($i < count($tab))
{
	$y = 1;
	while ($tab[$i][$y] != '"' && $tab[$i][$y])
	{
		$tab[$i][$y] = strtoupper($tab[$i][$y]);
		$y++;
	}
	$i++;
}
$src = implode("title=", $tab);

$tab = explode("<a", $src);
$i = 1;
while ($i < count($tab))
{
	$y = 1;
	while ($tab[$i][$y])
	{
		while ($tab[$i][$y] != '>' && $tab[$i][$y])
			$y++;
		while ($tab[$i][$y] != '<' && $tab[$i][$y])
		{
				$tab[$i][$y] = strtoupper($tab[$i][$y]);
				$y++;
		}
		$y++;
	}
	$i++;
}
$src = implode("<a", $tab);
echo $src;

?>

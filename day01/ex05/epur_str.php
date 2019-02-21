#!/usr/bin/PHP
<?PHP
if ($argc != 2)
	exit;
$tab = array_filter(explode(" ",$argv[1]));
foreach($tab as $elem)
{
	$str .=$elem." ";
}
echo trim($str, " ");
echo "\n";
?>

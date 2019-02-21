#!/usr/bin/PHP
<?PHP

if ($argc < 2)
	exit;
$tab = array_filter(explode("\t", $argv[1]));
foreach($tab as $elem)
	$str .=$elem." ";
$tab = array_filter(explode(" ",$str));
foreach($tab as $elem)
	$ret .=$elem." ";
echo trim($ret, " ");
echo "\n";

?>

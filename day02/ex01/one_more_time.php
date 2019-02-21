#!/usr/bin/PHP
<?PHP

function error()
{
	echo "Wrong Format\n";
	exit;
}

date_default_timezone_set('Europe/Paris');

$tab = explode(" ", $argv[1]);
if (count($tab) != 5)
	error();

$nb = preg_match("/[Ll]undi/", $tab[0]);
$nb += preg_match("/[Mm]ardi/", $tab[0]);
$nb += preg_match("/[Mm]ercredi/", $tab[0]);
$nb += preg_match("/[Jj]eudi/", $tab[0]);
$nb += preg_match("/[Vv]endredi/", $tab[0]);
$nb += preg_match("/[Ss]amedi/", $tab[0]);
$nb += preg_match("/[Dd]imanche/", $tab[0]);
if ($nb != 1)
	error();

$month = 0;
$nb = preg_match("/[Jj]anvier/", $tab[2]);
if (($nb) == 1)
	$month = 1;
$nb = preg_match("/[Ff]evrier/", $tab[2]);
if (($nb) == 1)
	$month = 2;
$nb = preg_match("/[Mm]ars/", $tab[2]);
if (($nb) == 1)
	$month = 3;
$nb = preg_match("/[Aa]vril/", $tab[2]);
if (($nb) == 1)
	$month = 4;
$nb = preg_match("/[Mm]ai/", $tab[2]);
if (($nb) == 1)
	$month = 5;
$nb = preg_match("/[Jj]uin/", $tab[2]);
if (($nb) == 1)
	$month = 6;
$nb = preg_match("/[Jj]uillet/", $tab[2]);
if (($nb) == 1)
	$month = 7;
$nb = preg_match("/[Aa]out/", $tab[2]);
if (($nb) == 1)
	$month = 8;
$nb = preg_match("/[Ss]eptembre/", $tab[2]);
if (($nb) == 1)
	$month = 9;
$nb = preg_match("/[Oo]ctobre/", $tab[2]);
if (($nb) == 1)
	$month = 10;
$nb = preg_match("/[Nn]ovembre/", $tab[2]);
if (($nb) == 1)
	$month = 11;
$nb = preg_match("/[Dd]ecembre/", $tab[2]);
if (($nb) == 1)
	$month = 12;
if ($month == 0)
	error();

$time = explode(":", $tab[4]);
if (count($time) != 3)
	error();

if (ctype_digit($tab[1]) == False || ctype_digit($tab[3]) == False
	|| ctype_digit($time[0]) == False || ctype_digit($time[1]) == False
	|| ctype_digit($time[2]) == False)
	error();

if ((int)$tab[1] < 1 || (int)$tab[1] > 31)
	error();
if (((int)$time[0] > 23) || ((int)$time[1] > 60) || ((int)$time[2] > 60))
	error();
if ((strlen($tab[3]) != 4) || (strlen($time[0]) + strlen($time[1]) + strlen($time[2]) != 6))
	error();

echo mktime($time[0], $time[1], $time[2], $month, $tab[1], $tab[3]). "\n";

?>

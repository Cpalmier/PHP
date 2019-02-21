#!/usr/bin/PHP
<?PHP

while (1)
{
	echo "Entrez un nombre: ";
	$entree = trim(fgets(STDIN));

	if (feof(STDIN))
	{
		echo "^D\n";
		exit;
	}
	if (!is_numeric($entree))
		echo "'$entree' n'est pas un chiffre\n";
	else
	{
		if (($entree % 2) == 0)
			$answer = "Pair";
		else
			$answer = "Impair";
		echo "Le chiffre $entree est $answer\n";
	}
}

?>

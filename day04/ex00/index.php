#!/usr/bin/PHP
<?PHP

session_start();
if (($_GET) && ($_GET['login']) && ($_GET['passwd']) && ($_GET['submit'] === "OK"))
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
?>

<html>
<head>

</head>
<body>
<form method="get" action="index.php">
Identifiant: <input type="text" name="login" value="<?PHP echo htmlspecialchars($_GET['login']); ?>" />
</br>
Mot de passe: <input type="password" name="passwd" value="<?PHP htmlspecialchars($_GET['passwd']); ?>" />
<input type="submit" name="submit" value="OK" />
</form>
</body></html>

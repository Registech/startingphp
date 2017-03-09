<?php
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['SERVER_ADDR'];
echo $_SERVER['HTTP_USER_AGENT'];

session_start();
echo 'Quelle sont sont tes infos ?';
$_SESSION['Nom'] = 'tech';
$_SESSION['Prenom'] = 'Regis';
$_SESSION['Age'] = '42';
echo '<br /><a href="superglobal2.php">Superglobal2</a>';

$value = 'Cookie';
setcookie("Pseudo", $value,time() - 3600);
setcookie("Mot_de_passe", $value,time() - 3600); 
?>



<!DOCTYPE html>
<html>
		<head>
				<title>Serveur Fesse</title>
		</head>
	<body>
	<form action="superglobal2.php" method="post">
    <input type="text" name="pseudo" value="" />
    <input type="password" name="mot_de_passe" value="" />
    <input type="submit" name="connexion" value="Connexion" />
    </form>
	      <a href="user.php">
          <a href="superglobal2">
	</body>
</html>

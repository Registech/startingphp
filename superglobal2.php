<?
session_start();
echo 'Quelle sont sont tes infos ?';
echo $_SESSION['Nom'];
echo $_SESSION['Prenom'];
echo $_SESSION['Age'];
echo '<br /><a href="superglobal2.php">Superglobal2</a>';




?>

<!DOCTYPE html>
<html>
      <head>
           <title>user</title>
      </head>
 <body>
<?php
if(isset($_POST['nom']) AND isset($_POST["prenom"])){
    echo htmlspecialchars($_POST['nom']);
    echo htmlspecialchars($_POST['prenom']);
}
?>
</body>
</html>
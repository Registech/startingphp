<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	
		<style>
			body{
				background-color: #00FF00;
			    }
			input{
                background-color: #FFA07A;
			    }    
		</style>
		<form enctype="multipart/form-data" action="user.php" method="post">
		    <fieldset>
		        <legend>Formulaire</legend>
		            <p>
		                <input type="text" name="nom" placeholder="Mon Nom">
		                <input type="text" name="prenom" placeholder="Mon Prenom">
		                <input type="submit" name="submit"/>
		            </p>
		    </fieldset>
		</form>
	</body>
</html>

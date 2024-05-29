<?php
session_start();
if($_SESSION['nom']==null){
    header("Location: ../login/login.php");
}


$nom = $_SESSION['nom']
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription pour devenir arbitre de boxe</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #858080;
			padding: 20px;
		}
		h1 {
			text-align: center;
			margin-bottom: 30px;
		}
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
			max-width: 500px;
			margin: auto;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="email"], input[type="tel"], textarea, select {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Formulaire d'inscription pour devenir un juge boxe</h1>
	<form action="../phpdoss/ajoutjuge.php" method="POST">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required>

		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom" required>

		<label for="nationalite">Nationalité :</label>
		<input type="text" id="nationalite" name="nationalite" required>

		<input type="submit" value="Envoyer">
	</form>
</body>
</html>

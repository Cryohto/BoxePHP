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
	<title>Formulaire de boxe</title>
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
	<h1>Formulaire pour boxeur</h1>
	<form action="../phpdoss/ajoutboxeur.php" method="POST">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required>

		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom" required>
		
		<label for="nationalite">Nationalité :</label>
		<input type="text" id="nationalite" name="nationalite" required>


		<label for="Sexe">Sexe :</label>
    <select id="Sexe" name="Sexe" required>
      <option value="">Choissisez votre sexe</option>
      <option value="Homme">Homme</option>
      <option value="Femme">Femme</option>
	  </select>

        <label for="Categorie">Categorie :</label>
        <select id="Categorie" name="Categorie">
          <option value="">Choissisez votre Categorie</option>
          <optgroup label="Homme">
			<option value="poids léger Homme">Poids léger (moins de 60 kg)</option>
			<option value="poids moyen Homme">Poids moyen (60-75 kg)</option>
			<option value="poids lourd Homme">Poids lourd (plus de 75 kg)</option>
          </optgroup>
          <optgroup label="Femme">
			<option value="poids léger Femme">Poids léger (moins de 55 kg)</option>
			<option value="poids moyen Femme">Poids moyen (55- 70 kg)</option>
			<option value="poids lourd Femme">Poids lourd (plus de 70 kg)</option>
          </optgroup>
        </select>

		<label for="Poids">Poids :</label>
		<input type="number" id="Poids" name="Poids" min="30" max="200" required>
        <br>
        <br>
		<label for="Taille">Taille :</label>
		<input type="number" id="Taille" name="Taille" min="100" max="250" required>
<br>
<br>
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>

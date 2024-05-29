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
  <form action="../phpdoss/ajoutring.php" method="POST">
    <h2>Formulaire de création de ring de boxe</h2>
    <label for="nom">Nom du ring :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="longueur">Longueur du ring (en mètres) :</label>
    <input type="number" id="longueur" name="longueur" min="0" step="0.1" required>
    <br><br>
    <label for="largeur">Largeur du ring (en mètres) :</label>
    <input type="number" id="largeur" name="largeur" min="0" step="0.1" required>
    <br><br>
    <label for="hauteur">Hauteur des cordes (en centimètres) :</label>
    <input type="number" id="hauteur" name="hauteur" min="0" step="1" required>
<br>
<br>
    <label for="couleur">Couleur des cordes :</label>
    <select id="couleur" name="couleur" required>
      <option value="">Sélectionnez une couleur</option>
      <option value="rouge">Rouge</option>
      <option value="bleu">Bleu</option>
      <option value="blanc">Blanc</option>
    </select>

    <input type="submit" value="Enregistrer le ring">
  </form>
</body>
</html>

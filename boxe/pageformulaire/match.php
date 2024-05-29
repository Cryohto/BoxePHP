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
  <form action="traitement.php" method="POST">
    <h2>Formulaire de match de boxe</h2>

	<label for="nommatch">Nom du match :</label>
    <input type="text" id="nommatch" name="nommatch">

    <label for="boxeur1">Boxeur 1 :</label>
	<?php include("../phpdoss/chargeboxeur1.php") ?>

    <label for="boxeur2">Boxeur 2 :</label>
    <?php include("../phpdoss/chargeboxeur2.php") ?>

	<label for="arbitre">Arbitre :</label>
    <?php include("../phpdoss/chargearbitre.php") ?>

	<label for="juge">Juge :</label>
    <?php include("../phpdoss/chargejuge.php") ?>

    <label for="ring">Ring :</label>
    <?php include("../phpdoss/chargering.php") ?>

    <label for="resultat">Résultat du match :</label>
    <input type="text" id="resultat" name="resultat">

    <input type="submit" value="Enregistrer le match">
  </form>
</body>

</html>

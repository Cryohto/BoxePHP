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
  <meta charset="UTF-8">
  <title>Résultats du match de boxe</title>
  <style>
    /* Style pour la page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    /* Style pour le titre */
    h1 {
      background-color: #4CAF50;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin: 0;
    }

    /* Style pour le tableau */
    table {
      width: 80%;
      margin: 30px auto;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #4CAF50;
      color: #fff;
    }

    /* Style pour le bouton de retour */
    .btn-retour {
      display: block;
      margin: 20px auto;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-retour:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <h1>Résultats du match de boxe</h1>
  <table>
    <tr>
      <th>Nom du boxeur 1</th>
      <td><?php echo $_POST['nom-boxeur-1']; ?></td>
    </tr>
    <tr>
      <th>Poids du boxeur 1</th>
      <td><?php echo $_POST['poids-boxeur-1']; ?> kg</td>
    </tr>
    <tr>
      <th>Âge du boxeur 1</th>
      <td><?php echo $_POST['age-boxeur-1']; ?> ans</td>
    </tr>
    <tr>
      <th>Nom du boxeur 2</th>
      <td><?php echo $_POST['nom-boxeur-2']; ?></td>
    </tr>
    <tr>
      <th>Poids du boxeur 2</th>
      <td><?php echo $_POST['poids-boxeur-2']; ?> kg</td>
    </tr>
    <tr>
      <th>Âge du boxeur 2</th>
      <td><?php echo $_POST['age-boxeur-2']; ?> ans</td>
    </tr>
    <tr>
      <th>Vainqueur du match</th>
      <td><?php echo $_POST['vainqueur']; ?></td>
    </tr>
    <tr>
      <th>Méthode de victoire</th>
      <td><?php echo $_POST['methode-victoire']; ?></td>
    </tr>
    <tr>
      <th>Durée du match</th>
      <td><?php echo $_POST['duree']; ?> minutes</td>
    </tr>
  </table>
  <a href="formulaire-match.html" class="btn-retour">Nouveau match</a>
</body>
</html>

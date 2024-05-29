<?php


try{
    $dsn = "mysql:dbname=boxe;host=localhost";
    $user="root";
    $password= "";

    $db = new PDO($dsn, $user,$password);
}catch(PDOException $e){
    die('Erreur'.$e);
}

require_once "../java/boxeur.php";
if(isset($_POST['nom']) && ($_POST['prenom']) && !empty($_POST['nom'] && !empty($_POST['prenom']))){

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$nationalite = $_POST["nationalite"];
$Sexe = $_POST["Sexe"];
$Categorie = $_POST["Categorie"];
$Poids = $_POST["Poids"];
$Taille = $_POST["Taille"];
$boxeur = new boxeur ($Categorie, $Sexe, $nom, $prenom, $nationalite, $Taille, $Poids);

$crea= $db -> prepare('INSERT INTO boxeur (Nom,Prenom,Nationalite,Sexe,Categorie,Poids,Taille) values(?,?,?,?,?,?,?)');
$crea -> bindValue(1,$boxeur->Nom());
$crea -> bindValue(2,$boxeur->Prenom());
$crea -> bindValue(3,$boxeur->Nationalite());
$crea -> bindValue(4,$boxeur->Sexe());
$crea -> bindValue(5,$boxeur->Categorie());
$crea -> bindValue(6,$boxeur->Poids());
$crea -> bindValue(7,$boxeur->Taille());
$crea -> execute();
echo("le boxeur a été ajouté");
echo("<a href='../java/Homepage/index.php' button class='login-btn'>  Page d'accueil</button> </a>");
}
?>
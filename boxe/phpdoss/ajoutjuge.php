<?php


try{
    $dsn = "mysql:dbname=boxe;host=localhost";
    $user="root";
    $password= "";

    $db = new PDO($dsn, $user,$password);
}catch(PDOException $e){
    die('Erreur'.$e);
}

require_once "../java/juge.php";
if(isset($_POST['nom']) && ($_POST['prenom']) && !empty($_POST['nom'] && !empty($_POST['prenom']))){

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$nationalite = $_POST["nationalite"];
$juge = new juge ($nom, $prenom, $nationalite);

$crea= $db -> prepare('INSERT INTO juge (Nom,Prenom,Nationalite) values(?,?,?)');
$crea -> bindValue(1,$juge->Nom());
$crea -> bindValue(2,$juge->Prenom());
$crea -> bindValue(3,$juge->Nationalite());
$crea -> execute();
echo("le juge a été ajouté ");
echo("<a href='../java/Homepage/index.php' button class='login-btn'> Page d'accueil</button> </a>");
}
?>
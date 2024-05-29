<?php


try{
    $dsn = "mysql:dbname=boxe;host=localhost";
    $user="root";
    $password= "";

    $db = new PDO($dsn, $user,$password);
}catch(PDOException $e){
    die('Erreur'.$e);
}

require_once "../java/arbitre.php";
if(isset($_POST['nom']) && ($_POST['prenom']) && !empty($_POST['nom'] && !empty($_POST['prenom']))){

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$nationalite = $_POST["nationalite"];
$arbitre = new arbitre ($nom, $prenom, $nationalite);

$crea= $db -> prepare('INSERT INTO arbitre (Nom,Prenom,Nationalite) values(?,?,?)');
$crea -> bindValue(1,$arbitre->Nom());
$crea -> bindValue(2,$arbitre->Prenom());
$crea -> bindValue(3,$arbitre->Nationalite());
$crea -> execute();
echo("le arbitre a été ajouté");
echo("<a href='../java/Homepage/index.php' button class='login-btn'>  Page d'accueil</button> </a>");
}
?>
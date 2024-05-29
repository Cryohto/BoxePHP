<?php
session_start();
if($_SESSION['nom']==null){
    header("Location: ../../login/login.php");
}


$nom = $_SESSION['nom']
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Déclaration de l'encodage de caractères pour garantir que le texte s'affiche correctement -->
    <meta charset="UTF-8">
    <!-- Configuration du viewport pour un rendu correct sur les appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page qui apparaît dans l'onglet du navigateur -->
    <title>Site de BOXE</title>
    <!-- Lien vers la feuille de styles CSS externe -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Barre de navigation en haut de la page -->
    <header>
        <!-- Section du logo et du nom du site -->
        <div class="logo">
            <!-- Image du logo du site -->
            <img src="boxelogo.png" alt="Logo du site">
            <!-- Nom du site -->
            <h1>Boxe</h1>
        </div>
        <!-- Bouton de deconnexion -->
        <a href="../../phpdoss/deconnexion.php" button class="login-btn">Deconnexion</button> </a>
    </header>
</br></br></br></br>
    <!-- Conteneur principal pour les cartes de catégories -->
    <div class="container">
        <!-- Première ligne de cartes -->
        <div class="row">
            <!-- Carte 1, cliquable et redirigeant vers "page1.html" -->
            <a href="../../pageformulaire/arbitre.php" class="card">
                <!-- Image de la carte -->
                <img src="arbitre.jpg" alt="Catégorie 1">
                <!-- Contenu de la carte -->
                <div class="content">
                    <!-- Titre de la carte -->
                    <h2>Arbitre</h2>
                    <!-- Description de la carte -->
                    <p>Un arbitre de boxe est une personne qui dirige le déroulement d'un combat.</p>
                </div>
            </a>
            <!-- Carte 2, cliquable et redirigeant vers "page2.html" -->
            <a href="../../pageformulaire/juge.php" class="card">
                <img src="juge.jpg" alt="Catégorie 2">
                <div class="content">
                    <h2>Juge</h2>
                    <p>Il est chargé de relever les fautes commises par les deux boxeur</p>
                </div>
            </a>
            <!-- Carte 3, cliquable et redirigeant vers "page3.html" -->
            <a href="../../pageformulaire/boxeur.php" class="card">
                <img src="sardoche.jpg" alt="Catégorie 3">
                <div class="content">
                    <h2>Boxeur</h2>
                    <p>Les boxeurs tentent d'éviter les coups de poing de leur adversaire tout en essayant de le toucher</p>
                </div>
            </a>
        </div>
        
        <!-- Deuxième ligne de cartes -->
        <div class="row">
            <!-- Carte 4, cliquable et redirigeant vers "page4.html" -->
            <a href="../../pageformulaire/ring.php" class="card">
                <img src="ring.jpg" alt="Catégorie 4">
                <div class="content">
                    <h2>Ring de boxe</h2>
                    <p>Ce ring de boxe possède 4 cordes, comme tous les rings de compétitions</p>
                </div>
            </a>
            <!-- Carte 5, cliquable et redirigeant vers "page5.html" -->
            <a href="../../pageformulaire/match.php" class="card">
                <img src="sardochebackground.jpg" alt="Catégorie 5">
                <div class="content">
                    <h2>Match de boxe</h2>
                    <p>Match des boxe ou se deroulera le combat</p>
                </div>
            </a>
            <!-- Carte 6, cliquable et redirigeant vers "page6.html" -->
            <a href="../../pageformulaire/siu.php" class="card">
                <img src="regles.jpg" alt="Catégorie 6">
                <div class="content">
                    <h2>Regles de la boxe</h2>
                    <p>Les règles de la boxe anglaise</p>
                </div>
            </a>
        </div>
    </div>
</body>
</html>

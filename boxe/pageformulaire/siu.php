<?php
session_start();
if($_SESSION['nom']==null){
    header("Location: ../login/login.php");
}


$nom = $_SESSION['nom']
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Règles de la Boxe Anglaise</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background: #333;
    color: #fff;
    padding: 1em 0;
    text-align: center;
}

h1 {
    margin: 0;
}

main {
    padding: 20px;
}

section {
    background: #fff;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h2 {
    color: #333;
    border-bottom: 2px solid #f4f4f4;
    padding-bottom: 5px;
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    background: #f4f4f4;
    margin-bottom: 10px;
    padding: 10px;
    border-left: 5px solid #333;
}

footer {
    text-align: center;
    padding: 20px;
    background: #333;
    color: #fff;
    position: fixed;
    width: 100%;
    bottom: 0;
}
</style>
</head>
<body>
    <header>
        <h1>Règles de la Boxe Anglaise</h1>
    </header>
    <main>
        <section id="introduction">
            <h2>Introduction</h2>
            <p>La boxe anglaise, également connue sous le nom de "noble art", est un sport de combat où deux participants s'affrontent en utilisant uniquement leurs poings. Les combats sont régis par des règles strictes pour assurer la sécurité et l'équité des compétitions.</p>
        </section>
        <section id="categories-poids">
            <h2>Catégories de Poids</h2>
            <p>Les boxeurs sont classés en différentes catégories de poids pour garantir des combats équitables. Voici quelques-unes des principales catégories :</p>
            <ul>
                <li>Poids Mouche : jusqu'à 50,8 kg</li>
                <li>Poids Coq : jusqu'à 53,5 kg</li>
                <li>Poids Plume : jusqu'à 57,2 kg</li>
                <li>Poids Léger : jusqu'à 61,2 kg</li>
                <li>Poids Welter : jusqu'à 66,7 kg</li>
                <li>Poids Moyen : jusqu'à 72,6 kg</li>
                <li>Poids Mi-Lourd : jusqu'à 79,4 kg</li>
                <li>Poids Lourd : plus de 90,7 kg</li>
            </ul>
        </section>
        <section id="duree-rounds">
            <h2>Durée des Rounds</h2>
            <p>Un combat de boxe anglaise est divisé en rounds, dont la durée et le nombre varient selon le type de combat :</p>
            <ul>
                <li>Amateurs : 3 rounds de 3 minutes</li>
                <li>Professionnels : 4 à 12 rounds de 3 minutes</li>
            </ul>
        </section>
        <section id="equipements">
            <h2>Équipements</h2>
            <p>Les boxeurs doivent porter certains équipements pour leur protection :</p>
            <ul>
                <li>Gants de boxe</li>
                <li>Protège-dents</li>
                <li>Casque (pour les amateurs)</li>
                <li>Bandages pour les mains</li>
                <li>Chaussures de boxe</li>
            </ul>
        </section>
        <section id="regles-base">
            <h2>Règles de Base</h2>
            <p>Les règles de base de la boxe anglaise incluent :</p>
            <ul>
                <li>Seuls les coups de poing au-dessus de la ceinture sont autorisés.</li>
                <li>Les coups doivent être portés avec le devant du gant.</li>
                <li>Il est interdit de frapper l'adversaire lorsqu'il est à terre.</li>
                <li>Les coups derrière la tête et sur la nuque sont interdits.</li>
            </ul>
        </section>
        <section id="fautes">
            <h2>Fautes</h2>
            <p>Les actions suivantes sont considérées comme des fautes et peuvent entraîner des avertissements ou des disqualifications :</p>
            <ul>
                <li>Coup bas</li>
                <li>Coup de tête intentionnel</li>
                <li>Saisie ou accrochage excessif</li>
                <li>Utilisation de coudes ou avant-bras</li>
            </ul>
        </section>
        <section id="decisions">
            <h2>Décisions</h2>
            <p>Les décisions des combats peuvent être :</p>
            <ul>
                <li>Victoire par KO (Knockout)</li>
                <li>Victoire par TKO (Technical Knockout)</li>
                <li>Victoire aux points (décision des juges)</li>
                <li>Match nul</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Guide de la Boxe Anglaise</p>
    </footer>
</body>
</html>

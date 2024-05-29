<?php
class boxeur
{
public int $ID;
public string $Categorie;
public string $Sexe;
public string $Nom;
public string $Prenom;
public string $Nationalite;
public int $Poids;
public int $Taille;

public function __construct (string $Categorie, string $Sexe , String $Nom, String $Prenom, String $Nationalite, int $Taille ,int $Poids){
$this->ID = 0;
$this->Categorie = $Categorie;
$this->Sexe = $Sexe;
$this->Nom = $Nom;
$this->Prenom = $Prenom;
$this->Nationalite = $Nationalite;
$this->Taille = $Taille;
$this->Poids = $Poids;

}
public function ID(){
    return $this->ID;
}
public function Categorie(){
    return $this->Categorie;
}
public function Sexe(){
    return $this->Sexe;
}
public function Nom(){
    return $this->Nom;
}
public function Prenom(){
    return $this->Prenom;
}
public function Nationalite(){
    return $this->Nationalite;
}
public function Poids(){
    return $this->Poids;
}
public function Taille(){
    return $this->Taille;
}
}
<?php
class ring
{
public int $ID;
public string $Nom;
public int $longueur;
public int $largeur;
public int $hauteur;
public string $couleur;

public function __construct (String $Nom, int $longueur, int $largeur,int $hauteur, string $couleur ){
$this->ID = 0;
$this->Nom = $Nom;
$this->longueur = $longueur;
$this->largeur = $largeur;
$this->hauteur = $hauteur;
$this->couleur = $couleur;

}
public function ID(){
    return $this->ID;
}
public function Nom(){
    return $this->Nom;
}
public function longueur(){
    return $this->longueur;
}
public function largeur(){
    return $this->largeur;
}
public function hauteur(){
    return $this->hauteur;
}
public function couleur(){
    return $this->couleur;
}
}
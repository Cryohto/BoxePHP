<?php
class arbitre
{
public int $ID;
public string $Nom;
public string $Prenom;
public string $Nationalite;

public function __construct (String $Nom, String $Prenom, String $Nationalite){
$this->ID = 0;
$this->Nom = $Nom;
$this->Prenom = $Prenom;
$this->Nationalite = $Nationalite;

}
public function ID(){
    return $this->ID;
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
}
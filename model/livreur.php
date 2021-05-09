<?php

class livreur{

    public $idLivreur=null;
    public $telLivreur=null;
    public $nom=null;
    public $prenom=null;
    public $dispo=null;

 function __construct( $idLivreur=null,  $telLivreur=null,  $nom=null,  $prenom=null,  $dispo=null){
        $this->idLivreur=$idLivreur;
        $this->telLivreur=$telLivreur;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dispo=$dispo;
        
        }
        


public function getIdLivreur() 
{
    return $this->idLivreur;
}
public function setIdLivreur(int $idLivreur)
{
     $this->idLivreur=$idLivreur;
}
public function getTelLivreur(){
    return $this->telLivreur;
}
public function setTelLivreur(int $telLivreur){
     $this->telLivreur=$telLivreur;
}
public function getNom(){
    return $this->nom;
}
public function setNom(string $nom){
     $this->nom=$nom;
}
public function getPrenom(){
    return $this->prenom;
}
public function setPrenom(string $prenom){
     $this->prenom=$prenom;
}
public function getDispo(){
    return $this->dispo;
}
public function setDispo(string $dispo){
     $this->dispo=$dispo;
}




}
?>
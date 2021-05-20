<?php

class livreur{

    public $idLivreur=null;
    public $telLivr=null;
    public $nom=null;
    public $prenom=null;
    public $disponible=null;

 function __construct( $idLivreur=null,  $telLivr=null,  $nom=null,  $prenom=null,  $disponible=null){
        $this->idLivreur=$idLivreur;
        $this->telLivr=$telLivr;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->disponible=$disponible;
        
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
    return $this->telLivr;
}
public function setTelLivreur(int $telLivr){
     $this->telLivr=$telLivr;
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
    return $this->disponible;
}
public function setDispo(string $disponible){
     $this->disponible=$disponible;
}




}
?>
<?php

class pointsrelais{

    public $idRelais=null;
    public $adresseRel=null;
    public $etatRel=null;
    public $horaire=null;
    public $conges=null;

 function __construct( $idRelais=null,  $adresseRel=null,  $etatRel=null,  $horaire=null,  $congés=null){
        $this->idRelais=$idRelais;
        $this->adresseRel=$adresseRel;
        $this->etatRel=$etatRel;
        $this->horaire=$horaire;
        $this->conges=$conges;
        
        }
        


public function getIdRelais() 
{
    return $this->idRelais;
}
public function setIdRelais(int $idRelais)
{
     $this->idRelais=$idRelais;
}
public function getAdresseRel(){
    return $this->adresseRel;
}
public function setAdresseRel(string $adresseRel){
     $this->adresseRel=$adresseRel;
}
public function getEtatRel(){
    return $this->etatRel;
}
public function setEtatRel(string $etatRel){
     $this->etatRel=$etatRel;
}
public function getHoraire(){
    return $this->horaire;
}
public function setHoraire(string $horaire){
     $this->horaire=$horaire;
}
public function getConges(){
    return $this->conges;
}
public function setConges(string $conges){
     $this->conges=$conges;
}




}
?>
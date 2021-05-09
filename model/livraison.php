<?php

class livraison{
    public $idLivraison=null;
    public $idCommande=null;
    public $idLivreur=null;
    public $adresseLivraison=null;
    public $dureeLivraison=null;
    public $idClient=null;


function __construct($idLivraison=null,$idCommande=null,$idLivreur=null,$adresseLivraison=null,$dureeLivraison=null,$idClient=null)
{
    $this->idLivraison=$idLivraison;
    $this->idCommande=$idCommande;
    $this->idLivreur=$idLivreur;
    $this->adresseLivraison=$adresseLivraison;
    $this->dureeLivraison=$dureeLivraison;
    $this->idClient=$idClient;
}


public function getIdLivraison()
{
    return $this->idLivraison;
}
public function setIdLivraison(int $idLivraison)
{
    $this->idLivraison=$idLivraison;
}
public function getIdCommande()
{
    return $this->idCommande;
}
public function setIdCommande(int $idCommande)
{
    $this->idCommande=$idCommande;
}
public function getIdLivreur()
{
    return $this->idLivreur;
}
public function setIdLivreur(int $idLivreur)
{
    $this->idLivreur=$idLivreur;
}
public function getadresseLivraison()
{
    return $this->adresseLivraison;
}
public function setadresseLivraison(string $adresseLivraison)
{
    $this->adresseLivraison=$adresseLivraison;
}
public function getDureeLivraison()
{
    return $this->dureeLivraison;
}
public function setDureeLivraison(string $dureeLivraison)
{
    $this->dureeLivraison=$dureeLivraison;
}
public function getIdClient()
{
    return $this->idClient;
}
public function setIdClient(int $idClient)
{
    $this->idClient=$idClient;
}

}
?>
<?php

class Commande
{
    public $idCommande = null;	
    public $dateCmd;	
    public $nbArticle;	
    public $idClient;
    public $idProduit;

    function _construct($idCommande = null, $dateCmd, $nbArticle, $idClient, $idProduit)
    {
        $this->$idCommande = $idCommande;
        $this->dateCmd = $dateCmd;
        $this->nbArticle = $nbArticle;
        $this->idClient = $idClient;
        $this->idProduit = $idProduit;
    }

    public function getidCommande()
    {
        return $this->idCommande;
    }
    public function getdateCmd()
    {
        return $this->dateCmd;
    }
    public function getnbArticle()
    {
        return $this->nbArticle;
    }
    public function getidClient()
    {
        return $this->idClient;
    }
    public function getidProduit()
    {
        return $this->idProduit;
    }

    public function setidCommande(string $idCommande)
    {
        return $this->idPanier=$idCommande;
    }
    public function setdateCmd(string $dateCmd)
    {
        return $this->dateCmd=$dateCmd;
    }
    public function setnbArticle(string $nbArticle)
    {
        return $this->nbArticle=$nbArticle;
    }
    public function setidClient(string $idClient)
    {
        return $this->idClient=$idClient;
    }
    public function setidProduit(string $idProduit)
    {
        return $this->idProduit=$idProduit;
    }
}
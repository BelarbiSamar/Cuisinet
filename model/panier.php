<?php

class Panier
{
    public $idPanier = null;	
    public $idProduit;	
    public $quantite;	
    public $idCommande;

    function _construct($idPanier = null, $idProduit, $quantite, $idCommande)
    {
        $this->$idPanier = $idPanier;
        $this->idProduit = $idProduit;
        $this->quantite = $quantite;
        $this->idCommande = $idCommande;
    }

    public function getidPanier()
    {
        return $this->idPanier;
    }
    public function getidProduit()
    {
        return $this->idProduit;
    }
    public function getquantite()
    {
        return $this->quantite;
    }
    public function getidCommande()
    {
        return $this->idCommande;
    }

    public function setidPanier(string $idPanier)
    {
        return $this->idPanier=$idPanier;
    }
    public function setidProduit(string $idProduit)
    {
        return $this->idProduit=$idProduit;
    }
    public function setquantite(string $quantite)
    {
        return $this->quantite=$quantite;
    }
    public function setidCommande(string $idCommande)
    {
        return $this->idCommande=$idCommande;
    }
}
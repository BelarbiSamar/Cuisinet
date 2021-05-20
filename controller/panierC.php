<?php
include "C:/xampp/htdocs/client/config.php";
require 'C:/xampp/htdocs/client/model/panier.php';

class PanierC
{
    				
    function ajouterPanier($paniers)
    {
        				
        $sql = "insert into panier (idPanier , idProduit , quantite , idCommande)
        values (:idPanier,:idProduit,:quantite,:idCommande)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $idPanier = $paniers->getidPanier();
            $idProduit = $paniers->getidProduit();
            $quantite = $paniers->getquantite();
            $idCommande = $paniers->getidCommande();
            $query->bindValue(':idPanier', $idPanier);
            $query->bindValue(':idProduit', $idProduit);
            $query->bindValue(':quantite', $quantite);
            $query->bindValue(':idCommande', $idCommande);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter panier' . $e->getMessage();
        }
    }
function recupererIdProduit($idProduit){
    
    $sql="select idProduit from produit where idProduit=:idProduit ";
    $db = config::getConnexion();
    
    try{
    $query=$db->prepare($sql);
    $query->execute();
    
    $req=$query->fetch();
    return $req;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }

}
    function afficherPanier()
    {
        $sql = "select * from panier";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter panier' . $e->getMessage();
        }
    }

    function supprimerPanier($id)
    {

        $sql = "DELETE FROM panier where idPanier=:id";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
}
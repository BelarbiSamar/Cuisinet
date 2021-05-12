<?php
include "C:/xampp/htdocs/Majd/config.php";
require_once 'C:/xampp/htdocs/Majd/model/panier.php';

class Panier
{
    				
    function ajouterPanier($panier)
    {
        				
        $sql = "insert into panier (idPanier , idProduit , quantite , idCommande)
        values (:idPanier,:idProduit,:quantite,:idCommande)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $idPanier = $panier->getidPanier();
            $idProduit = $panier->getidProduit();
            $quantite = $panier->getquantite();
            $idCommande = $panier->getidCommande();
            $query->bindValue(':idPanier', $idPanier);
            $query->bindValue(':idProduit', $idProduit);
            $query->bindValue(':quantite', $quantite);
            $query->bindValue(':idCommande', $idCommande);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter panier' . $e->getMessage();
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
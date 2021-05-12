<?php
include "C:/xampp/htdocs/Majd/config.php";
require_once 'C:/xampp/htdocs/Majd/model/commande.php';

class Commande
{
    				
    function ajouterCommande($commande)
    {
        $sql = "insert into commande (idCommande , dateCmd , nbArticle , idClient, idProduit)
        values (:idCommande,:dateCmd,:nbArticle,:idClient,:idProduit)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $idCommande = $commande->getidCommande();
            $dateCmd = $commande->getdateCmd();
            $nbArticle = $commande->getnbArticle();
            $idClient = $commande->getidClient();
            $idProduit = $commande->getidProduit();
            $query->bindValue(':idCommande', $idCommande);
            $query->bindValue(':dateCmd', $dateCmd);
            $query->bindValue(':nbArticle', $nbArticle);
            $query->bindValue(':idClient', $idClient);
            $query->bindValue(':idProduit', $idProduit);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter commande' . $e->getMessage();
        }
    }

    function afficherCommande()
    {
        $sql = "select * from commande";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter commande' . $e->getMessage();
        }
    }

    function supprimerCommande($id)
    {

        $sql = "DELETE FROM commande where idCommande=:id";
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
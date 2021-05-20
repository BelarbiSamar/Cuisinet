<?php
include "C:/xampp/htdocs/client/config.php";
require_once 'C:/xampp/htdocs/client/model/commande.php';

class CommandeC
{
    				
    function ajouterCommande($commande)
    {
        $sql = "insert into commande ( dateCmd , nbArticle , idClient, idProduit)
        values (:dateCmd,:nbArticle,:idClient,:idProduit)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            
            $dateCmd = $commande->getdateCmd();
            $nbArticle = $commande->getnbArticle();
            $idClient = $commande->getidClient();
            $idProduit = $commande->getidProduit();
            
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
<?php
include "C:/xampp/htdocs/client/config.php";
require_once 'C:/xampp/htdocs/client/model/Reclamation.php';

class ReclamationC
{
    function ajouterReclamation($reclamation)
    {
        $sql = "insert into reclamation (idReclamation , dateRec , idClient , description)
        values (:idReclamation,:dateRec,:idClient,:description)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $idReclamation = $reclamation->getidReclamation();
            $dateRec = $reclamation->getdateReclamation();
            $idClient = $reclamation->getcinClient();
            $description = $reclamation->getdescription();
            $query->bindValue(':idReclamation', $idReclamation);
            $query->bindValue(':dateRec', $dateRec);
            $query->bindValue(':idClient', $idClient);
            $query->bindValue(':description', $description);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter reparation' . $e->getMessage();
        }
    }

    function afficherReclamation()
    {
        $sql = "select * from reclamation";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter reparation' . $e->getMessage();
        }
    }

    function supprimerReclamation($id)
    {

        $sql = "DELETE FROM reclamation where idReclamation=:id";
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

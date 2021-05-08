<?php
include "C:/xampp/htdocs/reparation/Cruds/config.php";
require_once 'C:/xampp/htdocs/reparation/Cruds/model/Reparation.php';

class ReparationC
{

    function ajouterReparation($reparations)
    {

        $sql = "insert into reparation (idReparation, delai_intervention)
        values (:idReparation,:delai_intervention)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $idReparation = $reparations->getidReparation();
            $delai_intervention = $reparations->getdelai_intervention();
            $query->bindValue(':idReparation', $idReparation);
            $query->bindValue(':delai_intervention', $delai_intervention);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter reparation' . $e->getMessage();
            
        }
    }






    function modifierReparation($id)
    {
        $Reparation = new Reparation;
        $sql = 'UPDATE reparation SET
            delai_intervention = :delai_intervention
            WHERE idReparation = :idReparation';
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $id = $_POST['id'];
            $delai_intervention = $_POST['delai_intervention'];
            $query->bindValue(':id', $id);
            $query->bindValue(':delai_intervention', $delai_intervention);

            $query->execute();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }



    function recupererReparation($id)
    {
        $sql = "SELECT * from reparation where id='$id'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $Reparation = $query->fetch();
            return $Reparation;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function afficherReparation()
    {

        $sql = "SELECT * FROM reparation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function supprimerReparation($id)
    {
        $sql = "DELETE FROM reparation WHERE id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}

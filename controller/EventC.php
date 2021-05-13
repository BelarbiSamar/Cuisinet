<?php
include "C:/xampp/htdocs/Mariem/config.php";
require_once 'C:/xampp/htdocs/Mariem/model/event.php';

class EventC 
{
    function ajouterEvent($Event)
    {
        $sql = "insert into evenement (idEvent , dateDebEvent , dateFinEvent , partenaires , prime )
        values (:idEvent,:dateDebEvent,:dateFinEvent,:partenaires,:prime)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $idEvent = $Event->getidEvent();
            $dateDebEvent = $Event->getdd();
            $dateFinEvent = $Event->getdf();
            $partenaires = $Event->getpartenaire();
            $prime = $Event->getprime();
            $query->bindValue(':idEvent', $idEvent);
            $query->bindValue(':dateDebEvent', $dateDebEvent);
            $query->bindValue(':dateFinEvent', $dateFinEvent);
            $query->bindValue(':partenaires', $partenaires);
            $query->bindValue(':prime', $prime);
            $query->execute();
        } catch (Exception $e) {
          
        }
    }

    function modifierEvent($idEvent)
    {
        $Event=new Evenement;         
            $sql='UPDATE evenement SET
            dateDebEvent = :dateDebEvent,  dateFinEvent = :dateFinEvent,   partenaires = :partenaires,    prime = :prime
            WHERE idEvent = :idEvent';
		$db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $idEvent=$_POST['idEvent'];
		    $dateDebEvent=$_POST['dd'];
		    $dateFinEvent=$_POST['df'];
            $partenaires=$_POST['partenaires'];
            $prime=$_POST['prime'];
          
		$query->bindValue(':idEvent',$idEvent);
		$query->bindValue(':dateDebEvent',$dateDebEvent);
		$query->bindValue(':dateFinEvent',$dateFinEvent);
		$query->bindValue(':partenaires',$partenaires);
		$query->bindValue(':prime',$prime);	
        $query->execute();
        } catch (PDOException $e) {
        $e->getMessage();
        }
        }




    function afficherEvent()
    {
        $sql = "select * from evenement";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
        } catch (Exception $e) {
            echo 'Erreur: ajouter evenement' . $e->getMessage();
        }
    }

    function supprimerEvent($id)
    {

        $sql = "DELETE FROM evenement where idEvent=:id";
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

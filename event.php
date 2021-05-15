<?php


function afficher()
{
    if (require("connexionfr.php")) {
        $req = $access->prepare("SELECT * FROM evenement ORDER BY idEvent DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}
function chercherEvent($champs, $chercher)
{
    if (require("connexionfr.php")) {
        $req = $access->prepare("select * from evenement where $champs like '%$chercher%'  ");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}
function TrierEvent($champs, $order)
{
    if (require("connexionfr.php")) {
        $req = $access->prepare("select * from evenement order By $champs $order  ");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}
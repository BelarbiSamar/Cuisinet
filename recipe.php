<?php


function afficher()
{
    if (require("connexionfr.php")) {
        $req = $access->prepare("SELECT * FROM recette ORDER BY idRecette DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}
function chercherRecipe($chercher, $champs)
{
    if (require("connexionfr.php")) {
        $req = $access->prepare("select * from recette where $champs like '%$chercher%'  ");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}
function TrierRecipe($champs, $order)
{
    if (require("connexionfr.php")) {
        $req = $access->prepare("select * from recette order By $champs $order  ");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}

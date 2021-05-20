<?php


function afficher()
{
	if(require("connexionfr.php"))
	{
		$req=$access->prepare("SELECT * FROM produit ORDER BY idProduit DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}
function chercherClient($chercher,$champs) {
    if(require("connexionfr.php"))
	{
    $req=$access->prepare("select * from produit where $champs like '%$chercher%'  ");
    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;

    $req->closeCursor();
}
}
function TrierClient($champs,$order) {
    if(require("connexionfr.php"))
	{
        $req=$access->prepare("select * from produit order By $champs $order  ");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);
    
        return $data;
    
        $req->closeCursor();
    }
}
?>
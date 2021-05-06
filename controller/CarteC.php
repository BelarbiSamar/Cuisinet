<?php
include "C:/wamp/www/aouididi/config.php";
require_once 'C:/wamp/www/aouididi/model/Carte.php';
class produitC{

    function ajouterproduit($produit){
        $sql="insert into produit (idProduit,nomPrdt,type_produit,prix,dateExpr,quantite)
        values (:idProduit,:nomPrdt,:type_produit,:prix,:dateExpr,:quantite)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $idProduit=$produit-> getidProduit();
            $nomPrdt=$produit->getnomPrdt();
            $type_produit=$produit->gettype_produit();
            $prix=$produit->getprix();
            $dateExpr=$produit->getdateExpr();
            $quantite=$produit->getquantite();
    
    
    
        $query->bindValue(':idProduit',$idProduit);
        $query->bindValue(':nomPrdt',$nomPrdt);
        $query->bindValue(':type_produit',$type_produit);
        $query->bindValue(':prix',$prix);
        $query->bindValue(':dateExpr',$dateExpr);
        $query->bindValue(':quantite',$quantite);
        
        $query->execute();
            
        }
        catch(Exception $e){
            echo 'Erreur: ajouterproduit' .$e->getMessage();
    
        }
    }
    
    function modifierproduit($idProduit){
        $produit=new produit;         
    $sql='UPDATE produit SET
    nomPrdt = :nomPrdt,   type_produit = :type_produit,    prix = :prix,     dateExpr = :dateExpr,
    quantite = :quantite
    WHERE idProduit = :idProduit';
    $db = config::getConnexion();
    try{
    $query = $db->prepare($sql);
    $idProduit=$_POST['idProduit'];
    $nomPrdt=$_POST['nomPrdt'];
    $type_produit=$_POST['type_produit'];
    $prix=$_POST['prix'];
    $dateExpr=$_POST['dateExpr'];
    $quantite=$_POST['quantite'];
    
    $query->bindValue(':idProduit',$idProduit);
    $query->bindValue(':nomPrdt',$nomPrdt);
    $query->bindValue(':type_produit',$type_produit);
    $query->bindValue(':prix',$prix);
    $query->bindValue(':dateExpr',$dateExpr);
    $query->bindValue(':quantite',$quantite);
    
    $query->execute();
    } catch (PDOException $e) {
    $e->getMessage();
    }
    }
    
    
    
    function recupererproduit($idProduit){
    $sql="SELECT * from produit where idProduit='$idProduit'";
    $db = config::getConnexion();
    try{
    $query=$db->prepare($sql);
    $query->execute();
    
    $produit=$query->fetch();
    return $produit;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }
    }
    
    
    
    
    
    function afficherproduit(){
    
        $sql="SELECT * FROM produit";
        $db = config::getConnexion();
        try{
        $liste = $db->query($sql);
        return $liste;
        }
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
        }
    
    
    
        function supprimerproduit($idProduit){
            $sql="DELETE FROM produit WHERE idProduit= :idProduit";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':idProduit',$idProduit);
            try{
            $req->execute();
            }
            catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
            }
    
    
    
    
    }
    ?>
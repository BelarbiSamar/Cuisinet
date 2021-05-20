<?php

class Reclamation
{
    public $idReclamation = null;
    public $dateReclamation;
    public $description;
    public $cinClient;

    function _construct($idReclamation = null , $dateReclamation , $description , $cinClient)
    {
        $this->$idReclamation = $idReclamation;
        $this->$dateReclamation = $dateReclamation;
        $this->description = $description;
        $this->cinClient = $cinClient;
    }

    public function getidReclamation()
    {
        return $this->idReclamation;
    }
    public function setidReclamation(string $idReclamation)
    {
        return $this->idReclamation = $idReclamation;
    }

    public function getdateReclamation()
    {
        return $this->dateReclamation;
    } 
    public function setdateReclamation(string $dateReclamation)
    {
        return $this->$dateReclamation = $dateReclamation;
    }

    public function getdescription()
    {
        return $this->description;
    } 
    public function setdescription(string $description)
    {
        return $this->description = $description;
    }

    public function getcinClient()
    {
        return $this->cinClient;
    }
    public function setcinClient(string $cinClient)
    {
        return $this->$cinClient = $cinClient;
    }
}

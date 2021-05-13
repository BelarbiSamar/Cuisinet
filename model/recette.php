<?php

class Recette
{
    public $idRecette = null;
    public $type;
    public $nomChef;
    public $description;

    function __construct($idRecette = null, $type = null, $nomChef = null, $description = null)
    {
        $this->idRecette = $idRecette;
        $this->type = $type;
        $this->nomChef = $nomChef;
        $this->description = $description;
    }

    public function getIdRecette()
    {
        return $this->idRecette;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getnomChef()
    {
        return $this->nomChef;
    }
    public function getdescription()
    {
        return $this->description;
    }

    public function setIdRecette($IdRecette)
    {
        return $this->IdRecette = $IdRecette;
    }
    public function setType($Type)
    {
        return $this->Type = $Type;
    }
    public function setnomChef($nomChef)
    {
        return $this->nomChef = $nomChef;
    }
    public function setDescription($description)
    {
        return $this->description = $description;
    }
}
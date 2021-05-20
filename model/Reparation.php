<?php

class Reparation
{
    public $idReparationd = null;
    public $delai_intervention;

    function _construct($idReparation = null, $delai_intervention)
    {
        $this->idReparation = $idReparation;
        $this->delai_intervention = $delai_intervention;
    }

    public function getidReparation()
    {
        return $this->idReparation;
    }
    public function setidReparation(string $idReparation)
    {
        return $this->idReparation = $idReparation;
    }
    public function getdelai_intervention()
    {
        return $this->delai_intervention;
    }
    public function setdelai_intervention(string $delai_intervention)
    {
        return $this->delai_intervention = $delai_intervention;
    }
}

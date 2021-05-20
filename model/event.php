<?php

class Evenement
{
    public $idEvent=null;
    public $dd=null;
    public $df=null;
    public $partenaire=null;
    public $prime=null;

    function __construct($idEvent = null, $dd = null, $df = null, $partenaire = null, $prime = null)
    {
        $this->idEvent = $idEvent;
        $this->dd = $dd;
        $this->df = $df;
        $this->partenaire = $partenaire;
        $this->prime = $prime;
    }

    public function getidEvent()
    {
        return $this->idEvent;
    }
    public function getdd()
    {
        return $this->dd;
    }
    public function getdf()
    {
        return $this->df;
    }
    public function getpartenaire()
    {
        return $this->partenaire;
    }
    public function getprime()
    {
        return $this->prime;
    }

    public function setidEvent($idEvent)
    {
        return $this->idEvent = $idEvent;
    }
    public function setdd($dd)
    {
        return $this->dd = $dd;
    }
    public function setdf($df)
    {
        return $this->df = $df;
    }
    public function setpartenaire($partenaire)
    {
        return $this->partenaire = $partenaire;
    }
    public function setprime($prime)
    {
        return $this->prime = $prime;
    }
}

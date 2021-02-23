<?php

class Orcamento{
    
    private $quintal;
    private $terraco;
    function getQuintal() {
        return $this->quintal;
    }

    function getTerraco() {
        return $this->terraco;
    }

    function setQuintal($quintal) {
        $this->quintal = $quintal;
    }

    function setTerraco($terraco) {
        $this->terraco = $terraco;
    }


}
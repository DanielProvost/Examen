<?php

class ArrayManager{

    private $ListeEntier;

    public function __construct($ListeEntier){
        $this->ListeEntier = $ListeEntier;
    }

    public function getList($ListeEntier){
        return $this->ListeEntier;
    }

    public function setList($ListeEntier){
        $this->ListeEntier=$ListeEntier;
    }

    public function PlusPetitNombreTrouver(){

        $nombre = 0;
        $nombrePlusPetit =0;
        $tailleTableau = count($this->ListeEntier);


        for($i=0 ; $i< $tailleTableau; $i+=1){
            $nombre = $this->ListeEntier[$i];
            if ($i == 0){
                $nombrePlusPetit = $nombre;
            }
            if ($nombre < $nombrePlusPetit){
                $nombrePlusPetit = $nombre;
            }
        }
        return $nombrePlusPetit;
    }
}



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
        return $this->ListeEntier;
    }

    public function PlusPetitNombreTrouver($ListeEntier){

        $nombre = 0;
        $nombrePlusPetit =0;
        $tailleTableau = count($ListeEntier);


        for($i=0 ; $i< $tailleTableau; $i+=1){
            $nombre = $ListeEntier[$i];
            if ($i == 0){
                $nombrePlusPetit = $nombre;
            }
            if ($nombre > $nombrePlusPetit){
                $nombrePlusPetit = $nombre;
            }
        }
        return $this->nombrePlusPetit=$nombrePlusPetit;
    }


}
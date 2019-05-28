<?php
//$ListeNombre = [1,5,8];
//function PlusPetitNombreTrouver($ListeNombre){
//
//
//    $nombre = 0;
//    $nombrePlusPetit =0;
//    $tailleTableau = count($ListeNombre);
//
//
//    for($i=0 ; $i< $tailleTableau; $i+=1){
//        $nombre = $ListeNombre[$i];
//        if ($i == 0){
//            $nombrePlusPetit = $nombre;
//        }
//        if ($nombre < $nombrePlusPetit){
//            $nombrePlusPetit = $nombre;
//        }
//    }
//    print('Le plus petit nombre de la liste est '.$nombrePlusPetit);
//}
//
//PlusPetitNombreTrouver($ListeNombre);

include 'ArrayManager.php';




$array = new ArrayManager([1,5,10]);
echo($array->PlusPetitNombreTrouver());
?>

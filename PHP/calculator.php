<?php
// somme
function somme ($valeur1,$valeur2){
    return $valeur1+$valeur2;
}
// soustraction
function soustraction ($valeur1,$valeur2){
    return $valeur1-$valeur2;
}
// multiplication
function multiplication ($valeur1,$valeur2){
    return $valeur1*$valeur2;
}
// division
function quotient ($valeur1,$valeur2){
        return $valeur1/$valeur2;
}
// calculatrice
function calculator($operation,$valeur1,$valeur2){
    return $operation($valeur1,$valeur2);
}
echo"somme,4,8:". calculator ("somme",4,8)."<br>";
echo "produit,4,8:".calculator("multiplication",4,8)."<br>";
echo"soustraction,4,8:". calculator ("soustraction",4,8)."<br>";
echo"quotient,8,4:". calculator ("quotient",8,4)."<br>";
?>
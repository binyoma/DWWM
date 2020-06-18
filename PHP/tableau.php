<?php
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
	
"19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 

"19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 

);
// Exercice 1 :Quelle semaine a lieu la validation du groupe 19002 ?
echo " Ex1: La semaine de validation du groupe 19002 est celle de ";
echo array_search("Validation",$a["19002"])."<br>"; // renvoie la clé de validation qui est la semaine de validation

// Ex 2 Trouver la position de la dernière occurrence de Stage pour le groupe 19001
echo " EX 2:la position de la dernière occurrence de Stage pour le groupe 19001 est  ";
$t=array_keys($a["19001"],"Stage");// récupère les clés de "Stage"
echo end($t)."<br>";// rétourne la dernière valeur

// EX 3 Extraire, dans un nouveau tableau, les codes des groupes
echo "EX 3:les codes des groupes sont :<br> ";
foreach($a as $clé => $valeur)// scanne tout le tableau 
    print_r($clé."<br>"); // affiche les clés qui sont enfait les codes des groupes

// EX 4 Combien de semaines dure le stage du groupe 19003 ?
echo "EX 4: le stage du groupe 19003 dure ";

$v=array_keys($a["19003"],"Stage"); // récupère le planning des stages
echo count($v)." semaines"; // compte leur nombre

?>
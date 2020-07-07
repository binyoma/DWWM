<?php
include('Employe.class.php');
$employe=[ 
new Employe('Jean1','Jacques1','2000-01-01','Directeur',60000,'Direction'),
new Employe('Jean2','Jacques2','2005-01-01','Comptable',50000,'Comptabilité'),
new Employe('Jean3','Jacques3','2010-01-01','DRH',40000,'Direction'),
new Employe('Jean4','Jacques4','2015-01-01','Commercial',50000,'Ventes'),
new Employe('Jean5','Jacques5','2020-01-01','Commercial',30000,'Ventes')];

foreach($employe as $value){
    echo    "Nom :".$value->getNom()."<br>".
            "Prenom :".$value->getPrenom()."<br>".
            "Date Embauche  :".$value->getDateEmbauche()."<br>".
            "Fonction :".$value->getFonction()."<br>".
            "Salaire annuel :".$value->getSalaireAnnuel()."<br>".
            "Service :".$value->getService()."<br>".
            "Ancienneté :".$value->anciennete($value)."<br>".
           "Prime :".$value->prime($value)."<br>";


}


?>
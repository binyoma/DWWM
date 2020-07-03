<?php
include('Employe.class.php');

$employe[0]=new Employe('Jean1','Jacques1','2000-01-01','Directeur',60000,'Direction');
$employe[1]=new Employe('Jean2','Jacques2','2005-01-01','Comptable',50000,'Comptabilité');
$employe[2]=new Employe('Jean3','Jacques3','2010-01-01','DRH',40000,'Direction');
$employe[3]=new Employe('Jean4','Jacques4','2015-01-01','Commercial',50000,'Ventes');
$employe[4]=new Employe('Jean5','Jacques5','2020-01-01','Commercial',30000,'Ventes');

foreach($employe){
    echo    "Nom".$this->getNom()."<br>".
            "Prenom".$this->getPrenom()."<br>".
            "Date Embauche".$this->getDateEmbauche()."<br>".
            "Nom".$this->getNom()."<br>".
            "Nom".$this->getNom()."<br>".
            "Nom".$this->getNom()."<br>".
            "Nom".$this->getNom()."<br>".
            "Nom".$this->getNom()."<br>".


}
?>
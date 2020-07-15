<?php
require_once ".\classes/Employe.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class Employe2Test extends TestCase
{
    public $dateTemoin = "12-07-2000"; // la différence entre / et -
    
    // Teste l'assignation du champ nom 
    public function testEmployeValeurDateEmbauche() {
        $employeATester = new Employe();
        $employeATester->setDateEmbauche($this->dateTemoin);
        $this->assertEquals($this->dateTemoin,$employeATester->getDateEmbauche());
    }
    
    // Teste la fonction getAnciennete de la classe Employe
    public function testAncienneteEmploye(){
        $employeATester = new Employe();
        $anciennete = 20;
        $employeATester->setDateEmbauche($this->dateTemoin); // à signaler
        $this->assertEquals($anciennete,$employeATester->getAnciennete());
    }
}
?>
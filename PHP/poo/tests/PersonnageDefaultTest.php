<?php
// Indiquez ici le chemin absolu vers votre fichier "Personnage.class.php"
// require "C:/Users/2000180/Desktop/test/test/unit_tests/classes/PersonnageDefault.class.php";
require "C:\wamp\www\DWWM\PHP\poo\classes\PersonnageDefault.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class PersonnageDefaultTest extends TestCase
{     
    public function testPersonnageChampNom() {
        $personnageLambda = new PersonnageDefault();        
        $this->assertObjectNotHasAttribute('_nom',$personnageLambda);
    }
    
    public function testPersonnageChampNomNull() {
        $personnageLambda = new PersonnageDefault();
        $this->assertEquals("Loper", $personnageLambda->getNom());
    }
    
    public function testPersonnageChampPrenom() {
        $personnageLambda = new PersonnageDefault();        
        $this->assertObjectNotHasAttribute('_prenom',$personnageLambda);
    }
    
    public function testPersonnageChampPrenomNull() {
        $personnageLambda = new PersonnageDefault();       
        $this->assertEquals("Dave", $personnageLambda->getPrenom());
    }
    
    public function testPersonnageChampAge() {
        $personnageLambda = new PersonnageDefault();        
        $this->assertObjectNotHasAttribute('_age',$personnageLambda);
    }
    
    public function testPersonnageChampAgeNull() {
        $personnageLambda = new PersonnageDefault();      
        $this->assertEquals(18, $personnageLambda->getAge());
    }
    
    public function testPersonnageChampSexe() {
        $personnageLambda = new PersonnageDefault();        
        $this->assertNull($personnageLambda->getSexe());
    }
    
    public function testPersonnageChampSexeNull() {
        $personnageLambda = new PersonnageDefault();        
        $this->assertEquals("masculin", $personnageLambda->getSexe());
    }
}

?>
<?php
// Indiquez ici le chemin absolu vers votre fichier "Personnage.class.php"
require "C:\wamp\www\DWWM\PHP\poo\classes/Personnage.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class PersonnageTest extends TestCase
{ 
    public function testPersonnageDefaut() {
        $personnageLambda = creerPerso();
        $this->assertEquals("Loper", $personnageLambda->getNom());
        $this->assertEquals("Dave", $personnageLambda->getPrenom());
        $this->assertEquals(18, $personnageLambda->getAge());
        $this->assertEquals("masculin", $personnageLambda->getSexe());
    }
}

?>
<?php
// Indiquez ici le chemin absolu vers votre fichier "Personnage.class.php"
require "C:\wamp\www\DWWM\PHP\poo\classes/Personnage.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class PersonnageTest extends TestCase
{  
    /**
    * Retourne la valeur d'une propriété en utilisant ReflectionClass
    *
    * @param Personnage $instance
    * @param string $prorpiété
    *
    * @return mixed
    */
    private function _getInnerPropertyValueByReflection(Personnage $instance, $property = '_data')
    {
        $reflector = new \ReflectionClass($instance);
        $reflector_property = $reflector->getProperty($property);
        $reflector_property->setAccessible(true);
        
        return $reflector_property->getValue($instance);
    }
    
    public $personnageLambda;

    public function creerPerso(){
        return new Personnage();
    }    
    
    public function testPersonnageBase() {
        $personnageLambda = $this->creerPerso();
        
        $this->assertNotNull($personnageLambda);
    }
    
    public function testPersonnageChampNom() {
        $personnageLambda =$this->creerPerso();        
        $this->assertObjectHasAttribute('_nom',$personnageLambda);
    }
    
    public function testPersonnageChampNomNull() {
        $personnageLambda = $this->creerPerso();
        $this->assertNull($personnageLambda->getNom());
    }
    
    public function testPersonnageChampPrenom() {
        $personnageLambda = $this->creerPerso();        
        $this->assertObjectHasAttribute('_prenom',$personnageLambda);
    }
    
    public function testPersonnageChampPrenomNull() {
        $personnageLambda = $this->creerPerso();        
        $this->assertNull($personnageLambda->getPrenom());
    }
    
    public function testPersonnageChampAge() {
        $personnageLambda = $this->creerPerso();        
        $this->assertObjectHasAttribute('_age',$personnageLambda);
    }
    
    public function testPersonnageChampAgeNull() {
        $personnageLambda =$this-> creerPerso();        
        $this->assertNull($personnageLambda->getAge());
    }
    
    public function testPersonnageChampSexe() {
        $personnageLambda = $this->creerPerso();        
        $this->assertNull($personnageLambda->getSexe());
    }
    
    public function testPersonnageChampSeexNull() {
        $personnageLambda =$this-> creerPerso();        
        $this->assertObjectHasAttribute('_sexe',$personnageLambda);
    }
}
?>
<?php
// include('Employe.class.php');

class Directeur extends Employe {
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaire;
    private $_service;
    private $_agence;

public static $nbrEmploye=0;

  //Accesseurs et Mutateur 
    public function getNom(){
        return $this->_nom;
    }
    public function setNom($nom){
        return $this->_nom=$nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function setPrenom($prenom){
        return $this->_prenom=$prenom;
    }
    public function getDateEmbauche(){
        return DateTime::createFromFormat("d/m/Y",$this->_dateEmbauche);
    }
    public function setDateEmbauche($dateEmbauche){
        $this->_dateEmbauche=$dateEmbauche;
    }
    public function getFonction(){
        return $this->_fonction;
    }
    public function setFonction($fonction){
        return $this->_fonction=$fonction;
    }
    public function getSalaire(){
        return $this->_salaire;
    }
    public function setSalaire($salaireAnnuel){
        return $this->_salaire=$salaireAnnuel;
    }
    public function getService(){
        return $this->_service;
    }
    public function setService($service){
        return $this->_service=$service;
    }
    public function getAgence(){
        return $this->_agence;
    }

    
    

    //calcul de la prime 

    public function calculerPrime (){
        $salaire =$this->getSalaire();
        $primeSalaire=($salaire*7)/100;
        $anciennete=$this->getAnciennete();
        $primeAnciennete= ($salaire*3)/100*$anciennete;
        $prime=$primeSalaire+$primeAnciennete;
        return $prime;
    }



}
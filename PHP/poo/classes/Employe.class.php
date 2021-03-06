<?php
// include('classes/Agence.class.php');

class Employe extends Agence {
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaire;
    private $_service;
    private $_agence;

public static $nbrEmploye=0;

public function __construct(){
   self::$nbrEmploye++;
}

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
   public function setAgence($agence){
       return $this->_agence=$agence;
   }
    
    //Méthodes:

    /*function __construct($nom, $prenom, $dateEmbauche, $fonction,$salaireAnnuel,$service){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_dateEmbauche=$dateEmbauche;
        $this->_fonction=$fonction;
        $this->_salaireAnnuel=$salaireAnnuel;
        $this->_service=$service;

    }*/

    // calcul de l'anciennneté
    public function getAnciennete() { 
        $dateEmbauche=$this->getDateEmbauche();
        $aujourdhui = new DateTime();
        $diff=date_diff($dateEmbauche,$aujourdhui);
        $anciennete=$diff->y;
            return $anciennete;
        }
    

    //calcul de la prime 

    public function calculerPrime (){
        $salaire =$this->getSalaire();
        $primeSalaire=($salaire*5)/100;
        $anciennete=$this->getAnciennete();
        $primeAnciennete= ($salaire*2)/100*$anciennete;
        $prime=$primeSalaire+$primeAnciennete;
        return $prime;
    }

    // chèques vacances


    public function isChequeVacance(){
        if ($this->getAnciennete()>=1){
            return true;
        }else{
            return false;
        }
    }

}
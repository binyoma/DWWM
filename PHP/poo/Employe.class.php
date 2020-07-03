<?php
class Employe {
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaireAnnuel;
    private $_service;


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
        return $this->_dateEmbauche;
    }
    public function setDateEmbauche($dateEmbauche){
        return $this->_dateEmbauche=$dateEmbauche;
    }
    public function getFonction(){
        return $this->_fonction;
    }
    public function setFonction($fonction){
        return $this->_fonction=$fonction;
    }
    public function getSalaireAnnuel(){
        return $this->_salaireAnnuel;
    }
    public function setSalaireAnnuel($salaireAnnuel){
        return $this->_salaireAnnuel=$salaireAnnuel;
    }
    public function getService(){
        return $this->_service;
    }
    public function setService($service){
        return $this->_service=$service;
    }
    
    //Méthodes:

    function __construct($nom, $prenom, $dateEmbauche,$fonction,$salaireAnnuel,$service){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_dateEmbauche=$dateEmbauche;
        $this->_fonction=$fonction;
        $this->_salaireAnnuel=$salaireAnnuel;
        $this->_service=$service;

    }
    // calcul de l'anciennneté
    public function anciennete(Employe $employe) { 
        $anciennete = date('Y') - date('Y', strtotime($this->getDateEmbauche));
        if (date('md') < date('md', strtotime(($this->getDateEmbauche))) ){ 
            return $anciennete - 1;
        }else {
            return $anciennete;
        }
    }

    //calcul de la prime 

    public function prime (Employe $employe){
        $prime=($this->getSalaireAnnuel)*(0.05+(0.02*($this->anciennete($this))));
        return $prime;
    }

    // ordre de transfert

}
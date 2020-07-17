<?php
class Agence{
    protected $_nomAgence;
    protected $_adresse;
    protected $_codePostal;
    protected $_ville;


  //Accesseurs et Mutateur 
    public function getNom(){
        return $this->_nomAgence;
    }
    public function setNom($nom){
        return $this->_nomAgence=$nom;
    }
    public function getAdresse(){
        return $this->_Adresse;
    }
    public function setAdresse($adresse){
        return $this->_adresse=$adresse;
    }
    public function getCodePostal(){
        return $this->_codePostal;
    }
    public function setCodePostal($codePostal){
        return $this->_codePostal=$codePostal;
    }
    public function getVille(){
        return $this->_ville;
    }
    public function setVille($ville){
        return $this->_ville=$ville;
    }

    //Méthodes:

    function __construct($nom, $adresse, $codePostal,$ville){
        $this->_nom=$nom;
        $this->_adresse=$adresse;
        $this->_codePostal=$codePostal;
        $this->_ville=$ville;
        

    }
    
}
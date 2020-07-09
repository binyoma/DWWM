<?php

class PersonnageDefault{
    private $_nom;
    private $_prenom;
    private $_age;   
    private $_sexe;

    function __construct(){
        $this->_nom="Dave";
        $this->_prenom="Loper";
        $this->_age=18;
        $this->_sexe="Masculin";

    }

    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getAge(){
        return $this->_age;
    }
    public function getSexe(){
        return $this->_sexe;
    }
    public function setNom($nom){
        return $this->_nom=$nom;
    }
    public function setPrenom($prenom){
        return $this->_prenom=$prenom;
    }
    public function setAge($age){
        return $this->_age=$age;
    }
    public function setSexe($sexe){
        return $this->_sexe=$sexe;
    }
}
?>
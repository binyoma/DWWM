<?php
class Agence{
    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_modeRestauration;


  //Accesseurs et Mutateur 
    public function getNom(){
        return $this->_nom;
    }
    public function setNom($nom){
        return $this->_nom=$nom;
    }
    public function getAdresse(){
        return $this->_adresse;
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
    public function getModeRestauration(){
        return $this->_modeRestauration;
    }
    public function setModeRestauration($resto){
        $this->_modeRestauration=$resto;
    }
    //Méthodes:

   /* function __construct($nomAgence, $adresse, $codePostal,$ville, $resto){
        $this->_nomAgence=$nomAgence;
        $this->_adresse=$adresse;
        $this->_codePostal=$codePostal;
        $this->_ville=$ville;
        $this->_restoEntreprise=$resto;
        }*/
    public function setAgence($agence)
        {
            $this->_nom = $agence->getNom();
            $this->_adresse = $agence->getAdresse();
            $this->_codePostal = $agence->getCodePostal();
            $this->_ville = $agence->getVille();
            $this->_restoEntreprise=$agence->getRestoEntreprise();
        }
    
}
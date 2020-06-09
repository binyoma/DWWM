<?php
	
function connexionBase()	
{
   // Paramètre de connexion serveur
   $host = "localhost";
   $login= "root";  // Votre loggin d'accès au serveur de BDD 
   $password="password";    // Le Password pour vous identifier auprès du serveur
   $base = "hotel";  // La bdd avec laquelle vous voulez travailler 
   try 
   {
    
        $db = new PDO('mysql:host=' .$host. ';port=3308;charset=utf8;dbname=' .$base, $login, $password);
        return $db;
    } 
    catch (Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible.');
    } 
}
// nettoyage, un peu sécurisation des données récues
function valid_donnees($donnees){
    $donnees=trim($donnees);
    $donnees=stripcslashes($donnees);
    $donnees=htmlspecialchars($donnees);
    return $donnees;
}
	
?>
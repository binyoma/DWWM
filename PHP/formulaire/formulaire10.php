<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controle coté serveur </title>
</head>
<body>
    
</body>
</html>
<?php
include("fonctions.php");
$sexe=valid_donnees($_POST["sexe"]);
$prenom=valid_donnees($_POST["prenom"]);
$nom=valid_donnees($_POST["nom"]);
$naissance=age(valid_donnees($_POST["naissance"]));
$adresse=valid_donnees($_POST["adresse"]);
$cp=valid_donnees($_POST["cp"]);
$ville=valid_donnees($_POST["ville"]);
$mail=valid_donnees($_POST["mail"]);
$objet=valid_donnees($_POST["objet"]);
$mot=valid_donnees($_POST["message"]);
$accepter=valid_donnees($_POST["accepter"]);



if(isset($sexe)
    && isset($prenom)
    && preg_match("/^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,30}$/i",$prenom)
    && isset($nom)
    && preg_match("/^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,30}$/i",$nom)
    && isset($naissance)
    && $naissance>=18
    && $naissance<100
    && isset($adresse)
    && preg_match("/^[a-z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,50}$/i",$adresse)
    && isset($cp)
    && preg_match("/^[0-9]{5,5}$/",$cp)
    && isset($ville)
    && preg_match("/^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,30}$/i",$ville)
    && isset($mail)
    && filter_var($mail,FILTER_VALIDATE_EMAIL)
    && isset($objet)
    && $objet!="objet"
    && isset($mot)
    && isset($accepter)){
        try {
            $dbco=new PDO ('mysql:host=127.0.0.1;dbname=formulaire; port=3308', 'root','password');
            $dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sth=$dbco->prepare("INSERT INTO contact(sexe, prenom, nom, naissance, adresse, cp, ville, mail, objet, mot, accepter) 
                                    VALUES(:sexe, :prenom, :nom, :naissance, :adresse, :cp, :ville, :mail, :objet, :mot, :accepter) ");
            $sth->bindParam(':sexe',$sexe);
            $sth->bindParam(':prenom',$prenom);
            $sth->bindParam(':nom',$nom);
            $sth->bindParam(':naissance',$naissance);
            $sth->bindParam(':adresse',$adresse);
            $sth->bindParam(':cp',$cp);
            $sth->bindParam(':ville',$ville);
            $sth->bindParam(':mail',$mail);
            $sth->bindParam(':objet',$objet);
            $sth->bindParam(':mot',$mot);
            $sth->bindParam(':accepter',$accepter);
            $sth->execute();

            header("location:formulaire-merci.php");
            }
        catch(PDOException $e){
            echo " Erreur :".$e->getMessage();
            }
        }else{
            header("location:formulaire13.php");
        }
?>
<?php
include("controle_serveur.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
        <figure class="Logo"> 
            <img src="assets/images/jarditou_logo.jpg" width="15%"  alt="Logo Jarditou" >
            <figcaption class="caption"> Nous contacter</figcaption>
        </figure>
        </header> 
    <div class="menu">
    <nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tableau.html">Nos produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Horaires.html">Heures d'ouvertures </a>
                </li>
            </ul>
        </div> 
    </nav>
    </div>
    <div class="row">
        <form role="form"   action="formulaire10.php"  method="POST" class="needs-validation" novalidate>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexe" id="monsieur" value="M"> 
                <label class="form-check-label" for="monsieur">M.</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexe" id="madame" value="F">
                <label class="form-check-label" for="madame">Mme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexe" id="autre" value="A">
                <label class="form-check-label" for="autre">Autre</label>
            </div>
            <div class= "form-row form-group">
            <?php if(!isset($sexe)){echo "<p class=\"text-danger\">Indiquez la case qui vous convient!</p><br>";} ?>
            </div>
            <div class="form-row form-group">
                <div class="col-5">
                    <input type="text" class="form-control" name="prenom" maxlength="30" placeholder="Prénom">
                    <small id="firstnameHelpBlock" class="form-text text-muted">
                     Votre prénom doit d'écrire avec seulement 30 lettres, pas de chiffres, pas de caractères spéciaux
                    </small>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control"  name="nom" maxlength="30" placeholder="Nom">
                    <small id="lastnameHelpBlock" class="form-text text-muted">
                     Votre nom doit d'écrire avec seulement 30 lettres, pas de chiffres, pas de caractères spéciaux
                    </small>
                </div>
               <div class="col-2">
                    <input type="Date" class="form-control"name="naissance" 
                    min="1920-01-01" max="2003-01-01">
                    <small id="birthdayHelpBlock" class="form-text text-muted">
                     Votre date de naissance, vous devez être majeur et pas centaire
                    </small>
                </div>
            </div>
            <div class= "form-row form-group">
            <?php 
            if(!isset($prenom)
               || !preg_match("/^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,30}$/i",$prenom)){
                 echo "<p class=\"text-danger\">Lisez ,svp, l'aide et indiquez bien votre prénom</p><br>";
                 } 
            if(!isset($nom)
               || !preg_match("/^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,30}$/i",$nom)){
                   echo "<p class=\"text-danger\">Lisez ,svp, l'aide et indiquez bien votre prénom</p><br>";
                   } 
            if(!isset($naissance)
                || $naissance>=18
                || $naissance<100){
                    echo "<p class=\"text-danger\">Indiquez votre date de naissance; si vous êtes mineur(e) ou centaire demandez votre représentant</p><br>";
                } 
            ?>
            </div>

            <div class="form-row form-group">
                <div class="col-6">
                   <input type="text" name="adresse" class="form-control" maxlength="50" placeholder="Adresse">
                   <small id="adressHelpBlock" class="form-text text-muted">
                     Votre adresse doit s'écrire avec 50 lettres et  chiffres, pas de caractères spéciaux
                    </small>
                </div>
                <div class="col">
                    <input type="number" name="cp" class="form-control" minlength="8" maxlength="8"  placeholder=Code Postal>
                    <small id="zipHelpBlock" class="form-text text-muted">
                     Seulement les cinq chiffres
                    </small>
                </div>
                <div class="col-4">
                    <input type="text" name="ville" class="form-control" maxlength="30" placeholder="Ville">
                    <small id="lastnameHelpBlock" class="form-text text-muted">
                     Votre ville doit d'écrire avec seulement des lettres, pas de chiffres, pas de caractères spéciaux
                    </small>
                </div>
            </div>
            <div class= "form-row form-group">
            <?php 
                if(!isset($adresse) 
                    || !preg_match("/^[a-z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,50}$/i",$adresse)){
                        echo "<p class=\"text-danger\">Lisez ,svp, l'aide et indiquez bien votre adresse</p><br>";
                    } 
                if(!isset($cp)
                   || !preg_match("/^[0-9]{5,5}$/i",$cp)){
                       echo "<p class=\"text-danger\">Lisez ,svp, l'aide et indiquez bien votre code postal</p><br>";
                    } 
                if(!isset($ville) 
                    || !preg_match("/^[a-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ._ -]{1,30}$/i",$ville)){
                        echo "<p class=\"text-danger\">Lisez ,svp, l'aide et indiquez bien votre prénom</p><br>";
                        }
             ?>
            </div>
            <div class="form-group row">
                <label for="mail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="mail" name="mail" >
                    <small id="lastnameHelpBlock" class="form-text text-muted">
                     Un email valide, svp!
                    </small>
                </div>
            </div>
            <div class= "form-row form-group">
            <?php if(!isset($mail)
                    || filter_var($mail,FILTER_VALIDATE_EMAIL)){
                        echo "<p class=\"text-danger\">Indiquez une email valide</p>";} ?>
            </div>
            <div class="form-group">
                <select id="objet"  name="objet" class="custom-select" > 
                    <option value="objet">Objet</option>
                    <option value="Commande"> Commande </option>
                    <option value="réclamation"> réclamation </option>
                    <option value="info"> Demande d'information</option>
                </select><span id="spanobjet"></span>
            </div>
            <div class= "form-row form-group">
            <?php if(!isset($objet)
                    || filter_var($objet,FILTER_VALIDATE_EMAIL)){
                        echo "<p class=\"text-danger\">Selectionnez l'objet de contact!</p>";} ?>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                        <span class="input-group-text" >message</span>
                </div>
                <textarea id="message" name="message" class="form-control" aria-label="message" ></textarea>
                <span id="spantext"></span>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="accepter" name="accepter"> 
                <label class="form-check-label" for="accepter" >J'accepte le traitement informatique de ce formulaire</label>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" id="envoi" class="btn btn-primary" >Envoyer</button>
                </div>
                <div class="col-6">
                <button type="reset" class="btn btn-primary"> Annuler</button>
                </div>
            </div>
        </form>
        
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
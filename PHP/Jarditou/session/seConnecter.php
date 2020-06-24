<?php 
session_start();
echo "Déjà inscrit(e)? "."<a style=\"text-decoration:none\" href=login.php > Se connecter </a><br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="seConnecter.php" method="POST">
    <p>
    <label for="mail" >Email</label>
    <input type="email"  name="mail" required pattern="/^[a-z0-9\-_]+[a-z09\.\-_]*@[a-z0-9\-_]{2,}\.[a-z\.\-_]+[a-z\-_]+$/i">
   </p>
    <label for="password" >Mot de passe</label>
    <input type="password"  name="password" required pattern="/^\S*(?=\S{8,})(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W]\S*$)/">
    <p> Note: Le mot de passe doit possèder au moins 8 caractères dont au moins une majuscule,
 un chiffre et un caractère spécial</p>
    </form>
    <button type='submit' id='envoi'  >Envoyer</button>


    <?php
    include("fonctions.php");
 
 $v='/^\S*(?=\S{8,})(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W]\S*$)/'; 
 
  if ((isset($_POST['mail']))&&(isset($_POST['password']))){
    if ((filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL))&&(preg_match($v,$_POST['pass']))) {
        $pierre=new Utilisateur($_POST['nom'],$_POST['pass']);
        echo $pierre->getNom(). '<br>';
      }else{
          echo 'le  nom ou le mot de passe choisis ne répondent pas aux critères';
      } 
  }
  
 ?>
</body>
</html>
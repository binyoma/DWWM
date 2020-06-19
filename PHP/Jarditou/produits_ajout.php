<!DOCTYPE html>
    <html lang="fr"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Atelier PHP N°4 - Ajout produit</title>
</head>
<body> 
<div class="container">	
<div class="menu">
  <nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark">
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="liste.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Formulaire.html">Mon compte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Horaires.html">contact </a>
              </li>
          </ul>
      </div> 
  </nav>
</div>
<form action="produits_ajout_script.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="pro_price"> Prix</label>
    <input class="form-control" type="decimal"  name="pro_price">
</div>
<div class="form-group"> 
    <label for="pro_ref"> Référence</label>
    <input class="form-control" type="text"  name="pro_ref">
</div>
<div class="form-group"> 
    <label for="pro_ean"> EAN</label>
    <input class="form-control" type="text"  name="pro_ean">
</div>
<div class="form-group">
    <label for="pro_stock_phy"> Stock</label>
    <input class="form-control" type="number"  name="pro_stock_phy">
</div>
<div class="form-group">
    <label for="pro_stock_alert"> Stock critique</label>
    <input class="form-control" type="number"  name="pro_stock_alert">
</div>
<div class="form-group">
    <label for="pro_color"> Couleur</label>
    <input class="form-control" type="text"  name="pro_color">
</div>
<div class="form-group">
    <label for="pro_name"> Libellé</label>
    <input class="form-control" type="text"  name="pro_name">
</div>
<div class="form-group overflow: hidden">
    <label for="pro_description"> Description</label>
    <input class="form-control" type="text"  name="pro_description">
</div>
<div class="form-group">
    <label for="pro_publish"> Publier le produit  :</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pro_publish" id="oui" value="oui" >
        <label class="form-check-label" for="oui">Oui</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pro_publish" id="non" value="non" >
        <label class="form-check-label" for="non">Non</label>
    </div>
</div>
<div class="form-group"> 
    <label for="picture"> Photo</label>
    <input class="form-control" type="file"  name="picture">
</div>
<div class="form-group">
    <label for="pro_picture"> Extension de la photo</label>
    <input class="form-control" type="text"  name="pro_picture">
</div>
<div class="form-group">
    <label for="sup_id"> Fournisseur</label>
    <?php	
require "connexion_bdd.php"; 	
$db = connexionBase(); 
$requete = "SELECT sup_id , sup_name
FROM suppliers 
ORDER BY sup_name ";	
$result = $db->query($requete);	
if (!$result) 	
{
    $tableauErreurs = $db->errorInfo();
    echo $tableauErreur[2]; 
    die("Erreur dans la requête");
}
if ($result->rowCount() == 0) 	
{
   // Pas d'enregistrement
   die("La table est vide");
}	
echo "	
<select id=\"sup_id\"  name=\"sup_id\" class=\"custom-select\"  >";
while ($row = $result->fetch(PDO::FETCH_OBJ))	
{
    
    echo" <option value=$row->sup_id >$row->sup_name</option>";
    
} 
echo " </select>"
?>
</div>
<div class="form-group">
    <label for="cat_id"> Catégorie</label>
    <?php	 
$requete = "SELECT cat_id , cat_name
FROM categories 
ORDER BY cat_name ";	
$result = $db->query($requete);	
if (!$result) 	
{
    $tableauErreurs = $db->errorInfo();
    echo $tableauErreur[2]; 
    die("Erreur dans la requête");
}
if ($result->rowCount() == 0) 	
{
   // Pas d'enregistrement
   die("La table est vide");
}	
echo "	
<select id=\"cat_id\"  name=\"cat_id\" class=\"custom-select\"  >";
while ($row = $result->fetch(PDO::FETCH_OBJ))	
{
    
    echo" <option value=$row->cat_id >$row->cat_name</option>";
    
} 
echo " </select>"
?>
</div>
<div class="row">
                
<button type="submit" id="envoi" class="btn btn-primary" required >Envoyer</button>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
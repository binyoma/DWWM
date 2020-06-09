<?php 
require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions	
$db = connexionBase(); // Appel de la fonction de connexion	
$requete = "SELECT *
FROM v_hotels_station_2";	
$result = $db->query($requete);	
if (!$result) 	
{
    $tableauErreurs = $db->errorInfo();
    echo $tableauErreurs[2]; 
    die("Erreur dans la requête");
}
if ($result->rowCount() == 0) 	
{
   // Pas d'enregistrement
   die("La table est vide");
}	
echo "	
        <table>
        <caption >hotels dans la station 2 </caption>
          <thead>
            <tr>
              <th><h5>hot_id</h5></th>
              <th><h5>hot_sta_id</h5></th>
              <th><h5>hot_nom</h5></th>
              <th><h5>hot_categorie</h5></th>
              <th><h5>hot_adresse</h5></th>
              <th><h5>hot_ville</h5></th>
            </tr>
          </thead>";
while ($row = $result->fetch(PDO::FETCH_OBJ))	
{
    echo"<tr>";
    echo "<td>".$row->hot_id."</td>";
    echo"<td>".$row->hot_sta_id."</td>";
    echo"<td>".$row->hot_nom."</td>";
    echo"<td>" .$row->hot_categorie."</td>";
    echo"<td>".$row->hot_adresse."</td>";
    echo"<td>".$row->hot_ville."</td>";
    echo"</tr>";
} 
echo "</table>"; 
?>
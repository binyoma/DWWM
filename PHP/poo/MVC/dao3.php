<?php 
function Liste_Liens(){
    $db=new PDO('mysql:host=localhost;port=3308 ;charset=utf8; dbname=sites', 'root', '');
    $result = $db->query ("select * from liens");
    $model = Array();
    while ( $lien = $result->fetch(PDO::FETCH_OBJ)  ) {
        $model[] = $lien;
        }
    $result->closeCursor();
    return $model;
    }
?>
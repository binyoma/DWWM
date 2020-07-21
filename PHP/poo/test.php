<?php
/*include('classes/Employe.class.php');


//3
$employe=[ 

new Employe('Bernard','François','2015-07-12','Comptable',30000,'Comptabilité'),
new Employe('Edouard','hervé','2010-07-12','Commercial',30000,'Ventes'),
new Employe('Edouard','georges','2010-01-01','DRH',30000,'Direction'),
new Employe('Arnold','Jacques','2000-01-01','Directeur',30000,'Direction'),
new Employe('Arnold','Igor','2015-01-01','Commercial',30000,'Ventes')
];
$agenceSiège=new Agence('Siège','la defense','75000','Paris','Tickets restaurants');
$agenceNord=new Agence('Nord','la place','60000','Lille','En entreprise');
$agenceSud=new Agence('Sud','vieux port','13000','Marseille','Tickets restaurants');


$employe[0]->affecterAgence($employe[0],$agenceSiège);
$employe[1]->affecterAgence($employe[1],$agenceNord);
$employe[2]->affecterAgence($employe[2],$agenceSud);
$employe[3]->affecterAgence($employe[3],$agenceSiège);
$employe[4]->affecterAgence($employe[4],$agenceNord);

echo "	
    <table border=\"solid 2px\" style=\" border-collapse:collapse \">
        <thead>
            <tr>
                <th><h5>Nom</h5></th>
                <th><h5>Prénom</h5></th>
                <th><h5>Fonction</h5></th>
                <th><h5>Salaire annuel</h5></th>
                <th><h5>Service</h5></th>
                <th><h5>Ancienneté</h5></th>
                <th><h5>prime</h5></th> 
            </tr>
        </thead>";

foreach($employe as $value){
    echo"<tr>";
    echo "<td>".$value->getNom()."</td>";
    echo"<td>".$value->getPrenom()."</td>";
    echo"<td>".$value->getFonction()."</td>";
    echo"<td>".$value->getSalaire()."</td>";
    echo"<td>".$value->getService()."</td>";
    echo"<td>".$value->getAnciennete()."</td>";
    echo"<td>".$value->calculerPrime()."</td>";
    echo"</tr>";
    } 
    echo "</table>"; 
//4 

foreach($employe as $val){
$employees []= array(
        
    'nom' => $val->getNom(),
    'prénom' => $val->getPrenom(),
    'Fonction' => $val->getFonction(),
    'Salaire annuel' => $val->getSalaire(),
    'service' => $val->getService(),
    'Date embauche' => $val->getDateEmbauche(),
    'anciennete'=>$val->getAnciennete(),
    'prime'=>$val->calculerPrime()
);

}


$nom=array_column($employees,'nom');
$prenom=array_column($employees,'prénom');

array_multisort($nom, SORT_ASC, $prenom, SORT_ASC, $employees);

echo "<br><br>le nombre d’employés de l’entreprise est : ".count($employees);
echo "<br><br> les informations des employés par ordre alphabétique sur le nom et le prénom : ";

echo "	
    <table border=\"solid 2px\" style=\" border-collapse:collapse \" >
        <thead>
            <tr>
                <th><h5>Nom</h5></th>
                <th><h5>Prénom</h5></th>
                <th><h5>Salaire annuel</h5></th>
                <th><h5>service</h5></th>
                <th><h5>Date d'embauche</h5></th>
                <th><h5>Ancienneté</h5></th>
                <th><h5>prime</h5></th>
            </tr>
        </thead>";

foreach($employees as $value){
    echo"<tr>";
    echo "<td>".$value['nom']."</td>";
    echo"<td>".$value['prénom']."</td>";
    echo"<td>".$value['Salaire annuel']."</td>";
    echo"<td>".$value['service']."</td>";
    echo"<td>".$value['Date embauche']."</td>";
    echo"<td>".$value['anciennete']."</td>";
    echo"<td>".$value['prime']."</td>";
    echo"</tr>";
    } 
    echo "</table>"; 
 $serv=array_column($employees,'service');
array_multisort($serv, SORT_ASC,$nom, SORT_ASC, $prenom, SORT_ASC, $employees);

echo "<br><br> afficher toutes les informations des employés par ordre alphabétique de service, nom et prénom";

echo "<br><br> le montant total du coût que représentent tous les salariés : ";
echo "	
    <table border=\"solid 2px\" style=\" border-collapse:collapse \" >
        <thead>
            <tr>
                <th><h5>Nom</h5></th>
                <th><h5>Prénom</h5></th>
                <th><h5>Salaire annuel</h5></th>
                <th><h5>service</h5></th>
                <th><h5>Date d'embauche</h5></th>
                <th><h5>Ancienneté</h5></th>
                <th><h5>prime</h5></th>
            </tr>
        </thead>";

foreach($employees as $value){
    echo"<tr>";
    echo "<td>".$value['nom']."</td>";
    echo"<td>".$value['prénom']."</td>";
    echo"<td>".$value['Salaire annuel']."</td>";
    echo"<td>".$value['service']."</td>";
    echo"<td>".$value['Date embauche']."</td>";
    echo"<td>".$value['anciennete']."</td>";
    echo"<td>".$value['prime']."</td>";
    echo"</tr>";
    } 
    echo "</table>";
foreach($employe as $val){
    $cout[]=$val->getSalaire();
    $cout[]=$val->calculerPrime();
}

print_r(array_sum($cout));
//6



echo "	
    <table border=\"solid 2px\" style=\" border-collapse:collapse \">
        <thead>
            <tr>
                <th><h5>Nom</h5></th>
                <th><h5>Prénom</h5></th>
                <th><h5>Fonction</h5></th>
                <th><h5>Salaire annuel</h5></th>
                <th><h5>Service</h5></th>
                <th><h5>Ancienneté</h5></th>
                <th><h5>prime</h5></th>
                <th><h5>Agence</h5></th>
                <th><h5>Adresse agence</h5></th>
                <th><h5>CP</h5></th>
                <th><h5>Ville</h5></th>
                <th><h5>Restauration</h5></th>
            </tr>
        </thead>";

foreach($employe as $value){
    echo"<tr>";
    echo "<td>".$value->getNom()."</td>";
    echo"<td>".$value->getPrenom()."</td>";
    echo"<td>".$value->getFonction()."</td>";
    echo"<td>".$value->getSalaire()."</td>";
    echo"<td>".$value->getService()."</td>";
    echo"<td>".$value->getAnciennete()."</td>";
    echo"<td>".$value->calculerPrime()."</td>";
    echo"<td>".$value->getNomAgence()."</td>";
    echo"<td>".$value->getAdresse()."</td>";
    echo"<td>".$value->getCodePostal()."</td>";
    echo"<td>".$value->getVille()."</td>";
    echo"<td>".$value->getRestoEntreprise()."</td>";
    echo"</tr>";
    } 
    echo "</table>"; */
 

var_dump(DateTime::createFromFormat("d/m/Y",))


?>
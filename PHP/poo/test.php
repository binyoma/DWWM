<?php
include('Employe.class.php');


//3
$employe=[ 

new Employe('Bernard','François','2005-01-01','Comptable',50000,'Comptabilité'),
new Employe('Edouard','hervé','2020-01-01','Commercial',30000,'Ventes'),
new Employe('Cedric','georges','2010-01-01','DRH',40000,'Direction'),
new Employe('Arnold','Jacques','2000-01-01','Directeur',60000,'Direction'),
new Employe('David','Igor','2015-01-01','Commercial',50000,'Ventes')
];


echo "	
    <table border=\"table table-bordered table-striped \">
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
    echo"<td>".$value->getSalaireAnnuel()."</td>";
    echo"<td>".$value->getService()."</td>";
    echo"<td>".$value->anciennete($value)."</td>";
    echo"<td>".$value->prime($value)."</td>";
    echo"</tr>";
    } 
    echo "</table>"; 
//4 
function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}
foreach($employe as $val){
$employees []= array(
        
    'nom' => $val->getNom(),
    'prénom' => $val->getPrenom(),
    'Fonction' => $val->getFonction(),
    'Salaire annuel' => $val->getSalaireAnnuel(),
    'service' => $val->getService(),
    'Date embauche' => $val->getDateEmbauche(),
    'anciennete'=>$val->anciennete($val),
    'prime'=>$val->prime($val)
    
    
);

}
echo "<br><br>le nombre d’employés de l’entreprise est : ".count($employees);
echo "<br><br> les informations des employés par ordre alphabétique sur le nom et le prénom : ";

echo "	
    <table border=\"table table-bordered table-striped \">
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

foreach(array_sort($employees,'nom',SORT_ASC) as $value){
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
    $service []= array(
            
        'nom' => $val->getNom(),
        'prénom' => $val->getPrenom(),
        'service'=>$val->getService()
        
    );
    
}
echo "<br><br> toutes les informations des employés par ordre alphabétique de service, nom et prénom :";
echo "	
<table border=\"table table-bordered table-striped \">
    <thead>
        <tr>
            <th><h5>Nom</h5></th>
            <th><h5>Prénom</h5></th>
            <th><h5>service</h5></th>
        </tr>
    </thead>";

foreach(array_sort($service,'service',SORT_ASC) as $value){
echo"<tr>";
echo "<td>".$value['nom']."</td>";
echo"<td>".$value['prénom']."</td>";
echo"<td>".$value['service']."</td>";
echo"</tr>";
} 
echo "</table>"; 
?>
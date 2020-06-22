
<?php
//1. Affichez la date du jour au format mardi 2 juillet 2019. 
//$d=new DateTime(new DateTimeZone('Europe/Paris'));
//echo $d->format("l d F Y");
$date->setTimezone(new DateTimeZone('Pacific/Chatham'));
echo $date->format('Y-m-d H:i:sP') . "\n";
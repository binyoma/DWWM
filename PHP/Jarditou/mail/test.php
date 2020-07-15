<?php 




        $messageMail = "La prime de Monsieur/Madame  a été versé. Merci d'en tenir compte et de faire le nécessaire.";
        mail("seret.nicolas@laposte.net", 
"Prime annuelle tests", 
$messageMail, 
array("From" => "seret.nicolas@laposte.net", 
"Reply-To" => "seret.nicolas@laposte.net",
 "X-Mailer" => "PHP/".phpversion() ));
        
           
        
?>

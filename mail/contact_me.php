<?php
/*!
 * Project: Condominio dell'arte Stylesheet - Showroom Made in Italy - Basso Lazio
 * Description: Mailer service for Condominio dell'Arte
 * Author: Sir Xiradorn - http://xiradorn.it - Tony frost
 * Copyright Condominio Dell'Arte - All Rights reserved - 2014
 */

// Controllo dei campi se vuoti o meno
if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['message'])	|| !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
	echo "Nessun Argomento Presente!";
	return false;
}
	
// Campi presi dalla Form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "info@condominiodellarte.com"; // Add your email address
	
// Composizione header di base per la mail
// Parsing HTML per la mail
$headers = "From: Modulo Contatti del Sito <noreply@condominiodellarte.com>\n";
$headers .= "To: Condominio <$to>\n";
$headers .= "X-Mailer: Sistema php\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";

// Soggetto della mail
$subject = "Modulo Contatti Sito. Nome Espositore: $name";

// Messaggio
$messaggio = "<html>\n";
$messaggio .= "<head>\n";
$messaggio .= "\t<title>Modulo Contatti Sito. Nome Espositore: $name</title>\n";
$messaggio .= "</head>\n";
$messaggio .= "<body style=\"text-align: center;\">\n";
$messaggio .= "\t<div style=\"margin: 0 auto; width: 750px; background: #eef; box-shadow: 0 0 2px 0 #aaf; padding: 20px; border: 1px solid #aaf; border-radius: 15px\">\n";
$messaggio .= "\t\t<h2 style=\"font-weight: bold; font-size: 150%;\">Modulo Contatti</h2><hr style=\"border: none; border-bottom: 2px solid #aaf;\">\n";
$messaggio .= "\t\t<div style=\"margin: 5px 0; background: #fff; padding: 5px; border: 1px solid #ccf; border-radius: 15px\">\n";
$messaggio .= "\t\t\t<strong style=\"display: block; width: 15%; text-align: right; float: left;\">Nome:</strong> <span style=\"display: block; width: 84%; text-align: left; float: right;\">$name</span><br style=\"clear: both;\">\n";
$messaggio .= "\t\t</div>\n";
$messaggio .= "\t\t<div style=\"margin: 5px 0; background: #fff; padding: 5px; border: 1px solid #ccf; border-radius: 15px\">\n";
$messaggio .= "\t\t\t<strong style=\"display: block; width: 15%; text-align: right; float: left;\">Email:</strong> <span style=\"display: block; width: 84%; text-align: left; float: right;\">$email</span><br style=\"clear: both;\">\n";
$messaggio .= "\t\t</div>\n";
$messaggio .= "\t\t<div style=\"margin: 5px 0; background: #fff; padding: 5px; border: 1px solid #ccf; border-radius: 15px\">\n";
$messaggio .= "\t\t\t<strong style=\"display: block; width: 15%; text-align: right; float: left;\">Messaggio:</strong> <span style=\"display: block; width: 84%; text-align: left; float: right;\">$message</span><br style=\"clear: both;\">\n";
$messaggio .= "\t\t</div>\n";
$messaggio .= "\t\t<hr style=\"border: none; border-bottom: 2px solid #aaf;\"><i style=\"font-weight: bold; font-size: 80%;\">Email Form System powered by Sir Xiradorn - <a title=\"Xiradorn Lab - Graphix Dojo\" href=\"http://xiradorn.it\">Xiradorn Lab - Graphix Dojo</a></i>\n";
$messaggio .= "\t</div>\n";
$messaggio .= "</body>\n";
$messaggio .= "</html>\n";

// Invio della mail
mail($to,$subject,$messaggio,$headers);
return true;			
?>

<?php
// Check for empty fields
   /*empty($_POST['phone']) 		||*/
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Nessun Argomento Presente!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
/*$phone = $_POST['phone'];*/
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'xiradorn@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contact Form da Condominio dell&#39;Arte: $name";
/*$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";*/
$email_body = "Hai ricevuto un nuovo messaggio dalla form di contatto del sito.\n\n"."Questo è il testo del messaggio:\n\nNome: $name\n\nEmail: $email_address\n\nMessagio:\n$message";
$headers = "Da: noreply@condominiodellarte.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Rispondi a: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='info@yourwebsite.com'

$email_subject ='New form Submission'

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"subject: $subject.\n".
"message: $message.\n".

$to = '';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitors_email \r\n";
 
mail($to,$email_subject,$email_body,$headers);

header("Location: contacts.html";)

?>
<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$firstname = strip_tags(htmlspecialchars($_POST['firstname']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$company = strip_tags(htmlspecialchars($_POST['company']));
$function = strip_tags(htmlspecialchars($_POST['function']));
$address = strip_tags(htmlspecialchars($_POST['address']));
$postal = strip_tags(htmlspecialchars($_POST['postal']));
$country = strip_tags(htmlspecialchars($_POST['country']));
$city = strip_tags(htmlspecialchars($_POST['city']));
$GDPR = strip_tags(htmlspecialchars($_POST['GDPR']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'aleksander.dekeyser@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name Firstname: $firstname\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message\n\nFurther information, if given:\n\nCompany: $company\n\nFunction : $function\n\nAddress: $address\n\nPostal code: $postal\n\nCity: $city\n\ncountry: $country\n\nGDPR: $GDPR";
$headers = "From: noreply@vedefar.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
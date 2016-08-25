<?php
$name = $_POST["name"];
$email = $_POST["email"];
$empresa = $_POST["empresa"];
$message = $_POST["message"];
 
$EmailTo = "eli@eliortega.com";
$Subject = "Nuevo mensaje recibido";
 
// prepare email body text
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Empresa: ";
$Body .= $empresa;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>
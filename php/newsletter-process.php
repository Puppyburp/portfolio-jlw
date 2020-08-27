<?php
$email = $_POST["email"];

$EmailTo = "jenniferwalason@gmail.com";
$Subject = "New subscriber from portfolio website!";
 
// prepare email body text
$Body .= "Subscriber mail: ";
$Body .= $email;
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
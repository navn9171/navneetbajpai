<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$description = "Name : " . $name . "\nEmail : " . $email . "\nSubject : " . $subject . "\nMessage : " . $message;
//check input feilds
if (empty($email))
{
    echo "Please fill the Feild";
}
else
{
    mail("navneetbajpai1999@gmail.com", $subject , $description , "From: $email");
    header("Location: https://navneetbajpai.000webhostapp.com/");
   exit;
}
?>
   
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
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>
  //  header("Location: https://aikyaa.000webhostapp.com/");
   // exit;
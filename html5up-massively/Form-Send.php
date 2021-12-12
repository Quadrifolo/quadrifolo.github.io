<?php

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

// Email Address

    $mailTo = "quadri_onigbanjo@hotmail.com";

// Who The Mail Is From 

$headers = "From: ".$mailfrom;

// Text Info 
$txt = "You have received an e-mail from ".$name. ".\n\n".$message;




    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}







?>
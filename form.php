<?php
if(!isset($_POST['submit'])){
    echo "error; you need to submit the form!";
}

//Get user input info
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate
if(empty($name) || empty($visitor_email)){
    echo "Name and email are required";
    exit;
}

$email_from = 'g_huang21@yahoo.com';
$email_subject = "New Form Submission";
$email_body = "You have a new message from the user $name.\n" .
    "email address: $visitor_email\n" .
    "Here is the message:\n $message" .

    $to = "g_huang21@yahoo.com";
$headers = "From: $email_form \r\n";

//Send Email
mail($to, $email_subject, $email_body, $headers);
?>
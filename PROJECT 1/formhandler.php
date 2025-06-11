<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'priyanka2@gamil.com';
$email_subject = 'New form submission';
$email_body = "User Name: $name\n";
               "User Email: $visitor_email\n";
               " Subject: $Subject\n";
        
                "User Message: $message\n"

$to = 'gauthampriyanka2@gmail.com';
$headers = "from: $email_from \r\n ";
$headers = "reply-to: $visitor_email \r\n ";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html")

?>
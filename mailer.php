<?php

/*
  PHP CONTACT FORM
  Original code by Dubbeli
  https://github.com/Dubbeli/

  Improved and modified by Sami and Kamil
  http://takomo.co.uk/
*/

// Set email where form will be sent.
$your_email ='info@rafiadesign.co.uk, rafia.sbegum@live.com';

// Start session.
session_start();

// Default value for all fields is null/empty.
$errors = '';
$visitor_name = '';
$visitor_email = '';
$visitor_phone = '';
$visitor_address = '';
$visitor_subject = '';
$visitor_message = '';

if(isset($_POST['submit'])) {
   $visitor_name    = $_POST['name'];
   $visitor_email   = $_POST['email'];
   $visitor_phone   = $_POST['phone'];
   $visitor_address = $_POST['address'];
   $visitor_subject = $_POST['subject'];
   $visitor_message = $_POST['message'];
}

  // Check that name is set.
  if (empty($visitor_name)) {
    $errors .= "<p>Please enter your name.</p>";
  }

  // Checks that mail is set and correct.
  if (empty($visitor_email)){
    $errors .= "<p>Please provide your email.</p>";        
  } else if (!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)){
    $errors .= "<p>Please enter a valid email address.</p>";        
  }

  // Check that message is not empty.
  if(empty($visitor_message)){
    $errors .= "<p>Please write your message.</p>";        
  }

  // If no errors send the form.
  if(empty($errors)){
    $to = $your_email;
    $subject = "New form submission";
    $from = $visitor_email;
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    $host = gethostbyaddr($ip);
    
    $body = "$visitor_email submitted the contact form:\n".
    "Name: $visitor_name\n".
    "Subject: $visitor_subject\n".
    "Email: $visitor_email \n".
    "Adress: $visitor_address\n".
    "Phone: $visitor_phone\n".
    "Message: \n ".
    "$visitor_message\n".
    "IP: $ip\n".
    "Host: $host\n";     
    
    $headers = "From: $from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to, $subject, $body,$headers);
    
    $success ="<p>Your message was sent successfully. Thanks.<p>";
  }


?>
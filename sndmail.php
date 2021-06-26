<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$comments = trim($_POST['message']);

  $emailTo = 'jcantada@gmail.com';
  $subject = 'Submitted message from '.$name;
  $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
  $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

  mail($emailTo, $subject, $body, $headers);
  echo 'email sent..';


?>

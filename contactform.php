<?php

// This script is the server side for the mail sending
print phpinfo();
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "berksoft35@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from". $name. "<br/>".$message;

  print phpinfo();
  mail($mailTo, $subject, $txt, $headers);
  header("Location: register.php?mailsend");

}
?>
<?php

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailto = "connorscoma@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have recived an e-mail from ".$name. ".\n\n".$message;

  mail($mailto, $subject, $headers, $mailFrom);
  header("Location: index.php?mailsend");
}

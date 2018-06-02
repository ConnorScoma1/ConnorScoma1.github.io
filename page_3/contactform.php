<?php

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailto = "&#x6d;&#x61;&#105;&#108;&#x74;&#x6f;&#58;&#x63;&#111;&#x6e;&#x6e;&#x6f;&#114;&#115;&#99;&#111;&#109;&#97;&#64;&#103;&#x6d;&#x61;&#105;&#108;&#46;&#99;&#x6f;&#109;";
  $headers = "From: ".$mailFrom;
  $txt = "You have recived an e-mail from ".$name. ".\n\n".$message;

  mail($mailto, $subject, $headers, $mailFrom);
  header("Location: index.php?mailsend");
}

?>

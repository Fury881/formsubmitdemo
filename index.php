<?php

if (isset($_POST['submit'])) {
   $name = $POST['name'];
   $address = $POST['address'];
   $city = $POST['city'];
   $state = $POST['state'];
   $email = $POST['email'];
   $phone = $POST['phone'];
   $message = $POST['message'];

   $mailTo = "565wbl@sbcglobal.net";
   $headers = "From: ".$email;
   $txt = "You have recieved an email from ".$name.".\n\n".$message;

   mail($mailTo, $txt, $headers, $name);
   header("Location: index.php?mailsend");
}

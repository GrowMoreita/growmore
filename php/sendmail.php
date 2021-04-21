<?php
$response['error'] = 'OK';
$myemail = "info@growmore.it";

if(empty($_POST['txtName']) || empty($_POST['txtEmail']) || empty($_POST['txtSubject']) || empty($_POST['txtMsg'])){
  $response['error'] = "\n Error: all fields are required";
}

$name = $_POST['txtName'];
$email_address = $_POST['txtEmail'];
$message = $_POST['txtMsg'];
$subject = $_POST['txtSubject'];
/*
$name = "a";
$email_address = "alessandrodizitti@gmail.com";
$message = "a";
$subject = "a";
*/

if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address)){
  $response['error'] = "\n Error: Invalid email address";
}

if($response['error'] == "OK"){
  $to = $myemail;
  $email_subject = "FORM - $subject";
  $email_body = "$name ti ha inviato un messaggio.\n".
  "Ecco i dettagli:\n Nome: $name \n".
  "Oggetto: $subject\nEmail: $email_address\n Messaggio: \n $message\n\n\nPer replicare rispondi a questa mail.\n";
  $headers = "From: $myemail\n";
  $headers .= "Reply-To: $email_address";
  mail($to,$email_subject,$email_body,$headers);
}


echo json_encode($response);

?>

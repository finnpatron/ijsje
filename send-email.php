<?php

$name = $_POST['name'];
$to = "friend@example.com";
$subject = "New reservation at Ijsie";
$message = "Hi, a new reservation has been made at Ijsie. Name: $name.";
$headers = "From: reservation@ijsie.com";

mail($to, $subject, $message, $headers);

?>

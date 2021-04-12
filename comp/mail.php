<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

print $name;
print $email;
print $message;

$to      = 'congofreedomalliance@gmail.com';
$subject = 'An Inquiry from ' . $name . ' <' . $email . '> has been recieved:';
$message = $message;
$headers = 'From: ' . $email . ' <' . $email . '>' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

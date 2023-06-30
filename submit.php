<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$subject = $_POST['emailsub'];
$message = $_POST['message'];

$mailheader = "From:" . $name . "<" . $email . ">\r\n";
$recipient = "17devrajparmar@gmail.com";
$txt = "Name:". $name . "\r\n Mobile no.:" . $number . "\r\n Message: " . $message;

if($email!=null){
   mail($recipient, $subject, $message, $mailheader);
}else{
    die("Error!");
}
echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="home.html">Homepage</a>.</p>
    </div>
</body>
</html>
';
?>
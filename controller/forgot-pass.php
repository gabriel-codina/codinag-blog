<?php

require_once (__DIR__ . "/../model/config.php");

$randompass = rand(1, 5000);
$to = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);

 $fsalt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

$fhashedPassword = crypt($randompass, $fsalt);
      $headers = 'From: gabcodina@gmail.com' . "\r\n" .
    'Reply-To: gabcodina@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to,"New Password","your new password is:" . $randompass . ".", $headers);

$query = $_SESSION["connection"]->query("UPDATE users SET password='$fhashedPassword', salt='$fsalt' WHERE email='$to'");
echo $randompass;

<?php
require_once (__DIR__ . "/../model/config.php");

//sets what the password that the user typed in, in a variable called $password 
     $npassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    $nsalt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

$nhashedPassword = crypt($npassword, $nsalt);
      
      $query = $_SESSION["connection"]->query("UPDATE users SET password='$nhashedPassword', salt='$nsalt' WHERE username='$user'");
      
      header("Location: ../index.php");
<?php

require_once (__DIR__ . "/../model/config.php");

//sets what the password that the user typed in, in a variable called $npassword 
     $npassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
     //creates a salt wich encodes
    $nsalt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
//encoding the password to random text so that it cant be hacked
$nhashedPassword = crypt($npassword, $nsalt);
      // updating the password, salt , and user to the database post
      $query = $_SESSION["connection"]->query("UPDATE users SET password='$nhashedPassword', salt='$nsalt' WHERE username='$user'");
      //re locates person to index.php
      header("Location: ../index.php");
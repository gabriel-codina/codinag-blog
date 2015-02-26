<?php

require_once (__DIR__ . "/../model/config.php");
//inserts info in varables
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);


//makes salt
$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
//hashes password
$hashedPassword = crypt($password, $salt);
//inserts variables in tables
 $dup = $_SESSION["connection"]->query("SELECT username FROM users WHERE username='".$username."'");
  $up = $_SESSION["connection"]->query("SELECT email FROM users WHERE email='".$email."'");
 //if there is a username with the same name then dont store the variables
if(!$dup->num_rows > 0 && !$up->num_rows > 0){
$query = $_SESSION["connection"]->query("INSERT INTO users SET "
        . "email = '$email',"
        . "username = '$username',"
        . "password = '$hashedPassword',"
        . "salt = '$salt'");
}else{
    echo "<p>Username or email is already been used.</p>";
}
//checks for error
if(isset($query)){
if ($query) {
    echo "Successfully created user: $username";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
}
//back button
echo "<form method='link' action='../register.php'>
<input type='submit' value='Back'>
</form>";

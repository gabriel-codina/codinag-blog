<?php
    require_once (__DIR__ . "/../model/config.php");
    //sets what the username that the user typed in, in a variable called $username 
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
     //sets what the password that the user typed in, in a variable called $password 
     $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
     
     $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
    
     if($query->num_rows == 1){
         $row = $query->fetch_array();
         
         if($row["password"] === crypt($password, $row["salt"])){
           
             $usa = $username;
             $_SESSION["usa"] = $usa;
             $_SESSION["authenticated"] = true;
             echo "<p> Login Succesfull</p>";
         }
         else{
             echo "<p>Invalid username or password</p>";
         }
     }
     else{
         echo "<p>Invalid username or password</p>";
     }
     echo "<form method='link' action='../index.php'>
<input type='submit' value='Back'>
</form>";
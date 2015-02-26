<?php
require_once(__DIR__ . "/../model/config.php");



$query = "SELECT * FROM posts";

$result = $_SESSION["connection"]->query($query);

if($result){
    while($row = mysqli_fetch_array($result)){
        
        echo $image;
        
    }
    }

header("Content-type: image/jpeg");

echo $image;
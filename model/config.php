<?php
require_once (__DIR__ . "/database.php");
require_once (__DIR__ . "/../controller/login-verify.php");
session_start();
session_regenerate_id(true);
//making a variable and storing something in it
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";
//makes sure that right nav is active
$nav1 = "active";
$nav2 = "";
$nav3 = "";
$nav4 = "";
$nav5 = "";
//creating variable
$user = "";
//height of page
$himain = "";
//creating user variable
$usa;
//if user is logged in put ther username iinto a variable called user
if(authenticateUser()){
$usa = $_SESSION["usa"];
$user = $usa;
}
$dup;
//sets time zone
date_default_timezone_set("America/Los_Angeles");
//makes a variable for current time
$date = date("h:i a, l F j");
//if there isnt a connection then make one
if(!isset($_SESSION["connection"])) {
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}
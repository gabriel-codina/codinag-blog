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

$nav1 = "active";
$nav2 = "";
$nav3 = "";
$nav4 = "";
$nav5 = "";

$user = "";

$himain = "";
$usa;

if(authenticateUser()){
$usa = $_SESSION["usa"];
$user = $usa;
}
$dup;

date_default_timezone_set("America/Los_Angeles");

$date = date("h:i a, l F j");


if(!isset($_SESSION["connection"])) {
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}
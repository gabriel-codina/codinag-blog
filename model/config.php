<?php
require_once (__DIR__ . "/database.php");
//making a variable and storing something in it
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

$nav1 = "active";
$nav2 = "";
$nav3 = "";
$nav4 = "";

$connection = new Database($host, $username, $password, $database);
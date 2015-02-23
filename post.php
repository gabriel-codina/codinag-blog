<?php
require_once (__DIR__ . "/controller/login-verify.php");
require_once (__DIR__."/model/config.php");
$nav1 = "";
$nav2 = "active";
$nav3 = "";
$nav4 = "";
$nav5 = "";

require_once (__DIR__ . "/view/header.php");
require_once (__DIR__ . "/view/navigation.php");
if(authenticateUser()){
require_once (__DIR__ . "/view/form.php");
}  else {
    echo "<p>You need to log in in order to post</p>";
}
require_once (__DIR__ . "/view/footer.php");
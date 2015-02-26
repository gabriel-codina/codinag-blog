<?php

require_once(__DIR__ . "/../model/config.php");


//creates a table called posts and stores collumn names in it
$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
        . "id int (11) NOT NULL AUTO_INCREMENT,"
        . "user varchar(255) NOT NULL,"
        . "date varchar(1000) NOT NULL,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "name varchar(50) NOT NULL,"
        . "image blob,"
        . "PRIMARY KEY (id))");
// if its succesfull say so
if ($query) {
    echo '<p>successfully made table posts</p>';
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
//creating another table for users
$query = $_SESSION["connection"]->query("CREATE TABLE users ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "username varchar(30) NOT NULL,"
        . "email varchar(50) NOT NULL,"
        . "password char(128) NOT NULL,"
        . "salt char(128) NOT NULL,"
        . "PRIMARY KEY (id))");
//checking for error
if ($query) {
    echo '<p>succesfuly created table: users</p>';
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}


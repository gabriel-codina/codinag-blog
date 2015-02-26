<?php

require (__DIR__ . "/../model/config.php");



$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name = addslashes($_FILES['image']['name']);
$image_size = getimagesize($_FILES['image']['tmp_name']);

$query = $_SESSION["connection"]->query("INSERT INTO posts SET image='$image', name='$image_name', title = '$title', post = '$post', user = '$user', date = '$date'");

if ($query) {
    echo "<p>Succesfuly inserted post: $title</p>";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
echo "<form method='link' action='../index.php'>
<input type='submit' value='Back'>
</form>";


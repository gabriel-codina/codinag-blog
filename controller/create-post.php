<?php

require (__DIR__ . "/../model/config.php");


//puts stuff in varables to upload
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name = addslashes($_FILES['image']['name']);
$image_size = getimagesize($_FILES['image']['tmp_name']);
$filepath = "img/".$image_name;
//puts image in a file
move_uploaded_file($image,$filepath);
//uploads variables to database
$query = $_SESSION["connection"]->query("INSERT INTO posts SET image='$image', name='$image_name', title = '$title', post = '$post', user = '$user', date = '$date'");
//error message
if ($query) {
    echo "<p>Succesfuly inserted post: $title</p>";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
//back button
echo "<form method='link' action='../index.php'>
<input type='submit' value='Back'>
</form>";


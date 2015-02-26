
<?php

require_once(__DIR__ . "/../model/config.php");
//takes stuff from posts
$query = "SELECT * FROM posts";
//stores it
$result = $_SESSION["connection"]->query($query);
//posts posts
if($result){
    while($row = mysqli_fetch_array($result)){
        echo "<div class = 'post'>";
        echo "<h2 class = 'usern'>" . $row['user'] . "</h2>";
       
        echo "<div class = 'post1'>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<br />"; 
        echo "<p>" . $row['post'] . "</h1>";
        echo "<br />";
        echo "<h6>". $row['date'] . "</h3>";
        echo "<br />";
        echo "<img class='imag-sz' src='img/" . $row['name'] . "'\">";
        echo "<br />";
        echo "</div>";
        echo "</div>";
    }
}

<?php
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

echo "<h3>Title: $title</h3>";
echo "<p>Post: $post</p>";
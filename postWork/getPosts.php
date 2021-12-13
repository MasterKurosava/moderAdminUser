<?php
  include_once "./vendor/connection.php";
  $posts=mysqli_query($link,"SELECT * FROM `posts`");
?>
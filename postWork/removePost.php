<?php
  $id=(int) $_POST['postId'];
  include_once "./vendor/connection.php";
  mysqli_query($link,"DELETE FROM `posts` WHERE POST_ID=$id");
  exit();
?>
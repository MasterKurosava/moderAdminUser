<?php
  include_once "./vendor/connection.php";
  $id=(int) $_POST['id'];
  mysqli_query($link,"DELETE FROM `users` WHERE USER_ID=$id");
  exit();
?>
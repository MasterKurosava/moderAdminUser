<?php
  include_once "./vendor/connection.php";
  $id=(int) $_POST['id'];
  $login=$_POST['id'];
  $roll=$_POST['id'];
  mysqli_query($link,"UPDATE `users` SET LOGIN='login', ROLL='$roll' WHERE USER_ID=$id");
  exit(json_encode($_POST));
?>
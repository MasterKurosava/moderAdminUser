<?php
  include_once "./vendor/connection.php";
  $writer=(int) $_POST['writer'];
  $content=(int) $_POST['content'];
  $time=(int) $_POST['time'];
  mysqli_query($link,"INSERT INTO  `posts`(WRITER, CONTENT, TIME) VALUES ('$writer','$content','$time')");
  exit();
?>
<?php
  $host='localhost';
  $user='root';
  $password="";
  $db_name="test";

  $link=mysqli_connect($host, $user, $password, $db_name);

  if(!$link){
    die("Ошибка подключения к базе данных");
  }
?>
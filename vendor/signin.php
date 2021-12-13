<?php
  session_start();
  require_once 'connection.php';

  $login=$_POST['login'];
  $password=$_POST['password'];

  if($_SESSION['CSRF']=$_POST['token']){
    if($login && $password){
      $userQuery=mysqli_query($link,"SELECT * FROM `users` WHERE LOGIN='$login'");
      $user=mysqli_fetch_assoc($userQuery);
      if(password_verify($password,$user["PASSWORD"])){
        $_SESSION['USER_ROLL']=$user["ROLL"];
        header('Location: ../content.php');
        exit();
      }else{
        $_SESSION['message']='Неправильный логин или пароль';
        $file=fopen('../errors.log','a');
        fwrite($file,"Неудачная попытка зайти в логин: ".$login.". Вводимый пароль:".$password."\r\n");
      }
    }else{
      $_SESSION['message']='Заполните все поля';
    }
  }
  header('Location: ../index.php');
  exit();
?>
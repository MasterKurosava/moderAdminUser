<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./postWork/post.css" rel="stylesheet"/>
  <title>Document</title>
</head>
<body>
  <?php
  session_start();
    if($_SESSION['USER_ROLL']=="USER"){
      include_once "./postWork/showPost/showUserPost.php";
    }


    else if($_SESSION['USER_ROLL']=="ADMIN"){
      include_once "./vendor/connection.php";
      $users=mysqli_query($link,"SELECT * FROM `users`");
      echo "<div class='usersList'>";
      foreach($users as $user){
        echo "
        <div class='userItem'>
          <span class='user_id'>".$user['USER_ID']."</span>
          <span contenteditable='true' class='user_login'>".$user['LOGIN']."</span>
          <span contenteditable='true' class='user_roll'>".$user['ROLL']."</span>
          <span class='change_user'> Изменить </span>
          <span class='delete_user'> Удалить </span>
        </div>
        ";
      }
      echo "</div>";
      include_once "./postWork/showPost/showModerPost.php";
      echo "<script src='postWork/postJs/admin.js'></script>";
  }

  else{
    include_once "./postWork/showPost/showModerPost.php";
  }
  ?>
</body>
</html>
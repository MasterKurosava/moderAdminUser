<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="./style.css" rel="stylesheet"/>
  <title>Document</title>
</head>
<body>
  <!-- Форма регистрации -->
  <form action="vendor/signup.php" method="post" >
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <button type="submit">Зарегистрироваться</button>
    <p>
      У вас уже есть аккаунт? - <a href="/index.php">Авторизируйтесь</a>!
    </p>
  </form>
  <?php
    session_start();
    if($_SESSION['message']){
      if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    }
  ?>
</body>
</html>
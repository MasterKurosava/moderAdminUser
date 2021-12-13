<?php
  session_start();
  if($_SESSION['user']){
    header('Location: prifile.php');
  }
  $token = hash('gost-crypto', random_int(0,999999));
  $_SESSION["CSRF"] = $token;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Авторизация и регистрация</title>
  <link href="./style.css" rel="stylesheet"/>
</head>
<body>
  <!-- Форма авторизации -->
  <form action="vendor/signin.php" method="post">
    <label>Логин</label>
    <input type="hidden" name="token" value="<?php echo $token?>">
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <button type="submit">Войти</button>
    <p>
      У вас нет аккаунта? - <a href="/register.php">Зарегистрироваться</a>!
    </p>
  </form>

  <?php
    if($_SESSION['message']){
      if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    }
  ?>
</body>
</html>
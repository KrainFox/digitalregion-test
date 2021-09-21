<?php
session_start();
if(isset($_SESSION['id'])) {
    $hideLogin = "hidden";
}
else {
    session_destroy();
    $hide = "hidden";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="button.js"></script>

    <link rel="stylesheet" href="syle.css">
</head>
<body>
    <div class="wrapper">
        <div class="logForm <?php echo $hideLogin;?>">
            <h2>Авторизация</h2>
            <input type="text" class="login" placeholder="Введите ваш логин">
            <br>
            <input type="text" class="password" placeholder="Введите ваш пароль">
            <br>
            <button class="autorization">Вход</button>
        </div>
        <div class="cabinet <?php echo $hide;?>">
            <h2>Данные пользователя</h2>
            <input type="text" class="login" placeholder="Введите ваш логин" value="<?php echo $_SESSION['login'];?>">
            <br>
            <input type="text" class="password" placeholder="Введите ваш пароль" value="<?php echo $_SESSION['password'];?>">
            <br>
            <input type="text" class="famil" placeholder="Введите ваш фамилию" value="<?php echo $_SESSION['famil'];?>">
            <br>
            <input type="text" class="name" placeholder="Введите ваш имя" value="<?php echo $_SESSION['name'];?>">
            <br>
            <input type="text" class="parent" placeholder="Введите ваш отчество" value="<?php echo $_SESSION['parent'];?>">
            <br>
            <input type="text" class="post" placeholder="Введите ваш должность" value="<?php echo $_SESSION['post'];?>">
            <br>
            <input type="text" class="email" placeholder="Введите ваш эл.почту" value="<?php echo $_SESSION['email'];?>">
            <br>
            <input type="text" class="phone" placeholder="Введите ваш телефон" value="<?php echo $_SESSION['phone'];?>">
            <br>
            <button class="save_changes">Сохранить</button>
        </div>
        <div class="stat <?php echo $hide;?>">
            <h2>История изменений</h2>
            <li>

            </li>
        </div>
    </div>
</body>
</html>

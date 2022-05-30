<!DOCTYPE html>
	<html lang="en">
	<head>
    <?php include "../connect/connect.php"; ?>
	<meta charset="utf-8"> 
 <title> Как с помощью PHP и MySQL создать систему регистрации и авторизации пользователей</title>
<link href="css/style.css" media="screen" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
	</head>
	<body>
<div class="container mregister">
<div id="login">
 <h1>Регистрация</h1>
<form action="register.php" id="registerform" method="post" name="registerform">

<p><label for="user_pass">Имя пользователя<br>
<input class="input" id="username" name="login" size="20" type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>

<input class="input" id="password" name="password" size="32"   type="password" value=""></label></p>
<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
	  <p class="regtext">Уже зарегистрированы? <a href= "login.php">Введите имя пользователя</a>!</p>
 </form>
</div>
</div>

<?php

   ?>

<footer>
 </footer>
</body>
</html>
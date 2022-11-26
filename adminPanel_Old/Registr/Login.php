<!DOCTYPE html>
<html>
<head>
    <title>Авторизация</title>
    <link rel="stylesheet" href="RegisterS.css">
</head>
<body>
<link rel="stylesheet" type="text/css" href="StyeleReg.css">
<?
include "../../connect/connect.php";
// Страница авторизации

// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($connect,"SELECT id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($connect,$_POST['user_login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        if(!empty($_POST['not_attach_ip']))
        {
            // Если пользователя выбрал привязку к IP
            // Переводим IP в строку
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($connect, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE id='".$data['id']."'");
        echo"<script> alert('Успешно авторизированы!')</script>";

        // Ставим куки
        setcookie("id", $data['id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: ../Mainpanel.php"); exit();
    }
    else
    {
        ("Ошибка! Вы ввели неправильный логин/пароль");
         echo"<script> alert('Ошибка! Вы ввели неправильный логин/пароль!')</script>";
    }
}
?>
<div class="Forms">
    <p class="TZagl">Авторизация</p>
    <form class="Posts" method="POST">
        <div class="LogAll">
            <div class="conteiner"><div class="textLog">Логин</div> <input name="user_login" type="text" required><br>
            <div class="textLog">Пароль</div> <input name="password" type="password" required><br>
            <input  class="But" name="submit" type="submit" value="Войти"></div>
        <div class="mainCont">
            <div class="conteinerss">
                <a href="../Mainpanel.php" class="out">К панели</a>
            </div>
        </div>

</form>
</div>
</body>
</html>
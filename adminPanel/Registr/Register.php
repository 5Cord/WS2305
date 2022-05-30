<!DOCTYPE html>
<html>
<head>
    <title>Регистраиця</title>
    <link rel="stylesheet" href="RegisterS.css">
</head>
<body>

<link rel="stylesheet" type="text/css" href="StyeleReg.css">
<?
ob_start();
// Страница регистрации нового пользователя

// Соединямся с БД
$link=mysqli_connect("192.168.88.24", "5cord", "5cord", "belzan");

if(isset($_POST['submit']))
{
    $err = array();

    // проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['user_login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['user_login']) < 3 or strlen($_POST['user_login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['user_login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {

        $user_login = $_POST['user_login'];

        // Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link,"INSERT INTO users SET user_login='".$user_login."', user_password='".$password."'");
        ob_end_clean();
        ob_start();
        header("Location: Login.php"); exit();
        echo"<script> alert('Успешно авторизированы!')</script>";
        ob_end_flush();
        exit();

    }
    else
    {
        echo ("<script> alert('При регистрации произошли следующие ошибки, возможно пользователь с таким логином уже существет!)')</script> ");
        {
            print $error."<br>";
        }
    }
}
?>

<div class="Forms">
    <p class="TZagl"> Регистраиця</p>
    <form method="POST">
        <div class="conteiner"><div class="textLog">Логин</div> <input class="user_login" name="user_login" type="text" required><br>
        <div class="textLog">Пароль</div> <input class="pass" name="password" type="password" required><br>
        <input class="but" name="submit" type="submit" OnClick="();" value="Зарегистрироваться"></div>
        
        <div class="mainCont">
            <div class="conteinerss">
                <a href="Login.php" class="out">Авторизация</a>
                <a href="../MainDB.php" class="out">На главную</a>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        if((true==$_COOKIE['hash']) and (true==$_COOKIE['id'])){
    alert('Вы зарегистрировались!')
        }
    </script>
</div>
</body>
</html>

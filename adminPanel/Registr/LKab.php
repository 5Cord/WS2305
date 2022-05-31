<!DOCTYPE html>
<html>
<head>
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="RegisterS.css">
</head>
<body>

<link rel="stylesheet" type="text/css" href="StyeleReg.css">
<?
ob_start();
// Страница регистрации нового пользователя

// Соединямся с БД
$link=mysqli_connect("192.168.30.119", "5cord", "5cord", "belzan");

if(isset($_POST['submit']))
{
    $err = array();

    // проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {

        $login = $_POST['login'];

        // Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link,"INSERT INTO regr SET login='".$login."', user_password='".$password."'");
        ob_end_clean();
        ob_start();
        header("Location:Login.php"); exit();
        ob_end_flush();
        exit();

    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>

<div class="Forms">
<p class="TZagl">Личный кабинет, вы вошли как <?php 
    $link=mysqli_connect("192.168.30.119", "5cord", "5cord", "belzan");
    $query=mysqli_query($link, "SELECT * FROM users WHERE id='". intval($_COOKIE['id'])."'Limit 1");
    $userdata=mysqli_fetch_assoc($query);
    print $userdata['login'];?> </p>
<div class="ContADMP"><a class="ADMP" href="../Admin/AdminPanel.php">
<? $link=mysqli_connect("192.168.30.119", "5cord", "5cord", "belzan");
    $query=mysqli_query($link, "SELECT * FROM users WHERE id='". intval($_COOKIE['id'])."'Limit 1");
    $userdata=mysqli_fetch_assoc($query);
    if(($userdata['login'] == 'Dmitry') and ($userdata['ind'] == 1)){
        print ('Админ панель');
    }
    ?></a></div>
<form class="Posts" method="POST">
    <div class="mainCont">
        <div class="conteinerss">
            <a class="out" href="Logout.php">Выйти</a>
        </div>
    </div>
</div>

</form>
</div>
</body>
</html>


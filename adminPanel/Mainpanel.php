<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/AdminP.css">
  <link rel="stylesheet" href="AdaptaciaAll.css">
  <link rel="stylesheet" href="Mainpanel.css">
  <title>Админ-панель</title>
</head>

<body>
  <div class="text_header">АО "БелЗАН"</div>
  <div class="left_menu">
    <div class="block_left_menu">


      <a href=<?
              $link = mysqli_connect("192.168.30.119", "5cord", "5cord", "belzan");
              $query = mysqli_query($link, "SELECT * FROM users WHERE id='" . intval($_COOKIE['id']) . "'Limit 1");
              $userdata = mysqli_fetch_assoc($query);
              if ((true == $_COOKIE['hash']) and (true == $_COOKIE['id'])) {
                print("Registr/Logout.php");
              } else {
                print("Registr/Login.php");
              }
              ?><?
        $link = mysqli_connect("192.168.30.119", "5cord", "5cord", "belzan");
        $query = mysqli_query($link, "SELECT * FROM users WHERE id='" . intval($_COOKIE['id']) . "'Limit 1");
        $userdata = mysqli_fetch_assoc($query);
        if ((true == $_COOKIE['hash']) and (true == $_COOKIE['id'])) {
          print $userdata[''];
        } else {
          print("");
        }
        ?> class="ex AHeader"><?php
                            if ((true == $_COOKIE['hash']) and (true == $_COOKIE['id'])) {
                              print '<div class="point_left">Выйти</div>';
                              echo '<a target="iframe_a" href="News.html"><div class="point_left">Новости</div></a>
          <a target="iframe_a" href="History.html"><div class="point_left">История</div></a>
          <a target="iframe_a" href="FeedBack.php"><div class="point_left">Обратная связь</div></a>';
                            } else {
                              print '<div class="point_left">Войти</div>';
                            }
                            ?>
    </div>
  </div>
  <iframe name="iframe_a" src="" frameborder="0" w></iframe>
</body>

</html>
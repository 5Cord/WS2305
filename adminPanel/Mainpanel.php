<!DOCTYPE html>
<html lang="ru">

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
    <div  class="block_left_menu">
      <?php include "../connect/connect.php"; ?>
      <a href=<?
              $query = mysqli_query($connect, "SELECT * FROM users WHERE id='" . intval($_COOKIE['id']) . "'Limit 1");
              $userdata = mysqli_fetch_assoc($query);
              if ((true == $_COOKIE['hash']) and (true == $_COOKIE['id'])) {
                print("Registr/Logout.php");
              } else {
                print("Registr/Login.php");
              }
              ?><?
        $query = mysqli_query($connect, "SELECT * FROM users WHERE id='" . intval($_COOKIE['id']) . "'Limit 1");
        $userdata = mysqli_fetch_assoc($query);
        if ((true == $_COOKIE['hash']) and (true == $_COOKIE['id'])) {
          print $userdata[''];
        } else {
          print("");
        }
        ?> class="ex AHeader"><?php
                            if ((true == $_COOKIE['hash']) and (true == $_COOKIE['id'])) {
                              print '<div class="point_left block_icon_mp"><img class="icon_MP" src="../images/icon/log_out.png"></div>';
                              echo '
                              <a target="iframe_a" href="Registr/Register.php"><div class="point_left block_icon_mp"><img class="icon_MP" src="../images/icon/register.png"></div></a>
                              <a target="iframe_a" href="DeleteUsers.php"><div class="point_left block_icon_mp"><img class="icon_MP" src="../images/icon/remove_user.png"></div></a>
                              <a target="iframe_a" href="News.html"><div class="point_left">Новости</div></a>
          <a target="iframe_a" href="History.html"><div class="point_left">История</div></a>
          <a target="iframe_a" href="FeedBack.php"><div class="point_left">Обратная связь</div></a>';
                            } else {
                              print '<div class="point_left block_icon_mp"><img class="icon_MP reg" src="../images/icon/login.png"></div></a>';
                            }
                            ?>
    </div>
  </div>
  <iframe name="iframe_a" src="" frameborder="0"></iframe>
</body>

</html>
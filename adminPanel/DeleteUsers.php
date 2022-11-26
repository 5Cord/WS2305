<?php include '../connect/connect.php'; ?>
<!doctype html>
<html lang="ru">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
  <title>Удаление новости</title>
</head>

<body>
  <link rel="stylesheet" href="../css/EDNews.css">
  <link rel="stylesheet" href="AdaptaciaAll.css">
  <link rel="stylesheet" href="../adaptation/H1.css">

  <?php
  if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    if ($_GET['del_id'] != 12) {
      //удаляем строку из таблицы
      $sql = mysqli_query($connect, "DELETE FROM `users` WHERE `ID` = {$_GET['del_id']}");
      if ($sql) {
        echo "<p class='utext'>Пользователь удален {$result['ID']}</p>";
        header("refresh: 5; DeleteUsers.php");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }else{
      echo "<p class='utext'>Пользователя с таким именем нельзя удалить</p>";
      header("refresh: 1; DeleteUsers.php");
    }
  }


  ?>
  <div class="container">
    <h1 class="zagol black">Удаление пользователя</h1>
    <a class="none" href="News.html">Назад</a>
    <table border='1'>
      <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Приоритет ползователя</th>
        <th>Действие</th>
      </tr>
      <?php
      $sql = mysqli_query($connect, 'SELECT `ID`, `user_login`, `main_person` FROM `users`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
          "<td class='content'>{$result['ID']}</td>" .
          "<td class='content'>{$result['user_login']}</td>" .
          "<td class='content'>{$result['main_person']}</td>" .
          "<div class='bg'><td><a class='butt' href='?del_id={$result['ID']}'>Удалить</a></td></div>" .
          '</tr>';
      }
      ?>
    </table>
  </div>
</body>

</html>
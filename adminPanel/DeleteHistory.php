<?php include '../connect/connect.php';?>
<!doctype html>
<html lang="ru">

<head>
    <title>Удаление обзатца истории</title>
</head>

<body>
    <link rel="stylesheet" href="../css/EDNews.css">
    <link rel="stylesheet" href="AdaptaciaAll.css">
    <?php

    if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
      //удаляем строку из таблицы
      $sql = mysqli_query($connect, "DELETE FROM `about` WHERE `ID` = {$_GET['del_id']}");
      if ($sql) {
        echo "<p class='utext'>Абзац удален{$result['ID']}</p>";
        header("refresh: 5; DeleteHistory.php");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

  ?>
    <div class="container">
        <h1 class="h1">Удалине новости</h1>
        <a class="none" href=History.html">Назад</a>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Текст</th>
                <th>Действие</th>
            </tr>
            <?php
      $sql = mysqli_query($connect, 'SELECT `ID`, `content` FROM `about`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['ID']}</td>" .
             "<td>{$result['content']}</td>" .
             "<div class='bg'><td><a href='?del_id={$result['ID']}'>Удалить</a></td></div>" .
             '</tr>';
      }
    ?>
        </table>
    </div>
</body>

</html>
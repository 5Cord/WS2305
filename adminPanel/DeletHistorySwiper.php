<?php include '../connect/connect.php';?>
<!doctype html>
<html lang="ru">

<head>
    <title>Удаление страницы истории</title>
</head>

<body>
    <link rel="stylesheet" href="../css/EDNews.css">
    <link rel="stylesheet" href="AdaptaciaAll.css">
    <?php

    if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
      //удаляем строку из таблицы
      $sql = mysqli_query($connect, "DELETE FROM `history` WHERE `ID` = {$_GET['del_id']}");
      if ($sql) {
        echo "<p class='utext'>Товар удален {$result['ID']}</p>";
        header("refresh: 5; DeletHistorySwiper.php");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

  ?>
    <div class="container">
        <h1 class="h1">Удалине новости</h1>
        <a class="none" href="History.html">Назад</a>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Год</th>
                <th>Текст</th>
                <th>Текст1</th>
                <th>Картинка</th>
                <th>Удаление</th>
            </tr>
            <?php
      $sql = mysqli_query($connect, 'SELECT `ID`, `years`, `content`, `content1`, `pictures` FROM `history`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['ID']}</td>" .
             "<td>{$result['years']}</td>" .
             "<td>{$result['content']}</td>" .
             "<td>{$result['content1']}</td>" .
             "<td>{$result['pictures']}</td>" .
             "<div class='bg'><td><a href='?del_id={$result['ID']}'>Удалить</a></td></div>" .
             '</tr>';
      }
    ?>
        </table>
    </div>
</body>

</html>
<?php include '../connect/connect.php';?>
<!doctype html>
<html lang="ru">

<head>
    <title>Удаление новости</title>
</head>

<body>
    <link rel="stylesheet" href="../css/EDNews.css">
    <link rel="stylesheet" href="AdaptaciaAll.css">
    <?php

    if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
      //удаляем строку из таблицы
      $sql = mysqli_query($connect, "DELETE FROM `news` WHERE `ID` = {$_GET['del_id']}");
      if ($sql) {
        echo "<p class='utext'>Товар удален {$result['ID']}</p>";
        header("refresh: 5; DeleteNews.php");
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }

  ?>
    <div class="container">
        <h1 class="h1">Удалине новости</h1>
        <a class="none" href="News.html">Назад</a>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Текст</th>
                <th>Дата</th>
                <th>Картинка</th>
                <th>Удаление</th>
            </tr>
            <?php
      $sql = mysqli_query($connect, 'SELECT `ID`, `title`, `content`, `date`, `picture` FROM `news`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['ID']}</td>" .
             "<td>{$result['title']}</td>" .
             "<td>{$result['content']}</td>" .
             "<td size='5px'>{$result['date']}</td>" .
             "<td>{$result['picture']}</td>" .
             "<div class='bg'><td><a href='?del_id={$result['ID']}'>Удалить</a></td></div>" .
             '</tr>';
      }
    ?>
        </table>
    </div>
</body>

</html>
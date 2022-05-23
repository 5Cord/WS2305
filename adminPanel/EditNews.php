<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AdaptaciaAll.css">
    <link rel="stylesheet" href="AdaptaciaAll.css">
    <title>Изменение новостей</title>
</head>

<body>

    <link rel="stylesheet" href="../css/EDNews.css">
    <?php include '../connect/connect.php';?>
    <?php
    //Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БД
    if (isset($_GET['red_id'])) {
        $sql = mysqli_query($connect, "SELECT `ID`, `title`, `content`, `date`, `picture` FROM `news` WHERE `ID`={$_GET['red_id']}");
        $product = mysqli_fetch_array($sql);
      }
//Если переменная Name передана
if (isset($_POST["title"])) {
  //Если это запрос на обновление, то обновляем
  if (isset($_GET['red_id'])) {
      $sql = mysqli_query($connect, "UPDATE `news` SET `title` = '{$_POST['title']}', `content` = '{$_POST['content']}',`date` = '{$_POST['date']}',`picture` = '{$_POST['picture']}' WHERE `ID`={$_GET['red_id']}");
  } else {
      //Иначе вставляем данные, подставляя их в запрос
      $sql = mysqli_query($connect, "INSERT INTO `news` (`title`, `content`, `date`, `picture`) VALUES ('{$_POST['title']}', '{$_POST['content']}','{$_POST['date']}','{$_POST['picrue']}',)");
  }

  //Если вставка прошла успешно
  if ($sql) {
    echo '<p class="utext">Успешно измененно!</p>';
    header("refresh: 5; EditNews.php");
  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
  }
}
 ?>

    <div class="container">
        <h1 class="h1">Изменение новостей</h1>
        <a class="none" href="News.html">Назад</a>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Заголовок:</td>
                    <td><input type="text" name="title" value="<?= isset($_GET['red_id']) ? $product['title'] : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Текст:</td>
                    <td><textarea class="texta"
                            name="content"><?= isset($_GET['red_id']) ? $product['content'] : ''; ?></textarea></td>
                </tr>
                <tr>
                    <td>Дата:</td>
                    <td><input type="date" name="date" value="<?= isset($_GET['red_id']) ? $product['date'] : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Картинка</td>
                    <td><input type="file" name="picture"
                            value="<?= isset($_GET['red_id']) ? $product['picture'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="OK"></td>
                </tr>
            </table>
        </form>

        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Текст</th>
                <th>Дата</th>
                <th>Картинка</th>
                <th>Редактирование</th>
            </tr>
            <?php
      $sql = mysqli_query($connect, 'SELECT `ID`, `title`, `content`, `date`, `picture` FROM `news`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['ID']}</td>" .
             "<td>{$result['title']}</td>" .
             "<td>{$result['content']}</td>" .
             "<td>{$result['date']}</td>" .
             "<td> <img src=../images/news/{$result['picture']}></td>" .
             "<td><a class='a' href='?red_id={$result['ID']}'>Изменить</a></td>" .
             '</tr>';
      }
    ?>
        </table>
    </div>
</body>

</html>
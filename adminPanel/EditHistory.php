<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AdaptaciaAll.css">
    <title>Изменение абзатца истории</title>
</head>

<body>

    <link rel="stylesheet" href="../css/EDNews.css">
    <?php include '../connect/connect.php';?>
    <?php
    //Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БД
    if (isset($_GET['red_id'])) {
        $sql = mysqli_query($connect, "SELECT `ID`, `content` FROM `about` WHERE `ID`={$_GET['red_id']}");
        $product = mysqli_fetch_array($sql); 
      }
//Если переменная Name передана
if (isset($_POST["content"])) {
  //Если это запрос на обновление, то обновляем
  if (isset($_GET['red_id'])) {
      $sql = mysqli_query($connect, "UPDATE `about` SET `content` = '{$_POST['content']}' WHERE `ID`={$_GET['red_id']}");
  } else {
      //Иначе вставляем данные, подставляя их в запрос
      $sql = mysqli_query($connect, "INSERT INTO `about` (`content`) VALUES ('{$_POST['content']}')");
  }


  //Если вставка прошла успешно
  if ($sql) {
    echo '<p class="utext">Успешно измененно!</p>';
    header("refresh: 5; EditHistory.php");
  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
  }
}
 ?>

    <div class="container">
        <h1 class="h1">Изменение новостей</h1>
        <a class="none" href="History.html">Назад</a>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Текст:</td>
                    <td><textarea class="texta" name="content"><?= isset($_GET['red_id']) ? $product['content'] : ''; ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="OK"></td>
                </tr>
            </table>
        </form>

        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Текст</th>
                <th>Редактирование</th>
            </tr>
            <?php
      $sql = mysqli_query($connect, 'SELECT `ID`, `content` FROM `about`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td>{$result['ID']}</td>" .
             "<td>{$result['content']}</td>" .
             "<td><a class='a' href='?red_id={$result['ID']}'>Изменить</a></td>" .
             '</tr>';
      }
    ?>
        </table>
    </div>
</body>

</html>
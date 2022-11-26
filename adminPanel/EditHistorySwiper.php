<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/EDNews.css">
    <link rel="stylesheet" href="../adaptation/H1.css">
    <link rel="stylesheet" href="AdaptaciaAll.css">
    <title>Изменение новостей</title>
</head>

<body>

    <?php include '../connect/connect.php';?>
    <?php
    $fileName = htmlspecialchars($_POST['picture']);
    $fileText = $_POST['TextFile'];
    //Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БД
    if (isset($_GET['red_id'])) {
        $sql = mysqli_query($connect, "SELECT `ID`, `years`, `content`, `content1`, `pictures` FROM `history` WHERE `ID`={$_GET['red_id']}");
        $product = mysqli_fetch_array($sql);
      }
if (isset($_POST["submit"]) && $_POST["years"] && $_POST["content"] && $_POST["pictureText"]) {
  if (isset($_GET['red_id'])) {
      $sql = mysqli_query($connect, "UPDATE `history` SET `years` = '{$_POST['years']}', `content` = '{$_POST['content']}', `content1` = '{$_POST['content1']}', `pictures` = '{$_POST['pictureText']}' WHERE `ID`={$_GET['red_id']}");
  } else {
      $sql = mysqli_query($connect, "INSERT INTO `history` (`years`, `content`, `content1`, `pictures`) VALUES ('{$_POST['years']}', '{$_POST['content']}','{$_POST['content1']}','{$_POST['pictureText']}')");
  }

  if ($sql) {
    echo '<p class="utext">Успешно измененно!</p>';
    header("refresh: 5; EditHistorySwiper.php");
  } else {
    echo '<p>Проверте заполненность всех полей<br></p>';
  }
}else{
    echo '<p class="utext">Проверте заполненность всех полей<br></p>';
}

 ?>

<div class="container">
        <h1 class="h1 black">Изменение слайдера истории</h1>
        <a class="none" href="History.html">Назад</a>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Год:</td>
                    <td><input type="text" class="text" name="years" value=<?= isset($_GET['red_id']) ? $product['years'] : ''; ?>></input></td>
                </tr>
                <tr>
                    <td>Текст:</td>
                    <td><textarea class="texta" name="content"><?= isset($_GET['red_id']) ? $product['content'] : ''; ?></textarea></td>
                </tr>
                <tr>
                    <td>Текст:</td>
                    <td><textarea class="texta" name="content1"><?= isset($_GET['red_id']) ? $product['content1'] : ''; ?></textarea></td>
                </tr>
                <tr>
                    <td>Картинка:</td>
                    <td><input type="file" accept=".jpg,.png,.jpeg" name="pictures" class="file" id="file"></td>
                    <!-- <td><input type="text" name="pictureText" id="TextFile" class="TextFile" value="<?= isset($_GET['red_id']) ? $product['pictures'] : $newPer; ?>"></td> -->
                </tr>

                <tr>
                    <td colspan="2"><img class="picture_id" src=../images/history/<?php echo $product['pictures']?>></td>
                    <td colspan="2"><div class="edit"><input type="submit" name="submit" value="Изменить"></div></td>
                </tr>
            </table>
        </form>

        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Год</th>
                <th>Текст</th>
                <th>Текст</th>
                <th>Картинка</th>
                <th>Действие</th>
            </tr>
            <?php
      $sql = mysqli_query($connect, 'SELECT `ID`, `years`, `content`, `content1`, `pictures` FROM `history`');
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td class='content'>{$result['ID']}</td>" .
             "<td class='content'>{$result['years']}</td>" .
             "<td class='content'>{$result['content']}</td>" .
             "<td class='content'>{$result['content1']}</td>" .
             "<td class='content'><img src=../images/history/{$result['pictures']}></td>" .
             "<td><a class='a content' href='?red_id={$result['ID']}'>Изменить</a></td>" .
             '</tr>';
      }
    ?>
        </table>
    </div>
<script src="../js/script.js"></script>
<script src="../js/EDscript.js"></script>
</body>

</html>
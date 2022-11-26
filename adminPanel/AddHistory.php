<?php include '../connect/connect.php'; ?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../adaptation/H1.css">
  <link rel="stylesheet" href="../css/MW.css">
  <link rel="stylesheet" href="../css/EDNews.css">
  <link rel="stylesheet" href="AdaptaciaAll.css">
  <title>Добавление новости</title>
</head>

<body>
  <div class="container">
    <h1 class="zagol black">Добавление абзац в историю</h1>
    <a class="none" href="History.html">Назад</a>
    <form action="" method="POST">
      <div class="row">
        <div class="col-25">
          <label for="name">Текст</label>
        </div>
        <div class="col-75">
          <textarea type="content" id="content" name="Connect"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Добавить" name="button">
      </div>
    </form>
  </div>
</body>
<?php
  echo $_POST["content"];
  if (isset($_POST["Connect"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($connect, "INSERT INTO `about` (`Connect`) VALUES ('{$_POST['Connect']}')");

    if ($sql) {
      echo '<p class="yspeh">Запись успешно добавлена</p>';
      header("refresh: 5; AddHistory.php");
    } else {
      echo '<p class="yspeh">Заполните поля</p>';
    }
  }
?>
<script src="js/add.js"></script>

</html>
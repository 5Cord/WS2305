<?php include '../connect/connect.php';?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/MW.css">
    <link rel="stylesheet" href="../css/EDNews.css">
    <link rel="stylesheet" href="../adaptation/H1.css">
    <link rel="stylesheet" href="AdaptaciaAll.css">
    <title>Добавление новости</title>
</head>

<body>
    <div class="container">
        <h1 class="zagol black">Добавление новости</h1>
        <a class="none" href="News.html">Назад</a>
        <form action="" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Заголовок</label>
                </div>
                <div class="col-75">
                    <input type="text" id="title" name="title">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Текст</label>
                </div>
                <div class="col-75">
                    <textarea type="text" id="content" name="content"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country" class="col-25">Дата</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date" name="date" class="date">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Картинка</label>
                </div>
                <div class="col-75">
                    <input type="file" id="picture" name="picture" class="put"></input>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Путь к картинке</label>
                </div>
                <div class="col-75">
                    <input type="text" id="put" name="put" class="putt"></input>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Добавить">
            </div>
        </form>
    </div>
</body>
<?php
  //Если переменная Name передана
  if (isset($_POST["title"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($connect, "INSERT INTO `news` (`title`, `content`, `date`, `picture`) VALUES ('{$_POST['title']}', '{$_POST['content']}', '{$_POST['date']}', '{$_POST['picture']}')");
    //Если вставка прошла успешно
    if ($sql) {
      echo '<p class="yspeh">Запись успешно добавлена</p>';
      header("refresh: 5; AddNews.php");
    } else {
      echo '<p class="yspeh">Произошла ошибка: ' . mysqli_error($connect) . '</p>';
    }
    unset($_POST);
  }
?>
<script src="js/add.js"></script>

</html>
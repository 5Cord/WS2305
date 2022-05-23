<html lang="en">
<?php include '../connect/connect.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AdaptaciaAll.css">
</head>
<body>
    <link rel="stylesheet" href="../css/AdminP.css">
    <link rel="stylesheet" href="../css/PanelA.css">
    <?php 
      $res= mysqli_query($connect, "SELECT * FROM `feedback`");
      while ($news = mysqli_fetch_assoc($res)){
      ?>
      <div class="block_feedBack">
          <div class="date">Дата: <?php echo $news["datef"] ?></div>
          <div class="name">Имя: <?php echo $news["name"] ?></div>
          <div class="org">Организация: <?php echo $news["org"] ?></div>
          <div class="tel">Телефон: <?php echo $news["tel"] ?></div>
          <div class="email">Эл. почта: <?php echo $news["email"] ?></div>
          <div class="text">Сообщение: <?php echo $news["textF"] ?></div>
      </div>
            <?php }?>
    <a href="blank.html">Назад</a>
</body>
</html>
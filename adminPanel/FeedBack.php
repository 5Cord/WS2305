<html lang="en">
<?php include '../connect/connect.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="AdaptaciaAll.css">
  <link rel="stylesheet" href="../css/AdminP.css">
  <link rel="stylesheet" href="../css/PanelA.css">
</head>

<body>


  <?php
  //Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БДS
  if (isset($_GET['red_id'])) {
    if ($_GET['status'] == 1) {
      $sql = mysqli_query($connect, "UPDATE feedback SET status = REPLACE(status, 1, 0) WHERE ID={$_GET['red_id']}");
    } else if ($_GET['status'] == 0) {
      $sql = mysqli_query($connect, "UPDATE feedback SET status = REPLACE(status, 0, 1) WHERE ID={$_GET['red_id']}");
    }
  }

  if (isset($_POST['All'])) {
    $res = mysqli_query($connect, "SELECT * FROM `feedback`");
  }


  if ($sql) {
    header("refresh: 1; FeedBack.php");
  }
  ?>
  <form action="" method="post" class="forma_seelct onsubmit="submitForm()"">

    <?php

    if ($_POST['sel'] == 2) {
      echo "<div class='selected'>Все записи</div>";
    } else if ($_POST['sel'] == 1) {
      echo "<div class='selected'>Обработанные записи</div>";
    } else {
      echo "<div class='selected'>Не обработанные записи</div>";
    }

    ?>
    <select name="sel" class="seltag" Id="seltag" onchange="localStorage.seltag=this.selectedIndex">
      <option value="2">Все</option>
      <option value="1">Обработано</option>
      <option value="0">Не обработано</option>
    </select>
    <input type="submit" value='Выполнить' class="acctept">
  </form>
  <?php
  if ($_POST['sel'] == 1 || $_POST['sel'] == 0) {
    $res = mysqli_query($connect, "SELECT * FROM `feedback` WHERE `status`='{$_POST['sel']}'");
  } else {
    $res = mysqli_query($connect, "SELECT * FROM `feedback`");
  }
  while ($massageFB = mysqli_fetch_assoc($res)) {
  ?>

    <div class="block_feedBack noneCheckin">
      <div class="date">Дата: <?php echo $massageFB["datef"] ?></div>
      <div class="name">Имя: <?php echo $massageFB["name"] ?></div>
      <div class="org">Организация: <?php echo $massageFB["org"] ?></div>
      <div class="tel">Телефон: <?php echo $massageFB["tel"] ?></div>
      <div class="email">Эл. почта: <?php echo $massageFB["email"] ?></div>
      <div class="text">Сообщение: <?php echo $massageFB["textf"] ?></div>
      <div class="status">Статус: <?php if ($massageFB["status"] == 1) {
                                    echo "Обработано";
                                  } else {
                                    echo "Не обработано";
                                  }
                                  ?></div>
      <?php echo "<a class='processing' href='?red_id={$massageFB['id']}&status={$massageFB['status']}'>Пометить</a>"; ?>
    </div>
  <?php } ?>

  <script>
    let cords = ["scrollX", "scrollY"];
    window.addEventListener("unload", e => cords.forEach(cord => localStorage[cord] = window[cord]));
    window.scroll(...cords.map(cord => localStorage[cord]));
    if(localStorage.seltag!==undefined) seltag.selectedIndex = localStorage.seltag;
  </script>
  <!-- <script src="../js/feedBack.js"></script> -->
</body>

</html>
<div class="zagol h1 light_text">Обратная связь</div>
<form action="" method="post" id="forma">
  <div class="bg_form light_block">
    <div class="bg_color light_block"></div>
    <div class="block_form ">
      <div class="left_form">
        <input class="light_SO" name="name" type="name" placeholder="Представьтесь" required>
        <input class="light_SO tel" name="tel" type="tel" data-mask="phone" placeholder="Номер телефона" required>
      </div>
      <div class="left_form">
        <input class="light_SO" name="org" type="org" placeholder="Организация" required>
        <input class="light_SO" name="email" type="email" placeholder="Эл. почта" required>
      </div>
      <div class="left_form">
        <textarea class="light_SO" name="textf" id="" cols="50" rows="2" placeholder="Текст" required></textarea>
      </div>
      <div class="left_form">
        <input class="light_SO" type="submit">
      </div>
    </div>
  </div>
</form>

<?php
//Если переменная Name передана
if (isset($_POST["name"])) {
  //Вставляем данные, подставляя их в запрос
  $sql = mysqli_query($connect, "INSERT INTO `feedback` (`name`, `tel`, `org`, `email`, `textf`) VALUES ('{$_POST['name']}', '{$_POST['tel']}', '{$_POST['org']}', '{$_POST['email']}', '{$_POST['textf']}')");
  //Если вставка прошла успешно
  if ($sql) {
    echo '<script> alert("Успешно отправленно")
      </script>';
    echo '<script>
        location.replace("1contacts.php")
        </script>';
  } else {
    echo '<p class="yspeh">Произошла ошибка: ' . mysqli_error($connect) . '</p>';
  }
}
?>
<script src="js/add.js"></script>
<script src="https://unpkg.com/imask"></script>
<?php
// include "lib/RedBeanPHP5_7_2.tgz";
$db_host = "192.168.30.119";
$db_user = "5cord";
$db_pass = "5cord";
$db = "belzan";
$connect = mysqli_connect($db_host, $db_user, $db_pass, $db);

if (!$connect) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>
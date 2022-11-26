<?php
// include "lib/RedBeanPHP5_7_2.tgz";
$db_host = "172.22.32.219";
$db_user = "5Cord";
$db_pass = "5Cord";
$dbarticles = "news";
$db = "belzan";
$connect = mysqli_connect($db_host, $db_user, $db_pass, $db);

if (!$connect) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>
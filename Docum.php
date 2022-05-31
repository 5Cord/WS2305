<?php include 'connect/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Документы</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <!-- Link Swiper's CSS -->
    <link rel="icon" href="images\VLogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="adaptation/icon.css">
    <link rel="stylesheet" href="adaptation/Swiper.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="adaptation/H1.css">
    <link rel="stylesheet" href="adaptation/Astyle.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
    <link rel="stylesheet" href="adaptation/AHeader.css">
    <link rel="stylesheet" href="css/docum.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="adaptation/AMakeTools.css">
    <!-- <link rel="stylesheet" href="DarkTheme/Dark.css"> -->
    <style>

    </style>
</head>

<body>
    <?php include 'include/header.php'; ?>
    <?php include 'include/header-swiper.php'; ?>


    <div class="container">
        <div class="bread_point light_text">
            <a href="#" onclick="javascript:history.back(); return false;">О компании-></a>
            <a href="Docum.php">Документы</a>
        </div>
        <div class="zagol light_text">Документы</div>
        <ul>
            <li>
                <div class="point_docum"><a href="https://view.officeapps.live.com/op/view.aspx?src=https%3A%2F%2Fwww.belzan.ru%2Fupload%2Fdealerscontact%252029.xls&wdOrigin=BROWSELINK" target="_bank" class="point_documS light_text">Диллеры автомобильного крепежа</a></div>
            </li>
            <li>
                <div class="point_docum"><a href="https://view.officeapps.live.com/op/view.aspx?src=https%3A%2F%2Fwww.belzan.ru%2Fupload%2Fdealerscontact%25202.xls&wdOrigin=BROWSELINK" target="_bank" class="point_documS light_text">Диллеры машиностроительного крепежа</a></div>
            </li>
            <li>
                <div class="point_docum"><a href="https://www.belzan.ru/upload/belzan_internal_rules.pdf" target="_bank" class="point_documS light_text">Пропускной и внутриобъектный режим АО "БелЗАН"</a></div>
            </li>
        </ul>
    </div>


    <?php include "include/footer.php" ?>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="DarkTheme/DT.js"></script>
    <script src="js/darkThems.js"></script>
</body>

</html>
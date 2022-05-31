<?php include 'connect/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Аренда</title>
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
    <link rel="stylesheet" href="adaptation/ANews.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
    <link rel="stylesheet" href="adaptation/AHeader.css">
    <link rel="stylesheet" href="css/MakeTools.css">
    <link rel="stylesheet" href="css/DarkThems.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="adaptation/AMakeTools.css">
    <style>
        .imgg_instrum {
            margin: 1em auto;
        }
    </style>
</head>

<body>
    <?php include 'include/header.php'; ?>
    <?php include 'include/header-swiper.php'; ?>

    <div class="container">

        <div class="bread_point light_text">
            <a href="#" onclick="javascript:history.back(); return false;">Услуги-></a>
            <a href="arendaProiz.php">Аренда</a>
        </div>
        <div class="zagol light_text">АРЕНДА ПРОИЗВОДСТВЕННЫХ ПОМЕЩЕНИЙ И ОБОРУДОВАНИЯ</div>
        <div class="instrum light_text"></div>

        <div class="zagol zagol_mini light_text">Характеристики размещения:</div>
        <ul class="ul light_text">
            <li class="li light_text">Площадь участка 1136 кв.м.</li>
            <li class="li light_text">Участок расположен внутри Корпуса вспомогательных цехов основной производственной площадкиАО «БелЗАН»;</li>
            <li class="li light_text">Участок обеспечен электроснабжением, теплоснабжением. </li>
        </ul>

        <div class="zagol zagol_mini light_text">Основные коммерческие условия размещения:</div>
        <div class="instrum light_text">1 Срок аренды - 11 месяцев с пролонгацией. </div>
        <div class="instrum light_text">2 Арендатор по Договору аренды производит следующие платежи: </div>
        <ul class="ul light_text">
            <li class="li light_text">фиксированную арендную плату, </li>
            <li class="li light_text">переменную часть (электроснабжение, водоснабжение, водоотведение и т.п.)</li>
        </ul>
        <div class="instrum light_text">Переменная часть определяется на основе фактически потребленных коммунальных услуг
            Арендатором. Стоимость потребленных коммунальных услуг рассчитывается по тарифам,
            коэффициентам и методикам, устанавливаемыми организациями-поставщиками. </div>
        <div class="SS light_text"><a class="light_text" href="PDF/ArendaProiz.pdf">На участке установлено следующее оборудование:</a></div>
        <div class="img_instrum zagol light_text imgg_instrum"><img class="img_instrum imgg_instrum" src="images/about/arenda.png" alt="arenda"></div>

    </div>

    <?php include "include/footer.php" ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="DarkTheme/DT.js"></script>
    <script src="js/darkThems.js"></script>
</body>

</html>
<?php include 'connect/connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>География присутсвия</title>
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
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
    <link rel="stylesheet" href="adaptation/AHeader.css">
    <!-- <link rel="stylesheet" href="DarkTheme/Dark.css"> -->
    <style>

    </style>
</head>

<body>
    <?php include 'include/header.php'; ?>

    <!-- Swiper -->
    <?php include 'include/header-swiper.php'; ?>

    <div class="bread_point light_text">
    <a href="#"  onclick="javascript:history.back(); return false;">О компании-></a>
        <a href="map.php">География присутсвия</a>
    </div>
    <div class="container">
        <div class="zagol light_text">География присутсвия</div>
    </div>
    <div class="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A46f2b211bf0f4343b8736474eed9535b1b9d0560161499286d1ee86d9a15c02c&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
   <?php include "include/footer.php" ?>

    <!-- <div class="map">
<iframe frameborder=0 style='width:90%;height:500px' src='//www.zeemaps.com/pub?group=4367515'> </iframe>
</div> -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="DarkTheme/DT.js"></script>
    <script src="js/darkThems.js"></script>
</body>

</html>
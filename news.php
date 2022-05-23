<?php include 'connect/connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Новости</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="adaptation/AHeader.css">
    <link rel="stylesheet" href="adaptation/Astyle.css">
    <link rel="stylesheet" href="adaptation/H1.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="adaptation/ANews.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
</head>

<body class="light">
    <?php include 'include/header.php'; ?>

    <!-- Swiper -->

    <?php include 'include/header-swiper.php'; ?>
    <?php include 'NewsPagination/index.php'; ?>


    <?php include "include/footer.php" ?>
    <!-- <div class="map">
<iframe frameborder=0 style='width:90%;height:500px' src='//www.zeemaps.com/pub?group=4367515'> </iframe>
</div> -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="js/darkThems.js"></script>
</body>

</html>
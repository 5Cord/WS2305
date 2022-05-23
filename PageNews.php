<?php include 'connect/connect.php';
$res= mysqli_query($connect, "SELECT * FROM `news` WHERE id = \"".$_GET['id']."\"");

$resActual= mysqli_query($connect, "SELECT * FROM `news`  ORDER BY id DESC LIMIT 3");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Страница новости</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pageNews.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="adaptation/Astyle.css">
    <link rel="stylesheet" href="adaptation/APageNews.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">

</head>

<body>

    <?php include 'include/header.php'; ?>


    <!-- Swiper -->

    <!-- <?php include 'include/header-swiper.php'; ?> -->

    <div class="container"> 
        <div class="two_rows_news">
            <div class="actyal_news light_block">
                <div class="main_title_actyal_news">Актуальные новости</div>
                <?php
            while ($ActualNews = mysqli_fetch_assoc($resActual)){
                ?>
                <div class="block_actyal_news">
                    <a href=/PageNews.php?id=<?php echo $ActualNews["id"]?>
                        class="title_actyal_news"><?php echo $ActualNews["title"] ?></a>
                    <div class="date_actyal_news"><?php echo $ActualNews["date"]?></div>
                </div>
                <?php }?>
            </div>
            <?php
            while ($news = mysqli_fetch_assoc($res)){
                ?>
            <div class="main_news">
            <div class="bread_point light_text">
                <a href="News.php" class="light_text">Назад</a>
            </div>   
                <div class="up_container">
                    <div class="date_news light_text"><?php echo $news["date"]?></div>
                    <div class="bg_title">
                        <div class="title_news light_text"><?php echo $news["title"] ?></div>
                    </div>
                </div>
                <div class="text_news light_text">
                    <?php echo $news["content"] ?>
                </div>
                <div class="pictures_news">
                    <img src=images/news/<?php echo $news["picture"] ?> alt="">
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</body>



<?php include "include/footer.php" ?>
<!-- <div class="map">
<iframe frameborder=0 style='width:90%;height:500px' src='//www.zeemaps.com/pub?group=4367515'> </iframe>
</div> -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/script.js"></script>
<script src="js/test.js"></script>
<script src="js/darkThems.js"></script>
</body>

</html>
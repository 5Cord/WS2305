<?php include 'connect/connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Главная</title>
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
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="adaptation/H1.css">
    <link rel="stylesheet" href="adaptation/AHeader.css">
    <link rel="stylesheet" href="adaptation/Astyle.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
    <link rel="stylesheet" href="adaptation/ANews.css">
</head> 
  
<body class="light"> 
    <?php include 'include/header.php'; ?>
 
    <!-- Swiper -->
    <?php include 'include/header-swiper.php'; ?>


    <div class="ao_bg_color light_block" data-aos="zoom-in">
        <div class="container">
            <div class="AO_Container">
                <div class="pic_ao"><img src="images/zav1.png" alt=""></div>
                <div class="text_ao light_text">Акционерное Общество "Белебеевский завод "Автонормаль" (АО "БелЗАН") - современное
                    машиностроительное предприятие, специализирующееся на производстве крепежных изделий и пружин для
                    автомобильной промышленности, металлорежущего и холодновысадочного инструмента.</div>
            </div>
        </div>

    </div>
    <div class="container" class="aos aos--second" data-aos="zoom-in">
        <div class="zagol light_text" class="headline">Новости</div>
        <div class="container_news ">
            <?php 
      $res= mysqli_query($connect, "SELECT * FROM `news` ORDER BY id DESC LIMIT 3");
      while ($news = mysqli_fetch_assoc($res)){
      ?>
            <a href=/PageNews.php?id=<?php echo $news["id"]?> class="block_news light_block">
                <div class="block_pic_news">
                    <img class="pic" src=images/news/<?php echo $news["picture"] ?> alt="">
                </div>
                <div class="block_text_news">
                    <div class="title_news light_text"><?php echo $news["title"] ?></div>
                    <div class="wstext_news light_text"><?php echo $news["content"] ?></div>
                    <div class="date"><?php echo $news["date"] ?></div>
                </div>
            </a>
            <?php }?>
        </div>
    </div>

    <div class="container">
        <div class="zagol light_text">Разновидность продукции</div>
        <div class="swiper1 mySwiper1" data-aos="zoom-in">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper6"><img class="pic_slid" src="images//swiper/romb1.png" alt="">
                    <div class="text_RPord light_text">Гайки</div>
                </div>
                <div class="swiper-slide swiper6"><img class="pic_slid" src="images//swiper/romb2.png" alt="">
                    <div class="text_RPord light_text">Болты</div>
                </div>
                <div class="swiper-slide swiper6"><img class="pic_slid" src="images//swiper/romb3.png" alt="">
                    <div class="text_RPord light_text">Шпильки</div>
                </div>
                <div class="swiper-slide swiper6"><img class="pic_slid" src="images//swiper/romb1.png" alt="">
                    <div class="text_RPord light_text">Пружины</div>
                </div>
                <div class="swiper-slide swiper6"><img class="pic_slid" src="images//swiper/romb2.png" alt="">
                    <div class="text_RPord light_text">Сверла</div>
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
        </div>
    </div>

    <div class="container">
            <div class="zagol zagol_isk light_text">Назначение вида продукции</div>

        <div class="main_container_prod" data-aos="zoom-in">
            <div class="container_prod container_prod_dop">
                <div class="block_prod">
                    <img src="images/icon/car.png" alt="">
                    <div class="text_prod light_text">Автомобильный крепеж</div>
                </div>

                <div class="block_prod">
                    <img src="images/icon/factory.png" alt="">
                    <div class="text_prod light_text">Машиностроительный крепеж</div>
                </div>

                <div class="block_prod">
                    <img src="images/icon/road.png" alt="">
                    <div class="text_prod light_text">Дорожный крепеж</div>
                </div>
            </div>
            <div class="container_prod">

                <div class="block_prod">
                    <img src="images/icon/screw.png" alt="">
                    <div class="text_prod light_text">DIN-Крепеж</div>
                </div>

                <div class="block_prod">
                    <img src="images/icon/hand-up.png" alt="">
                    <div class="text_prod light_text">Ресурсный крепеж</div>
                </div>

                <div class="block_prod">
                    <img src="images/icon/plane.png" alt="">
                    <div class="text_prod light_text">Авиационный крепеж</div>
                </div>
            </div>
        </div>
    </div>

    <div class="zagol light_text">Партнеры</div>
    <div class="swiper2 mySwiper1 light_swiper" data-aos="zoom-in">
        <div class="swiper-wrapper">
            <div class="swiper-slide partner_logo"><img class="pic_part" src="images/S-Logo/lada.png" alt="">
                <div class="text_RPord"></div>
            </div>
            <div class="swiper-slide partner_logo"><img class="pic_part" src="images/S-Logo/ladaIj.png" alt="">
                <div class="text_RPord"></div>
            </div>
            <div class="swiper-slide partner_logo"><img class="pic_part" src="images/S-Logo/uaz.png" alt="">
                <div class="text_RPord"></div>
            </div>
            <div class="swiper-slide partner_logo"><img class="pic_part" src="images/S-Logo/kamaz.png" alt="">
                <div class="text_RPord"></div>
            </div>
            <div class="swiper-slide partner_logo"><img class="pic_part" src="images/S-Logo/autoliv.png" alt="">
                <div class="text_RPord"></div>
            </div>
            <div class="swiper-slide partner_logo"><img class="pic_part" src="images/S-Logo/KTRV_1.png" alt="">
                <div class="text_RPord"></div>
            </div>
            <div class="swiper-slide partner_logo"><img class="pic_part" src="images/S-Logo/gaz.png" alt="">
                <div class="text_RPord"></div>
            </div>
            <div class="swiper-slide partner_logo"><img class="pic_part" src="images/S-Logo/vert.png" alt="">
                <div class="text_RPord"></div>
            </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    </div>


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
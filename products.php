<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Продукты</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Products.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- <link rel="stylesheet" href="adaptation/Astyle.css"> -->
    <link rel="stylesheet" href="adaptation/icon.css">
    <link rel="stylesheet" href="adaptation/Swiper.css">
    <link rel="stylesheet" href="adaptation/AStyle.css">
    <link rel="stylesheet" href="adaptation/H1.css">
    <link rel="stylesheet" href="adaptation/AProducts.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
</head>

<body class="light">
    <?php include 'include/header.php'; ?>

    <!-- Swiper -->

    <?php include 'include/header-swiper.php'; ?>

    <div class="zagol light_text" >Продукция</div>
    <div class="swiper2 mySwiper2 light_block" data-aos="zoom-in" data-aoss>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="block_swiper">
                    <div class="text_swiper_big light_text">Инструментальное производство, более 60 000 позиций инструмента и
                        оснастки</div>
                    <div class="pic_swiper pic_swiper1"><img src="images/swiper/romb1.png" alt=""></div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="block_swiper">
                    <div class="text_swiper_big light_text">22 ПОДКАТЕГОРИИ АВТОМОБИЛЬНОГО КРЕПЕЖА ДЛЯ МОДЕЛЕЙ ВАЗ И КАМАЗ</div>
                    <div class="pic_swiper pic_swiper1"><img src="images/swiper/romb2.png" alt=""></div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="block_swiper">
                    <div class="text_swiper_big light_text">НАЧАЛО ПРОИЗВОДСТВА КРЕПЕЖА ИЗ НЕРЖАВЕЮЩЕЙ СТАЛИ</div>
                    <div class="pic_swiper pic_swiper1"><img src="images/swiper/romb3.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="zagol light_text">Разновидность продукции</div>
        <div class="swiper1 mySwiper1" data-aos="zoom-in">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-mini"><img class="pic_slid" src="images//swiper/romb1.png" alt="">
                    <div class="text_RPord light_text">Гайки</div>
                </div>
                <div class="swiper-slide swiper-mini"><img class="pic_slid" src="images//swiper/romb2.png" alt="">
                    <div class="text_RPord light_text">Болты</div>
                </div>
                <div class="swiper-slide swiper-mini"><img class="pic_slid" src="images//swiper/romb3.png" alt="">
                    <div class="text_RPord light_text">Шпильки</div>
                </div>
                <div class="swiper-slide swiper-mini"><img class="pic_slid" src="images//swiper/romb1.png" alt="">
                    <div class="text_RPord light_text">Пружины</div>
                </div>
                <div class="swiper-slide swiper-mini"><img class="pic_slid" src="images//swiper/romb2.png" alt="">
                    <div class="text_RPord light_text">Сверла</div>
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div> -->
        </div>
        <div class="ssilka light_text">Полный каталог продукции на сайте:
        <a href="https://belsak.ru/" class="light_text">https://belsak.ru/</a></div>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>О компании</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="adaptation/AHeader.css">
    <link rel="stylesheet" href="adaptation/H1.css">
    <link rel="stylesheet" href="adaptation/Astyle.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
    <link rel="stylesheet" href="adaptation/AAbout.css">
    <link rel="stylesheet" href="include/HL.css">
</head>

<body>
    <?php include 'include/header.php'; ?>

    <!-- Swiper -->

    <?php include 'include/header-swiper.php'; ?>
    <div class="container">
        <div class="container_about">
            <div class="left_menu light_block">
                <div class="block_text_lm">

                    <div class="point_left_menu light_text">
                        <a target="_blank" href="map.php">География присутсвия</a>
                    </div>

                    <div class="point_left_menu light_text">
                        <a target="_blank" href="History.php">История</a>
                    </div>
                    <div class="point_left_menu light_text">
                        <a target="_blank" href="License.php">Лицензии</a>
                    </div>
                    <div class="point_left_menu light_text">
                        <a target="_blank" href="Docum.php">Документы</a>
                    </div>
                    <div class="point_left_menu light_text">
                        <a target="_blank" href="training.php">Обучение</a>
                    </div>
                </div>
            </div>
            <div class="block_about_text">
                <div class="up_block">
                    <?php include 'include/headerLeft.php'; ?>
                    <div class="zagol light_text">АО “БЕЛЗАН”</div>
                </div>
                <div class="text_about light_text">
                    <p> Акционерное Общество "Белебеевский завод "Автонормаль" (АО "БелЗАН") - современное
                        машиностроительное предприятие, специализирующееся на производстве крепежных изделий и пружин для
                        автомобильной промышленности, металлорежущего и холодновысадочного инструмента.</p>
                    <p>4 февраля 1967 года Постановлением Совета Министров СССР было принято решение о строительстве новых
                        предприятий по производству комплектующих изделий для Волжского Автозавода, в том числе и
                        Белебеевского завода нормалей и метизов. В октябре того же года было начато строительство, и 18
                        января 1971 года завод был введен в строй действующих.</p>
                    <p> В 1973 году началось освоение деталей для большегрузных автомобилей "КамАЗ".
                        Сегодня среди потребителей продукции АО "БелЗАН" практически все отечественные автопроизводители:
                        "АвтоВАЗ", "КамАЗ", "УАЗ", "ГАЗ", "GM-АвтоВАЗ", АМО "ЗИЛ", "Иж-Авто" и другие, их предприятия -
                        смежники, а также предприятия стран СНГ.</p>
                    <div class="block_img">
                        <img class="pic_about old" src="images/Logo old.png" alt="oldLogo">
                        <img class="pic_about new" blin src="images/Logo blue.png" alt="newLogo">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">

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
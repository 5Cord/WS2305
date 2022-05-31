<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Услуги</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="adaptation/Astyle.css">
    <link rel="stylesheet" href="adaptation/H1.css">
    <link rel="stylesheet" href="adaptation/icon.css">
    <link rel="stylesheet" href="adaptation/Swiper.css">
    <link rel="stylesheet" href="adaptation/AServices.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
</head>

<body>
    <?php include 'include/header.php'; ?>

    <!-- Swiper -->

    <?php include 'include/header-swiper.php'; ?>
    <div class="container_body container_servisec">
        <div class="zagol light_text">Услуги</div>
        <div class="servisec">
            <a href="MakeTools.php" class="block_serv">
                <div class="block_img_serv">
                    <img src="images/swiper/izgInstr.png" alt="ImageServices">
                </div>
                <div class="text_servisec TS_big light_text">Изготовление инструмента</div>
            </a>
            <a href="arendaProiz.php" class="block_serv">
                <div class="block_img_serv">
                    <img src="images/swiper/arenda.png" alt="ImageServices">
                </div>
                <div class="text_servisec TS_big light_text">Аренда производсвенных помещений и оборудования</div>
            </a>
        </div>

        <div class="servisec">
            <a href="Prez.html" target="_bank" class="block_serv">
                <div class="block_img_serv">
                    <img src="images/swiper/zashita.png" alt="ImageServices">
                </div>
                <div class="text_servisec TS_big light_text">Нанесение защитных покрытий</div>
            </a>

            <a href="Metrology.php" class="block_serv">
                <div class="block_img_serv">
                    <img src="images/swiper/metro.png" alt="ImageServices">
                </div>
                <div class="text_servisec TS_big light_text">Метрология</div>
            </a>
        </div>

        <div class="servisec">
            <a href="TermObrab.php" class="block_serv">
                <div class="block_img_serv">
                    <img src="images/swiper/termo.png" alt="ImageServices">
                </div>
                <div class="text_servisec TS_big light_text">Термическая обработка</div>
            </a>
            <a href="Azot.php" class="block_serv">
                <div class="block_img_serv">
                    <img src="images/swiper/azot.png" alt="ImageServices">
                </div>
                <div class="text_servisec TS_big light_text">Азотно-кислородная станция</div>
            </a>
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
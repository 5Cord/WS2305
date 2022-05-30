<?php include 'connect/connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>История</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <!-- Link Swiper's CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="adaptation/AHeader.css">
    <link rel="stylesheet" href="adaptation/Astyle.css">
    <link rel="stylesheet" href="css/history.css">
    <link rel="stylesheet" href="adaptation/H1.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="adaptation/Ahistory.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
</head> 

<body>
    <?php include 'include/header.php'; ?>

    <div class="bread_point light_text">
        <a href="#"  onclick="javascript:history.back(); return false;">О компании-></a>
        <a href="history.php">История</a>
    </div>

    <a href="#navbarNav"><div class="ontop_btn ontop_btn_0ff"> Наверх</div></a>

    <div class="container">
        <div class="comtainer_history light_text">
            <div class="zagol light_text">История</div>
            <?php 
      $res= mysqli_query($connect, "SELECT * FROM `about`");
      while ($news = mysqli_fetch_assoc($res)){
      ?>
            <div class="text_history_container">
                <p class="abzz light_text">
                    <?php echo $news["content"] ?>
                </p>
            </div>
            <?php }?>
        </div>
    </div>
  

    <div class="swiper mySwiper">
        <div class="swiper-wrapper swiper_image">
        <?php 
      $res= mysqli_query($connect, "SELECT * FROM `history`");
      while ($news = mysqli_fetch_assoc($res)){
      ?>
            <div class="swiper-slide">
            <img class="bg_swiper" src="images/OKompanii.jpg" alt="">
                <div class="block_swiper">

                    <div class="year light_text">
                        <?php echo $news["years"] ?>
                    </div>
                    <div class="text_history light_text">
                        <p><?php echo $news["content"] ?></p>
                        <p><?php echo $news["content1"] ?></p>
        
                    </div>
                    <div class="picutres"><img src=images/history/<?php echo $news["pictures"] ?> alt=""></div>
                </div>

            </div>
            <?php }?>
            </div>
    <div class="swiper-pagination"></div>
    </div>


    <?php include "include/footer.php" ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/scriptH.js"></script>
    <script src="js/darkThems.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            mousewheel: {
                invert: false,
            },
        });
    </script>
</body>

</html>
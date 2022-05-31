<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="icon" href="images\VLogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="adaptation/H1.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="adaptation/AFooter.css">
    <title>Поиск</title>
</head>

<body>
    <?php include 'include/header.php'; ?>
    <div class="zagol light_text">Поиск по сайту</div>
    <div class="block_search">
        <form class="form" action="" method="post">
            <input class="text" type="text" class="search">
            <input class="button" type="button" value="Найти">
        </form>
    </div>
    <div class="container">
        <ul class="elastics">
            <li>О компании</li>
            <li>Продукция</li>
            <li>Услуги</li>
            <li>Новости</li>
            <li>Контакты</li>
            <li>Акционерам</li>
            <li>Темная тема</li>
            <li>Прантеры</li>
            <li>Новости</li>
        </ul>
    </div>
    <?php include "include/footer.php" ?>
    <script src="js/darkThems.js"></script>
</body>

</html>
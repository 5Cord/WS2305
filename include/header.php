
   

    <!-- <?php include 'connect/connect.php';?> -->
    <link rel="stylesheet" href="TH.css">
    <link rel="stylesheet" href="css/DarkThems.css">
    <nav class="navbar navbar-expand-lg navbar-dark light_HF">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item phone_point">
                        <a class="nav-link" aria-current="page" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="About.php">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Продукция</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="1contacts.php">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shareholders.php">Акционерам</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="shareholders.php">Поиск</a>
                    </li> -->
                </ul>
                <!-- <div class="nav_right"> -->
                <!-- <form action="http://google.com/search" target="_blank">
                        <input type="search" name="text" placeholder="Поиск по сайту">
                        <input type="hidden" name="as_sitesearch" value="http://sitev1504/news.php">
                        <button type="submit"><img src="https://bumper-stickers.ru/30513-thickbox_default/lupa.jpg" alt=""></button>
                </form> -->
                <!-- <form action=""> -->
                        <!-- <input type="search" name="text" placeholder="Поиск по сайту">
                        <button type="submit"><img src="https://bumper-stickers.ru/30513-thickbox_default/lupa.jpg" alt=""></button> -->
                <!-- </form> -->
                <!-- </div> -->
                <button class="DarkSwitchOn">Тёмная тема</button>
            </div>
        </div>
    </nav>

    <!-- <table border='1'>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
            </tr>
            <?php
                $sql= mysqli_query($connect, "SELECT `ID`, `title` FROM `news` WHERE `title` LIKE \"".$_GET['text']."%\"");
      while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>' .
             "<td><a>{$result['ID']}</td>" .
             "<td>{$result['title']}</td>" .
             '</tr>';
      }
    ?>
        </table> -->

    <!-- Дополнительный JavaScript; выберите один из двух! -->

    <!-- Вариант 1: Bootstrap в связке с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Вариант 2: Bootstrap JS отдельно от Popper
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
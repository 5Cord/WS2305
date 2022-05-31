<?php include './connect/connect.php'; ?>
<?php
require_once("db.php");
if($connect == false){
	echo "Error!";
	echo mysqli_connect_errno();
	exit();
}
if (isset($_GET['page'])){
	$page = $_GET['page'];
} else {
	$page = 1;
}
$limit = 6;
$number = ($page * $limit) - $limit;
$res_count = mysqli_query($connect, "SELECT COUNT(*) FROM `$db` ");
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_pag = ceil($total / $limit);
$query = mysqli_query($connect, "SELECT * FROM $db ORDER BY id DESC LIMIT $number, $limit ");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Документ без названия</title>
</head>
<body>

<?php 

if(mysqli_num_rows($query) == 0){
	echo "There are no records!";
}	else {
    ?>
		</div>
	<div class="container">
	<div class="zagol light_text" class="headline">Новости</div>

	</div>
	   <div class="container" class="aos aos--second" data-aos="zoom-in">
        <div class="container_news">

    <?php
while($article = mysqli_fetch_assoc($query)){
?>
            <a href=/PageNews.php?id=<?php echo $article["id"]?> class="block_news light_block">
                <div class="block_pic_news">
                    <img class="pic" src=../images/news/<?php echo $article["picture"] ?> alt="">
                </div>
                <div class="block_text_news">
				<div class="title_news light_text"><?php echo $article["title"] ?></div>
                    <div class="date"><?php echo $article["date"] ?></div>
                </div>
            </a>
	<?php
    }
    }
	?>
				</div>
    </div>
	<div class="container_pag">
	<div class='paginacia'>
				<?php
				for ($i = 1; $i <=$str_pag; $i++){
	echo "<a class='pag' href=news.php?page=".$i.">".$i."</a>";
	sleep(1);
}?></div>
</div>
    <script>


// nav.forEach(e => {
//     e.addEventListener("click", () => {
//         e.classList.add('active_pag');
//     });
// })

	</script>
</body>
</html>

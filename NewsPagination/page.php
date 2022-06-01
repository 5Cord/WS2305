<?php
include "../connect/connect.php";
if($connect == false){
	echo "Error!";
	echo mysqli_connect_errno();
	exit();
}
$page = $_GET['id'];
echo $page;
$query = mysqli_query($connect, "SELECT * FROM $dbarticles WHERE id='$page' ");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
<style>
	.art{border: 1px solid #787777;
	width: 800px;
	
	}
	</style>
<body>
<?php 
$article = mysqli_fetch_assoc($query);
	echo '<div class="art">';
	echo '( '.$article['id'].' ) <a href=page.php?id='.$article['id'].'>'.$article['title'].'</a><br>';
	echo $article['content'].'<br>';
	echo $article['date'].'<br>';
	echo $article['picture'].'<br>';
	echo '</div>';
?>
</body>
</html>

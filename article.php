<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		require_once "functions/functions.php";
		$news = getArticle ($_GET["id"]);
		$title = 'Новина: '.$news["title"].'';
		require_once "blocks/head.php" 
	?>
</head>
<body>
	<!-- start header -->
	<?php require_once "blocks/header.php" ?>
	<!-- end header -->

	<!-- start content -->
	<div id="content">
		<?php
			if($news["index"] == 1){
				echo '<div id="bigArticle_ped">
				<img src="/img/articles/4.jpg" alt="Статья '.$news["id"].'" title="Статья '.$news["id"].'">
				<h2>'.$news["title"].'</h2>
				<p>
					'.$news["full_text"].'
				</p>
				<a href="newsStud.php">
					<div id="det">
						Назад
					</div>
				</a>
			</div>';
			}
			else {
				echo '<div id="bigArticle_stud">
				<img src="/img/articles/4.jpg" alt="Статья '.$news["id"].'" title="Статья '.$news["id"].'">
				<h2>'.$news["title"].'</h2>
				<p>
					'.$news["full_text"].'
				</p>
				<a href="newsStud.php">
					<div id="det">
						Назад
					</div>
				</a>
			</div>';
			}
		?>
	</div>
	<!-- end content -->

	<!-- start footer -->
	<?php require_once "blocks/footer.php" ?>
	<!-- end footer -->
</body>
</html>
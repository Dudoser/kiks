<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<?php
		require_once "functions/functions.php";
		$title = "Новини";
		require_once "blocks/head.php";
		$news = getNews (10000000000, null);
	?>
</head>
<body>
	<!-- start header -->
	<?php require_once "blocks/header.php" ?>
	<!-- end header -->

	<!-- stars menu -->
	<?php require_once "blocks/menu.php" ?>
	<!-- end menu -->

	<!-- start content -->
	<div id="content">

		<?php
			include_once "functions/functions.php";
			
			if(isset($_SESSION['logged_user'])){
				for ($i=0; $i <count($news); $i++) { 
					if ($news[$i]["index"] == 1){
						if ($i == 0)
							echo "<div id=\"bigArticle_ped\">";
						else
							echo "<div class=\"article_ped\">";
						echo '<a target="_blank" href="/article.php?id='.$news[$i]["id"].'">
								<img src="/img/articles/4.jpg" alt="Статья '.$news[$i]["title"].'" title="Стаття: '.$news[$i]["title"].'">
								</a>
						<h2>'.$news[$i]["title"].'</h2>
						<p id= "border">
							'.$news[$i]["intro_text"].'
						</p>
						<p>
							<div id="data">
								'.$news[$i]["data"].'
							</div>
							<div id = "det">
								<a target="_blank" href="/article.php?id='.$news[$i]["id"].'">
									<div class="more" title="Дізнатись детельніше">Детельніше</div>
								</a>
							</div>
							<div id = "vid">
							<a href="delet_article.php?id='.$news[$i]["id"].'" name="delete">
								<div title = "натисніть цю кнопку щоб видалити цю новину">
									Видалити цю новину
								</div>
							</a>
							</div>
						</p>
					</div>';

						if ($i == 0) {
							echo "<div class=\"clear\"><br /></div>";
						}
					}
					else {
						if ($i == 0)
							echo "<div id=\"bigArticle_stud\">";
						else
							echo "<div class=\"article_stud\">";
						echo '<a target="_blank" href="/article.php?id='.$news[$i]["id"].'">
								<img src="/img/articles/5.jpg" alt="Статья '.$news[$i]["title"].'" title="Стаття: '.$news[$i]["title"].'">
							</a>
						<h2>'.$news[$i]["title"].'</h2>
						<p id= "border">
							'.$news[$i]["intro_text"].'
						</p>
						<p>
							<div id="data">
								'.$news[$i]["data"].'
							</div>
							<div id = "det">
								<a target="_blank" href="/article.php?id='.$news[$i]["id"].'">
									<div class="more" title="Дізнатись детельніше">Детельніше</div>
								</a>
							</div>
							<div id = "vid">
							<a href="delet_article.php?id='.$news[$i]["id"].'" name="delete">
								<div title = "натисніть цю кнопку щоб видалити цю новину">
									Видалити цю новину
								</div>
							</a>
							</div>
						</p>
					</div>';

						if ($i == 0) {
							echo "<div class=\"clear\"><br /></div>";
						}
					}
				}
			}
			else{
				for ($i=0; $i <count($news); $i++) { 
					if ($news[$i]["index"] == 1){
						if ($i == 0)
							echo "<div id=\"bigArticle_ped\">";
						else
							echo "<div class=\"article_ped\">";
						echo '<a target="_blank" href="/article.php?id='.$news[$i]["id"].'">
								<img src="/img/articles/4.jpg" alt="Статья '.$news[$i]["title"].'" title="Стаття: '.$news[$i]["title"].'">
							</a>
						<h2>'.$news[$i]["title"].'</h2>
						<p id= "border">
							'.$news[$i]["intro_text"].'
						</p>
						<p>
							<div id="data">
								'.$news[$i]["data"].'
							</div>
							<div id = "det">
								<a target="_blank" href="/article.php?id='.$news[$i]["id"].'">
									<div class="more" title="Дізнатись детельніше">Детельніше</div>
								</a>
							</div>
						</p>

					</div>';

						if ($i == 0) {
							echo "<div class=\"clear\"><br /></div>";
						}
					}
					else{
						if ($i == 0)
							echo "<div id=\"bigArticle_stud\">";
						else
							echo "<div class=\"article_stud\">";
						echo '<a target="_blank" href="/article.php?id='.$news[$i]["id"].'">
								<img src="/img/articles/5.jpg" alt="Статья '.$news[$i]["title"].'" title="Стаття: '.$news[$i]["title"].'">
							</a>
						<h2>'.$news[$i]["title"].'</h2>
						<p id= "border">
							'.$news[$i]["intro_text"].'
						</p>
						<p>
							<div id="data">
								'.$news[$i]["data"].'
							</div>
							<div id = "det">
								<a target="_blank" href="/article.php?id='.$news[$i]["id"].' ">
									<div class="more" title="Дізнатись детельніше">Детельніше</div>
								</a>
							</div>
						</p>

					</div>';

						if ($i == 0) {
							echo "<div class=\"clear\"><br /></div>";
						}
					}
				}
			}	 
		?>
	</div>
	<!-- end content -->

	<!-- start footer -->
	<?php require_once "blocks/footer.php" ?>
	<!-- end footer -->
</body>
</html>
<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = "Контакти";
		require_once "blocks/head.php" 
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
		<div id="contact">
			<img id="png" src="img/16.png" width="350" height="400" title="ДЕТУТ" alt="ДЕТУТ">
		</div>
		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10164.05533194549!2d30.4822795!3d50.440843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc8ae0bd7a89bf45e!2z0JPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INGN0LrQvtC90L7QvNC40LrQvi3RgtC10YXQvdC-0LvQvtCz0LjRh9C10YHQutC40Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDRgtGA0LDQvdGB0L_QvtGA0YLQsA!5e0!3m2!1sru!2sua!4v1479544426995" width="400" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			<a title="Перейти до гугл карт" target="_blank" href="https://maps.google.com.ua/maps?f=q&amp;source=embed&amp;hl=ru&amp;geocode=&amp;q=%D0%BB%D1%83%D0%BA%D0%B0%D1%88%D0%B5%D0%B2%D0%B8%D1%87%D0%B0+19+%D0%BA%D0%B8%D0%B5%D0%B2&amp;aq=&amp;sll=50.402036,30.532691&amp;sspn=0.662616,1.234589&amp;ie=UTF8&amp;hq=&amp;hnear=%D1%83%D0%BB.+%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D1%8F+%D0%9B%D1%83%D0%BA%D0%B0%D1%88%D0%B5%D0%B2%D0%B8%D1%87%D0%B0,+19,+%D0%9A%D0%B8%D0%B5%D0%B2,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%9A%D0%B8%D0%B5%D0%B2&amp;ll=50.440843,30.482279&amp;spn=0.005172,0.009645&amp;t=m&amp;z=14">Переглянуты збільшену карту положення корпусу</a>
		</div>
		<div id="info">
			<h2>Головний корпус Університету:</h2>
			<p class="info">03049 м. Київ-49, вул. М. Лукашевича, 19</p>
			<ul class="info">
				<li><b>Приймальна ректора</b> -   (044) 591-51-18</li>
				<li><b>Приймальна комісія:</b></li>
					<ul>
						<li>(044) 248-94-91</li>
						<li>(044) 465-42-89 </li>
						<li> (044) 591-51-89 </li>
					</ul>
			</ul>
		</div>
		<div id="info_1">
			<h2>Кафедра АКІТТ:</h2>
			<p class="info"><b>5 поверх головного корпусу</b></p>
			<ul class="info">
				<li>Номер телефону кафедри: </li>
					<ul>
						<li><b>Завідувач кафедри</b>: Стасюк Олександр Іонович (505 каб.)</li>
						<li><b>Завідувач лабораторії</b> Барська Наталя Дмитрівна (503 аудит.)</li>
					</ul>
			</ul>
		</div>
	</div>
	
	<!-- end content -->

	<!-- start footer -->
	<?php require_once "blocks/footer.php" ?>
	<!-- end footer -->
</body>
</html>
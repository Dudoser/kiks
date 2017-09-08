<!DOCTYPE html>
<html>
<head>
	<?php
		$title = "Головна";
		require_once "blocks/head.php" 
	?>
</head>
<body>
	<!-- start header -->
	<?php require_once "blocks/header.php" ?>
	<!-- end header -->

	<!-- start content -->
	<div id="content">
		 <form action="authorize.php" method="post">
     		Логин: <input type="text" name="user_name"><br>
     		Пароль: <input type="password" name="user_pass"><br>
     		<input type="submit" name="Submit">
 		</form>
	</div>
	<!-- end content -->

	<!-- start footer -->
	<?php require_once "blocks/footer.php" ?>
	<!-- end footer -->
</body>
</html>
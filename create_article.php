<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$title = "Додати новину";
		require_once "blocks/head.php" 
	?>
</head>
<body>
	<!-- start header -->
	<?php require_once "blocks/header.php" ?>
	<!-- end header -->

	<!-- start content -->
	<div id="content" method="post">
		<form method="post" action="" id="con">
			<textarea class="con_2" maxlength="30" cols="30" rows="1" placeholder="Введіть не менше 5 символів і не більше ніж 50 символів!" name="title"></textarea>
			<textarea class="con_2" maxlength="50" cols="30" rows="1" placeholder="Введіть не менше 30 символів і не більше ніж 60 символів!" name="intro_text"></textarea>
			<textarea class="con_2" cols="30" rows="10" name="full_text" placeholder="Введіть текст новини..."></textarea>
			<label class="con_2"><input type="checkbox" name="check[]" value="ped" />Для викладача</label>
			<label class="con_2"><input type="checkbox" name="check[]" value="stud" />Для студента</label>
			<input type="submit" name="submit" value="Додати новину" />
		</form>
			
		<p class="reg_p" id="id_1">
			Заголовок: 
		</p>
		<p class="reg_p" id="id_2">
			Втсупний текст:
		</p> 
		<p class="reg_p" id="id_3">
			Текст статті:
		</p>
		<?php
			$submit=$_POST['submit']; 
			if(isset($submit)){
				$title  = htmlspecialchars($_POST['title']);
				$intro_text = htmlspecialchars($_POST['intro_text']);
				$full_text = htmlspecialchars($_POST['full_text']);
				$check = $_POST['check'];
				$error1 = "Ви ввели більше ніж 50 символів у заголовок";
				$error2 = "Ви ввели менше ніж 15 символів вступного тексту";
				$error3 = "Ви ввели більше ніж 60 символів вступного тексту";
				$error4 = "Ви ввели занадто корткий заголовок новини";
				$error5 = "Ви ввели неправильну дату, будь ласка введіть сьогоднішню дату через дефіз (як у зразку)";
				$error6 = "Оберіть для кого ця новина, \"Для студента\" чи \"Для викладача\" ";

				$date = date('Y-m-d');

				function IsChecked($check,$value)
    				{
       					if(!empty($_POST[$check]))
       					{
            				foreach($_POST[$check] as $chkval)
            				{
                				if($chkval == $value)
                				{
                    				return true;
                				}
            				}
        				}
        				return false;
    				}
    			if(IsChecked('check','ped'))
				{
					$check1 = 1;
				}
				elseif (IsChecked('check','stud')) {
					$check1 = 2;
				}
				elseif (IsChecked('check','ped') || IsChecked('check','stud')) {
					echo "$error6";
					exit;
				}
				else {
					echo "$error6";
					exit;
				}

				if (strlen($title) < 5) {
					echo "$error4 <br />";
					exit;
				}
				elseif (strlen($title) > 50) {
					echo "$error1 <br />";
					exit;
				}
				elseif (strlen($intro_text) < 15) {
					echo "$error2 <br />";
					exit;
				}
				elseif (strlen($intro_text) > 60) {
					echo "$error3 <br />";
					exit;
				}
				else {


				
					$mysqli = false;
					function connectDB () {
						global $mysqli;
						$mysqli = new mysqli ("localhost", "root", "", "detut");
						$mysqli->query("SET NAMES 'utf8'");
					}

					function closeDB () {
						global $mysqli;
			 			$mysqli-> close ();
					}
					connectDB();
					$result = $mysqli->query("INSERT INTO `detut`.`newsstud` (`id`, `title`, `intro_text`, `full_text`, `data`, `index`) VALUES (NULL, '$title', '$intro_text', '$full_text', '$date', '$check1');");
					closeDB();
					echo "Новина додана!";
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
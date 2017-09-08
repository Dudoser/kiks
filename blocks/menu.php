<div id="menu">
	<div id="graphStudents">
		<div class="menu" title="Розклад">
			<div class="new-select-style-wpandyou">
				<select onchange="location.href=this.value">
					<option value="/">Розклад</option>
					<optgroup label="1-3 курс">
						<option value="http://www.detut.edu.ua/sites/default/files/files/rozklad/denna/07.02.17/ipcz/1_3_ipcz.xls">Завантажити</option>
						<option value='https://cloud.mail.ru/public/CEwc/txr5eoU4f'>
							Переглянути онлайн
						</option>
					</optgroup>
					<optgroup label="4 курс">
						<option value="http://www.detut.edu.ua/sites/default/files/files/rozklad/denna/07.02.17/ipcz/4_ircz.xls">Завантажити</option>
						<option value='https://cloud.mail.ru/public/MXiD/7AAeHqxLz'>
							Переглянути онлайн
						</option>
					</optgroup>
					<optgroup label="4 курс, маг">
						<option value="http://www.detut.edu.ua/sites/default/files/files/rozklad/denna/07.02.17/ipcz/mag_ipcz.xls" >Завантажити</option>
						<option value="https://cloud.mail.ru/public/9AnV/gkGtYTUDB">Переглянути онлайн</option>
					</optgroup>
					<optgroup label="3-4 курс скороченики">
						<option value="http://www.detut.edu.ua/sites/default/files/files/rozklad/denna/07.02.17/ipcz/3_4_pr._ipcz.xls" >Завантажити</option>
						<option value="https://cloud.mail.ru/public/3bBd/xp1xxtF7D">Переглянути онлайн</option>
					</optgroup>
				</select>
			</div>
		</div>
	</div>
	<a href="chair.php">
		<div class="menu" title="Склад кафедри">Склад кафедри</div>
	</a>
	<div id="library">
		<a href="library.php">
			<div class="menu" title="Бібліотека">Бібліотека</div>
		</a>
	</div>
	<div id="schoolBoy">
		<a href="../schoolBoy.php">
			<div class="menu" title="Абітурієнту">Абітурієнту</div>
		</a>
	</div>
	<div id="newsStudents">
		<a href="newsStud.php">
			<div class="menu" title="Новини">Новини</div>
		</a>
		<?php
			if(isset($_SESSION['logged_user'])){
     			echo"<a href=\"create_article.php\"><div class=\"menu\">додати новину</div></a>";
 			}
		?>
	</div>
	<div id="schoolBoy">
		<a href="../history.php">
			<div class="menu" title="Абітурієнту">Історія кафедри</div>
		</a>
	</div>
</div>
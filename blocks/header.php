<header>
    <div id="header_top">
        <div class="header_top_left">
            <h1><a href="/" title="На головну">АКІТT</a></h1>
            <p>Ласкаво просимо на сайті кафедри АКІТТ</p>
        </div>
        <div class="header_top_right">
            <a href="../pedagog_auth.php">Студент/Викладач</a>
            <a href="http://detut.edu.ua/" title="Перейти на сайт університета" target="_blank">Сайт університету</a>
            <a href="contacts.php" title="Контакти">Контакти</a>
            <?php
                if(isset($_SESSION['logged_user'])){
                    echo"<a href=\"exit.php\">Вихід</a>";
            }
            ?>
        </div>
    </div>
    <div id="header_mid">
    </div>
    <div id="header_bot">
    	<!-- stars menu -->
		<?php require_once "blocks/menu.php" ?>
		<!-- end menu -->
    </div>
</header>
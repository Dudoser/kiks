<?php
 session_start();
 if($_POST['Submit']){
     if(($_POST['user_name']=="pedagog")&&($_POST['user_pass']=="for_pedagog")){
         $_SESSION['logged_user'] = $_POST['user_name'];
         header("Location: index.php");
         exit;
     }
 }
 ?>
 <html>
    <body>
        Вы ввели неверный пароль!
    </body>
 </html>
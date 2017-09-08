<?php
	include_once "functions/functions.php";
	$id = $_GET['id'];
	global $mysqli; 
	connectDB(); 
	$result = $mysqli->query("DELETE FROM `detut`.`newsstud` WHERE `newsstud`.`id` = '$id'"); 
	closeDB(); 
	header('Location: newsStud.php');
?>
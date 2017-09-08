<?php
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli ("localhost", "detut", "root", "root");
		$mysqli->query("SET NAMES 'utf8'");
	}

	function closeDB () {
		global $mysqli;
	 $mysqli-> close();
	}

	function getNews ($limit) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `newsstud` ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		return resultToArray ($result);
	}

	function resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) != false) 
			$array[] = $row;
		return $array;
	}

	function getArticle ($id) {
		global $mysqli; 
		connectDB(); 
		$result = $mysqli->query("SELECT * FROM newsstud WHERE id = $id"); 
		closeDB(); 
		return $result->fetch_assoc(); 
	}﻿
?>
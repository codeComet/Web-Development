<?php 
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbname = "";	

	$conn =  mysqli_connect($server, $user, $password, $dbname);


	$sql = "CREATE DATABASE IF NOT EXISTS todo";

	if(!mysqli_query($conn, $sql)) {
		echo "error creating DATABASE " . mysqli_error($conn) . "<br>";
	}

	$dbname = 'todo';
	mysqli_select_db($conn, $dbname);

	if(!$conn) {
		die("connection failed: " . mysqli_connect_error());
	}


	// table creation

	$tbl = "CREATE TABLE IF NOT EXISTS `tasks` (
			`id` INT NOT NULL AUTO_INCREMENT,
			`task` VARCHAR(500) NOT NULL,
			PRIMARY KEY (`id`))";

	if(!mysqli_query($conn, $tbl)) {
		echo "table creation failed: " . mysqli_error($conn). "<br>";
	}

	?>
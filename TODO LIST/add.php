<?php  

include 'db.php';

if(isset($_POST['send'])) {
	$task = $_POST['task'];

	$sql = "INSERT INTO tasks (task) VALUES ('$task')";

	$val = mysqli_query($conn, $sql);

	if(!$val) {
		echo "Error entering data";
	}

	header('location: index.php');
}


?>
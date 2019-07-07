<?php 
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM tasks WHERE id = $id";

$val = mysqli_query($conn, $sql);

if(!$val) {
	echo "Error deleting data!!";
}

header('location: index.php');



 ?>
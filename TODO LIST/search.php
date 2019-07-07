<?php  

include 'db.php';

if(isset($_POST['find'])) {
	$srch = $_POST['search'];

	$sql = "SELECT task FROM tasks WHERE task LIKE '%$srch%'";

	$data = $conn->query($sql);
	if($data->num_rows>0) {
		while($result = $data->fetch_array()) {
			echo $result['task'] . "<br>";
		}
	} else {
		echo "Task not found!";
	}


	//header('location: index.php');
}


?>
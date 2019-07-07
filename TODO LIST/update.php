<?php 

include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tasks WHERE id = '$id'";

$rows = mysqli_query($conn, $sql);

$row = $rows->fetch_assoc();

if(isset($_POST['send'])) {
	$task = $_POST['task'];
	$sql = "UPDATE tasks SET task = '$task' WHERE id = '$id'";
	$val = mysqli_query($conn, $sql);

	if(!val) {
		echo "Error updating data";
	}

	header('location: index.php');
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My todo list</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Carter+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="update.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<h1 class="text-center mt-4 mb-3">UPDATE LIST</h1>
			<div class="col-md-10 col-md-offset-1">
				<!-- Modal -->
	        <form method="POST">
	          <div class="form-group">
	            <label for="task" class="col-form-label">Task:</label>
	            <input type="text" class="form-control" id="task" name="task" value="<?php echo $row['task']; ?>">
	          </div>
	          <button type="submit" class="btn btn-warning" name="send">UPDATE</button>
	        </form>
	
			</div>
		</div>
	</div>



	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
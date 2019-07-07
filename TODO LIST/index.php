<!DOCTYPE html>
<?php 
include 'db.php';

$sql = "SELECT * FROM tasks";
$result = $conn -> query($sql);	


 ?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My todo list</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Federo&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<h1 class="text-center mt-4 mb-3">TODO LIST</h1>
			<div class="col-md-10 col-md-offset-1">
				<!-- Modal -->
				<div class="btns d-flex justify-content-between">
					<button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">Add new</button>
					
					<form action="search.php" method="POST" style="width: 80%; display: flex; justify-content: space-between;">
						<input type="text" class="form-control" placeholder="Search" name="search" style="margin-right: 5px;">
						 <input type="submit" class="btn btn-outline-info" value="Search" name="find" style="height: 40px;">
						
					</form>
					<button type="button" class="btn btn-warning mb-3" onclick="print()">Print</button>
				</div>

				 
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Add a new task</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form method="POST" action="add.php">
				          <div class="form-group">
				            <label for="task" class="col-form-label">Task:</label>
				            <input type="text" class="form-control" id="task" name="task" required>
				          </div>
				          <button type="submit" class="btn btn-primary" name="send">ADD</button>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
				
				<!--  
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form>
			          <div class="form-group">
			            <label for="recipient-name" class="col-form-label">Recipient:</label>
			            <input type="text" class="form-control" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="message-text" class="col-form-label">Message:</label>
			            <textarea class="form-control" id="message-text"></textarea>
			          </div>
			        </form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Send message</button>
			      </div>
			    </div>
			  </div>
			</div> -->
				<table class="table table-striped text-center table-hover">
				  <thead class="thead-dark">
				    <tr>
				      <th>NO.</th>
				      <th>Task</th>
				      <th>Action</th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>

					<!-- PHP -->
					<?php 
					$i = 1;
							while($row = $result->fetch_assoc()) {
					?>

				    <tr>
				      <th><?php echo $i; ?></th>
				      <td class="col-md-10"><?php echo $row['task']; ?></td>
				      <td><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a></td>
						<td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
				    </tr>


					<?php 
					$i++;
				    }

					 ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
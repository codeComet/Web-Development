<?php 
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbname = "";	

	$conn =  mysqli_connect($server, $user, $password, $dbname);


	$sql = "CREATE DATABASE IF NOT EXISTS bishal";

	if(!mysqli_query($conn, $sql)) {
		echo "error creating DATABASE " . mysqli_error($conn) . "<br>";
	}

	$dbname = 'bishal';
	mysqli_select_db($conn, $dbname);

	if(!$conn) {
		die("connection failed: " . mysqli_connect_error());
	}


	// table creation

	$tbl1 = "CREATE TABLE IF NOT EXISTS `skill` (
			`id` INT NOT NULL AUTO_INCREMENT,
			`java` INT NOT NULL,
			`php` INT NOT NULL,
			`c++` INT NOT NULL,
			`python` INT NOT NULL,
			`html` INT NOT NULL,
			`css` INT NOT NULL,
			`javascript` INT NOT NULL,
			`bootstrap` INT NOT NULL,
			`summary` VARCHAR(500) NOT NULL,
			PRIMARY KEY (`id`))";

	if(!mysqli_query($conn, $tbl1)) {
		echo "table creation failed: " . mysqli_error($conn). "<br>";
	}


	$tbl2 = "CREATE TABLE IF NOT EXISTS `info` (
			`id` INT NOT NULL AUTO_INCREMENT,
			`name` VARCHAR(40) NOT NULL,
			`age` INT NOT NULL,
			`address` VARCHAR(40) NOT NULL,
			`interest` VARCHAR(50) NOT NULL,
			`degree` VARCHAR(30) NOT NULL,
			`study` VARCHAR(40) NOT NULL,
			`phone` VARCHAR(20) NOT NULL,
			`twitter` VARCHAR(20) NOT NULL,
			`birthday` VARCHAR(20) NOT NULL,
			`email` VARCHAR(30) NOT NULL,
			`website` VARCHAR(30) NOT NULL,
			PRIMARY KEY (`id`))";

	if(!mysqli_query($conn, $tbl2)) {
		echo "table creation failed: " . mysqli_error($conn). "<br>";
	}



	$tbl3 = "CREATE TABLE IF NOT EXISTS `work` (
			`id` INT NOT NULL AUTO_INCREMENT,
			`work1` VARCHAR(2048) NOT NULL,
			`work2` VARCHAR(2048) NOT NULL,
			`work3` VARCHAR(2048) NOT NULL,
			`work4` VARCHAR(2048) NOT NULL,
			PRIMARY KEY (`id`))";

	if(!mysqli_query($conn, $tbl3)) {
		echo "table creation failed: " . mysqli_error($conn). "<br>";
	}

	// For Info

	$sql = "SELECT * FROM info";
	$result = $conn -> query($sql);

	// For skills

	$sql_info = "SELECT * FROM skill";
	$result_info = $conn -> query($sql_info);

	//For work gallery

	$sql_work = "SELECT * FROM work";
	$result_work = $conn -> query($sql_work);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My portfolio</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans|Pacifico|Amatic+SC|Unica+One|Bungee+Shade|Ribeye|Sunflower:300|Lobster+Two&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="test.css">
</head>
<body>
	<div class="header">
		<div class="head-nav">
			<ul class="nav justify-content-center">
			  <li class="nav-item" style="border-right: 1px solid #fff;">
			    <a class="nav-link" href="#"><i class="fa fa-envelope"></i> bishal.alam@ymail.com</a>
			  </li>
			  <li class="nav-item" style="border-right: 1px solid #fff;">
			    <a class="nav-link" href="#"><i class="fa fa-phone"></i> +8801835436870</a>
			  </li>">

			  <ul class="nav nav-justified">
			  	<li class="nav-item">
			  		<a class="nav-link" href="#"><i class="fa fa-facebook-f"></i></a>
			  	</li>
			  	<li class="nav-item">
			  		<a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
			  	</li>
			  	<li class="nav-item">
			  		<a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
			  	</li>
			  	<li class="nav-item">
			  		<a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
			  	</li>
			  	<li class="nav-item">
			  		<a class="nav-link" href="#"><i class="fa fa-twitch"></i></a>
			  	</li>
			  	<li class="nav-item">
			  		<a class="nav-link" href="#"><i class="fa fa-youtube"></i></a>
			  	</li>
			  </ul>
			</ul>
		</div>
		<div class="main-nav">
			<nav class="navbar navbar-expand-sm navbar-dark" style="color: #fff;">
			    <span class="navbar-brand d-flex flex-fill ml-5" style="font-family: 'Pacifico', cursive; font-size: 35px; color: red;">Bishal</span>
			    <div class="navbar-collapse collapse" id="navbar">
			        <ul class="navbar-nav justify-content-center d-flex flex-fill">
			            <li class="nav-item">
			               <a class="nav-link" href="#">Home</a>
			            </li>
			            <li class="nav-item">
			               <a class="nav-link" href="#about-me">About me</a>
			            </li>
			            <li class="nav-item">
			               <a class="nav-link" href="#skills">Skills</a>
			            </li>
			            <li class="nav-item">
			               <a class="nav-link" href="#works">Works</a>
			            </li>
			            <li class="nav-item">
			               <a class="nav-link" href="#contact">Contact</a>
			            </li>
			        </ul>
			   </div>
			</nav>
		</div>
		<!-- End of nav area -->
		<div class="heading">
			<h1>Hello there</h1>
			<h3>I'm <span>Bishal</span> and I'm a <span>web developer</span></h3>
			<h5>Let's turn your designs into reality</h5>
		</div>
		<div class="hire-btn text-center mt-5">
			<button class="btn btn-danger btn-lg mr-2" onclick="window.location.href = '#about-me';">Explore me</button>
			<button class="btn btn-primary btn-lg" onclick="window.location.href = '#contact';">Hire me</button>
		</div>
	</div>
	<!-- End of heading area -->
	<div id="about-me">
		<div class="background">
			<div class="layer">
				<h2>About Me</h2>
				<div class="whole">
					<div class="info">
						<h4>Hello...</h4>
						<div class="line">
							<h2 class="vl"></h2>
							<p>I'm Bishal and and I'm 23. I'm a web & graphic designer based in Dhaka, Bangladesh. I started designing and drawing from a young age and most of my design and skills are self taught. Now I'm studying in Computer science and engineering in Independent university Bangladesh.</p>

						</div>
						<hr>

					<!-- PHP code starts -->
					<?php 
						if($result->num_rows >0) {
							while($row = $result->fetch_assoc()) {
					?>

					<div class="personal">
						<div class="first">
							<p><b>Name: </b><?php echo $row["name"]; ?></p>
							<p><b>Address: </b><?php echo $row["address"]; ?></p>
							<p><b>Age: </b><?php echo $row["age"]; ?> Years</p>
							<p><b>Phone: </b><?php echo $row["phone"]; ?></p>
							<p><b>Interests: </b><?php echo $row["interest"]; ?></p>
						</div>
								
						<div class="second">
							<p><b>Birthday: </b><?php echo $row["birthday"]; ?></p>
							<p><b>Website: </b><?php echo $row["website"]; ?></p>
							<p><b>Degree: </b><?php echo $row["degree"]; ?></p>
							<p><b>Study: </b><?php echo $row["study"]; ?></p>
							<p><b>Twitter: </b><?php echo $row["twitter"]; ?></p>
						</div>							
					</div>
					<h3 style="font-size: 20px; color: #ffd32a;"><b>Hire Me: </b><a href="www.yahoo.com" style="font-size: 16px;"><?php echo $row["email"]; ?></a></h3>
	
						<div class="social">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-facebook-f"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
						<div class="download">
							<button class="btn btn-primary mr-3" onclick="window.location.href = '#works';">See Works</button>
							<button class="btn btn-outline-danger" onclick="window.location.href = '#contact';">Send Message</button>
						</div>
					</div>
					<div class="img">
						<img src="<?php echo $row["img"];  ?>" alt="folio">
					</div>
				</div>

				<?php
						}
					}
				?>

				<!-- PHP ends for about me -->
				
			</div>
		</div>

	</div>
	<!-- End of about me -->
	<div id="skills">
		<h2>MY SKILLS</h2>
		<div class="wrapper">
			<div class="skill-desc">
				<h3>Make Beauty Think With Position</h3>
				<div class="line">
					<h2 class="vl"></h2>

					<!-- PHP for skills -->

			<?php 
				if($result_info->num_rows >0) {
					while($row = $result_info->fetch_assoc()) {
			?>
					<p><?php echo $row["summary"]; ?></p>

				</div>
				<button class="btn btn-primary mt-3">Read More</button>
			</div>



				<div class="languages">
					<div class="progress">
		          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $row["java"]; ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Java</div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?php echo $row["php"]; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">PHP</div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $row["c++"]; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">C++</div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: <?php echo $row["python"]; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Python</div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?php echo $row["bootstrap"]; ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Bootstrap</div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php echo $row["javascript"]; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Javascript</div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $row["css"]; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">CSS</div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: <?php echo $row["html"]; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">HTML</div>
		        </div>
				</div>
			<?php
					}
				}
			?>
		</div>
	</div>

	<!-- End of Skill -->

	<div id="works">
		<h2>SOME OF MY WORKS</h2>
		<div class="gallery">
			
			<!-- PHP for work gallery -->
			<?php 
				if($result_work->num_rows >0) {
					while($row = $result_work->fetch_assoc()) {
			?>

				 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="<?php echo $row["work1"] ?>" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="<?php echo $row["work2"] ?>" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="<?php echo $row["work3"] ?>" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item">
				      <img src="<?php echo $row["work4"] ?>" class="d-block w-100" alt="...">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				   <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				   <span class="carousel-control-next-icon" aria-hidden="true"></span>
				   <span class="sr-only">Next</span>
				  </a>
				</div>
			<?php
					}
				}
			?>

			<!-- PHP ends for work gallery -->
		</div>
     
    </div>

	<!-- End of works -->

	 <div id="contact">
      <h2>Contact me</h2>
      <div class="box">
      	<section class="section pb-5">
        <div class="row">   
        <!--Grid column-->
        <div class="col-lg-5 mb-4">
          <!--Form with header-->
          <div class="card">
            <div class="card-body">
              <!--Header-->
              <div class="form-header blue accent-1">
                <h3><i class="fa fa-envelope"></i> Write to me:</h3>
              </div>
              <p>I'll get back to you as fast as I can</p>
              <br>
                <!--Body-->
              <div class="md-form">
                <label for="form-name">Your name</label>
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="form-name" class="form-control">
              </div>
      
              <div class="md-form">
                <label for="form-email">Your email</label>
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="form-email" class="form-control">
              </div>
      
              <div class="md-form">
                <label for="form-Subject">Subject</label>
                <i class="fa fa-tag prefix grey-text"></i>
                <input type="text" id="form-Subject" class="form-control">
              </div>
    
              <div class="md-form">
                  <label for="form-msg">Your message</label>
                <i class="fa fa-pencil-alt prefix grey-text"></i>
                <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
              </div>
    
              <div class="text-center mt-4">
                <button class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
            <!--Google map-->
          <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
            <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      
          <br>
          <!--Buttons-->
          <div class="row text-center">
            <div class="col-md-4">
              <a class="btn-floating blue accent-1"><i class="fa fa-map-marker-alt"></i></a>
              <p>Dhaka 1212</p>
              <p>Bangladesh</p>
            </div>
      
            <div class="col-md-4">
              <a class="btn-floating blue accent-1"><i class="fa fa-phone"></i></a>
              <p>+ 01 234 567 89</p>
              <p>Mon - Fri, 8:00-22:00</p>
            </div>
    
            <div class="col-md-4">
              <a class="btn-floating blue accent-1"><i class="fa fa-envelope"></i></a>
              <p>info@gmail.com</p>
              <p>bishal@live.com</p>
            </div>
          </div>  
        </div>    
      </div> 
    </section>
      </div>
      
    </div>
    <!-- copyright -->
    <div class="copy">
      <p>All rights reserved &copy;2019</p>
    </div>
  </div>





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="main.js"></script>
</body>
</html>
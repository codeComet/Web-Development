<?php 
	$conn = mysqli_connect("localhost", "root", "", "bishal");
	if($conn-> connect_error) {
		die("connection failed:". connect_error);
	}

	$sql = "SELECT * FROM info";
	$result = $conn -> query($sql);

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
			<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="color: #fff;">
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
			<button class="btn btn-danger btn-lg mr-2">Explore me</button>
			<button class="btn btn-primary btn-lg">Hire me</button>
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

						<div class="personal">
							<div class="first">
									<p><b>Name: </b>Redwan Alam Bishal</p>
									<p><b>Address: </b>Dhaka, Bangladesh</p>
									<p><b>Age: </b>23 Years</p>
									<p><b>Phone: </b>+8801835436870</p>
									<p><b>Interests: </b>Football, Chess, Drawing</p>
							</div>
								
							<div class="second">
									<p><b>Birthday: </b>01.01.1996</p>
									<p><b>Website: </b>www.something.com</p>
									<p><b>Degree: </b>B.Sc (Computer Science) </p>
									<p><b>Study: </b>Independent University Bangladesh</p>
									<p><b>Twitter: </b>@bishal_alam</p>
							</div>							
						</div>
						<h3 style="font-size: 20px; color: #ffd32a;"><b>Hire Me: </b><a href="www.yahoo.com" style="font-size: 16px;">bishal.alam@ymail.com</a></h3>						
						
						<div class="social">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-facebook-f"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
						<div class="download">
							<button class="btn btn-primary mr-3">See Works</button>
							<button class="btn btn-outline-danger">Send Message</button>
						</div>
					</div>
					<div class="img">
						<img src="http://www.machovibes.com/wp-content/uploads/2018/07/40-Best-Portrait-Photography-Poses-for-Men-13.jpg" alt="folio">
					</div>
				</div>
				
			</div>
		</div>

	</div>
	<!-- End of about me -->
	<div id="skills">
		<h2>MY SKILLS</h2>
		<div class="wrapper">
			<div class="skill-desc">
				<h3>Make Beauty Think With Position</h3>
				<p>I work as designer and developer and provide my services for customers of all sizes, specializing modern websites, web services and online stores. My passion is to provide digital user experiences through the bold interface. I've designed many modern websites, online stores and provided all types of web services.</p>
				<button class="btn btn-primary">Read More</button>
			</div>
			<div class="languages">
				<div class="progress">
	          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Java</div>
	        </div>
	        <div class="progress">
	          <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">PHP</div>
	        </div>
	        <div class="progress">
	          <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">C++</div>
	        </div>
	        <div class="progress">
	          <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Python</div>
	        </div>
	        <div class="progress">
	          <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Bootstrap</div>
	        </div>
	        <div class="progress">
	          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Javascript</div>
	        </div>
	        <div class="progress">
	          <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">CSS</div>
	        </div>
	        <div class="progress">
	          <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">HTML</div>
	        </div>
			</div>
		</div>
	</div>

	<!-- End of Skill -->

	<div id="works">
		<h2>SOME OF MY WORKS</h2>
		<div class="gallery">
			 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="https://images.unsplash.com/photo-1557991479-2f07e7b41583?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="https://images.unsplash.com/photo-1557943978-d0049d95240c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="https://images.unsplash.com/photo-1557962677-6283cfe07931?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="https://images.unsplash.com/photo-1557992260-ec58e38d363c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80" class="d-block w-100" alt="...">
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
</body>
</html>
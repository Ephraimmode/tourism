<?php 
//database connection
include 'connect.php';
//session for all users
include 'general_session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
		<!-- sourced from bootstrap offical website -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<!-- below are personal css links -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/screens.css">
	<link rel="stylesheet" href="css/dashboard-style.css">

	<!-- w3schools fa icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- fonts on hero area adds -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&family=Roboto:wght@300&display=swap" rel="stylesheet">

	<!-- awesome fonts from cdnjs.com-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
	<!-- owl Carousel from cdnjs.com-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

	
</head>
<body>
	<!-- header area -->

	<div class="container-fluid header">

	<div class="row">
			<div class="col-4 p-2">
				<!-- logo -->
				<a href="#"><img class="logo" src="images/logo.png"></a>
			</div>
		<div class="col-8">
			<div class="row">
				<!-- social media icons -->
				<div class="col-6 social p-2">
				<span style="float: right;">
					<img src="images/facebook.png" width="32" height="32" alt="soc">
					<img src="images/instagram.png" width="32" height="32" alt="soc">
					<img src="images/linkedin.png" width="32" height="32" alt="soc">
					<img src="images/telegram.png" width="32" height="32" alt="soc">
					<img src="images/whatsapp.png" width="32" height="32" alt="soc">
					<img src="images/youtube.png" width="32" height="32" alt="soc">
				</span>
				</div>
				<!-- social media icons ends -->

				<!-- search area panel -->
				<div class="col-6 menu-cover p-2">
				<form style="float: right; padding-right: 20px" class="row search g-3">
					<div class="col-auto">
						<input class="form-control p-1" type="text" placeholder="Enter Keyword" name="">
					</div>
					<div class="col-auto">
						<button type="submit" class="btn btn-primary mb-3 p-1">Search</button>
					</div>
				</form>
				<!-- menu list item on small screens-->
				<span class="menu-list"><button id="bu"><i class="bi p-0 bi-list"></i></button></span>

				</div>
				<!-- search area panel ends -->


			</div>
		</div>
	</div>
		

	<div class="container-fluid">
			<!-- nav bar below -->
			<ul class="unav">
				<span>
				<?php
					if (!isset($_SESSION['user'])) {
						echo '<li class="uli">
							<a href="index.php">Home</a>
							</li>';
					}
					else {
						echo '<li class="uli">
							<a href="dashboard.php">Dashboard</a>
						</li>';
					}
				?>
				<li class="uli">
					<a href="about.php">About us</a>
				</li>
				<?php
					if (!isset($_SESSION['user'])) {
						echo '<li class="uli">
							<a href="story.php">Stories</a>
						</li>';
					}
					else{
						echo '<li class="uli">
							<a href="story.php">Read Stories</a>
						</li>';
					}
				?>
				<li class="uli">
					<a href="contact.php">Contact Us</a>
				</li>
				<?php
					if (isset($_SESSION['user'])) {
						echo '<li class="uli">
								<a href="#">Message (<span style="font-weight: bold; color: orange;">0</span>)</a>
							</li>
							<li class="uli">
								<a href="#">Gallery</a>
							</li>';
					}
				?>
				</span>
				<?php
					if (!isset($_SESSION['user'])) {
						echo '<span class="log">
				<li class="uli">
					<a href="login.php">Login</a>
				</li>
				<li class="uli">
					<a href="register.php">Register</a>
				</li>
				</span>';
					}
					else{
						echo '<span class="log">
				<li class="uli">
					<a href="?logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
				</li>
				</span>';
					}

					if (isset($_GET['logout'])) {
						session_destroy();
						unset($session);
						//redirected to general session to completely destroy sessions.
						redirect('general_session.php?logout');
					}
				?>
			</ul>
	</div>

</div>
<!-- main container end tag on the above div closed tag -->


<!-- small screen menu bar -->
<div class="menubgleft">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About Us</a></li>
		<li><a href="story.php">Stories</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="register.php">Register</a></li>
	</ul>
	<center>
	<form class="row g-3">
		<div class="col-auto">
			<input class="form-control p-1" type="text" placeholder="Enter Keyword" name="">
		</div>
		<div class="col-auto">
			<button type="submit" class="btn btn-primary mb-3 p-1">Search</button>
		</div>
	</form> 
	<hr>
	<span style="margin: 20px;">
					<img src="images/facebook.png" width="32" height="32" alt="soc">
					<img src="images/instagram.png" width="32" height="32" alt="soc">
					<img src="images/linkedin.png" width="32" height="32" alt="soc">
					<img src="images/telegram.png" width="32" height="32" alt="soc">
					<img src="images/whatsapp.png" width="32" height="32" alt="soc">
					<img src="images/youtube.png" width="32" height="32" alt="soc">
				</span>
	</center>
</div>

<!-- header ends here... -->

<!-- body container to structure all contents it is closed at the first code on footer-->
<div class="container-fluid">



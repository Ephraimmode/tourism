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
				<span>
					<img src="" width="32" height="32" alt="soc">
					<img src="" width="32" height="32" alt="soc">
					<img src="" width="32" height="32" alt="soc">
					<img src="" width="32" height="32" alt="soc">
					<img src="" width="32" height="32" alt="soc">
					<img src="" width="32" height="32" alt="soc">
				</span>
				</div>
				<!-- social media icons ends -->

				<!-- search area panel -->
				<div class="col-6 menu-cover p-2">
				<form class="row search g-3">
					<div class="col-auto">
						<input class="form-control p-1" type="text" placeholder="Enter Keyword" name="">
					</div>
					<div class="col-auto">
						<button type="submit" class="btn btn-primary mb-3 p-1">Search</button>
					</div>
				</form>
				<!-- menu list item on small screens-->
				<span class="menu-list"><a href="#"><i class="bi p-0 bi-list"></i></a></span>

				</div>
				<!-- search area panel ends -->


			</div>
		</div>
	</div>
		

	<div class="container">
			<!-- nav bar below -->
			<ul class="unav">
				<span>
				<li class="uli">
					<a href="#">Home</a>
				</li>
				<li class="uli">
					<a href="#">About us</a>
				</li>
				<li class="uli">
					<a href="#">Stories</a>
				</li>
				<li class="uli">
					<a href="#">Contact Us</a>
				</li>
				</span>
				<span class="log">
				<li class="uli">
					<a href="#">Login</a>
				</li>
				<li class="uli">
					<a href="#">Register</a>
				</li>
				</span>
			</ul>
	</div>
<!-- side menu panel on small screen when toggle -->

<div>
	
</div>

</div>
<!-- main container end tag on the above div closed tag -->


<!-- External jQuery included --> 
<script src="js/jquery.js"></script>
<!-- External bootstrap javaScript(s) included --> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- copied source code from w3schools and renamed to popper -->
<script src="popper.js"></script>
</body>
</html>
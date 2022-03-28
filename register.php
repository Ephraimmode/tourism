<!-- below is the header included -->
<?php include 'includes/header.php'; ?>

<!-- page wrapper container -->
<div class="container pagebg">
	<h4 style="text-align: left; color: #333;">Register | Become A Member</h4>
	<p><i>Share your story to millions of people around the world...</i></p>
<hr>
	<div class="row body-content">
		<!-- content here -->
		<div class="col-sm-6">
			<div class="reg">
				<img class="img-fluid rounded mx-auto d-block" src="images/reg.jpeg">
				<p style="color: red; font-weight: bold; text-align: center;">
					Already a member? <a style="text-decoration: none; color: #0996fc;" href="login.php?login">Proceed To Login!</a>
				</p>
			</div>
		</div>
		<div class="col-sm-6">
			<!-- registration form content here -->

			<form action="includes/logs.php" method="post">
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
			</div>

			<div class="form-group">
				<label for="lastname">Last Name</label>
				<input type="text" class="form-control" name="lname" placeholder="Enter Message Title" required>
			</div>

			<div class="form-group">
				<label for="user">Username</label>
				<input type="text" class="form-control" name="user" placeholder="Enter Username" required>
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="passcode" placeholder="Enter Password" required>
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="emailx" placeholder="Enter Email" required>
			</div>

			<div class="row form-group">
				<div class="col-sm-4">
					<label for="country">Country</label>
					<input class="form-control" type="text" name="country" placeholder="Enter Your Country" required>
				</div>
				<div class="col-sm-4">
					<label for="gender">Gender</label>
					<select name="gender" class="form-control">
						<option value="Add Gender">-- Gender --</option>
						<option value="Male"> Male</option>
						<option value="Female"> Female</option>
						<option value="Other"> Other </option>
					</select>
				</div>
				<div class="col-sm-4">
					<label for="occupation">Occupation</label>
					<input class="form-control" type="text" name="occupation" placeholder="Enter Occupation" required>
				</div>
			</div>

			<div class="form-check form-switch">
				<input class="form-check-input" type="checkbox" required>
				<label for="agreement">Switch on the box if you agree to our <a style="text-decoration: none; color: red;" href="#">terms and condition</a>.</label>
			</div>

				<input style="color: #fff" name="register" type="submit" value="Register">
		</form>
		</div>
		
	</div>
</div>

<!-- page wrapper container end-->  



 













<!-- news letter start -->
	<?php include 'includes/newsletter.php'; ?>
	<!-- newsletter end -->
<!-- below is the footer included -->
<?php include 'includes/footer.php'; ?>
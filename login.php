<!-- below is the header included -->
<?php include 'includes/header.php'; ?>


<!-- page wrapper container -->
<div class="container pagebg">
	<h4 style="text-align: left; color: #333;">Register | Become A Member</h4>
	<p><i>Share your story to millions of people around the world...</i></p>
<hr>
	<div class="row contact-content loginbg">
		<!-- content here -->
		<div class="col-12">
			<div class="loginForm">
				<center>
				<form action="includes/logs.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" name="user">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Password" name="passcode">
					</div>

						<input style="color: #fff" type="submit" value="Login" name="login">
				</form>
				<p style="color: #fff; font-weight: bold;">
					<a style="text-decoration: none; color: #fd3644;" href="retrieve.php?password">Reset Password</a>
					<br>
					Not yet a member? <a style="text-decoration: none; color: #fd3644;" href="register.php?register">Become A Member!</a>
				</p>
				</center>
			</div>
		</div>
		
	</div>
</div>

<!-- page wrapper container end-->  




 


























<!-- news letter start -->
	<?php include 'includes/newsletter.php'; ?>
	<!-- newsletter end -->

<!-- below is the footer included -->
<?php include 'includes/footer.php'; ?>
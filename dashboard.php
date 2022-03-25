<?php include 'includes/header.php'; ?>

<!-- dashboad defined row -->
<div class="row">
	<!-- first col starts here -->
	<div class="col-2 left-menu">
		<div class="topbar text-center">
				<span class="tone">Menu</span>
		</div>
  
<!-- left side dashboard navigation -->

		<ul>
			<li><a href="#">dashboard</a></li>
			<li><a href="#">admin page</a></li>
			<li><a href="#">view profile</a></li>
			<li><a href="#">my stories</a></li>
			<li><a href="#">all stories (<span class="text-warning">0</span>)</a></li>
			<li><a href="#">stories by category</a></li>
			<li><a href="#">night mode</a></li>
			<li><a href="#">change password</a></li>
			<li><a href="#">message us</a></li>
			<li><a href="#">log out</a></li>
		</ul>
 
	</div>
<!-- first col up ends here -->

<!-- second col starts here -->
	<div class="col-8">
		<div class="topbar">
			Welcome to your dashboard <span class="tone2">Ephraim</span> | It's Tuesday 12, 2022
		</div>

<!-- users information panel -->
		<div class="row pad-row">
			<div class="col-sm-4">
				<div class="profile-pad-cover">
					<img class="profile-pad img-fluid" src="images/avatar.jpg">
				</div>
			</div>

			<div class="col-sm-4 pad">
				<p>
					<span>Last Name :</span> <i>Ephraim</i><br>
					<span>Username :</span> <i>ephraimmode</i><br>
					<span>Status :</span> <i style="color: green;">Active</i><br>
					<span>Account ID :</span> <i>UPSC23426</i><br>
					<span>Joined :</span> <i>March 17, 2023</i><br>
				</p>
			</div>

			<div class="col-sm-4 pad">
				<p style="font-weight: bold; text-align: center; padding-top: 20px;">
					Published Story <br> (<span style="color: orange;">0</span>)<br>
					<i class="fas fa-book-open"></i>
				</p>
			</div>
		</div>

		<!-- post story form details -->

		<div style="text-align: center; text-transform: uppercase;" class="topbar">
			<span style="font-weight: bolder;">publish your story below </span>
		</div>

		<div class="form-pad">
			<form action="#" method="post">
				<div class="from-group mt-2">
					<input class="form-control" type="text" name="storyTitle" placeholder="Enter Your story Title Here...">
				</div>

				<div class="from-group mt-2 row">
					<div class="col-sm-10">
						<input class="form-control" type="file" name="storyTitle">
					</div>
					<div class="col-sm-2">
						<button class="btn form-control"><i style="color: #fff;" class="fa-solid fa-plus"></i></button>
					</div>
				</div>

				<div class="from-group mt-2 row">
					<div class="col-sm-4">
						<select class="form-control" name="category">
							<option>-- Category --</option>
							<option>Nature</option>
							<option>Artifacts</option>
						</select>
					</div>
					<div class="col-sm-4">
						<input class="form-control" placeholder="-- Country --" type="text" name="country">
					</div>
					<div class="col-sm-4">
						<input class="form-control" type="text" placeholder="-- City --" name="city">
					</div>
				</div>

				<textarea style="height: 150px;" class="form-control mt-2" name="story" placeholder="Type Your Story here..."></textarea>

				<div class="row from-group">
					<div class="col-sm-9">
						<!-- just a place holder for the button to stand alone -->
					</div>
					<div class="col-sm-3">
						<input class="btn form-control" type="submit" name="publish" value="Publish">
					</div>
				</div>

			</form>
		</div>

	</div>
<!-- second col up ends here -->


<!-- third col starts here -->
	<div class="col-2 col3-bg">
		<!-- other elements can come here if need be -->
	</div>
<!-- third col up ends here -->
</div>

<!-- dashboad defined row end -->





































<?php include 'includes/footer.php'; ?>
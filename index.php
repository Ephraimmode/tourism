<?php include 'includes/header.php'; 

?>

<!-- hero area slider -->
<div class="owl-carousel owl-theme">
	<div class="slide slide-1">
		<div class="slide-content">
			<h1 style="text-align: left;">WElcome to <span style="color: #fd3644">up</span>scotland</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, qui odio! Ipsum libero eum quaerat placeat, delectus aspernatur asperiores ullam labore officia praesentium exercitationem laborum culpa cum ad maiores porro?</p>
			<button>Know Us</button>
		</div>
	</div>
	<div class="slide slide-2">
		<div class="slide-content">
		<h1 style="text-align: left;">We have the Stories You seek!</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, qui odio! Ipsum libero eum quaerat placeat, delectus aspernatur asperiores ullam labore officia praesentium exercitationem laborum culpa cum ad maiores porro?</p>
			<button>View Stories</button>
		</div>
	</div>
	<div class="slide slide-3">
		<div class="slide-content">
		<h1 style="text-align: left;">Share Your Tour experience!</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, qui odio! Ipsum libero eum quaerat placeat, delectus aspernatur asperiores ullam labore officia praesentium exercitationem laborum culpa cum ad maiores porro?</p>
			<button>Become a member</button>
		</div>
	</div>
</div>

<!-- end of slider -->

<!-- home content container -->
<div class="container">

<h5 style="margin: 45px 0px">Virtual Tour About Up Scotland</h5>

<!-- about upscotland section -->

<div class="row">
	<div class="col-12 about-section-left">
		<!-- just an internal css style for the imgSack class below -->
		<style>
			.imgSack {
				max-width: 400px;
				max-height: 400px;
				margin: 0 auto; 
				float: left;
				padding: 0px 20px 20px 20px; 
			}
		</style>
		<div class="imgSack">
			<img style="width: 100%; border-radius: 6%;" class="img-rounded" src="images/aboutus.jpg">
		</div>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<br><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			
		</p>
		<a href="#">Read More</a>

	</div>

</div>

<!-- featured stories area -->

<h5 style="margin: 45px 0px">amazing expecctations</h5>

<div class="row explore">

	<div class="col-3 ">
			<img class="img-fluid rounded mx-auto d-block"  src="images/g2.jpeg" alt="Gallery Clips">
			<p>Explore Informative Stories</p>
	</div>

	<div class="col-3">
			<img class="img-fluid rounded mx-auto d-block"  src="images/g2.jpeg" alt="Gallery Clips">
			<p>We Allow you to view Stories</p>
	</div>

	<div class="col-3">
			<img class="img-fluid rounded mx-auto d-block" src="images/g2.jpeg" alt="Gallery Clips">
			<p>Tell Stories any of stories</p>
	</div>

	<div class="col-3">
			<img class="img-fluid rounded mx-auto d-block" src="images/g2.jpeg" alt="Gallery Clips">
			<p>We have diverse tour categories </p>
	</div>
</div>

<!-- featured stories area -->

<h5 style="margin: 45px 0px">Featured recent stories</h5>


<div class="row">
	<div class="col-12 story-area">
		<?php 
				//story retrieved from database.
				$story_query = query("SELECT * FROM story WHERE approval='1' ORDER BY story_id DESC LIMIT 3");
				confirm($story_query);
				while ($story_row = fetch_array($story_query)) {

					//retrieve columns from story table
					$id = $story_row['story_id'];
					$publisher = $story_row['publisher_user_id'];


					//query the user table to get the publisher info and mear with story table.
					$user_query = query("SELECT * FROM users WHERE user_id='$publisher'");
					confirm($user_query);
					$user_row = fetch_array($user_query);

			?>
		<div class="row">
			<div style="padding: 5px;" class="col-2">
				<center>
				<img style="border-radius: 50%; width: 100px; height: 100px; margin-top: 10px" class="img-fluid mx-auto" src="images/avatar.jpg"> 
				<br>
				<b><?php echo $user_row['firstname'].' '.$user_row['lastname']; ?></b>
				<br>
				<i>Posted <?php echo $story_row['time_posted']; ?></i>
				<br>
				<i>Comments (<span style="color: orange;">0</span>)</i>
				</center>
			</div>
			<div style="margin-bottom: 5px;border-bottom: solid 1px red; padding-bottom: 5px;" class="col-10">
				<h6 style="text-align: left;"><a class="story-head-a" href="<?php echo 'read.php?key='.$id; ?>"><?php echo $story_row['story_title']; ?></a></h6>
				<p style="max-height: 200px" class="preview">
				<?php echo $story_row['story_message']; ?>


				</p>
				<a class="story-a" href="<?php echo 'read.php?key='.$id; ?>">Continue Reading...</a>
			</div>
		</div>
		<?php

			} //end of the while loop for story body............

			?>
	</div>
 
	<!-- news letter start -->
	<?php include 'includes/newsletter.php'; ?>
	<!-- newsletter end -->
</div>

</div>
<!-- home content container ends here.. -->


<?php include 'includes/footer.php'; ?>
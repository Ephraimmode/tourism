<!-- below is the header included -->
<?php include 'includes/header.php'; ?>

<!-- entire page container -->
<div class="container pagebg">

	<h4 style="text-align: left; color: #333;">Story | Read All Kinds Stories</h4>
	<p><i>Explore and educate yourself...</i></p>
	<hr>
	

<!-- story area panel -->
<div class="row">
	<div class="col-10 story-area">
		
			<?php 
				//story retrieved from database.
				$story_query = query("SELECT * FROM story WHERE approval='1' ORDER BY story_id DESC");
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

			<div style="border-top: solid 1px #0996fc; margin-top: 2px; padding: 5px;" class="row">
			<div style="padding: 5px;" class="col-2">
				<center>
				<b><i><?php echo $user_row['firstname'].' '.$user_row['lastname']; ?></i></b>
				<br>
				<i><?php echo $story_row['time_posted']; ?></i>
				<br>
				<i>Comments (<span style="color: orange;">0</span>)</i>
				</center>
			</div>
			<div id="#pare" class="col-10">
				<h6 style="text-align: left; text-transform: capitalize;"><a class="story-head-a" href="<?php echo 'read.php?key='.$id; ?>"><?php echo $story_row['story_title']; ?></a></h6>
				<p class="preview">
					<?php echo $story_row['story_message']; ?>
				</p>
				<a class="story-a" href="<?php echo 'read.php?key='.$id; ?>">Continue Reading...</a>
			</div>
			</div>

			<?php

			} //end of the while loop for story body............

			?>	
	</div>

	<div class="col-2">
		cat zone
	</div>
</div>
<!-- story area panel ends -->


</div>
<!-- entire container ends here -->

<!-- news letter start -->
	<?php include 'includes/newsletter.php'; ?>
	<!-- newsletter end -->
<!-- below is the footer included -->
<?php include 'includes/footer.php'; ?>
<!-- below is the header included -->
<?php include 'includes/header.php'; ?>



<div class="container pagebg">
<!-- story area panel -->
<a class="story-a" style="display: inline;" href="story.php">Back To Stories Page</a>
<div class="row">

	<div class="col-12 story-area">
		<div class="row">
			<?php 
			//retrieved key from url
			$id = $_GET['key'];

			//story retrieved from database.
			$story_query = query("SELECT * FROM story WHERE story_id='$id'");
			confirm($story_query);
			$story_row = fetch_array($story_query);

			//retrieve columns from story table
			$story_id = $story_row['story_id'];
			$publisher = $story_row['publisher_user_id'];

			//query the user table to get the publisher info and mear with story table.
			$user_query = query("SELECT * FROM users WHERE user_id='$publisher'");
			confirm($user_query);
			$user_row = fetch_array($user_query);

			?>
			<div style="padding: 5px;" class="col-2">
				<center>
				<img style="border-radius: 50%; width: 100px; height: 100px; margin-top: 10px" class="img-fluid mx-auto" src="images/avatar.jpg"> 
				<br>
				<b><?php echo $user_row['firstname'].' '.$user_row['lastname']; ?></b>
				<br>
				<i><span style="color: pink;"><?php echo $story_row['time_posted']; ?></span></i>
				<br>
				<i>Comments (<span style="color: orange;">0</span>)</i>
				</center>
			</div>
			<div id="#pare" class="col-10">
				<h6 style="text-align: left;"><?php echo $story_row['story_title']; ?></h6>
				
				<div class="read">
					<!-- uploaded image area -->
					<center>
						<?php 
							//gallery table query for images
							$image_query = query("SELECT * FROM gallery WHERE story_id='$story_id' AND publisher_id='$publisher'");
							confirm($image_query);

							while ($image_row = fetch_array($image_query)) {
								# code...	
						?>

							<span style="width: 100px; height: 100px;">
								<img class=" rounded mx-auto" width="200" height="200" src="<?php echo 'uploads/'.$image_row['gallery_media']; ?>">
							</span>

						<?php
						}
						?>
					<!-- uploaded image end -->
					</center>
				<p>
					<?php echo $story_row['story_message']; ?>
				</p>
				</div>

				<div class="comment">
					<hr style="color: red">
					<p style="max-height: 200px; overflow-y: scroll; background-color: lightgrey;">
						reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						
						pt cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<div>
						<!-- <form> -->
							<div style="margin-bottom: 5px;" class="form-row">
								<div class="form-group col-12">
									<textarea placeholder="Type your comment here..." style="height: 100px" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
									<button class="story-a">Publish</button>
									<button id="closeComment" style="background-color: orange;" class="story-a">Close</button>
							</div>
							<hr style="color: red">
						<!-- </form> -->
					</div>
				</div>

				<button id="commentBtn" class="story-a">Comment</button> 
				<button id="viewComment" class="story-a">View Comment</button>
			</div>
		</div>
	</div>

</div>

</div>
<!-- container closed -->





<!-- below is the footer included -->
<?php include 'includes/footer.php'; ?>
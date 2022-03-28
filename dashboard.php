<?php include 'includes/header.php'; ?>
<?php 
include 'includes/session.php'; 
include 'includes/table_query.php';		
?>
<!-- dashboad defined row -->
<div class="row">
	<!-- first col starts here -->
	<div class="col-2 left-menu">
		<!-- left side links -->

		<?php include 'includes/left.php'; ?>
		
 <!-- left side links -->
	</div>
<!-- first col up ends here -->

<!-- second col starts here -->
	<div class="col-8">
		<div class="topbar">
			Welcome to your dashboard <span class="tone2"><?php echo $user_row['firstname']; ?></span> | It's <span style="font-weight: bold; color: pink;"><?php
              echo date("h:i:sa");
              ?></span>
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
					<span>Last Name :</span> <i><?php echo $user_row['lastname']; ?></i><br>
					<span>Username :</span> <i><?php echo $user_row['username']; ?></i><br>
					<span>Status :</span> <i style="color: green;"><?php echo $user_row['status']; ?></i><br>
					<span>Account ID :</span> <i><?php echo "UPSC234".$user_row['user_id']; ?></i><br>
					<span>Joined :</span> <i><?php echo $user_row['reg_time']; ?></i><br>
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
			<form action="dashboard.php" method="post" enctype="multipart/form-data">
				<div class="from-group mt-2">
					<input class="form-control" type="text" name="storyTitle" placeholder="Enter Your story Title Here...">
				</div>

				<div class="from-group mt-2 row">
					<div class="col-sm-10">
						<input class="form-control" type="file" name="storymedia[]" multiple>
					</div>
					<div class="col-sm-2">
						<button class="btn form-control"><i style="color: #fff;" class="fa-solid fa-plus"></i></button>
					</div>
				</div>

				<div class="from-group mt-2 row">
					 <div class="col-sm-4">
						<select class="form-control" name="category">
							<option value="other">-- Category --</option>
							<?php 
								//query category table... to retrieve category name on the select option
								$category_query = query("SELECT * FROM category");
								confirm($category_query);
								while ($category_row = fetch_array($category_query)){

							?>

								<option value="<?php echo $category_row['category_name']; ?>"><?php echo $category_row['category_name']; ?></option>
								
							<?php 
								}
							?>
						</select>
					</div> 
					<div class="col-sm-4">
						<input class="form-control" placeholder="-- Event Country --" type="text" name="country">
					</div>
					<div class="col-sm-4">
						<input class="form-control" type="text" placeholder="-- City --" name="city">
					</div>
				</div>

				<textarea style="height: 150px;" class="form-control mt-2" name="story" placeholder="Type Your Story here..."></textarea>

				<center>
					<input class="btn" type="submit" name="publish" value="Publish">
				</center>

			</form>
<?php 

//Publish story code starts here......


if (isset($_POST['publish'])) {

  $t = escape_string($_POST['storyTitle']);
  //the ucwords() is to capitalize the text before sending into database..
  $title = ucwords($t);
  $category = escape_string($_POST['category']);
  $c = escape_string($_POST['country']);
  $country = ucwords($c);
  $cit = escape_string($_POST['city']);
  $city = ucwords($cit);
  $story_message = escape_string($_POST['story']);

  $query = query("INSERT INTO story (publisher_user_id,story_title,story_category,event_country,city,story_message)
     VALUES ('$session','$title','$category','$country','$city','$story_message')");
  confirm($query);



  //----------------start of image upload query----------------------------

  foreach ($_FILES['storymedia']['name'] as $key => $value) {

  	$rand = rand('11111111','99999999');
	$images = $rand.'_'.$value;

  	if (move_uploaded_file($_FILES['storymedia']['tmp_name'][$key],'uploads/'.$images)) {

  		$query_story = query("SELECT story_id FROM story WHERE publisher_user_id='$session' ORDER BY story_id DESC LIMIT 1");
  		confirm($query_story);
  		$query_story_row = fetch_array($query_story);
  		$story_id = $query_story_row['story_id'];

  		echo $story_id;


  		$query_img = query("INSERT INTO gallery (story_id, gallery_media, publisher_id) VALUES ('$story_id','$images','$session')");
  		confirm($query_img);
  		if ($query_img) {

  			//redirect('dashboard.php?success');

  		} // if statement close for check if success
  	}// if statement colse for query
  	
  }//close foreach

  //----------------end of image upload query----------------------------

  redirect('dashboard.php?success');

}// parent if(){} closed

//publish story code ends here.............
//=======================================================

?>
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
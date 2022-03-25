<!-- below is the header included -->
<?php include 'includes/header.php'; ?>



<div class="container pagebg">
<!-- story area panel -->
<div class="row">
	<div class="col-12 story-area">
		<div class="row">
			<div style="padding: 5px;" class="col-2">
				<center>
				<img style="border-radius: 50%; width: 100px; height: 100px; margin-top: 10px" class="img-fluid mx-auto" src="images/avatar.jpg"> 
				<br>
				<b>Andrew Bucks</b>
				<br>
				<i>Posted 19/03/2022</i>
				<br>
				<i>Comments (<span style="color: orange;">0</span>)</i>
				</center>
			</div>
			<div id="#pare" class="col-10">
				<h6 class="text-left"><a class="story-head-a" href="read.php?story">The title of story telling web</a></h6>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


				</p>
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
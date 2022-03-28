<div class="topbar text-center">
				<span class="tone">Menu</span>
		</div>
  
<!-- left side dashboard navigation -->

		<ul>
			<li><a href="#">dashboard</a></li>

			<?php
			//This will be visible for and admin user alone.....

			if ($user_row['user_role'] == "admin") {
				# code...
			?>
			<!-- link to admin page -->
			<li style="border:solid 1px red;"><a href="admin.php">admin page</a></li>

			<?php
			}
			?>
			<li><a href="#">view profile</a></li>
			<li><a href="#">my stories</a></li>
			<li><a href="#">all stories (<span class="text-warning">0</span>)</a></li>
			<li><a href="#">stories by category</a></li>
			<li><a href="#">night mode</a></li>
			<li><a href="#">change password</a></li>
			<li><a href="#">message us</a></li>
			<li><a href="#">log out</a></li>
		</ul>
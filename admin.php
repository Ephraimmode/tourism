<?php include 'includes/headadmin.php'; ?>

<div style="text-align: center;" class="topbar">
      Welcome to Admin Dashboard <span class="tone2"><?php echo $user_row['firstname']; ?></span> | It's <span style="font-weight: bold; color: pink;">
        <?php echo date("h:i:sa"); ?></span>
    </div>

<!-- container -->
<div class="container">


<!-- Approve/deny newly posted story -->
    <h4>Approve/Deny Story</h4>

<section id="approval">
<div class="row">

  <div class="col-12 story-area">
    <div class="row">
      <?php 
      

      //story retrieved from database.
      $story_query = query("SELECT * FROM story WHERE approval='0' ORDER BY story_id DESC LIMIT 1");
      confirm($story_query);
      
      while ($story_row = fetch_array($story_query)) {
        # code...
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

      <a style="color: #fff; font-weight: bold;" href="?approve" class="story-a">Approve (Publish)</a> 
        <a style="color: #fff; font-weight: bold" href="?deny" class="story-a">Deny (Delete)</a>
        </div>
        <?php
        if (isset($_GET['approve'])) {

          $approval = 1;
          //Approval update query
          $approve_query = query("UPDATE story SET approval='$approval' WHERE story_id='$story_id'");
          confirm($approve_query);
          if ($approve_query) {
            redirect("admin.php?approved");
          }
        } // approval statement closed

        if (isset($_GET['deny'])) {

          //gallery table query for images
            $deny_imag_query = query("SELECT * FROM gallery WHERE story_id='$story_id' AND publisher_id='$publisher'");
            confirm($deny_imag_query);
            $deny_image_row = fetch_array($deny_imag_query);
            // fetch the uploaded images id to delete and assign to a variable
            $story_deny_image = $deny_image_row['story_id'];

            //deleting from both tables... gallery and story.
            $deny_query1 = query("DELETE FROM story WHERE story_id='$story_id'");

            confirm($deny_query1);

            $deny_query2 = query("DELETE FROM gallery WHERE story_id='$story_deny_image'");
            confirm($deny_query2);


            if ($deny_query2) {
              redirect("admin.php?deleted");
            }


        } //deny statement close

      }//while loop parent curly brace closed

        ?>
        
      </div>
    </div>
  </div>
</section>
  <!-- approve / deny section end -->




<!-- manage story -->
<h4>Manage Approved Users</h4>

<section id="manageApproval">

<table class="table table-striped" border="0" width="1080">
      <tr><td><b>Story ID</b></td><td><b>Story Title</b></td><td><b>Category</b></td><td><b>Publisher ID</b></td><td><b>Published Time</b></td><td><b>Action</b></td></tr>

      <?php 
            $story_query = query("SELECT * FROM story ORDER BY story_id DESC");
            confirm($story_query);
            while ($story_row = fetch_array($story_query)) {
            $session_id = $story_row['story_id'];
      ?>
     
      <tr><td><?php echo $story_row['story_id']; ?></td><td><p><?php echo $story_row['story_title']; ?></p></td><td><p><?php echo $story_row['story_category']; ?></p></td><td><p><?php echo $story_row['publisher_user_id']; ?></p></td><td><p><?php echo $story_row['time_posted']; ?></p></td><td width="140"><a href="<?php echo '?story_delete=' . $session_id; ?>"> Delete</a>
      
      </td></tr>
        <?php } 
        
        if (isset($_GET['story_delete'])) {
          $delete = $_GET['story_delete'];

          $query = query("DELETE FROM story WHERE story_id = '$story_delete'");

          redirect("admin.php");


        }
        
        ?>
  
    </table>
</section>
<!-- manage story ends -->


<!-- manage users -->
<h4>Manage Retrieved Users</h4>

<section id="manageUsers">

<table class="table table-striped" border="0" width="1080">
      <tr><td><b>User ID</b></td><td><b>Username</b></td><td><b>Email</b></td><td><b>Role</b></td><td><b>Status</b></td><td><b>Full Name</b></td><td><b>Occupation</b></td><td><b>Country</b></td><td><b>Gender</b></td><td><b>Time Registered</b></td><td><b>Action</b></td></tr>

      <?php 
            $user_query = query("SELECT * FROM users WHERE user_id!='$session' ORDER BY user_id DESC");
            confirm($user_query);
            while ($user_row = fetch_array($user_query)) {
            $user_id = $user_row['user_id'];
      ?>
     
      <tr><td><?php echo $user_row['user_id']; ?></td><td><?php echo $user_row['username']; ?></td><td><?php echo $user_row['email']; ?></td><td><?php echo $user_row['user_role']; ?></td><td><?php echo $user_row['status']; ?></td><td><?php echo $user_row['firstname'].' '.$user_row['lastname']; ?></td><td><?php echo $user_row['occupation']; ?></td><td><?php echo $user_row['country']; ?></p></td><td><?php echo $user_row['gender']; ?></td><td><?php echo $user_row['reg_time']; ?></td><td width="140"><a href="<?php echo '?user_delete=' . $user_id; ?>"> Delete</a>
      
      </td></tr>
        <?php } 
        
        if (isset($_GET['user_delete'])) {
          $delete = $_GET['user_delete'];

          $query = query("DELETE FROM users WHERE user_id = '$delete'");
          confirm($query);
          redirect("admin.php");


        }
        
        ?>
  
    </table>
</section>
<!-- manage users ends -->



<!-- add Category users -->
<h4>Create/Manage Category</h4>

<section id="addCategory">
<div class="row">
  <div class="col-sm-4">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="from-group mt-2">
          <label>Create Tourism Categories Here</label>
          <input class="form-control" type="text" name="create_cat" placeholder="Category Name">
        </div>
        <center>
          <input class="btn" type="submit" name="create_c" value="Create Category">
        </center>

      </form>
    <?php
    if (isset($_POST['create_c'])) {
      $catname = $_POST['create_cat'];

      $cat_create = query("INSERT INTO category (category_name,added_by_user_id)
      VALUES ('$catname','$session')");
      confirm($cat_create);
      if ($cat_create) {
        redirect("admin.php");
      }
    }
    ?>
  </div>
  <div class="col-sm-4">
    
    <ul style="list-style-type: none; ">

              <?php 
                //query category table... to retrieve category name on the select option
                $category_query = query("SELECT * FROM category");
                confirm($category_query);
                while ($category_row = fetch_array($category_query)){

                  $id = $category_row['category_id'];
              ?>

              <li style="background-color: grey; font-weight: bold; padding: 5px; border-radius: 5px;margin: 1px;"><?php echo $category_row['category_name']; ?> <a style="padding-left: 20px; color: #fff" href="<?php echo '?category_delete=' .$id; ?>">Delete</a></li>

              
                
              <?php 

                } // loop close
              if (isset($_GET['category_delete'])) {
              //$delet = $_GET['category_delete'];

              $query = query("DELETE FROM category WHERE category_id = '$id'");
              confirm($query);
              redirect("admin.php");


        }
              

              ?>
      
    </ul>


    
    
  </div>
  <div class="col-sm-4">

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="from-group">
            <select class="form-control" name="category_select">
              <option value="other">-- Select Category --</option>
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
        <div class="from-group mt-2">
          <input class="form-control" type="text" name="cc" placeholder="Replace Category Selected">
        </div>
        <center>
          <input class="btn" type="submit" name="edit_cat" value="Edit Category">
        </center>

      </form>
    <?php
    if (isset($_POST['edit_cat'])) {
      $catname = $_POST['category_select'];
      $replace_catname = $_POST['cc'];

      $cat_edit = query("UPDATE category SET category_name='$replace_catname', added_by_user_id='$session' WHERE category_name='$catname'");
      confirm($cat_edit);
      if ($cat_edit) {
        redirect("admin.php");
      }
    }
  ?>
    
  </div>
</div>

</section>

<!-- add category end -->



<!-- ---------------------------------------------------------------------------------------------------- -->

</div> 
 <!-- container -->
<!-- footer area -->
<footer>
  <!-- sub footer -->
  <div class="subfooter">
    <div class="container-fluid row">
    <div class="col-3">
      <h6 style="text-align: left;">Links</h6>
      <ul>
        <?php
          if (!isset($_SESSION['user'])) {
            echo '<li><a href="index.php">Home</a></li>';
          }
          else {
            echo '<li><a href="dashboard.php">Dashboard</a></li>';
          }
        ?>
        <li><a href="about.php">About Us</a></li>
        <li><a href="story.php">Stories</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      
    </div>

    <div class="col-3">
      <h6 style="text-align: left;">Legal</h6>
      <ul>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Security</a></li>
        <li><a href="#">Agreement</a></li>
      </ul>
    </div>

    <!-- this contact area will only show on wide screen -->
    <div class="col-3 contact-lg">
      <h6 style="text-align: left;">Contacts</h6>
      <p>
        <b>Address:</b> 12 Aboyne Gardens, AB10 7BW.<br>
        <b>Email:</b> <a style="text-decoration: none;" href="mailto:info@upscotland.com">info@upscotland.com</a> <br>
        <b>Phone Number:</b> <a style="text-decoration: none;" href="tel:+447576978698">+44 7576 978698</a>
      </p>
    </div>

    <!-- this contact panel below will show on small screens -->

    <div class="col-3 contact-sm">
      <h6 style="text-align: left;">Contacts</h6>
      <p>
        12 Aboyne Gardens, AB10 7BW.<br>
        <a style="text-decoration: none;" href="mailto:info@upscotland.com">info@upscotland.com</a> <br>
        <a style="text-decoration: none;" href="tel:+447576978698">+447576978698</a>
      </p>
    </div>

    <div class="col-3">
      <center>
      <img class="img-fluid" style="padding-top: 40px; max-width: 100%;" src="images/logo.png">
      </center>
    </div>
    </div>
  </div>
  <div>
    <hr>
  </div>

  <div class="container-fluid footer-bottom">
    <p>&copy; 2022 - All Right Reserved | Designed By Ephraim (2118894)</p>
  </div>




</footer>


  <!-- person jsCode -->
<script src="js/script.js"></script>

<!-- External bootstrap javaScript(s) included --> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
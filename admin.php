<?php 
//database connection
include 'includes/connect.php';
//session for all users
include 'includes/general_session.php';
include 'includes/table_query.php'; 

//the admin page is protected for admin alone with the below session query.
if ($user_row['user_role'] != "admin" && isset($session)) {
    session_destroy();
    unset($session);
  }
if(!isset($session) || (trim($session) == '')) {
    header("location: ./login.php?loginRequired");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMINISTRATOR ZONE</title>

  <!-- jqueryUI -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<!-- jqueryUI ends-->



  <!-- below are personal css links -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/screens.css">
  <link rel="stylesheet" href="css/dashboard-style.css">

  <!-- personal styles ends -->

    <!-- sourced from bootstrap offical website -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- sourced from bootstrap offical website  ends-->

  <!-- fonts on hero area adds -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&family=Roboto:wght@300&display=swap" rel="stylesheet">
   <!-- fonts on hero area adds ends-->
  
  <!-- jqueryUI -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<!-- jqueryUI endsß-->
  <script>
  $( function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  } );
  </script>
  <style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  </style>
</head>
<body>


<!-- header area -->

  <div class="container-fluid header">

  <div class="row">
      <div class="col-4 p-2">
        <!-- logo -->
        <a href="#"><img class="logo" src="images/logo.png"></a>
      </div>
    <div class="col-8">
      <div class="row">
        <!-- social media icons -->
        <div class="col-6 social p-2">
        <span style="float: right;">
          <img src="images/facebook.png" width="32" height="32" alt="soc">
          <img src="images/instagram.png" width="32" height="32" alt="soc">
          <img src="images/linkedin.png" width="32" height="32" alt="soc">
          <img src="images/telegram.png" width="32" height="32" alt="soc">
          <img src="images/whatsapp.png" width="32" height="32" alt="soc">
          <img src="images/youtube.png" width="32" height="32" alt="soc">
        </span>
        </div>
        <!-- social media icons ends -->

        <!-- search area panel -->
        <div class="col-6 menu-cover p-2">
        <form style="float: right; padding-right: 20px" class="row search g-3">
          <div class="col-auto">
            <input class="form-control p-1" type="text" placeholder="Enter Keyword" name="">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3 p-1">Search</button>
          </div>
        </form>
        <!-- menu list item on small screens-->
        <span class="menu-list"><button id="bu"><i class="bi p-0 bi-list"></i></button></span>

        </div>
        <!-- search area panel ends -->


      </div>
    </div>
  </div>
    

  <div class="container-fluid">
      <!-- nav bar below -->
      <ul class="unav">
        <span>
        <?php
          if (!isset($_SESSION['user'])) {
            echo '<li class="uli">
              <a href="index.php">Home</a>
              </li>';
          }
          else {
            echo '<li class="uli">
              <a href="dashboard.php">Dashboard</a>
            </li>';
          }
        ?>
        <li class="uli">
          <a href="about.php">About us</a>
        </li>
        <?php
          if (!isset($_SESSION['user'])) {
            echo '<li class="uli">
              <a href="story.php">Stories</a>
            </li>';
          }
          else{
            echo '<li class="uli">
              <a href="story.php">Read Stories</a>
            </li>';
          }
        ?>
        <li class="uli">
          <a href="contact.php">Contact Us</a>
        </li>
        <?php
          if (isset($_SESSION['user'])) {
            echo '<li class="uli">
                <a href="#">Message (<span style="font-weight: bold; color: orange;">0</span>)</a>
              </li>
              <li class="uli">
                <a href="#">Gallery</a>
              </li>';
          }
        ?>
        </span>
        <?php
          if (!isset($_SESSION['user'])) {
            echo '<span class="log">
        <li class="uli">
          <a href="login.php">Login</a>
        </li>
        <li class="uli">
          <a href="register.php">Register</a>
        </li>
        </span>';
          }
          else{
            echo '<span class="log">
        <li class="uli">
          <a href="?logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </li>
        </span>';
          }

          if (isset($_GET['logout'])) {
            session_destroy();
            unset($session);
            //redirected to general session to completely destroy sessions.
            redirect('general_session.php?logout');
          }
        ?>
      </ul>
  </div>

</div>
<!-- main container end tag on the above div closed tag -->


<!-- small screen menu bar -->
<div class="menubgleft">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="story.php">Stories</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
  </ul>
  <center>
  <form class="row g-3">
    <div class="col-auto">
      <input class="form-control p-1" type="text" placeholder="Enter Keyword" name="">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3 p-1">Search</button>
    </div>
  </form> 
  <hr>
  <span style="margin: 20px;">
          <img src="images/facebook.png" width="32" height="32" alt="soc">
          <img src="images/instagram.png" width="32" height="32" alt="soc">
          <img src="images/linkedin.png" width="32" height="32" alt="soc">
          <img src="images/telegram.png" width="32" height="32" alt="soc">
          <img src="images/whatsapp.png" width="32" height="32" alt="soc">
          <img src="images/youtube.png" width="32" height="32" alt="soc">
        </span>
  </center>
</div>

<!-- header ends here... -->

<div style="text-align: center;" class="topbar">
      Welcome to Admin Dashboard <span class="tone2"><?php echo $user_row['firstname']; ?></span> | It's <span style="font-weight: bold; color: pink;"><?php
              echo date("h:i:sa");
              ?></span>
    </div>

<!-- jqueryUI starts here -->
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Pending Story(ies)</a></li>
    <li><a href="#tabs-2">Manage Stories</a></li>
    <li><a href="#tabs-3">Add Category</a></li>
    <li><a href="#tabs-4">Manage Users</a></li>
  </ul>
  <!-- tab 1 start -->
  <div style="width: 100$" id="tabs-1">
    <h4>Approve/Deny Story</h4>

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

</div>


  </div>
  <!-- tab 1 ends -->

  <div id="tabs-2">
    <h6>Manage Stories</h6>
    <table class="table table-striped" border="0" width="1080">
<tr><td><b>Consignment Number</b></td><td><b>Full Name</b></td><td><b>Contact Number</b></td><td><b>Email</b></td><td><b>Receipt</b></td><td><b>Action</b></td></tr>

<?php 
      $story_query = query("SELECT * FROM story ORDER BY story_id DESC");
      confirm($story_query);
      while ($story_row = fetch_array($story_query)) {
      $session_id = $story_row['story_id'];
?>
     
<tr><td><?php echo $story_row['trick_id']; ?></td><td><p><?php echo $story_row['rname']; ?></p></td><td><p><?php echo $row['rcontact']; ?></p></td><td><p><?php echo $row['remail']; ?></p></td><td><p>[<a href="invoice_en.php<?php echo '?id='.$session_id; ?>"> Print English</a> ] || [<a href="invoice_ch.php<?php echo '?id='.$session_id; ?>"> Print China</a> ]</p></td><td width="140"> [<a href="invoice.php<?php echo '?id='.$session_id; ?>"> Print Korea</a> ]<br><a href="<?php echo '?delete=' . $session_id; ?>"> Delete</a>
<a rel="tooltip"  title="Edit Student Information" id="<?php echo $session_id;?>" href="edit.php<?php echo '?id='.$session_id; ?>"
            class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Update</a>
                                    </td></tr>
                                    <?php } 
                                    
                                    if (isset($_GET['delete'])) {
                                      $delete = $_GET['delete'];

                                      $query = query("DELETE FROM trackcode WHERE trick_id = '$delete'");

                                      redirect("admin.php");


                                    }
                                    
                                    ?>
  
    </table>
  </div>
  <div id="tabs-3">
    <h2>Content heading 3</h2>
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
  <div id="tabs-4">
    <h2>Content heading 3</h2>
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>

<!-- jqueryUI ends here -->
 
 
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
<?php 
//database connection
include 'connect.php';
//session for all users
include 'general_session.php';
include 'table_query.php'; 

if(!isset($session) || (trim($session) == '')) {
    header("location: ./login.php?loginRequired");
    exit();
  }

//the admin page is protected for admin alone with the below session query.
if ($user_row['user_role'] != "admin" && isset($session)) {
    session_destroy();
    unset($session);
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
          <a href="dashboard.php"><i class="fa-solid fa-right-from-bracket"></i> User Mode</a>
        </li>
        </span>';
          }

          if (isset($_GET['logout'])) {
              session_destroy();
              unset($session);
              //redirected to general session to completely destroy sessions.
            redirect('index.php?logout');
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
<?php

include 'connect.php';


// query users table
$user_query = query("SELECT * FROM users WHERE user_id='$session'");
confirm($user_query);
$user_row = fetch_array($user_query);

//end of users query...........
//==================================================


//Publish story code starts here......


if (isset($_POST['publish'])) {

  global $session;

  $t = escape_string($_POST['storyTitle']);
  //the ucwords() is to capitalize the text before sending into database..
  $title = ucwords($t);
  $media = escape_string($_POST['storymedia']);
  $category = escape_string($_POST['category']);
  $c = escape_string($_POST['country']);
  $country = ucwords($c);
  $cit = escape_string($_POST['city']);
  $city = ucwords($cit);
  $story_message = escape_string($_POST['story']);

  $query = query("INSERT INTO story (publisher_user_id,story_title,story_media,story_category,event_country,city,story_message)
    VALUES ('$session','$title','$media','$category','$country','$city','$story_message')");
  confirm($query);
  redirect('../dashboard.php');

}

//publish story code ends here.............
//=======================================================














?>
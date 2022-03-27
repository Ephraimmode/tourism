<?php

include 'connect.php';


// query users table
$user_query = query("SELECT * FROM users WHERE user_id='$session'");
confirm($user_query);
$user_row = fetch_array($user_query);

//end of users query...........
//==================================================

















?>
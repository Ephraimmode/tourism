<?php 

//Start session: this will allow all users (logged in and non-loggedin users) to access every page it is present
session_start();

if (isset($_SESSION['user'])) {
	$session = $_SESSION['user'];
}


?>
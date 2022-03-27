<?php 
//for complete logout
if (isset($_GET['logout'])) {
	session_destroy();
	unset($session);
	redirect('./index.php?logout');
}
//Start session: this will allow all users (logged in and non-loggedin users) to access every page it is present
session_start();
//Check if the user is loggedin before creating variable...
if (isset($_SESSION['user'])) {
	$session = $_SESSION['user'];
}

?>


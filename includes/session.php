<?php
	//Check whether the session variable user is present(logged in or not) or not
//this will only grant access to loggged in users and deny non-logged in access to the page it is present.

//Start session
//session_start();

	if(!isset($session) || (trim($session) == '')) {
		header("location: ./login.php?loginRequired");
		exit();
	}


	
        
?>
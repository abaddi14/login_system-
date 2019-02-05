<?php
	// Set up connection credentials
	$user = "root";
	$pass = "root";
	$url = "localhost";
	$db = "registration";

	$link = mysqli_connect($url, $user, $pass, $users, "8889"); //Mac
	//$link = mysqli_connect($url, $user, $pass, $db); //PC

	/* check connection */
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>

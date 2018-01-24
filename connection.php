<?php
	$username = "root";
	$password = "";
	$servername = "localhost";
	$database= "maplegraph";

	$conn = new mysqli($servername, $username, $password, $database);
	
	if (mysqli_connect_errno())
	{
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?> 
<?php 

	$conn = new mysqli("localhost","root","***","***");

	if ($conn->connect_error) {
		die("Could not connect to the Database!".$conn->connect_error);
	}

 ?>
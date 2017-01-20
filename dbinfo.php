<?php
	// localhost connection
	$servername = "localhost";	# server
	$username = "root";			# username
	$password = "root";			# password
	$dbname = "CSV_DB";			# name of the data base

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	// Check connection
	if (mysqli_connect_errno()){
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
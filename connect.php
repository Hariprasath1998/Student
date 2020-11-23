<?php 
	// Establish Connection to database
	// $conn=mysqli_connect('localhost','Mark_42','enigma','Students');
	$conn=mysqli_connect('remotemysql.com:3306','JqhYDqirik','clUHun0sQF','JqhYDqirik');

	//Checking connection
	if(!$conn) {
		echo "Connection Error\n". mysql_connect_error();
	}else{
		echo "Database Connected\n";
	}
 ?>

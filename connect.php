<?php 
	// Establish Connection to database
	$conn=mysqli_connect('localhost','Mark_42','enigma','Students');

	//Checking connection
	if(!$conn) {
		echo "Connection Error\n". mysql_connect_error();
	}else{
		echo "Database Connected\n";
	}
 ?>

<?php 
	include 'connect.php';

	if(isset($_POST['submit'])){
		$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
		$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
		$registernumber=mysqli_real_escape_string($conn,$_POST['registernumber']);
		$gender=mysqli_real_escape_string($conn,$_POST['gender']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$mobilenumber=mysqli_real_escape_string($conn,$_POST['mobilenumber']);


		$sql="INSERT INTO Info VALUES('$firstname','$lastname','$registernumber','$gender','$email','$mobilenumber')";

		if (mysqli_query($conn, $sql)) {
			header('Location:index.php');
		}else{
			echo "query error";
		}
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
</head>
<body>
	<br>
	<label for="Info">Student Details</label>
	<form action="form.php" method="POST" name="Info">
		<label>First Name:</label>
		<input type="text" name="firstname"><br>

		<label>Last Name:</label>
		<input type="text" name="lastname"><br>

		<label>Register Number:</label>
		<input type="text" name="registernumber"><br>

		<label for="gender">Gender:</label>
		<input type="radio" name="gender" value="male" id="male">
		<label for="male">Male</label>
		<input type="radio" name="gender" value="female" id="female">
		<label for="female">Female</label>
		<input type="radio" name="gender" value="others" id="others">
		<label for="others">Others</label><br>

		<label>Email-ID:</label>
		<input type="text" name="email"><br>

		<label>Mobile Number:</label>
		<input type="text" name="mobilenumber"><br>

		<div><input type="submit" name="submit" value="submit">
		<br></div>
		
	</form>
</body>
</html>
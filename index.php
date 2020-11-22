<?php 
	include 'connect.php';
	// write query
	$sql= 'SELECT * FROM Info ORDER BY registerNumber';

	// make query
	$result=mysqli_query($conn,$sql);

	// fetch the resulting rows as an array
	$Students=mysqli_fetch_all($result,MYSQLI_ASSOC);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>

	<style type="text/css">
		.box{
			background-color: #c0c0c0;
			padding: 10px;
		}
	</style>
</head>
<body>

<a href="form.php"><h2>Enter Details</h2></a>
<h1>Student Details</h1>
<div class="box">
	<?php foreach ($Students as $Student) {?>
		<h3><?php echo 'First Name: '.htmlspecialchars($Student['firstName']) ?></h3>
		<h3><?php echo 'Last Name: '.htmlspecialchars($Student['lastName']) ?></h3>
		<h3><?php echo 'Register Number: '.htmlspecialchars($Student['registerNumber']) ?></h3>
		<h3><?php echo 'Gender: '.htmlspecialchars($Student['gender']) ?></h3>
		<h3><?php echo 'Email-ID: '.htmlspecialchars($Student['email']) ?></h3>
		<h3><?php echo 'Mobile Number: '.htmlspecialchars($Student['mobileNumber']) ?></h3>
		<br>
	<?php } ?>
</div>
</body>
</html>
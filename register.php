<?php

	require 'config.php';

?>
<?php
	include 'navbar.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<style>
	body{
		margin: 0;
		padding: 0;
		background: #7f8c8d;
	}
	#main-wrapper{
		width: 800px;
		margin: 30px auto;
		background: white;
		padding: 5px;
		border-radius: 10px;
		border: 2px solid #2c3e50;
	}

	img{
		width: 150px;
	}
	label{
		font-size: 18px;
		font-weight: bolder;
	}
	input{
		padding: 8px;
	}
	</style>
</head>
<body>
	<div id="main-wrapper">
		<center>
			<h1>Sign Up Form</h1>
			<img src="logo2.jpg">
		</center>
		<form action="register.php" method="post">
			<div class="container making_straight">
				<div class="form-group">
					<div class="row">
						<div class="col-md-3"><label>Name</label></div>
						<div class="col-md-5"><input type="text" class="form-control" name="nm" placeholder="Enter your name" required></div>
					</div><br>
					<div class="row">
						<div class="col-md-3"><label>Password</label></div>
						<div class="col-md-5"><input type="password" class="form-control" name="pwd" placeholder="Enter your password" required></div>
					</div><br>
					<div class="row">
						<div class="col-md-3"><label>Mobile Number</label></div>
						<div class="col-md-5"><input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter your mobile number" maxlength="10" required></div>
					</div><br>
					<div class="row">
						<div class="col-md-3"><label>email</label></div>
						<div class="col-md-5"><input type="email" class="form-control" name="eml" placeholder="Enter your email" required></div>
					</div><br>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4"><input type="submit" class="form-control btn-success" name="register" value="Register"></div>
					</div>
				</div>
			</div>
		</form>
		
			<!-- <a href="Index.php"><input type="button" class="hover" id="back_btn" value="<< BACK TO LOGIN"></a><br> -->
		

<?php
	if(isset($_POST['register'])){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "nayna_project";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		//retriving values
		$name = $_POST['nm'];
		$password = $_POST['pwd'];
		$mobile = $_POST['mobile_number'];
		$e_mail = $_POST['eml'];
		

		$sql = "INSERT INTO register(name,email,mobile,password,role)VALUE ('$name','$e_mail','$mobile','$password','student')";

		if (mysqli_query($conn, $sql)) {
			echo "<script type='text/javascript'>
					alert('Profile Created Sucessfully');
					window.location.href = 'index.php';
					</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>
	</div>

</body>
</html>
<?php
	include 'footer.php';
?>
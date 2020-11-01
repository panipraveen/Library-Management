<?php
	//include 'menu.php';
	require 'config.php';
	date_default_timezone_set('Asia/Kolkata');
	session_start();
	//$_SESSION["profile_id"] = 1;
?>
<?php
	include 'menu.php';
?>

<!DOCTYPE html>
<html>
	<head>
		
  		<style>
			body{
				margin: 0;
				padding: none;
				/*background: #7f8c8d;*/
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
	<body align="center">
		<div id="main-wrapper">
	<center>
			<h1>Profile</h1>
			<img src="logo2.jpg">
		</center>
		<form action="profile.php" method="POST">
<?php
	// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM register WHERE id='".$_SESSION["profile_id"]."'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
?>
					<br><label>Name</label>&nbsp&nbsp:&nbsp&nbsp<label><?php echo $row['name']; ?></label><br>
					<label>Email</label>&nbsp&nbsp:&nbsp&nbsp<label><?php echo $row['email']; ?></label><br>
					<label>Mobile</label>&nbsp&nbsp:&nbsp&nbsp<label><?php echo $row['mobile']; ?></label><br>
					<button type="submit" name="update" value='<?php echo $_SESSION["profile_id"]; ?>'>Edit Profile</button><br><br>
<?php
			}
		} else {
			echo "0 results";
		}

		mysqli_close($conn);
?>
	</form>
	<?php if(isset($_POST['update'])): ?>
<?php
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM register WHERE id='".$_SESSION["profile_id"]."'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
?>
		
		<form action="profile.php" method="post">
			<div class="container making_stright">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2"><label>Name</label></div>
						<div class="col-md-5"><input type="text" class="form-control" name="nm" placeholder="Enter your name" value="<?php echo $row['name']; ?>" required></div>
					</div><br>
					<div class="row">
						<div class="col-md-2"><label>Password</label></div>
						<div class="col-md-5"><input type="password" class="form-control" name="pwd" placeholder="Enter your password" required></div>
					</div><br>
					<div class="row">
						<div class="col-md-2"><label>Mobile Number</label></div>
						<div class="col-md-5"><input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter your mobile number" maxlength="10" value="<?php echo $row['mobile']; ?>" required></div>
					</div><br>
					<div class="row">
						<div class="col-md-2"><label>email</label></div>
						<div class="col-md-5"><input type="email" class="form-control" name="eml" placeholder="Enter your email" value="<?php echo $row['email']; ?>" required></div>
					</div><br>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4"><input type="submit" class="form-control btn-success" name="change" value="Change Profile"></div>
					</div>
				</div>
			</div>
		</form>
<?php
}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
?>
	<?php endif; ?>
<?php
	if(isset($_POST['change'])){
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "UPDATE register SET name='".$_POST['nm']."',password='".$_POST['pwd']."',mobile='".$_POST['mobile_number']."',email='".$_POST['eml']."' WHERE id='".$_SESSION["profile_id"]."'";

		if (mysqli_query($conn, $sql)) {
			echo "<script>alert('Record updated successfully');window.location.href='profile.php';</script>";
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}

?>		</div>
	</body>
</html>
<?php
	include 'footer.php';
?>
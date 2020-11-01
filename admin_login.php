<?php
	
	session_start();
	require 'config.php';

?>
<?php
	include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="main-wrapper">
		<center>
			<h1>Login</h1>
			<img src="logo2.jpg">
		</center>

		<form action="admin_login.php" method="POST">
			<label>Username: </label><br>
			<input name="user" type="text" class="inputvalue" placeholder="Type your username" autofocus required><br><br>
			<label>Password: </label><br>
			<input name="pw" type="password" class="inputvalue" placeholder="Type your Password" required><br><br>
			<input name="login" type="submit" class="hover" id="login_btn" value="LOGIN"><br><br>
			<input name="rg" type="submit" class="hover btn-primary form-control" onclick="location.href='register.php';" value="Register">
		</form>
	</div>
</body>
</html>
<?php
	if(isset($_POST['login'])){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "nayna_project";
		$user = $_POST['user'];
		$pw = $_POST['pw'];
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM register WHERE name='$user' AND password='$pw'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {

				$_SESSION["profile_id"] = $row['id'];
				
				echo "<script type='text/javascript'>
					alert('Login Successfully');
					window.location.href = 'add_book.php';
					</script>";

			}
		} else {
			echo "0 results";
		}

		mysqli_close($conn);
	}
?>

<?php
	include 'footer.php';
?>

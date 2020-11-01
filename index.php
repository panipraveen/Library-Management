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

		<form action="index.php" method="POST">
			<label>Username: </label><br>
			<input name="username" type="text" class="inputvalue" placeholder="Type your username" required><br><br>
			<label>Password: </label><br>
			<input name="password" type="password" class="inputvalue" placeholder="Type your Password" required><br><br>
			<input name="login" type="submit" class="hover" id="login_btn" value="LOGIN"><br><br>
			<a href="register.php"><input type="button" class="hover" id="register_btn" value="REGISTER"></a><br>
		</form>

		<?php
			if(isset($_POST['login']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];

				$query = "select * from register WHERE name='$username' AND password='$password'";

				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				// if(mysqli_fetch_assoc($query_run))
				{
					// valid
					$_SESSION['login'] = $username;
					// header('location:Project/cycleProject.php');
					header('location:/my_project/issue_book.php');
					// header('location:home_page.php');
				}else{
					// Invalid
					echo '<script type="text/javascript"> alert("Invalid data") </script>';
					// header("location:index.php");
				}
			}
		?>
	</div>

</body>
</html>
<?php
	include 'footer.php';
?>
<?php

	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="main-wrapper">
		<center>
			<h1>Home Page</h1>
			<h2>Welcome 
				<?php echo $_SESSION['username']; ?>					
			</h2>
			<img src="logo.jpg">
		</center>

		<form class="myform" action="home_page.php" method="POST">
			
			<input name="logout" type="submit" class="hover" id="logout_btn" value="LOG OUT"><br><br>

		</form>

		<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.php');
			}
		?>
	</div>

</body>
</html>
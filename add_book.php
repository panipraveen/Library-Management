<?php

	require 'config.php';

?>
<?php
	include 'admin_menu.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	<link rel="stylesheet" type="text/css" href="home.css">

  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico&display=swap" rel="stylesheet">
  
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



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
	<body>
	<div id="main-wrapper">
	<center>
			<h1>Add Book Form</h1>
			<img src="logo2.jpg">
		</center>
		<form action="add_book.php" method="POST">
		<div class="container making_straight">
			<div class="form-group">
				<div class="row">
					<div class="col-md-2"><label>Book Name</label></div>
					<div class="col-md-5">
						<input type="text" class="form-control" name="book_name" placeholder="Enter Book name" required></div>
					</div><br>

				<div class="row">
					<div class="col-md-2"><label>Enter Category</label></div>
					<div class="col-md-5">
						<select type="text" class="form-control" name="category" placeholder="Enter Book category" required>
							<option value="none">Select Category</option>
<?php
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM category";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "<option value='".$row['id']."'>".$row['name']."</option>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
?>
	</select>
	</div>
</div><br>

				<div class="row">
					<div class="col-md-2"><label>Book Author Name</label></div>
					<div class="col-md-5">
						<select type="text" class="form-control" name="author" placeholder="Enter Author name" required>
							<option value="none">Select Category</option>
<?php
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM author";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "<option value='".$row['id']."'>".$row['author_name']."</option>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
?>
	</select>
	</div>
</div><br>

		<div class="row">
			<div class="col-md-2"><label>ISBN Number</label></div>
				<div class="col-md-5">
					<input type="text" class="form-control" name="isbn" placeholder="Enter ISBN Number"  maxlength="10" required>
					<p>An ISBN is a International Standard Book Number. ISBN must be Unique</p></div></div><br><br>

				<div class="row">
					<div class="col-md-2"><label>Price</label></div>
					<div class="col-md-5">
						<input type="text" class="form-control" name="price" placeholder="Enter Book Price" required></div>
					</div><br>

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4"><input type="submit" class="form-control btn-success" name="book_add" value="Add Book"></div>
				</div>

			</div>
		</div>
		</form>
</div>
	</body>
</html>
<?php
	if(isset($_POST['book_add'])){
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
		$book_name = $_POST['book_name'];		
		$category = $_POST['category'];
		$author = $_POST['author'];
		$isbn = $_POST['isbn'];
		$price = $_POST['price'];
		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");
		
		if($category != "none" && $author != "none"){
			$sql = "INSERT INTO books(category_id,author_id,book_name,isbn_number,price,book_brought) VALUES('$category','$author','$book_name','$isbn','$price','$current_date $current_time')";

			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>
						alert('Book Added Successfully');
						window.location.href = 'add_book.php';
						</script>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
		else{
			echo "<script type='text/javascript'>
						alert('Invalid Details');
						</script>";
		}
	}
?>


<?php
	include 'footer.php';
?>
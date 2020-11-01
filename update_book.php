<?php
	include 'menu.php';
	include 'config.php';
	date_default_timezone_set('Asia/Kolkata');
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
	</head>
	<body>
		<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add a New Book</h4>
                </div>
			</div>
<div class="row">
<div class="col-md-10 col-sm-6 col-xs-12 col-md-offset-1">
<div class="panel panel-info">
<div class="panel-heading">Add a New Book</div>
		
		<form action="update_book.php" method="POST">
			<div class="form-group">
			<label>Book Name</label><br>
			<select class="form-control" name="bk_nm" id="bk_nm"><br><br>
				<option value="none">Select Book</option>			
<?php
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM books";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "<option value='".$row['id']."'>".$row['book_name']."</option>";
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
?>
</select>
</div>

		<button type="submit" name="go_ahead"  class="btn btn-info">Update Selected Book</button><br>
	</form>
		
<?php if(isset($_POST['go_ahead'])):
	if($_POST['bk_nm'] == "none"){ echo "<script>alert('".$_POST['bk_nm']."');</script>"; return;}
?>
		<form action="update_book.php" method="POST">
<?php
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM books WHERE id='".$_POST['bk_nm']."'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "<h4>Update Selected Book Named:&nbsp<b style='color:green;'>".$row['book_name']."</b></h4>";
		}
	} else {
		echo "0 results";
	}
	mysqli_close($conn);
?>		
		<div class="form-group">
			<label>Book Name</label><br>
				<input type="text" class="form-control" name="book_name" placeholder="Enter Book name" required>
			</div>

		<div class="form-group">	
			<label>Enter Category</label><br>
				<select type="text" name="category" placeholder="Enter Book category" class="form-control" required>
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
		echo "Cat error";
	}
?>
				</select></div>
				<div class="form-group">
				<label>Book Author Name</label>
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
		echo "author results";
	}
?>
	</select></div>
				<div class="form-group">
				<label>ISBN Number</label>
				<input type="text" class="form-control" name="isbn" placeholder="Enter ISBN Number" maxlength="10" required>
				<p>An ISBN is a International Standard Book Number. ISBN must be Unique</p>
			</div>

			<div class="form-group">
				<label>Price</label>
				<input type="text" class="form-control" name="price" placeholder="Enter Book Price" required>
			</div>

				<button type="submit" class="btn btn-info" name="update_book" value="<?php echo $_POST['bk_nm']; ?>">Update the Book</button>
		</form>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
	</body>
</html>
<?php
	if(isset($_POST['update_book'])){
		$book_name = $_POST['book_name'];		
		$category = $_POST['category'];
		$author = $_POST['author'];
		$isbn = $_POST['isbn'];
		$price = $_POST['price'];
		$current_date = date("Y-m-d");
		$current_time = date("h:i:s");
		if($category != "none" && $author != "none"){
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "UPDATE books SET category_id='$category',author_id='$author',book_name='$book_name',isbn_number='$isbn',price='$price',book_brought='$current_date $current_time' WHERE id='".$_POST['update_book']."'";

			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Book updated successfully');</script>";
			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
	}
?>

<?php include 'footer.php'; ?>
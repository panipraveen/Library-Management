<?php
	//include 'menu.php';
	include 'config.php';
	date_default_timezone_set('Asia/Kolkata');
?>
<html>
	<head>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
	</head>
	<body><br><br>
		<form action="view_delete_book.php" method="POST">
			<table class="table-bordered">
				<tr style="border: 2px solid black;">
					<th>Sr.no</th>
					<th>Book Name</th>
					<th>Category</th>
					<th>Author</th>
					<th>ISBN Number</th>
					<th>price</th>
					<th>brought or Updated on</th>
					<th>Book Operation</th>
				</tr>
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
		$counting = 0;
		while($row = mysqli_fetch_assoc($result)) {
				
			$sql_1 = "SELECT * FROM category WHERE id='".$row['category_id']."'";
			$result_1 = mysqli_query($conn, $sql_1);

			if (mysqli_num_rows($result_1) > 0) {
				// output data of each row
				while($row_1 = mysqli_fetch_assoc($result_1)) {
										$sql_2 = "SELECT * FROM author WHERE id='".$row['author_id']."'";
										$result_2 = mysqli_query($conn, $sql_2);

										if (mysqli_num_rows($result_2) > 0) {
											// output data of each row
											while($row_2 = mysqli_fetch_assoc($result_2)) {
													$counting = $counting + 1;
?>
			<tr>
				<td><?php echo $counting; ?></td>
				<td><?php echo $row['book_name']; ?></td>
				<td><?php echo $row_1['name']; ?></td>
				<td><?php echo $row_2['author_name']; ?></td>
				<td><?php echo $row['isbn_number']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['book_brought']; ?></td>
				<td><button type="submit" name="up_book" class="btn btn-info" value="<?php echo $row['id']; ?>">Update</button>&nbsp&nbsp<button type="submit" name="de_book" class="btn btn-danger" value="<?php echo $row['id']; ?>">Delete</button></td>
			</tr>
<?php
												}
											} else {
												echo "Author error";
											}


						}
					} else {
						echo "category error";
					}
		}
	} else {
		echo "books error";
	}

	mysqli_close($conn);
?>
			<table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['up_book'])){
		echo "<script>window.location.href='update_book.php';</script>";
	}
	if(isset($_POST['de_book'])){
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// sql to delete a record
		$sql = "DELETE FROM books WHERE id='".$_POST['de_book']."'";

		if (mysqli_query($conn, $sql)) {
			echo "<script>alert('Book deleted successfully');window.location.href='view_delete_book.php';</script>";
		} else {
			echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>

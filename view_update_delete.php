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
	<body>
<?php if(isset($_POST['edit'])): ?>
		<form action="view_update_delete.php" method="POST">
			<h3>Select the Category you want to Update</h3>
			<label>Select Existing Category</label>
			<select name="exists">
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
			</select><br>
			<label>Enter New Category</label>
			<input type="text" name="e1" placeholder="Enter New Category" required><br>
			<button type="submit" class="btn btn-success" name="update_cat">Update Category</button>
		</form><br><br>
<?php endif; ?>
		<form action="view_update_delete.php" method="POST">
			<table class="table-bordered">
				<tr>
					<th>Sr.No</th>
					<th>Category</th>
					<th>Category Operations</th>
				</tr>
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
		$count_me = 0;
		while($row = mysqli_fetch_assoc($result)) {
			$count_me = $count_me + 1;
?>
				<tr>
					<td><?php echo $count_me; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><button type="submit" name="edit" class="btn btn-link" value="<?php echo $row['id']; ?>">Edit</button>
						<button type="submit" name="delete" style="color:red;" class="btn btn-link" value="<?php echo $row['id']; ?>">Delete</button></td>
				</tr>
<?php
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
?>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['update_cat'])){
		$exists = $_POST['exists'];
		$e1 = $_POST['e1'];
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "UPDATE category SET name='$e1' WHERE id='$exists'";

		if (mysqli_query($conn, $sql)) {
			echo "<script>alert('Category Updated successfully');window.location.href='view_update_delete.php';</script>";
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>
<?php
	if(isset($_POST['delete'])){
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// sql to delete a record
		$sql = "DELETE FROM category WHERE id='".$_POST['delete']."'";

		if (mysqli_query($conn, $sql)) {
			echo "<script>alert('Category Deleted');window.location.href='view_update_delete.php';</script>";
		} else {
			echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>
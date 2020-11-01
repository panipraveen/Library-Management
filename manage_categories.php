<?php
    include 'admin_menu.php';
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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
	<?php if(isset($_POST['edit'])): ?>
	<div class="content-wrapper">
		<div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Categories</h4>
    </div>

    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Manage Categories</div>
                <div class="panel-body">
                    <div class="table-responsive">
                    	
                        <form action="manage_categories.php" method="POST">
                        <h4>Select the Category you want to Update</h4>
			<label>Select Existing Category</label>
			<select name="exists" class="form-control">
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
			<input type="text" class="form-control" name="e1" placeholder="Enter New Category" required><br>
			<button type="submit" class="btn btn-success" name="update_cat">Update Category</button>
		</form><br><br>
<?php endif; ?>
		 <div class="table-responsive">
		<form action="manage_categories.php" method="POST">
			 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
			 	<thead>
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
					<td><button type="submit" name="edit" class="btn btn-info" value="<?php echo $row['id']; ?>">Edit</button>
						<button type="submit" name="delete" class="btn btn-danger" value="<?php echo $row['id']; ?>">Delete</button></td>
				</tr>
<?php
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
?>
</thead>

			</table>
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
			echo "<script>alert('Category Updated successfully');</script>";
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
			echo "<script>alert('Category Deleted');window.location.href='manage_categories.php';</script>";
		} else {
			echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>
<?php include 'footer.php'; ?>
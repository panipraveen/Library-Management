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
		 <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add New Category</h4>
                
                            </div>
</div>
<div class="row">
<div class="col-md-10 col-sm-6 col-xs-12 col-md-offset-1">
<div class="panel panel-info">
<div class="panel-heading">Add New Category</div>
<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
	<form action="add_category.php" method="POST">
		<label>Enter Category</label>
		<input type="text"  class="form-control" name="cat1" placeholder="Category" required><br>
		<button type="submit" class="btn btn-info" name="add_category">Add Category</button>
		</form>
	</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<?php
	if(isset($_POST['add_category'])){
		$category = $_POST['cat1'];
		
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
				if($row['name'] == $category){
					echo "<script>alert('Category Already Exists');</script>";
					return;
				}
			}
		} else {
			echo "0 results";
		}
		
		
		$sql_1 = "INSERT INTO category(name)VALUES('$category')";

		if (mysqli_query($conn, $sql_1)) {
			echo "<script>alert('Category created successfully');</script>";
		} else {
			echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
?>

<?php include 'footer.php'; ?>


<?php
	include 'menu.php';
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
  .others{
    color:red;
}
</style>
</head>
<body>   
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Issue a New Book</h4>
                
                            </div>
</div>
<div class="row">
<div class="col-md-10 col-sm-6 col-xs-12 col-md-offset-1">
<div class="panel panel-info">
<div class="panel-heading">
Issue a New Book
</div>

<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Select Student Name<span style="color:red;">*</span></label>
<select class="form-control" type="text" name="s1" id="s1" onBlur="getstudent()" autocomplete="off"  required />  <option value="none"></option>
<?php
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM register";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']."&nbsp&nbsp-&nbsp&nbsp".$row['email']; ?></option>    
<?php
    }
  } else {
    echo "0 results";
  }
?>
      </select>

</div>

<!-- <div class="form-group">
<span id="get_student_name" style="font-size:16px;"></span> 
</div> -->

<div class="form-group">
<label>Select Book<span style="color:red;">*</span></label>
<select class="form-control" type="text" name="b1" id="b1" onBlur="getbook()"  required="required"/><option value="none"></option>
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
        $sql_1 = "SELECT * FROM author WHERE id='".$row['author_id']."'";
        $result_1 = mysqli_query($conn, $sql_1);

        if (mysqli_num_rows($result_1) > 0) {
          // output data of each row
          while($row_1 = mysqli_fetch_assoc($result_1)) {
            echo "<option value='".$row['id']."'>".$row['book_name']."&nbsp&nbsp-&nbsp&nbsp".$row_1['author_name']."</option>";
          }
        } else {
          echo "author error";
        }
    }
  } else {
    echo "0 results";
  }

  mysqli_close($conn);
?>
</select>
</div>
<div class="form-group">
  <label>Select Book Return Date</label><br>
  <input type="date" class="form-control" name="return_date"required><br>
  <button type="submit" name="issue" id="submit" class="btn btn-info">Issue Book </button>
   
 </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
  if(isset($_POST['issue'])){
    $s1 = $_POST['s1'];
    $b1 = $_POST['b1'];
    $return_date = $_POST['return_date'];
    $current_date = date("Y-m-d");
    if( $s1 != "none" && $b1 != "none" && $return_date > $current_date){
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "INSERT INTO issued_books(stud_id,book_id,issued_date,return_date,fine)VALUES('".$s1."', '".$b1."','".$current_date."','".$return_date."',0)";

      if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Book Issued created successfully');</script>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
    }
    else{
      echo "<script>alert('Invalid Data');</script>";
    }
  }
?>
    
</body>
</html>

<?php include('footer.php');?>
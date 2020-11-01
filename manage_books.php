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
                <h4 class="header-line">Manage Books</h4>
    </div>

<!-- <div class="row"> 
<div class="col-md-6">
<div class="alert alert-danger" >
 <strong>Error :</strong> 
 
</div>
</div> -->

<!-- <div class="col-md-6">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 
</div>
</div>

<div class="col-md-6">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 
</div>
</div>

<div class="col-md-6">
<div class="alert alert-success" >
 <strong>Success :</strong>  
</div>
</div>
</div>
</div> -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Books Listing</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <form action="view_delete_book.php" method="POST">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sr.no</th>
                            <th>Book Name</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>ISBN Number</th>
                            <th>Price</th>
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
    </thead>

            <tbody>

                      
                        <tr class="odd gradeX">
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
                                </table>
                                </tbody>        
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

 <?php include('footer.php');?>
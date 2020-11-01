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
            <form action="manage_issued_books.php" method="POST">
                <h3>Edit Fine Of Person:
<?php
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM issued_books WHERE id='".$_POST['edit']."'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
                            $sql_6 = "SELECT * FROM register WHERE id='".$row['stud_id']."'";
                            $result_6 = mysqli_query($conn, $sql_6);

                            if (mysqli_num_rows($result_6) > 0) {
                                // output data of each row
                                while($row_6 = mysqli_fetch_assoc($result_6)) {
                                    echo $row_6['name']."</h3>";
                                    echo "<label>Fine</label>&nbsp&nbsp";
                                    echo "<input type='text' name='fine'><br>";
                                    echo "<button type='submit' name='edit_it' value='".$_POST['edit']."'>Update Fine</button>";
                                }
                            } else {
                                echo "register results";
                            }
        }
    } else {
        echo "0 results";
    }
?>
                    
            </form>
        <?php endif; ?>
      
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Issued Books</h4>
    </div>
     

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Issued Books 
                        </div>
                        <form action="manage_issued_books.php" method="POST">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                
                                            <th>Sr.no</th>
                                            <th>Student Name</th>
                                            <th>Book </th>
                                            <th>Issued Date</th>
                                            <th>Return Date</th>
                                            <th>Fine</th>
                                            <th>Operation</th>
                                        </tr>
 <?php
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM issued_books";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $counting = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $counting = $counting + 1;
                $sql_1 = "SELECT * FROM register WHERE id='".$row['stud_id']."'";
                    $result_1 = mysqli_query($conn, $sql_1);
                                if (mysqli_num_rows($result_1) > 0) {
                                    // output data of each row
                                    while($row_1 = mysqli_fetch_assoc($result_1)) {
                                                $sql_2 = "SELECT * FROM books WHERE id='".$row['book_id']."'";
                                                    $result_2 = mysqli_query($conn, $sql_2);

                                                        if (mysqli_num_rows($result_2) > 0) {
                                                                        // output data of each row
                                                            while($row_2 = mysqli_fetch_assoc($result_2)) {
?>             

                                    </thead>
                                    <tbody>
                                      
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $counting; ?></td>
                                            <td class="center"><?php echo $row_1['name']; ?></td>
                                            <td class="center"><?php echo $row_2['book_name']; ?></td>
                                            <td class="center"><?php echo $row['issued_date']; ?></td>
                                            <td class="center"><?php echo $row['return_date']; ?></td>
                                            <td class="center"><?php echo $row['fine']; ?></td>
                    

                                            <td><button type="submit" name="edit" class="btn btn-primary" value="<?php echo $row["id"]; ?>"><i class="fa fa-edit "></i> Edit</button></td>                                        </td>
                                        </tr>
<?php
     }
        } else {
                 echo "books results";
                }
             }
            } else {
                    echo "register Error";
                 }

        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>                                       
                                     
                                    </tbody>
                                </table>

                            </div>
                            
                        </div>
                    </div>
                
                </div>
            </div>         
    </div>
    </div>
</div>
</form>
</body>
</html>
<?php
    if(isset($_POST['edit_it'])){
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "UPDATE issued_books SET fine='".$_POST['fine']."' WHERE id='".$_POST['edit_it']."'";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Record updated successfully');window.location.href='manage_issued_books.php';</script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
<?php include 'footer.php'; ?>

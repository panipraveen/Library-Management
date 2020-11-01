<?php
    include 'menu.php';
    include 'config.php';
    date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
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
                <h4 class="header-line">Manage Reg Students</h4>
    </div>


        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Reg Students
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                          </tr>

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
        $co_unt = 0;
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $co_unt = $co_unt + 1;
?>   
</tr>                                  
</thead>
<tbody>
                                     
    <tr class="odd gradeX">
        <td class="center"><?php echo $co_unt; ?></td>
        <td class="center"><?php echo $row['name']; ?></td>
        <td class="center"><?php echo $row['email']; ?></td>
        <td class="center"><?php echo $row['mobile']; ?></td>
        <td class="center"><?php echo $row['password']; ?></td>
        <td class="center"><?php echo $row['role']; ?></td>
    </tr>
<?php
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
</body>
</html>
<?php include 'footer.php'; ?>

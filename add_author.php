<?php
    include 'admin_menu.php';
    include 'config.php';
    date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
   

</head>
<body>
     
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add Author</h4>
                
                            </div>

                                </div>
                                <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <div class="panel panel-info">
                                <div class="panel-heading">
                                Author Info
                                </div>
                                <div class="panel-body">
                                <form role="form" method="post">
                                <div class="form-group">
                                <label>Author Name</label>
                                <input class="form-control" type="text" name="cat1" placeholder="author" autocomplete="off"  required />
                                </div>

                                <button type="submit" name="add_author" class="btn btn-info">Add Category</button>

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
    if(isset($_POST['add_author'])){
        $author = $_POST['cat1'];
        
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
                if($row['author_name'] == $author){
                    echo "<script>alert('Author Already Exists');</script>";
                    return;
                }
            }
        } else {
            echo "0 results";
        }
        
        
        $sql_1 = "INSERT INTO author(author_name)VALUES('$author')";

        if (mysqli_query($conn, $sql_1)) {
            echo "<script>alert('Author created successfully');</script>";
        } else {
            echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
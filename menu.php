<?php

	require 'config.php';

?>
<!DOCTYPE html>
<html>
<head> 
    <!-- <link rel="stylesheet" type="text/css" href="home.css"> -->

  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico&display=swap" rel="stylesheet">
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

  <title></title>
  <style>
  	#logo{
  		height: 130px;
  		margin: -20px 0px 0px -20px;
  	}
  	li{
  		font-size: 15px;
  		color: black;
  	}
</style>
</head>
<body>

<nav class="navbar navbar-inverse set-radius-zero" style="margin-bottom: 0px;">
  <div class="container-fluid" style="background-color: white;">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="padding: none;">
        <img src="logo2.jpg" id="logo"></a> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
         <span class="icon-bar"></span> 
      </button>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
       <a class="navbar-brand" >
    </ul>

    <form class="navbar-form navbar-right" style="margin: 20px 200px 0px 0px; padding: 0px;">
    	     <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>       
    	</div>
  	</div>
	</form>
<section class="menu-section" style="background-color: #f2f2f2;">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                           
                          
   <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> ACCOUNT <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="profile.php">My Profile</a></li>
                                 
                                </ul>
                            </li>
                            <li><a href="issue_book.php">ISSUED BOOKS</a></li>
                          

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

</nav>
</body>
</html>
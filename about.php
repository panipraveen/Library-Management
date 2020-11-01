<?php
	include 'navbar.php';
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
<style>
	#ab1{
		height: 400px;
		width: 60%;
		background-color: #f2f2f2;

	}
	#ab2{
		height: 400px;
		width: 40%;
		/*background-color: green;*/
	}
	.a1{
		height: 400px;
		width: 100%;
	}
	#ab1 h4{
		font-family: 'Pacifico', cursive;
		font-size: 60px;
		line-height: 60px;
		font-weight: bold;
	}
	#ab1 h5{
		font-size: 6em;
		letter-spacing: 2px;
		font-size: 23px;
        line-height:40px;
        float: left;
	}
	/*li{
		overflow: auto;
	}*/
	
	
</style>
</head>
<body>
	<div id="ab1" class="col-md-8 col-xs-8" style="padding: 0px;">
		<h4>Best Practices and Services:-<h4>
			<ul style ="list-style-type: square;">
				<h5><li></h5></li>
  				<h5><li>Separate section for books on different faculty.</h5></li>
  				<h5><li>Students suggestions sought for purchasing books.</h5></li>
  				<h5><li>Display of recent additions which you can easy to maintain</h5></li>
  				<h5><li>Open access to library resources.</h5></li>
			</ul>  
		</div>
		<div id="ab2" class="col-md-4 col-xs-4" style="padding: 0px;">
			<img src="a1.jpg" class="a1"></div>

		<div id="ab2" class="col-md-4 col-xs-4" style="padding: 0px;">
			<img src="a2.jpg" class="a1"></div>
			
		<div id="ab1" class="col-md-8 col-xs-8" style="padding: 0px;">
		<h4>Rules & Regulations:-<h4>
			<ul>
				<h5><li>User have to maintain his/her Id,Password.</h5></li>
  				<h5><li>Book issues by 10am.to 9pm.</h5></li>
  				<h5><li>Book should be return on 15 days to issued.</h5></li>
  				 <h5><li>After that charges becomes applied.</h5></li>
  				 <h5><li>Maintain your acc. itself if its lost management will not be responsible.</h5></li>
			</ul>  
		</div>
		
</body>
</html>
<?php
    include 'footer.php';
?>
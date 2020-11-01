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
	#slideshow{
		position: relative;
		/*box-shadow: 0 0 20px rgba(0,0,0,0.4);*/
	}

	#slideshow > #row1{
		position: absolute;
	}
</style>
</head>
<body>
	<div class="div1" id="Scroll">
		
		

					<!-- Navbar Start -->
				<!-- Navbar End -->

				<!-- <Slider Start -->
				<div class="row" id="slideshow">
			
			<div id="img" class="col-md-12 col-xs-12" style="padding: 0px;">
				<img class="img-responsive"  src="b1.jpg" style="width: 100%;height: 600px;padding: 0px;">
			</div>

			<div id="img" class="col-md-12 col-xs-12" style="padding: 0px;">
				<img class="img-responsive"  src="b2.jpg" style="width: 100%;height: 600px;padding: 0px;">
			</div>

			<div id="img" class="col-md-12 col-xs-12" style="padding: 0px;">
				<img class="img-responsive"  src="b3.jpg" style="width: 100%;height: 600px;padding: 0px;">
			</div>

			<div id="img" class="col-md-12 col-xs-12" style="padding: 0px;">
				<img class="img-responsive"  src="b4.jpg" style="width: 100%;height: 600px;padding: 0px;">
			</div>

			<div id="img" class="col-md-12 col-xs-12" style="padding: 0px;">
				<img class="img-responsive"  src="b5.jpg" style="width: 100%;height: 600px;padding: 0px;">
			</div>

			<div id="img" class="col-md-12 col-xs-12" style="padding: 0px;">
				<img class="img-responsive"  src="b6.jpg" style="width: 100%;height: 600px;padding: 0px;">
			</div>

		</div>

		<script>
			
			$("#slideshow > #img:gt(0)").hide();

			setInterval(function(){
				$("#slideshow > #img:first")
					.fadeOut(2000)
					.next()
					.fadeIn(2000)
					.end()
					.appendTo("#slideshow");
			 },3000);

			$("#tableid").hide();
			$("#abc").click(function(){
				$("#tableid").fadeIn(3000);
			})


		</script>	

			<!-- Slider End -->


			 <div class="container-fluid" style="padding: none;">
              <div class="row">
                <div class="c1 col-md-3 col-sm-6 col-xs-12">
                    <i class="fas fa-sync-alt" style="font-size: 50px;margin: 80px 0px 0px 0px;"></i><span id="icon">ALL Types Of Books Available</span></div>

                 <div class="c2 col-md-3 col-sm-6 col-xs-12">
                 <i class="fas fa-bookmark" style="font-size: 50px; margin: 80px 0px 0px 0px;"></i><span id="icon">Easy To Search</span></div>

                  <div class="c1 col-md-3 col-sm-6 col-xs-12">
                  <i class="fas fa-sync-alt" style="font-size: 50px; margin: 80px 0px 0px 0px;"></i><span id="icon">Easy To Maintain Acc.</span></div>

                   <div class="c2 col-md-3 col-sm-6 col-xs-12">
                   <i class="fas fa-bookmark" style="font-size: 50px; margin: 80px 0px 0px 0px;"></i><span id="icon">15 Days To Reissues</span></div>
              </div>
            </div>

            			<!-- Book Search start -->
              <div class="container-fluid" style=" margin-top: 20px; padding: 0px;">
            <div class="row" style="padding: 0px; margin-left: 0px; margin-right: 0px; font-family: 'Lobster',cursive;"><h1>BOOK MANAGES BY...</h1>
              <h5>Inspired By Influencers</h5>
                <div class="last col-md-4 col-sm-4 col-xs-12" style="padding: 0px;">
                  <img src="s1.jpg" style="height: 500px; width: 100%;">
                  <div class="overlay"><h3>SEARCH BY NAME</h3>
                   <div class="info" id="sn1"><a href="register.php">Search Now </div>
                   
                </div>
                </div>

                <div class="last col-md-4 col-sm-4 col-xs-12" style="padding: 0px;">
                  <img src="s2.jpg" style="height: 500px; width: 100%;">
                  <div class="overlay"><h3>SEARCH BY AUTHOR</h3>
                   <div class="info" id="sn2"><a href="register.php">Search Now </div>
                </div>
                </div>

                <div class="last col-md-4 col-sm-4 col-xs-12" style="padding: 0px;">
                  <img src="s3.jpg" style="height: 500px; width: 100%;">
                  <div class="overlay"><h3>SEARCH BY PUBLICATION</h3>
                   <div class="info" id="sn3"><a href="register.php">Search Now </div>
                </div>
                </div>

            </div> 
            			<!-- Book Search End -->	
</body>
</html>
<?php

        include 'footer.php';

    ?>

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
  #box1,#box2{
    height: 300px;
    width: 25%;
    /*background-color: grey;*/
    margin: 100px 0px 0px 0px;
  }
  .carousel-inner > .item > img { width:100%;  height:570px;}

  #carousel-example-one {
  
  width: 100%;
  
}
#fontst {
  font-family: "Comic Sans MS", cursive, sans-serif;

  text-shadow: 2px 4px darkseagreen;
  color: darkorchid;

}
#le{
  margin:left;

}


</style>
</head>
<body>
    <br />
    <div class="container-fluid">
      <div id="fontst"><h1> MOST SEARCHED BOOKS</h1></div>
      <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">

                <div id="imageCarousel" class="carousel slide" data-interval="2000"
                     data-ride="carousel" data-pause="hover" data-wrap="true" style="max-width: 1057px; margin: 0 auto">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel" data-slide-to="1"></li>

 
                        <li data-target="#imageCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p19.jpg" class="img-responsive">
                                    
                                </div>
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p2.jpg" class="img-responsive">
                                    
                                </div>
                                <div id="le" class="col-xs-4 col-md-4 col-sm-4 col-ml-auto" >
                                    <img class="img-fluid"src="p20.jpg" class="img-responsive"  style="width:333px;height:499px">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="ps.jpg" class="img-responsive" width="333" height="499">
                                    
                                </div>
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p5.jpg" class="img-responsive" width="333" height="499">
                                    
                                </div>
                                <div id="le" class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p16.jpg" class="img-responsive" style="width:333px;height:499px">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p21.jpg" class="img-responsive">
                                    
                                </div>
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p8.jpg" class="img-responsive">
                                    
                                </div>
                                <div id="le"class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p18.jpg"class="img-responsive" style="width:333px;height:499px">
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <a href="#imageCarousel" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#imageCarousel" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
       
        <div id="fontst"><br><h1> MOST ORDERED BOOKS</h1></div>
         <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">

                <div id="imageCarouse" class="carousel slide" data-interval="2000"
                     data-ride="carousel" data-pause="hover" data-wrap="true" style="max-width: 1057px; margin: 0 auto ">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarouse" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarouse" data-slide-to="1"></li>

 
                        <li data-target="#imageCarouse" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p14.jpg" class="img-responsive"style="width:333px;height:499px">
                                    
                                </div>
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="ps1.jpg" class="img-responsive">
                                    
                                </div>
                                <div id="le" class="col-xs-4 col-md-4 col-sm-4 col-ml-auto" >
                                    <img src="p15.jpg" class="img-responsive" class="left" style="width:333px;height:499px">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p31.jpg" class="img-responsive"style="width:333px;height:499px">
                                    
                                </div>
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p32.jpg" class="img-responsive"style="width:333px;height:499px">
                                    
                                </div>
                                <div id="le" class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p33.jpg" class="img-responsive"style="width:333px;height:499px">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p17.jpg" class="img-responsive"style="width:333px;height:499px">
                                    
                                </div>
                                <div class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p34.jpg" class="img-responsive"style="width:333px;height:499px">
                                    
                                </div>
                                <div id="le"class="col-xs-4 col-md-4 col-sm-4">
                                    <img src="p35.jpg"class="img-responsive"style="width:333px;height:499px">
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    

                    <a href="#imageCarouse" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#imageCarouse" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
               

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <?php include('footer.php');?>
</body>
</html>

   
                                
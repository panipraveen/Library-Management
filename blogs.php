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
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes" rel="stylesheet">
   

<style>
    .div8{
    padding-bottom: 48px;
}
.div8 h3{
    /*font-size: 2.5vw;*/
    font-size: 40px;
    margin-top: 64px;
    font-weight: bolder;
    font-family: 'Lobster', cursive;
    text-align: center;
    color: #343a40;
}

@media screen and (max-width: 900px){
    .div8 h3{
        font-size: 30px;
        margin-top: 50px;
    }
}
@media screen and (max-width: 600px){
    .div8 h3{
        font-size: 25px;
        margin-top: 40px;
    }
}
@media screen and (max-width: 450px){
    .div8 h3{
        font-size: 20px;
        margin-top: 20px;
    }
}

.div8 span{
    /*font-size: 1.5vw;*/
    font-size: 22px;
    text-align: center;
    display: block;
    margin-bottom: 2em;
    letter-spacing: 3px;
    word-spacing: 2px;
    color: #343a40;
    font-family: 'Pacifico', cursive;
}

@media screen and (max-width: 900px){
    .div8 span{
        font-size: 18px;
        margin-bottom: 2.5em;
    }
}
@media screen and (max-width: 600px){
    .div8 span{
        font-size: 15px;
        margin-bottom: 2em;
    }
}
@media screen and (max-width: 450px){
    .div8 span{
        font-size: 10px;
        margin-bottom: 1.5em;
    }
}

.part{
    display: flex;
    flex-direction: column;
    margin-top: 15px;
}

.part1 img{
    width: 100%;
   /* border-bottom-left-radius: calc(5.25rem - 1px);
    border-bottom-right-radius: calc(5.25rem - 1px);*/
    /*border-radius: calc(10.25rem - 1px);*/
    border-radius: 1px;
}

.part2{
    padding: 1.5rem;
    border: 1px solid #dee2e6;
}

.part2 h4{
    color: #000;
    font-size: 22px;
    line-height: 1.5;
}

.part2 h5{
    color: #777;
    font-size: 12px;
    word-spacing: 3px;
    letter-spacing: 1px;
}

.part2 p{
    font-size: 15px;
    letter-spacing: 1px;
    line-height: 1.9;
    color: #999;
}
    
</style>


</head>
<body>

    <div class="div8">
        <h3>Our Blog</h3>
        <span>Most Commonly Search Books...!</span>

        <div class="container" style="padding-bottom: 48px;">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="part">
                        <div class="part1">
                            <img src="blog1.jpg" style="height: 300px;">
                        </div>
                        <div class="part2">
                            <h4>Cloud Computing</h4>
                            <h5>FEB 1, 2020 - LOREMIPSUM</h5>
                            <p>Cras ultricies ligula sed magna dictum porta auris blandita. Nulla viverra pharetra se.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="part">
                        <div class="part1">
                            <img src="blog2.jpg" style="height: 300px;">
                        </div>
                        <div class="part2">
                            <h4>Network Security</h4>
                            <h5>FEB 14, 2020 - LOREMIPSUM</h5>
                            <p>Cras ultricies ligula sed magna dictum porta auris blandita. Nulla viverra pharetra se.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="part">
                        <div class="part1">
                            <img src="blog3.jpg" style="height: 300px;">
                        </div>
                        <div class="part2">
                            <h4>Wireless Sensor Network</h4>
                            <h5>FEB 16, 2020 - LOREMIPSUM</h5>
                            <p>Cras ultricies ligula sed magna dictum porta auris blandita. Nulla viverra pharetra se.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
    include 'footer.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rainbow Nepal Airlines</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
 
</head>

<body >
  <div class="disbody">
<nav class="navbar navbar-inverse" id="navvy">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#fff;" href="#">Rainbow Nepal Airline</a>
      <img src="img/airlogo.jpg">
    </div>
    <div class="collapse navbar-collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="page-scroll" ><a style="color:#fff;" href="?page=home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li ><a style="color:#fff;"  href="?page=Gallery" class="page-scroll"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>
        <li ><a style="color:#fff;" href="?page=aboutus" class="page-scroll"><span class="glyphicon glyphicon-user"></span> About us</a></li>
        <li ><a style="color:#fff;" href="?page=contact" class="page-scroll"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
        <li ><a style="color:#fff;" href= "pages/login.php" class="page-scroll"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      
    </div>
  </div>

</nav>


</div>


</html>
<?php 
if(isset($_GET['page'])){
$url_name=$_GET['page'];
include 'pages/'.$url_name.'.php';
}
else{
  include 'pages/home.php';
}
 ?>


<footer>
  <div class="fixed-bottom" style="position: absolute; background-image:linear-gradient(yellow,darkorange) ; left:0; right:0;margin-top: 30px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">

          <h4 class="text-center" style="color: white; padding-top: 25px;">All rights reserved.</h4>
        </div>
        <div class="col-md-6">
    <div class="pull-right" style="padding: 10px;padding-top:30px;padding-bottom:30px;font-size: 18px;color: white;">
        <a href="#" class="fa fa-facebook-square" style="color: white; text-decoration: none; padding-right: 30px;">Facebook</a>
        <a href="#" class="fa fa-google" style="color: white; text-decoration: none; padding-right: 30px;"> Google</a> 
        <a href="#" class="fa fa-twitter-square" style="color: white; text-decoration: none;"> Twitter</a> 
    </div> 
        </div>
    </div>
    </div>
  </div>
</footer>
 </section>
</body>



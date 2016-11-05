<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Travel</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/travel.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
include_once ("pages/functions.php");
 ?>
<div class="travel-cont container">
	<div class="page">
		<nav class="travel-menu navbar navbar-inverse">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      </button>
		      <a class="navbar-brand" href="index.php?page=1"><span class="logo-travel">Map</span> Travel</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		    	<ul class="nav navbar-nav navbar-right">
			        <li><a href="index.php?page=4"><span class="glyphicon glyphicon-user"></span> Register</a></li>
			        <li><a href="#" id="click_login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		      	</ul>
			    <ul class="nav navbar-nav navbar-right">
			        <li><a href="index.php?page=1">Tours</a></li>
			        <li><a href="index.php?page=2">Admin</a></li>
			        <li><a href="index.php?page=3">Review</a></li> 
			    </ul>
		    </div>
		  </div>
		  <div class="travel_login col-xs-12 col-sm-6 col-md-3 col-sm-offset-6 col-md-offset-9" id="travel_login" >
			<form action="" class="login">
				<input type="text" name="login" placeholder="Login" class="form-login"><br>
				<input type="password" name="pass" placeholder="Password" class="form-password"><br>
				<input type="submit" name="reg" class="form-login-btn" id="login-btn" value="Enter" >
			</form>
		</div>
	</nav>
	
	<div class="travel-roww row">
		<p class="travel-tagline">Travel around the world!</p>
	</div>
	<div class="conteiner row travel-image git">
		<div class="img-thumbnail"></div>
	</div>		

		<section class="content">
			<?php
			if(isset($_GET['page'])){
				$page = $_GET['page'];
				if($page==1)include_once("pages/tours.php");
				if($page==2)include_once("pages/admin.php");
				if($page==3)include_once("pages/review.php");
				if($page==4)include_once("pages/register.php");
			}
			else {
				include_once("pages/tours.php");
			}

			 ?>
		</section>
		</div>
		<footer class="travel-menu navbar navbar-inverse"><p><span class="logo-travel">Map</span> Travel  <br><span class="my-name">by Anastasiya Kosmina</span></p></footer>
	</div>
		

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>
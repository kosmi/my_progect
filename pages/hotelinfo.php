<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="../js/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="../css/travel.css">
	<link rel="stylesheet" href="../css/carusel.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
include_once ("functions.php");
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
		<div class="stars">
			<div class="star"></div>
			<div class="star"></div>
			<div class="star"></div>
			<div class="star"></div>
			<div class="star"></div>
		</div>
		<p class="travel-tagline hotel_name">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, natus!</p>
	</div>
	<div class="conteiner row travel-image">
		<div  id="owl-demo" class="owl-carousel owl-theme">
				<div class="item"> <img src="../images/maldivy-tropiki-more-bungalo-3708.jpg" alt=""></div>
				<div class="item"> <img src="../images/nebo-oblaka-tropiki-more.jpg" alt=""></div>
				<div class="item"> <img src="../images/vetnam-zaliv-halong-skaly.jpg" alt=""> </div>
				<div class="item"> <img src="../images/tropical-paradise-beach-palms-3986.jpg" alt=""> </div>
				<div class="item"> <img src="../images/tropical-sunset-paradise-4649.jpg" alt=""></div>
				<div class="item"> <img src="../images/plyazh-tropiki-more-pesok-trava.jpg" alt=""> </div>
				<div class="item"> <img src="../images/mon-sen-mishel-normandiya-2130.jpg" alt=""> </div>
			</div>
	</div>			
		<section class="content">
		<div class="info col-lg-8  col-md-8 col-sm-12 col-xs-12">		
			 <h2 class="info_fonts">Information</h2>
			 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium commodi vero dolorum harum provident. Ut ea ducimus natus quos reiciendis perspiciatis ipsum repudiandae asperiores, commodi, deserunt culpa architecto assumenda molestiae eius animi neque, veniam. Tempora deserunt quod, ipsa saepe assumenda, blanditiis quas odit repellendus inventore alias, quo totam neque libero.
		 </div>
		 <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
		 	<div class="col-lg-6  col-md-6 col-sm-6 col-xs-6">
			 	<h2 class="info_fonts">Country</h2>
			 	<h3 class="city">City</h3>
		 	</div>
		 	<div class="col-lg-6  col-md-6 col-sm-6 col-xs-6">
		 		<div class="price">2000$</div>
		 		<button class="reserve">Reserve</button>
		 	</div>
		 </div>
		 <div class="info rew col-lg-12  col-md-12 col-sm-12 col-xs-12">
		 <h2 class="info_fonts">Comments</h2>
		 	<?php 
		 	connect();
		 	getComments(4);
		 	 ?>
		 </div>
		</section>
		</div>
		<footer class="travel-menu navbar navbar-inverse"><p><span class="logo-travel">Map</span> Travel  <br><span class="my-name">by Anastasiya Kosmina</span></p></footer>
	</div>


	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.1.0.min.js"></script>
    <script src="../js/owl-carousel/owl.carousel.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/carusel.js"></script>
</body>
</html>
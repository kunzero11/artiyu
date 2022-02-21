<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shishou's Siomai</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<?php include 'header.php'; ?>

	<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

</head>
<body>
    <!-- Start of head -->
<div class="card-1">
	<div class="card-body">
	  <br> <br> <hr>	  
	  <h3 class="card-title text-center">Shishou's Siomai</h3>
	  <p class="font-italic card-text text-center"">The Siomai that teaches you about life; Delivering Siomai to your home.</p>
	</div>
  </div>
<!-- End of head -->
<!-- Start of Carousel -->
	<div class="container-fluid p-0">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="images/carousel/header.jpg" class="d-block w-100" alt="s1">
		    </div>
		    <div class="carousel-item">
		      <img src="images/carousel/siomai2.jpg" class="d-block w-100" alt="s2">
		    </div>
		    <div class="carousel-item">
		      <img src="images/carousel/siomai3.jpg" class="d-block w-100" alt="s3">
		    </div>
		    <div class="carousel-item">
		      <img src="images/carousel/siomai4.jpg" class="d-block w-100" alt="s4">
		    </div>
		    <div class="carousel-item">
		      <img src="images/carousel/siomai5.jpg" class="d-block w-100" alt="s5">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </button>
		</div>
	</div>
<!-- End of Carousel -->
<!-- SS Bestsellers -->
<br> 
<div class="text text-center"> 
 <div id="down">
    <h3> Products List </h3>
</div>
<br>
<div class="row row-cols-1 row-cols-md-3 g-3"> 
	<div class="col">
	  <div class="card h-100 border-danger mb-3">
		<img src="images/bestsellers/beef.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Shishou's Certified</h5> 
				<hr>
		  		<h2>Beef</h2>
				<p> &#8369; 50 </p>
			    <a href="cart.php" class="btn btn-outline-danger" role="button">Add to Cart</a>
		</div>
	  </div>
	</div>
	<div class="col">
	  <div class="card h-100 border-danger mb-3">
		<img src="images/bestsellers/chicken.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Shishou's Certified</h5> 
				<hr>
		  <h2 class="card-title">Chicken</h2>
		  <p> &#8369; 45 </p>
		  <a href="cart.php" class="btn btn-outline-danger" role="button">Add to Cart</a>
		</div>
	  </div>
	</div>
	<div class="col"> 
		<div class="card h-100 border-danger mb-3">
		<img src="images/bestsellers/pork and shrimp.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Shishou's Certified</h5> 
				<hr>
		  <h2 class="card-title">Pork and Shrimp</h2>
		  <p> &#8369; 40 </p>
		  <a href="cart.php" class="btn btn-outline-danger" role="button">Add to Cart</a>
		</div>
	  </div>
	</div> 
	<div class="col"> <br> 
		<div class="card h-100 border-danger mb-3">
		  <img src="images/bestsellers/tuna.jpg" class="card-img-top" alt="...">
		  <div class="card-body">
			<h5 class="card-title">Shishou's Certified</h5> 
				<hr>
			<h2 class="card-title">Tuna</h2>
			<p> &#8369; 45 </p>
			<a href="cart.php" class="btn btn-outline-danger" role="button">Add to Cart</a>
		  </div>
		</div>
	  </div>
   <div class="col"> <br>
	<div class="card h-100 border-danger mb-3">
	  <img src="https://i.ibb.co/8MCpfn4/Japanese-Siomai.jpg" class="card-img-top" alt="..." height="280px" width="720px">
	  <div class="card-body">
		  <h5 class="card-title">Shishou's Certified Bestseller</h5> 
			  <hr>
		<h2 class="card-title">Japanese Siomai</h2>
		<p> &#8369; 45 </p>
		<a href="cart.php" class="btn btn-outline-danger" role="button">Add to Cart</a>
	  </div>
	</div>
  </div>
  <div class="col"> <br>
	<div class="card h-100 border-danger mb-3">
	  <img src="https://i.ibb.co/WccyJS9/shark-s.jpg" class="card-img-top" alt="...">
	  <div class="card-body">
		  <h5 class="card-title">Shishou's Certified</h5> 
			  <hr>
		<h2 class="card-title">Sharks Fin</h2>
		<p> &#8369; 50 </p>
		<a href="cart.php" class="btn btn-outline-danger" role="button">Add to Cart</a>
	  </div>
	</div>
  </div>
</div>
<!-- End of Christmas Specials -->
<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
		<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
	  </svg>
  </button>

  <?php include 'footer.php'; ?>
<!-- scripts-->
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function () {
		  $(document).scroll(function () {
		    var $nav = $(".navbar-fixed-top");
		    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
		  });
		});
	</script>
<!--end of scripts-->
</body>
</html>
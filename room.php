<?php 
include("<connection/connect.php");

	
	$id=$_GET['roomid'];
	$city=$_GET['destination'];
	$checkin=$_GET['checkin'];
	$checkout=$_GET['checkout'];
	$no_rooms=$_GET['no_rooms'];
    $sql = "Select * from room_info where r_id='$id'";
    $result=mysqli_query($db,$sql);


	while($row = mysqli_fetch_array($result)){
		$img=$row['image'];
		$type=$row['r_type'];
		$text=$row['text'];
		$id = $row['r_id'];
		$price=$row['price'];
		$avail=$row['available'];
		
		session_start();}



		switch ($type) {
			case "Double Room":
			  $bed="Queen size";
			  break;
			case "Single Room":
				$bed="Queen size";
			  break;
			case "Premium Room":
				$bed="King size";
			  break;
			case "Delux Room":
				$bed="King size";
			  break;
		}
		
	echo '<!DOCTYPE html>
	<html>
	
	
	<head>
	
	
	<meta charset="UTF-8">
	<title>'.$type.'</title>
	<link rel = "icon" href = 
	"images/lolo.png" 
			type = "image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Linking Bootstrap css file -->
	
	<!-- Linking Main Css file -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/color.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	
		
		<link rel="stylesheet" type="text/css" href="css/popup.php">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	
		
	</head>
	
	
	<body>
	
		<div class="wrapper">
	
	
		<header class="abs">
				<div class="top-bar">
					<div class="container">
						<div class="con-links">
							<ul>
									<li><i class="fa fa-phone" aria-hidden="true"></i> (+91)9878920494</li>
								<li><i class="fa fa-envelope" aria-hidden="true"></i> BookIt@gmail.com</li>
							</ul>
						</div><!--con-links end-->
						<div class="social-links">
							<ul class="social-lnks">
								<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
							
							</ul>
							
						</div><!--socail-links end-->
					</div>
				</div><!--top-bar end-->
				<div class="bottom-header">
					<div class="container">
						<div class="hd">
							<div class="logo">
								<a href="#" title="">
									<img src="images/logo.png" alt="" />
								</a>
							</div><!--logo end-->
							<div class="menu-search">
								<nav>
									<ul>
										<li class="active menu-item-has-children"><a href="index.php" title=""><i class="fa fa-joomla"></i>Home</a>
											
										</li>
										
										<li><a href="about.php" title="">About Us</a></li>
											<li><a href="package.php" title="">Packages </a></li>
										<li><a href="contact.php" title="">Contact Us</a></li>';
	
	
	
										
										
										if(!isset($_SESSION["loggedin"]) || $_SESSION['loggedin']!=true){
											echo '
										<li><a href="login.php" title=""><button type="button" class="btn btn-warning">Login</button></a></li>
										
										<li><a href="signup.php" title=""><button type="button" class="btn btn-warning">Signup</button></a></li>';
	
										}
										
										if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
											echo '
											<div class="btn-group">
  <button type="button" class="btn btn-bg dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
    '.$_SESSION['name'].'
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item text-dark" href="mybookings.php">Bookings</a></li>
    <li><a class="dropdown-item text-dark" href="logout.php">Logout</a></li>
  </ul>
</div>
										';
	
	
										}
	
	
										
	
	
									echo '
									</ul>
								 </nav><!--nav end-->
								
							</div><!--menu-search end-->
							<div class="menu-icon">
								<span class="first-bar"></span>
								<span class="second-bar"></span>
								<span class="third-bar"></span>
							</div>
						</div>
					</div>
				</div><!--bottom-header end-->
			</header><!--Header end-->
		
		
			<div class="about-bg">
				<div class="container">
					<div class="rl-banner"></br>
						<h2 class="tp">About us</h2>
						<ul></br>
							<li><a href="#">Home</a></li>
							<li><span class="active">'.$type.'</span></li>
						</ul>
					</div>
				</div>
			</div>
		
	
	
			<section class="row mb-4 mx-4">
            
            <div class="fav-areas mt-4">
									<div class="title f2">
										<h3>'.$type.'</h3>
									</div><!--title end--> </div>

			


            <div class="col-md-3">
											<div class="fav-room">
												<img src="images/resources/'.$img.'.jpg" alt="">
												<div class="fav-rm-data">
													<h3><a href="single.php" title="">'.$type.'</a></h3>
												
												</div>
											</div><!--fav-room end-->
											
						 <div style="float:left;"> 
						 Available : '.$avail.'
					 </div>
			
		
					 <div class="room-price"> 
						 Rs.<h5>'.$price.'/-</h5>
						 <span>Per Night</span>
					 </div>  			</div>
	
		
			
			
										


            
                                        <div class="col-md-8">
                                        
                                        <h1 style="font-size :2em; margin-bottom: 20px;">Room facilities</h1>
												<ul class="list-group">
												
												<li class="list-group-item list-group-item-warning">- '.strtoupper("$bed").' BED</li>
												<li class="list-group-item list-group-item-warning">- WIFI</li>
												<li class="list-group-item list-group-item-warning">- PARKING</li>
												<li class="list-group-item list-group-item-warning">- TELEVISION</li>
												<li class="list-group-item list-group-item-warning">- TOILETRIES (e.g. Shampoo, lotion, etc.)</li>
												<li class="list-group-item list-group-item-warning">- BATHROBES AND SLIPPERS</li>
												<li class="list-group-item list-group-item-warning">- FREE BREAKFAST</li>
												<li class="list-group-item list-group-item-warning">- CAB BOOKING</li>
											 
											</ul>


                                            <h3 style="font-size :1em; margin-top: 20px;">Extra bed available</h3>
                                            <form action="booking.php" method="get" >
			<select class="form-control" style="margin-bottom: 20px;" name="extrab">
			<option value="none">None</option>
			<option value="single">Single bed (queen size)</option>
			<option value="double">Double bed (king size)</option>
			</select>
            
			<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  COMPARE
</button>';



echo '

<!-- Modal -->
<div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-warning-subtle">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Compare</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



	  <div class="card-group">
	  <div class="card bg-warning-subtle" style="width: 18rem;">
		<img src="images/resources/comparison2.png" class="card-img-top" alt="..." height="220px">
		<div class="card-body">
		  <h5 class="card-title text-center ">Hotel</h5> 
		</div>
		<ul class="list-group list-group-flush">
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">Price</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">Bed</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">Amenities</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">Free cancellation</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">Breakfast</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">Gym Access</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">Parking</li>
		</ul>
		
	  </div>


	  <div class="card bg-warning-subtle" style="width: 18rem;">
		<img src="images/resources/'.$img.'.jpg" class="card-img-top" alt="..." height="220px">
		<div class="card-body">
		  <h5 class="card-title text-center ">BookIt</h5>
		</div>
		<ul class="list-group list-group-flush">
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">Rs.'.$price.'</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">'.$bed.'</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">9+</li>
		  <li class="list-group-item text-center bg-warning-subtle"><i class="bi bi-check-lg"></i></li>
		  <li class="list-group-item text-center bg-warning-subtle"><i class="bi bi-check-lg"></i></li>
		  <li class="list-group-item text-center bg-warning-subtle"><i class="bi bi-check-lg"></i></li>
		  <li class="list-group-item text-center bg-warning-subtle"><i class="bi bi-check-lg"></i></li>
		  
		  
		</ul>
		
	  </div>';

	  $sql2 = "Select * from compare where type='$type'";
    $result2=mysqli_query($db,$sql2);


	while($row2 = mysqli_fetch_array($result2)){
		$cname=$row2['name'];
		$cprice=$row2['price'];
		$cbed=$row2['bed'];
		$camen = $row2['amenities'];
		$ccancel=$row2['cancellation'];
		$cbreakfast=$row2['breakfast'];
		$cgym=$row2['gym'];
		$cparking=$row2['parking'];
		$cimg=$row2['image'];
		

		echo '<div class="card bg-warning-subtle" style="width: 18rem;">
		<img src="images/resources/compare/0'.$cimg.'.jpg" class="card-img-top" alt="..." height="220px">
		<div class="card-body">
		  <h5 class="card-title text-center ">'.$cname.'</h5>
		</div>
		<ul class="list-group list-group-flush">
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">Rs.'.$cprice.'</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">'.$cbed.'</li>
		  <li class="list-group-item text-center bg-warning-subtle fw-semibold">'.$camen.'</li>
		  <li class="list-group-item text-center bg-warning-subtle"><i class="'.$ccancel.'"></i></li>
		  <li class="list-group-item text-center bg-warning-subtle"><i class="'.$cbreakfast.'"></i></li>
		  <li class="list-group-item text-center bg-warning-subtle"><i class="'.$cgym.'"></i></li>
		  <li class="list-group-item text-center bg-warning-subtle"><i class="'.$cparking.'"></i></li>
		  
		  
		</ul>
		
	  </div>';




		}

		



		echo '

	  </div>
      </div>
      
    </div>
  </div>
</div>


            ';
			
			if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
				echo '<a href="login.php" title=""><button type="button" class="btn btn-warning">LOGIN TO BOOK</button></a>';
	
			}
			if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
				
				if($avail>=1){
				
				echo '<button type="submit" class="btn btn-warning">BOOK</button>';
				echo "<input type='hidden' id='postId' name='roomid' value=".$id." >";
				echo "<input type='hidden' id='postId' name='checkin' value=".$checkin." >";
				echo "<input type='hidden' id='postId' name='checkout' value=".$checkout." >";
				echo "<input type='hidden' id='postId' name='no_rooms' value=".$no_rooms." >";
				echo "<input type='hidden' id='postId' name='destination' value=".$city." >";
	
				}
				else
				echo '<button type="button" class="btn btn-warning" disabled>Room unavailable</button>';
	
			}
			
			echo '
			</form>
                                        

                                        </div>

            </section>';
	
			
		include("footer.php");

echo'
		</div><!--wrapper end-->
	
	<!-- Including Jquery Js File -->
	<script type="text/javascript" src="http://creativethemes.us/relax/js/jquery.min.js"></script>
	<!-- Including Bootstrap js file -->
	<script type="text/javascript" src="http://creativethemes.us/relax/js/bootstrap.min.js"></script>
	<!-- Custom Js file -->
	<script type="text/javascript" src="http://creativethemes.us/relax/js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	</body>
	
	
	<!-- Mirrored from creativethemes.us/relax/reservation.html by HTTrack Website Copier/3.x [XR&CO2014], Thu, 21 Sep 2017 15:23:47 GMT -->
	</html>';
		


		


?>



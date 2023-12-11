

<!DOCTYPE html>
<html>


<head>


<meta charset="UTF-8">
<title>About BookIt</title>
<link rel = "icon" href = 
"images/lolo.png" 
        type = "image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Linking Bootstrap css file -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Linking Main Css file -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/popup.php">
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
									<li><a href="contact.php" title="">Contact Us</a></li>



									<?php
									session_start();
									if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
										echo '
									<li><a href="login.php" title=""><button type="button" class="btn btn-warning">Login</button></a></li>
									
									<li><a href="signup.php" title=""><button type="button" class="btn btn-warning">Signup</button></a></li>';

									}
									
									if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
										echo '
										
									
									<!-- Example single danger button -->
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


									?>



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
						<li><span class="active">About Us</span></li>
					</ul>
				</div>
			</div>
		</div>
	


		<section>
			<div class="pd90">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="relax-history">
								<h3>BookIt</h3>
								<p>Our hotels boasts comfortable guest rooms and suites, each equipped with modern amenities to ensure a relaxing and enjoyable stay. From plush bedding to in-room Wi-Fi, we have everything you need for a comfortable and convenient stay.</p>
								<p>Experience the ultimate in luxury and comfort at our hotel. Our elegantly appointed rooms and suites are equipped with top-of-the-line amenities, from plush bedding to flat-screen TVs and more</p>
								
							</div><!---history end-->
						</div>
						<div class="col-md-5">
							<div class="history-carousel">
								<div class="history-img">
									<img src="http://creativethemes.us/relax/images/resources/history1.jpg" alt="">
								</div><!--history-img end-->
								<div class="history-img">
									<img src="http://creativethemes.us/relax/images/resources/history1.jpg" alt="">
								</div><!--history-img end-->
							</div><!--history-carousel end-->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="container">
				<div class="about-imgs">
					<div class="row">
						<div class="col-md-3">
							<div class="abt-img">
								<img src="http://creativethemes.us/relax/images/resources/about1.jpg" alt="">
							</div><!--abt-img end-->
						</div>
						<div class="col-md-3">
							<div class="abt-img">
								<img src="http://creativethemes.us/relax/images/resources/about2.jpg" alt="">
							</div><!--abt-img end-->
						</div>
						<div class="col-md-3">
							<div class="abt-img">
								<img src="http://creativethemes.us/relax/images/resources/about3.jpg" alt="">
							</div><!--abt-img end-->
						</div>
						<div class="col-md-3">
							<div class="abt-img">
								<img src="http://creativethemes.us/relax/images/resources/about4.jpg" alt="">
							</div><!--abt-img end-->
						</div>
					</div>
				</div><!--about-imgs end-->
				<div class="abt-links">
					<div class="row no-gutter">
						<div class="col-md-6">
							<ul>
								<li><p>Accomodations: comfortable beds, private bathrooms, flat-screen TVs, and more.</p></li>
								<li><p>Dining:  on-site restaurants or cafes that serve breakfast, lunch, and dinner.</p></li>
								<li><p>Transportation:  shuttles to and from the airport or local attractions.</p></li>
								<li><p>eisure facilities: swimming pools, golf courses, tennis courts, and more.</p></li>
							</ul>
						</div>
						
					</div>
					
					
				</div><!--abt-links end-->
			</div>
		</section>	
		
	
	<?php
		include("footer.php");
?>

	</div><!--wrapper end-->

<!-- Including Jquery Js File -->
<script type="text/javascript" src="http://creativethemes.us/relax/js/jquery.min.js"></script>
<!-- Including Bootstrap js file -->
<script type="text/javascript" src="http://creativethemes.us/relax/js/bootstrap.min.js"></script>
<!-- Custom Js file -->
<script type="text/javascript" src="http://creativethemes.us/relax/js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>


<!-- Mirrored from creativethemes.us/relax/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 15:23:47 GMT -->
</html>
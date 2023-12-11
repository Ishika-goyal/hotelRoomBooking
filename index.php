<?php
session_start();
// if(isset($_GET['search']))
// {
// 	header("location:search.php");
// }


echo '<!DOCTYPE html>
<html>


<head>
<meta charset="UTF-8">
<title>BookIt</title>

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<link href="http://code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" />
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<style>
.hotelcheck{
	padding:40px 0;
	background: #282834;
	color:#fff;
}
#subs,#adds{
    background-color: #bf8d5c;
    width:30px;

}
#no_rooms{
    width: 150px;
	margin:auto;
}

</style>


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
									
									if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
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

		
		
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/resources/pink.jpg" class="d-block w-100" alt="..." height="700px">
    </div>
    <div class="carousel-item">
      <img src="images/resources/hall.jpg" class="d-block w-100" alt="..." height="700px">
    </div>
    <div class="carousel-item">
      <img src="images/resources/bar.jpg" class="d-block w-100" alt="..." height="700px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
							<div class="fav-areas">
								<div class="title f2">
									<h3>Search</h3>
								</div><!--title end-->
								<section class="hotelcheck">
								<form action="roomsearch.php" method="get">
								<div class="row g-3">
  <div class="col-sm">
  <label>Destination</label>
  <select class="form-select" name="destination">
  <option value="delhi" selected>delhi</option>
  <option value="mumbai">mumbai</option>
  <option value="goa">goa</option>
  <option value="jaipur">jaipur</option>
</select>
  </div>
  <div class="col-sm">
  <label>Check-in</label>
    <input type="date" id="arival" class="form-control" name="checkin" onchange="check();" required>
  </div>
  <div class="col-sm">
  <label>Check-Out</label>
  <input type="date" id="return" class="form-control" name="checkout" required>
  </div>
  <div class="col-sm">
  
  <label>No. of Rooms</label>
  <div class="d-flex align-items-center flex-fill ms-sm-1 my-sm-0 my-4 border-bottom position-relative">
  <input type="button" value="-" id="subs" onclick="subst()" />&nbsp;
    <input type="number" class="form-control"  id="no_rooms" name="no_rooms" min="1" required>
	<input type="button" value="+" id="adds" onclick="add()" />
  </div></div>
  <div class="col-sm">
  <label>  </label>
  <div class="d-grid gap-2">
  
  <button class="btn btn-warning" type="submit">Check availibility</button>
</div>
  </div>
</div>
								</section>	
								</form>
								
							</div><!--fav areas end-->
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="pd2 bg bg1 overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="ft-img thumb-carousel" data-slider-id="1">
								<div>
									<figure>
										<img src="images/resources/ft-img3.jpg" alt="">
									</figure>
								</div>
								<div>
									<figure>
										<img src="images/resources/ft-img4.jpg" alt="">
									</figure>
								</div>
								<div>
									<figure>
										<img src="images/resources/ft-img.jpg" alt="">
									</figure>
								</div>
								<div>
									<figure>
										<img src="images/resources/ft-img2.jpg" alt="">
									</figure>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="our-services">
								<div class="title f2">
									<h3>Our Awesome Services</h3>
								</div><!--title end-->
								<div class="service-thumbs owl-thumbs" data-slider-id="1">
									<div class="service owl-thumb-item">
										<img src="images/icon1.png" alt="">
										<h4>Restaurant</h4>
										<p>In our bid to deliver authentic, undiluted experiences, we have introduced a unique regional home style dining experience.</p>
									</div><!--service end-->
									<div class="service owl-thumb-item">
										<img src="images/icon2.png" alt="">
										<h4>Spa - Beauty & Health</h4>
										<p>we offer a relaxing retreat for visitors looking for high-quality, affordable services in an inspired setting.</p>
									</div><!--service end-->
									<div class="service owl-thumb-item">
										<img src="images/icon3.png" alt="">
										<h4>teConference Room</h4>
										<p>Our modern conference room is the perfect venue for your business meetings, seminars, and events.</p>
									</div><!--service end-->
									<div class="service owl-thumb-item">
										<img src="images/icon4.png" alt="">
										<h4>Swimming Pool</h4>
										<p>Our pool is the perfect place to cool off on a hot summer day, or to enjoy a refreshing dip any time of year.</p>
									</div><!--service end-->
								</div>
							</div><!--our-services end-->
						</div>
					</div>
				</div>
			</div>
		</section>	


		<section>
			<div class="block remove-btm-gap">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="title f3">
								<h3>Our Gallery</h3>
							</div>
							<div class="options">
								<div class="option-isotop">
									<ul id="filter" class="option-set filters-nav" data-option-key="filter">
										<li><a class="selected" data-option-value="*">Rooms Highligts</a></li>
									
									</ul>
								</div>
							</div><!-- FILTER BUTTONS -->
						</div>
						<div class="col-md-10">
							<div class="row gallery grid">
								<div class="col-md-5 col-sm-5 col-xs-5 rooms swimming">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/01.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery1.jpg" data-group="set1" href="images/resources/gallery1.jpg" title="home 1"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>


								<div class=" col-md-2 col-sm-2 col-xs-2  kitchen">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/02.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery2.jpg" data-group="set1" href="images/resources/gallery2.jpg" title="home 2"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>


								<div class="col-md-5 col-sm-5 col-xs-5 dinning bath">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/03.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery3.jpg" data-group="set1" href="images/resources/gallery3.jpg" title="home 3"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>



								<div class="col-md-5  col-sm-5 col-xs-5  bath rooms">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/04.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery4.jpg" data-group="set1" href="images/resources/gallery4.jpg" title="home 4"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>



								<div class=" col-md-7 col-sm-7 col-xs-7  swimming kitchen">
									<div class="grid-item2 width-auto">
										<figure>
											<img src="images/resources/05.jpg" alt="">
											<figcaption>
												<h5>Bed room</h5>
												<ul>
													<li><a href="#" title=""><i class="fa fa-television"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-wifi"></i></a></li>
													<li><a href="#" title=""><i class="fa fa-video-camera"></i></a></li>
												</ul>
											</figcaption>
											<div class="popup-icon">
												<a class="html5lightbox" data-thumbnail="images/resources/gallery5.jpg" data-group="set1" href="images/resources/gallery5.jpg" title="home 5"><i class="fa fa-compress"></i></a>
											</div>
										</figure>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="pd-btm-less">
				<div class="container">
					<div class="partners-logo">
						
					</div><!--partners-logo end-->
				</div>
			</div>
		</section>

		



		<section>
			<div class="block no-padding">
				<div class="newsletter">
					<div class="bg bg2">
						<div class="container">
							<div class="stay-tuned">
								<h2>Stay tuned with us</h2>
								<h5>Get our updated offers, discounts, events and much more!</h5>
							</div>
							<div class="email-form">
								<form>
									<input name="" placeholder="Enter your email address" type="text">
									<button type="submit">Subscribe</button>
								</form>
							</div><!--email-form end-->
						</div>
					</div>
				</div><!--newsletter end-->
			</div>
		</section> ';

		include("footer.php");
	
echo'	
		
	</div><!--wrapper end-->

<!-- Including Jquery Js File -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Including Bootstrap js file -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>
<script type="text/javascript" src="js/wow.js"></script>

<!-- Custom Js file -->
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/searchform.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = "0" + month.toString();
    if(day < 10)
     day = "0" + day.toString();
    var maxDate = year + "-" + month + "-" + day;
    $("#arival").attr("min", maxDate);
});
function add() {
    var a = $("#no_rooms").val();
    a++;
    if (a => 1) {
        $("#subs").removeAttr("disabled");
        if(a>4){
            $("#adds").attr("disabled", "disabled");
        }
      
    }
    $("#no_rooms").val(a);
};

function subst() {
    var b = $("#no_rooms").val();
    if (b.length > 0 && b >= 1) {
        b--;
        $("#no_rooms").val(b);
        $("#adds").removeAttr("disabled");
    }
    else {
        $("#subs").attr("disabled", "disabled");
    }
};
</script>
<script type="text/javascript">
var check = function() {
	console.log(document.getElementById("arival").value);
	document.getElementById("return").min=document.getElementById("arival").value;
}
</script>
</html>'

    ;

?>





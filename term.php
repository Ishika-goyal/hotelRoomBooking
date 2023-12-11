

<!DOCTYPE html>
<html>


<head>


<meta charset="UTF-8">
<title>Terms and Conditions</title>
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
				<div class="rl-banner">
					<h2>Terms & Conditions</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">Packagess</span></li>
					</ul>
				</div>
			</div>
		</div>


		<section>
			<div class="block">
				<div class="container nopddd">
					<div class="term-one">
					<!--	<h3 class="term-title">What is this 'Lorem Ipsum' or 'Lorum Ipsum' stuff?</h3> -->
						<p> 

Reservations and cancellations:
All room reservations must be guaranteed with a valid credit card at the time of booking. Cancellations must be made at least 24 hours prior to arrival to avoid being charged for the full amount of the reservation.
<br>
Payment:
Full payment for your stay is due at the time of check-in. We accept the following forms of payment: credit card (Visa, Mastercard, American Express), debit card, and cash.
<br>
Liability:
The hotel is not responsible for any damages or losses to personal property. Guests are encouraged to secure their own insurance for their belongings.
<br>
Privacy:
We respect your privacy and will not share your personal information with any third parties. Any information collected through this website will be used for the sole purpose of processing your reservation.
<br>
Governing law:
These terms and conditions are governed by the laws of the state in which the hotel is located. Any disputes arising from the use of this website or related to a stay at the hotel will be resolved in the courts of that state.




</p>
					</div><!--term-one end-->
					<div class="row">
						<div class="tm-conditions">
							<div class="col-md-6">
								<div class="tmc-one">
									<h3 class="term-title">Use of cookies</h3>
									<p>we use cookies to remember your preferences and settings, to allow you to log in to your account, and to track the performance of the website.</p>
								</div><!--tmc-one end-->





								<div class="tmc-one">
									<h3 class="term-title">You ask, we answer!</h3>
									<div class="condi">
										<span>General / Owenrship</span>
										<p>Quos quidem tibi studiose et diligenter tractandos magnopere censeo. Nemo nostrum istius generis asotos iucunde putat vivere. Hoc non est positum in nostra actione. Atque his de rebus et splendida est eorum et illustris oratio. Igitur neque stultorum quisquam beatus neque sapientium non beatus. Quid enim possumus hoc agere divinius? Profectus in exilium Tubulus statim nec respondere ausus; Et non ex maxima parte de tota iudicabis? Heri, inquam, ludis commissis ex urbe profectus veni ad vesperum. A quibus propter discendi cupiditatem videmus ultimas terras esse peragratas. Quid est igitur, cur ita semper deum appellet Epicurus beatum et aeternum?</p>
									</div><!--condi end-->	
									<div class="condi">
										<span>Hyatt Tradmarks</span>
										<p>Igitur neque stultorum quisquam beatus neque sapientium non beatus. Quid enim possumus hoc agere divinius? Profectus in exilium Tubulus statim nec respondere ausus; Et non ex maxima parte de tota iudicabis? Heri, inquam, ludis commissis ex urbe profectus veni ad vesperum. A quibus propter discendi cupiditatem videmus ultimas terras esse peragratas. Quid est igitur, cur ita semper deum appellet Epicurus beatum et aeternum? Quos quidem tibi studiose et diligenter tractandos magnopere censeo. Nemo nostrum istius generis asotos iucunde putat vivere. Hoc non est positum in nostra actione. Atque his de rebus et splendida est eorum et illustris oratio. </p>
									</div><!--condi end-->
									<div class="condi">
										<span>Copyrights</span>
										<p>Hoc non est positum in nostra actione. Atque his de rebus et splendida est eorum et illustris oratio. Igitur neque stultorum quisquam beatus neque sapientium non beatus. Quid enim possumus hoc agere divinius. </p>
									</div><!--condi end-->	
								</div><!--tmc-one end-->
							</div>
							<div class="col-md-6">
								<div class="tmc-one">
									<h3 class="term-title">Use of this Site</h3>
									<div class="condi">
										<span>Reservations</span>
										<p>We offer online reservations for our rooms and services. All reservations must be made through our website or through one of our authorized travel agents. We reserve the right to refuse any reservation at our discretion.</p>
									</div><!--condi end-->	
									<div class="condi">
										<span>Payments</span>
										<p>Full payment for your reservation must be made at the time of booking. We accept the following forms of payment: Visa, Mastercard, American Express, and Discover. </p>
									</div><!--condi end-->
									<div class="condi">
										<span>Privacy Policy</span>
										<p>We respect your privacy and will not share your personal information with any third parties. Please see our <a href="privacy_policy.html">Privacy Policy</a> for more information.  </p>
									</div><!--condi end-->
									<div class="condi">
										<span>Liability</span>
										<p>We are not liable for any damages or injuries that may occur during your stay with us. We recommend that you purchase travel insurance to cover any unexpected circumstances. </p>
									</div><!--condi end-->
									<div class="condi">
										<ul>
											<li>Nihil ad rem! N!!!!!!!!!!!!!!!aturae.</li>
											<li>Septem autem non suo, s############ominati sunt.</li>
											<li>Duo Reges: constru$$$$$$$$$$$$interrete.</li>
											<li>Cum p**********888 illa perdiscere ludus esset.</li>
											<li>Re +++++++++++quidem locis pluribus. </li>
										</ul>
									</div>
								</div><!--tmc-one end-->
							</div>
						</div><!--tm-conditions end-->
					</div>
				</div>
			</div>
		</section>

	

		<section>
			<div class="block no-padding">
				<div class="newsletter">
					<div class="bg2">
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


</body>


<!-- Mirrored from creativethemes.us/relax/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 15:23:47 GMT -->
</html>

<?php
session_start();
include("connection/connect.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
		$email=$_POST['email'];	
		$subject=$_POST['subject'];
			$message=$_POST['message'];
			
			
	$sql = "INSERT INTO contact(name,email,subject,message) VALUES('$name', '$email','$subject','$message')";
	mysqli_query($db, $sql);
	

}

?>
<!DOCTYPE html>
<html>


<head>


<meta charset="UTF-8">
<title>Contact us</title>

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
					<h2>Contact Us</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">Contact Us</span></li>
					</ul>
				</div>
			</div>
		</div>



		<section>
			<div class="block">
				<div class="container">
					<div class="title f3 mg-btm-40">
						<h3>Contact Us</h3>
					</div><!--title end-->
					<div class="row">
						<div class="col-md-9">
							<div class="contact-form no-pdd">
								<form  action=''  method='post'> 
									<div class="row">
										<div class="col-md-12">
											<input placeholder="Your Name" type="text"  name='name'>
											<i class="fa fa-male"></i>
										</div>
										<div class="col-md-6">
											<input placeholder="Email" type="text"  name='email'>
											<i class="fa fa-envelope"></i>
										</div>
										<div class="col-md-6">
											<input  placeholder="Subject" type="text"  name='subject'>
											<i class="fa fa-book"></i>
										</div>
										<div class="col-md-12">
											<textarea placeholder="Message"  name='message'></textarea>
										</div>
										
										<div class="col-md-12">
											<input type='submit'   name='submit' class="submit style2"/>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<div class="conp">
								<div class="contact-information style2">
									<img src="http://creativethemes.us/relax/images/icon11.png" alt="">
									<div class="cn-info">
										<h4>Address</h4>
										<span>AU Block,<br>Pitampura, Delhi</span>
									</div>
								</div><!--contact-information end-->
								<div class="contact-information style2">
									<img src="http://creativethemes.us/relax/images/icon22.png" alt="">
									<div class="cn-info">
										<h4>Phone</h4>
										<span>(+91)9878920494</span>
									</div>
								</div><!--contact-information end-->
								<div class="contact-information style2">
									<img src="http://creativethemes.us/relax/images/icon33.png" alt="">
									<div class="cn-info">
										<h4>Email</h4>
										<span> BookIt@gmail.com</span>
									</div>
								</div><!--contact-information end-->
								<div class="shear">
									<h4>Social Link :</h4>
									<ul>
										<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-pinterest-p"></i></a></li>
									</ul>
								</div><!--shear end-->
							</div>
						</div>
					</div>
				</div>
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
<?php
session_start();
error_reporting(0);
include("connection/connect.php");
$id = $_GET['roomid'];
$checkin=$_GET['checkin'];
$checkout=$_GET['checkout'];
$no_rooms=$_GET['no_rooms'];
$dest=$_GET['destination'];

$eb=$_GET['extrab'];

if($eb=="double"){
	$echarge=2000;}
if($eb=="single"){
	$echarge=1000;}

$sql="select * from room_info where r_id='$id'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result);

						
						$type =  $row['r_type'];
				        $price =  $row['price'];
						$tax=(int)((18/100)*($price + $echarge));
						$newprice= $price + $echarge + $tax;
						$gtotal=$newprice*$no_rooms;
						$avail=$row['available'];
						
						


if(isset($_POST['submit']))                  //if post btn is pressed
{   
$fname = $_POST['fname'];   
$lname = $_POST['lname'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_SESSION['email'];
$phone = $_POST['phone'];
$brand = $_POST['brand'];
$cardno = $_POST['cardno'];
$month = $_POST['exp_month'];
$year = $_POST['exp_year'];


$cabtype=$_POST['cabtype'];
switch ($cabtype) {
	case "pickup":
		$pickadd=$_POST['pickadd1'];
		$dropadd=$_POST['dropadd1'];;
	  break;
	case "dropoff":
		$pickadd=$_POST['pickadd2'];
$dropadd=$_POST['dropadd2'];
	  break;
	case "round":
		$pickadd=$_POST['pickadd3'];
$dropadd=$_POST['dropadd3'];
	  break;
	
}





    $sql = "INSERT INTO detail(fname,lname,address,city,email,phone,brand,cardno,emonth,eyear) VALUES('$fname', '$lname','$address','$city','$email','$phone','$brand','$cardno','$month','$year')";
	mysqli_query($db, $sql);
	
  $fi= '<div class="alert alert-success alert-dismissible fade show" role="alert">';
 $si=	'<a href="#" data-bs-dismiss="alert" ></a>';
 $se= 'Thankyou for Your Booking. BOOKING SUCCESSFUL.';
$ei=  	'</div>';
	
	


$a2=$avail-$no_rooms;
						

$sql2="INSERT INTO `mb` (`sno`, `name`, `email`, `room`, `price`, `eb` , `no_rooms`, `checkin` , `checkout` , `r_id`) VALUES (NULL, '$fname', '$email', '$type', '$gtotal', '$eb', '$no_rooms', '$checkin', '$checkout', '$id')";
						// $sql2 = "INSERT INTO `mb` (`sno`, `name`, `email`, `room`, `price`) VALUES (NULL, '$fname', '$email', '$rtype', '$newprice')";
						mysqli_query($db, $sql2);

						$sql3="UPDATE `room_info` SET `available` = '$a2' WHERE `room_info`.`r_id` = '$id';";
						mysqli_query($db,$sql3);
	
}		



if($cabtype!=''  and $pickadd!=''  and $dropadd!='' ){
	
	$sql4="INSERT INTO `cb` (`cab_id`, `cabtype`, `pickadd`, `dropadd`, `email`, `pickdate`, `dropdate`) VALUES (NULL, '$cabtype', '$pickadd', '$dropadd', '$email', '$checkin', '$checkout')";
	mysqli_query($db, $sql4);
}
?>


<!DOCTYPE html>
<html>


<head>


<meta charset="UTF-8">
<title>BookIt</title>
<link rel = "icon" href = 
"images/lolo.png" 
        type = "image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Linking Bootstrap css file -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
<!-- Linking Main Css file -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- <link rel="stylesheet" type="text/css" href="css/cabstyling.css"> -->
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
					<h2>Reservation Room</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">Reservation form</span></li>
					</ul>
				</div>
			</div>
		</div>
	


		<section>
		
<?php		
if(isset($_POST['submit'])){
 echo $fi;
 echo$si;
echo $se;

header( "refresh:5;url=index.php" );
  echo ' You will be redirected in about 5 secs. If not, please click <a href="index.php"><u>here</u></a>.'.$test.'';
}
  echo$ei;
?>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="res-dates">
								
								
								
								
								
								<div class="select-rooms">
									<h3 class="res-title">Room Details</h3>
									<div class="rom-details">
										<h3>Room Type </h3>
										<h2><?php echo $type; ?></h2>
										
										<ul>
											<li>
												<span>Service</span>
												<b>Free</b>
											</li>
											
												<li>
												<span>price</span>
												<b><?php echo $price.'.00'; ?></b>
												
											</li>
											<li>
												<span>Extra bed charges <?php echo $eb; ?></span>
												<b><?php echo $echarge.'.00'; ?></b>
												
											</li>
											<li>
												<span>Tax</span>
												<b><?php echo $tax.'.00'; ?></b>
												
											</li>
										
										</ul>
										<h4 class="sc">Total  <span><?php echo $newprice; ?></span></h4>
								
										<h4 class="sc">Number of rooms  <span><?php echo $no_rooms; ?></span></h4>
									</div>
							
									<div class="total-bill">
										<h3>Grand Total</h3>
										<b><?php echo $gtotal.'.00'; ?></b>
									</div><!--total-bill end-->
								</div>
							</div><!--res-dates end-->
						</div>
						<div class="col-md-8">
							<div class="billing-details">
								<h2>Billing details</h2>
								<div class="billing-form">
									<form   action="" method='post'>
										<div class="row">
											
											<div class="col-md-6">
												<label>
													<h3>First Name <span>*</span></h3>
													<input type="text" name="fname" minlength='3' required>
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Last Name <span>*</span></h3>
													<input type="text" name="lname" minlength='3' required>
												</label>
											</div>
											
											<div class="col-md-12">
												<label class="sco">
													<h3>Address <span>*</span></h3>
													<input type="text" name="address" required>
													
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Town / City <span>*</span></h3>
													<input type="text" name="city" placeholder="Street Address" maxlength='15' required>
												</label>
											</div>
											
											<!-- <div class="col-md-6">
												<label>
													<h3>Email address <span>*</span></h3>
													<input type="text" name="email" placeholder="Email">
												</label>
											</div> -->
											<div class="col-md-6">
												<label>
													<h3>Phone <span>*</span></h3>
													<input type="number" name="phone" placeholder="Phone Number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength = "10" required>
												</label>
											</div>
										
											<div class="col-md-12">
												<label>
													<h3>Card Type</h3>
													<select    name='brand' required	>
													<option value="">Card Brand</option>
                                                  <option value='Master Card'>Master Card</option>
                                                  <option value='Visa'>Visa</option>
                                                  <option value='Discover'>Discover</option>
												   <option value='American Express'>American Express</option>
												      
                                   </select> 
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>ENTER YOUR 16 DIGIT CARD NUMBER:</h3>
													<input name="cardno" placeholder="xxxx-xxxxxx-xxxx-xx" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength = "16" required>
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>MONTH  </h3>
												<select    name='exp_month'	required >
							<option value="">Expiry Month:</option>
                                                  <option value='01 '>01</option>
												    <option value='02 '>02</option>
													  <option value='03 '>03</option>
													    <option value='05 '>05</option>
														    <option value='07 '>07</option>
															  <option value='08 '>08</option>
															    <option value='09 '>09</option>
																<option value='10 '>10</option>
																<option value='11 '>11</option>
																<option value='12 '>12</option>
                                                  
												      
                                   </select>   
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>YEAR OF EXPIRY:</h3>
													<select    name='exp_year' required>
									<option value="">Expiry year:</option>
                                                  
										<option value='2018'>2026</option>
										<option value='2018'>2025</option>
											<option value='2018'>2024</option>
											<option value='2018'>2023</option>	
												<option value='2018'>2022</option>
												    
														  
                                                  
												      
                                   </select>   
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											
											<div class="col-md-12">
											<button class="btn btn-outline-dark py-2 mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">+ Cab</button>
											<div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
	  <ul class="nav nav-tabs " id="myTab" role="tablist">
	 <div class="form-group border-bottom d-flex align-items-center justify-content-between flex-wrap">
   <div class="cabwrapper d-flex">
  <li class="nav-item mx-4" role="presentation">
  <label class="option my-sm-0 my-2">
    <input class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="radio" role="tab" aria-controls="home-tab-pane" aria-selected="true" name="cabtype" value="pickup">Pickup</input>
	</label>
  </li>
  <li class="nav-item mx-4" role="presentation">
  <label class="option my-sm-0 my-2">
    <input class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="radio" role="tab" aria-controls="profile-tab-pane" aria-selected="false" name="cabtype" value="dropoff">Drop-Off</input>
	</label>
  </li>
  <li class="nav-item mx-4" role="presentation">
  <label class="option my-sm-0 my-2">
    <input class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="radio" role="tab" aria-controls="contact-tab-pane" aria-selected="false" name="cabtype" value="round">Round-Trip</input>
	</label>
  </li>
  </div>
</div>
</ul>
<div class="tab-content " id="myTabContent">
  <div class="tab-pane fade py-4" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
  <div class="form-group d-sm-flex margin">
  <div class="d-flex align-items-center flex-fill me-sm-1 my-sm-0 my-4 border-bottom position-relative">
  <input type="text" name="pickadd1" class="form-control"><div class="label" id="from"></div>
                        <span class="fas fa-dot-circle text-muted"></span> </div>
						<div class="d-flex align-items-center flex-fill ms-sm-1 my-sm-0 my-4 border-bottom position-relative">
  <input type="text" name="dropadd1" class="form-control" value="BookIt <?php  echo "$dest";?>" readonly>
  <div class="label" id="to"></div>
                        <span class="fas fa-map-marker text-muted"></span> </div></div>
  <p>Cab fare will be calculated and must be paid in the realtime. <br>Cab is available in the city premises only.</p>
  </div>
  <div class="tab-pane fade py-4" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  <div class="form-group d-sm-flex margin">
                    <div class="d-flex align-items-center flex-fill me-sm-1 my-sm-0 my-4 border-bottom position-relative">
  <input type="text" name="pickadd2" class="form-control" value="BookIt <?php  echo "$dest";?>" readonly> 
  <div class="label" id="from"></div>
                        <span class="fas fa-dot-circle text-muted"></span>
                    </div>
                    <div class="d-flex align-items-center flex-fill ms-sm-1 my-sm-0 my-4 border-bottom position-relative">
  <input type="text" name="dropadd2" class="form-control">
  <div class="label" id="to"></div>
                        <span class="fas fa-map-marker text-muted"></span>
                    </div>
                </div>
  <p>Cab fare will be calculated and must be paid in the realtime.<br>Cab is available in the city premises only.</p>
</div>
  
  
  <div class="tab-pane fade py-4" id="contact-tab-pane"  role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
  <div class="form-group d-sm-flex margin">
                    <div class="d-flex align-items-center flex-fill me-sm-1 my-sm-0 my-4 border-bottom position-relative">
  <input type="text" name="pickadd3" class="form-control"> 
  <div class="label" id="from"></div>
                        <span class="fas fa-dot-circle text-muted"></span>
                    </div>
					<div class="d-flex align-items-center flex-fill ms-sm-1 my-sm-0 my-4 border-bottom position-relative">
  <input type="text" name="dropadd3" class="form-control">
  <div class="label" id="to"></div>
                        <span class="fas fa-map-marker text-muted"></span>
                    </div>
                </div>
  <p>Cab fare will be calculated and must be paid in the realtime.<br>Cab is available in the city premises only.</p>
  </div>
  
</div>
      </div>
	  <!-- card body end  -->
    </div>
											</div>



										</div>
											<div class="total-bill" >
										
												<input type="submit" name="submit"   class="total-bill" style='border-radius:5px;'/>
												
													</div>
									</form>
									
									
									
									
									
									
									<div class="cr-account">
										<div class="make-acnt">
										
										
										</div>
										
									</div><!--cr-account end-->
								</div><!--billing-form end-->
							</div><!--billing-details end-->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>


<!-- Mirrored from creativethemes.us/relax/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 15:23:47 GMT -->
</html>
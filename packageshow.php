<?php
session_start();
error_reporting(0);
include("connection/connect.php");
$pid=$_GET['p_id'];
        
        $sql="SELECT * FROM `package` WHERE p_id='$pid'";
        $result=mysqli_query($db,$sql);

	while($row = mysqli_fetch_array($result)){
        $pname=$row['name'];
        $ptext=$row['text'];
        $pprice=$row['price'];
        $pstops=$row['stops'];
    
    }
    $pdest= explode(" ", $pname);


    $places =  explode("-", $pstops);						
				
if(isset($_POST['submit']))                  //if post btn is pressed
{   
$fname = $_POST['fname'];   
$lname = $_POST['lname'];
$ddate = $_POST['ddate'];
$guest = $_POST['no_guest'];
$city = $_POST['city'];
$email = $_SESSION['email'];
$phone = $_POST['phone'];
$brand = $_POST['brand'];
$cardno = $_POST['cardno'];
$month = $_POST['exp_month'];
$year = $_POST['exp_year'];
$tprice=$guest*$pprice;

    $sql2 = "INSERT INTO `pb` (`pb_id`, `name`, `price`, `no_guest`, `dep_date`, `email`) VALUES (NULL, '$pname', '$tprice', '$guest', '$ddate', '$email')";
	mysqli_query($db, $sql2);
	
  $fi= '<div class="alert alert-success alert-dismissible fade show" role="alert">';
 $si=	'<a href="#" data-bs-dismiss="alert" ></a>';
 $se= 'Thankyou for Your Booking. BOOKING SUCCESSFUL.';
 $ei=  	"</div>";

	
}		




?>

<!DOCTYPE html>
<html>


<head>


<meta charset="UTF-8">
<title>My Bookings</title>
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
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/packageshow.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	
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
										<li><a href="term.php" title="">term & condition </a></li>
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
									}?>

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
						<li><span class="active">My bookings</span></li>
					</ul>
				</div>
			</div>
		</div>
        <?php		
if(isset($_POST['submit'])){
 echo $fi;
 echo$si;
echo $se;
header( "refresh:5;url=index.php" );
  echo ' You will be redirected in about 5 secs. If not, please click <a href="index.php"><u>here</u></a>';
}
  echo $ei;
?>
        <section class="my-4 mx-3">
        <div class="row">
    <div class="col-7">

    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/resources/package/01.jpg" class="d-block w-100" alt="..." height="600px">
    </div>
    <div class="carousel-item">
      <img src="images/resources/package/02.jpg" class="d-block w-100" alt="..." height="600px">
    </div>
    <div class="carousel-item">
      <img src="images/resources/package/03.jpg" class="d-block w-100" alt="..." height="600px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    <div class="col-5">
    <div class="card w-75 mb-3 border-warning">
  <div class="card-body">
    <h5 class="card-title"><?php echo "$pname";?></h5>
    <p class="card-text"><?php echo "$ptext";?></p>
    <a href="#" class="btn bg-warning-subtle">The package includes :</a>
    <div class="list-group my-2">
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning text-dark">2 way flight</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning text-dark">Airport pickup and drop</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning text-dark">Stay at the BookIt hotel rooms</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning text-dark">Transfer to the Tour locations</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning text-dark">Lunch and Dinner at hotel restraunt</a>
</div>
  </div>
</div>
<div class="card w-75 mb-3 border-warning ">
  <div class="card-body">
    <h5 class="card-title">Price</h5>
    <p class="card-text">All taxes included.</p>
    <h4 class="btn btn-lg bg-warning-subtle text-dark">Rs.<?php echo "$pprice";?></h4>
    <p>per person</p>
  </div>
</div>

    </div>
  </div>

 </section>

 <div class="row">
 <section class=" mx-3 col">

    <h4>Tour Roadmap</h4>
    <div class="card w-auto mb-3 bg-warning-subtle me-5">    
  <div class="card-body">
    
    <h5 class="card-title">Day 1:
         </h5>
    <p class="card-text text-dark fs-5">Flight from your city --- <i class="bi bi-airplane-fill fs-3"></i> --- <?php echo "$pdest[0]";?> airport. <br>
    Airport pickup <i class="bi bi-taxi-front-fill fs-3"></i> and check in to the hotel <i class="bi bi-buildings fs-3"></i></p>

    <?php 
    
    for ($i=0; $i< (count($places)); $i++){
        echo '<h5 class="card-title">Day '.($i+2).':
        </h5>
        <p class="card-text text-dark fs-5"><i class="bi bi-geo-alt-fill fs-4"></i>        Tour of '.$places[$i].'</p>
        ';
    }
    echo '<h5 class="card-title">Day '.($i+2).':
    </h5>
    <p class="card-text text-dark fs-5">DropOff at '.$pdest[0].' airport <i class="bi bi-taxi-front-fill fs-3"></i><br>Flight from '.$pdest[0].' airport --- <i class="bi bi-airplane-fill fs-3"></i> --- to your city</p>
    ';
    ?>
 
  </div>
</div>
    

 </section>
		

 <section class="col">
    <div class="text-center"> 

<div >
<div class="col-md-12">
							<div class="billing-details">
								<h2>BOOK NOW</h2>
								<div class="billing-form">
<form   action="" method='post'>
										<div class="row g-3">
											
											<div class="col-md-6">
												<label>
													<h3>First Name <span>*</span></h3>
													<input type="text" name="fname" minlength='3' pattern="[a-zA-Z][a-zA-Z ]{2,}" title="invalid name"required>
													
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Last Name <span>*</span></h3>
													<input type="text" name="lname" minlength='3' pattern="[a-zA-Z][a-zA-Z ]{2,}" title="invalid name" required>
													
												</label>
											</div>
											
											<div class="col-md-6">
												<label>
													<h3>Town / City <span>*</span></h3>
													<input type="text" name="city" placeholder="Street Address" maxlength='15' required>
												</label>
											</div>
											
											<div class="col-md-6">
												<label>
													<h3>Number of guests <span>*</span></h3>
													<input type="number"name="no_guest" placeholder="Guests" maxlength = "1" title="sorry we can't accomodate these many guests right now" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
													
												</label>
											</div>
                                            <div class="col-md-6">
												<label>
													<h3>Departure date <span>*</span></h3>
													<input  id="arival"  type="date" name="ddate" placeholder="">
												</label>
											</div>
											<div class="col-md-6">
												<label>
													<h3>Phone <span>*</span></h3>
													<input type="number" name="phone" placeholder="Phone Number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength = "10" required>
												</label>
											</div>
										
											<div class="col-md-6">
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
													<input id="credit-card" name="cardno" pattern="[0-9 ]+$"  placeholder="xxxx-xxxx-xxxx-xxxx" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "text" maxlength = "20" required>
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
                                                  
										<option value='2027'>2027</option>
										<option value='2026'>2026</option>
										<option value='2025'>2025</option>
											<option value='2024'>2024</option>
											<option value='2023'>2023</option>	
											
												    
														  
                                                  
												      
                                   </select>   
													<i class="fa fa-angle-down"></i>
												</label>
											</div>
											
										</div>
											<div class="total-bill" >
                                            <?php
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
				echo '<a href="login.php" title=""><button type="button" class="total-bill">LOGIN TO BOOK</button></a>';
	
			}
			if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){	
				echo '<input type="submit" name="submit"   class="total-bill" style="border-radius:5px;"/>';
			
	
			} ?>
												
												
													</div>
									</form>
        </div></div></div>
</div>
 </section>		
 </div>
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
</script>
<script>
	$('#credit-card').on('keypress change', function () {
  $(this).val(function (index, value) {
    return value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
  });
});
</script>

</html>
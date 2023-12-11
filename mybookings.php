

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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	
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
				<div class="rl-banner"></br>
					<h2 class="tp">About us</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">My bookings</span></li>
					</ul>
				</div>
			</div>
		</div>
	
        
		
		
		
		
		
		<section>
        
		<ul class="nav nav-tabs my-2 mx-2 " id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Room</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Cab</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Package</button>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
	<table class="table mx-2 my-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Room</th>
	  <th scope="col">City</th>
	  <th scope="col">Check-in</th>
	  <th scope="col">Check-out</th>
      <th scope="col">Price</th>
	  
	  <th scope="col">Invoice</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    include("connection/connect.php");
    $email = $_SESSION['email'];
    $sql="Select * from mb where email='$email'";
    $result=mysqli_query($db,$sql);
    $count=1;
	
    while($row = mysqli_fetch_array($result)){
            $name=$row['name'];
            $room=$row['room'];
            $price=$row['price'];
			$eb = $row['eb'];
			$sno=$row['sno'];
			$no_rooms=$row['no_rooms'];
			$checkin=$row['checkin'];
			$checkout=$row['checkout'];
			$r_id=$row['r_id'];
            

			$sqlt="Select * from room_info where r_id='$r_id'";
			$resultt=mysqli_query($db,$sqlt);
			$rowt = mysqli_fetch_array($resultt);
			$dest=$rowt['city'];
            echo ' <tr>
            <th scope="row">'.$count.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$room.'</td>
			<td>'.$dest.'</td>
			<td>'.$checkin.'</td>
			<td>'.$checkout.'</td>
            <td>'.$price.'</td>
			
			<td><a target= "_blank" href="pdownload.php?name='.$name.'&room='.$room.'&eb='.$eb.'&price='.$price.'&email='.$email.'&sno='.$sno.'&no_rooms='.$no_rooms.'&checkin='.$checkin.'&checkout='.$checkout.'&city='.$dest.'">download</a>';
			echo '</td>
          </tr>';
		  
		  
            $count = $count + 1;
    }

    


  ?>
  
    
    
  </tbody>
</table></div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  <table class="table mx-2 my-2">
  <thead>
    <tr>
      <th scope="col">#</th>
	  <th scope="col">Cab Type</th>
      <th scope="col">Email</th>
      
	  <th scope="col">Pickup</th>
	  <th scope="col">Dropoff</th>
      <th scope="col">Pickup address</th>
	  <th scope="col">Dropoff address</th>
	  
	  
    </tr>
  </thead>
  <tbody>
    
  <?php
    include("connection/connect.php");
    $email = $_SESSION['email'];
    $sql="Select * from cb where email='$email'";
    $result=mysqli_query($db,$sql);
    $count=1;
	
    while($row = mysqli_fetch_array($result)){
            $cabtype=$row['cabtype'];
			$pickdate=$row['pickdate'];
            $dropdate=$row['dropdate'];
			if($cabtype=="pickup"){
				$dropdate="";
			}
			if($cabtype=="dropoff"){
				$pickdate="";
			}
            
			$pickadd = $row['pickadd'];
			$dropadd=$row['dropadd'];
			
            
            echo ' <tr>
            <th scope="row">'.$count.'</th>
            
            <td>'.$cabtype.'</td>
			<td>'.$email.'</td>
			<td>'.$pickdate.'</td>
			<td>'.$dropdate.'</td>
            <td>'.$pickadd.'</td>
			<td>'.$dropadd.'</td>
			
			';
			echo '
          </tr>';
		  
		  
            $count = $count + 1;
    }

    


  ?>
  
    
    
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
  <table class="table mx-2 my-2">
  <thead>
    <tr>
      <th scope="col">#</th>
	  <th scope="col">Package</th>
      <th scope="col">Email</th>
      
	  <th scope="col">Guests</th>
	  <th scope="col">Price</th>
      <th scope="col">Departure date</th>
	  
	  
	  
    </tr>
  </thead>
  <tbody>
    
  <?php
    include("connection/connect.php");
    $email = $_SESSION['email'];
    $sql="Select * from pb where email='$email'";
    $result=mysqli_query($db,$sql);
    $count=1;
	
    while($row = mysqli_fetch_array($result)){
            $pname=$row['name'];
            $pprice=$row['price'];
            $pguest=$row['no_guest'];
			$pdate = $row['dep_date'];
			
			
            
            echo ' <tr>
            <th scope="row">'.$count.'</th>
            
            <td>'.$pname.'</td>
			<td>'.$email.'</td>
			<td>'.$pguest.'</td>
			<td>'.$pprice.'</td>
            <td>'.$pdate.'</td>
			
			
			';
			echo '
          </tr>';
		  
		  
            $count = $count + 1;
    }

    


  ?>
  
    
    
  </tbody>
</table>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


<!-- Mirrored from creativethemes.us/relax/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 15:23:47 GMT -->
</html>
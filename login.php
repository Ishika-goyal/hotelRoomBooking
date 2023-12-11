<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="wrapper">
	<div class="header">
		<h2>Login </h2>
	</div>
	<form id="form" method="post" class="form">
		<div class="form-control">
			<input type="email" placeholder="Enter email" id="email" name="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-times-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<input type="password" placeholder="Password" id="password" name="password" minlength="8" onkeyup="check();"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-times-circle"></i>
			<small>Error message</small>
		</div>
		
		<button>Submit</button>
	</form>
</div>
<!-- <script type="text/javascript" src="js/login.js"></script> -->
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$servername="localhost";
$username="root";
$pass="";
$database="hostel";

$email=$_POST['email'];
$password=$_POST['password'];
$conn=mysqli_connect($servername,$username,$pass,$database);

$sql="Select * from userinfo where email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);


if($num!==1){
  echo '<script type="text/javascript">
  function myFunction() {
    const email = document.getElementById("email");
const password = document.getElementById("password");
setErrorFor(email, "No Such user exist");
  }
  function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText = message;
}

     myFunction();
     </script>'
;
}
else{
  $row=mysqli_fetch_array($result);
  $name=$row['name'];
  if($row['verify']=='1'){

    session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['name']=$name;

        header("location: index.php");

  }
    else{
      
      echo '<div class="alert alert-primary" role="alert">
      Account not registerd successfully or verification not done. Click to Register:
        <a href="signup.php" title=""><button type="button" class="btn btn-warning">SignUp</button></a>
      </div>';
    }

    

}
}
?>
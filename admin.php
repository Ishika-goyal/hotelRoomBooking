<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body >
    <div class="wrapper">
	<div class="header">
		<h2>Admin Login </h2>
	</div>
	<form id="form" class="form" method="post">
		<div class="form-control">
			<input type="text" placeholder="Enter email" id="email" name="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-times-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<input type="password" placeholder="Enter Password" id="password" name="password" onkeyup="check();"/>
		
		</div>
		
		<button  type="submit">Login</button>
	</form>
</div>
  <script  src="login.js"></script>
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

$sql="Select * from admin_dir where username='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);


if($num!==1){
  echo '<script type="text/javascript">
  function myFunction() {
    const email = document.getElementById("email");
const password = document.getElementById("password");
setErrorFor(email, "No Such admin exist");
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


    session_start();
        $_SESSION['aloggedin'] = true;
        $_SESSION['ausername'] = $email;
        

        header("location: admin2.php");

  }
   

    

}

?>
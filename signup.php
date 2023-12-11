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



<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$servername="localhost";
$username="root";
$pass="";
$database="hostel";

$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn=mysqli_connect($servername,$username,$pass,$database);



$ucheck="SELECT * FROM `userinfo` WHERE email='$email'";
$uresult=mysqli_query($conn,$ucheck);
$num = mysqli_num_rows($uresult);

if($num){

  // echo "user email already registered";
  echo '<script type="text/javascript">
  function myFunction() {
    alert("user Email already registered!");
  }
     myFunction();
     </script>'
;  

}
else {


$otp=rand(1231,7879);
require_once 'vendor/autoload.php';
            // Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'tls'))
            ->setUsername('ishikagoyal946@gmail.com')
            ->setPassword('zsgrysvbvaqlabcn')
            ;
        
            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
        
             // Create a message
            $message = (new Swift_Message("BOOKIT_______OTP"))
            ->setFrom(['ishikagoyal946@gmail.com' => 'BOOKIT'])
            ->setTo([$email])
            ->setBody("Hi, This is verification email sent by BookIt. YOUR OTP IS - ".$otp);
            ;
        
            // Send the message
            $result = $mailer->send($message);

// $subject = "BOOKIT_______OTP";
// $body = "Hi, This is verification email sent by BookIt. YOUR OTP IS - ".$otp;
// $headers = "From: dilipkumarsculptor@gmail.com";

// mail($email, $subject, $body, $headers);
    



$sql="INSERT INTO `userinfo` (`name`, `age`, `email`, `password`, `sno`, `otp`, `verify`) VALUES ('$name', '$age', '$email', '$password', null, '$otp', '0');";
$result = mysqli_query($conn,$sql);
 if($result){
  header( "refresh:2;url=otp.php?email=".$email."" );
 }
 else{
     echo "error";
 }
}
}

  


   echo ' <div class="wrapper">
   <div class="header">
     <h2>Registration </h2>
   </div>
   <form id="form" class="form" method="post">
     <div class="form-control">
       <input type="text" placeholder="Enter name" id="name"  name="name" pattern="[a-zA-Z][a-zA-Z ]{2,}" required/>
       <i class="fas fa-check-circle"></i>
       <i class="fas fa-times-circle"></i>
       <small>Error message</small>
     </div>
     <div class="form-control">
       <input type="number" placeholder="Enter age" id="age"  name="age" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
             type = "number" maxlength = "3" required  />
       <i class="fas fa-check-circle"></i>
       <i class="fas fa-times-circle"></i>
       <small>Error message</small>
     </div>
     <div class="form-control">
       <input type="email" placeholder="Enter email" id="email" name="email" required/>
       <i class="fas fa-check-circle"></i>
       <i class="fas fa-times-circle"></i>
       <small>Error message</small>
     </div>
     <div class="form-control">
       <input type="password" placeholder="Password" id="password" name="password" minlength="8"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
       <i class="fas fa-check-circle"></i>
       <i class="fas fa-times-circle"></i>
       <small>Error message</small>
     </div>
     <div class="form-control">
       <input type="password" placeholder="Confirm Password" id="confirm" name="cpassword"  minlength="8"   required/>
       <i class="fas fa-check-circle"></i>
       <i class="fas fa-times-circle"></i>
       <small id="message">Error message</small>
     </div>
     <button onclick="check();">Submit</button>
   </form>
 </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">


    </script>
    <script>
    var check = function() {
      
      var form = document.getElementById("form");
      var age = document.getElementById("age");
      var name = document.getElementById("name");
      var email = document.getElementById("email");
      var password = document.getElementById("password");
      var confirm = document.getElementById("confirm");
      var regularExpression  = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
      var regularExpression2=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      var nameValue = name.value.trim();
      var ageValue = age.value.trim();
      var emailValue = email.value.trim();
      var passwordValue = password.value.trim();
      var confirmValue = confirm.value.trim();

      
    if (nameValue === "") {
      const formControl = name.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText = "Please enter your name";
  } else {
    const formControl = name.parentElement;
    formControl.className = "form-control success";
  }
  if (ageValue === "") {
    const formControl = age.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText ="Please enter your age";
  } else {
    const formControl = age.parentElement;
    formControl.className = "form-control success";
  }

  if (emailValue === "") {
    const formControl = email.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText = "Please enter your email";
  } else if (!regularExpression2.test(emailValue)) {
    const formControl = email.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText ="Email not valid" ;
  } else {
    const formControl = email.parentElement;
    formControl.className = "form-control success";
  } 

  if (passwordValue === "") {
    const formControl = password.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText ="Please enter password";
   
  } else if (!regularExpression.test(passwordValue)) {
    const formControl = password.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText = "password must contain special character, digit, upper, lower alphabet";
    confirm.setCustomValidity(""); 
    
  }else {
    const formControl = password.parentElement;
    formControl.className = "form-control success";
  }

  if (confirmValue === "") {
    const formControl = confirm.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText =  "Please re-enter password";
  } else if (passwordValue !== confirmValue) {
    const formControl = confirm.parentElement;
    const small = formControl.querySelector("small");
    formControl.className = "form-control error";
    small.innerText = "Passwords does not match";
    confirm.setCustomValidity("Passwords do not match"); 
  } else {
    const formControl = confirm.parentElement;
    formControl.className = "form-control success";
    confirm.setCustomValidity(""); 
  }
    }
  
  
    </script>
</body>
</html>'

?>



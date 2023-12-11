<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
body {
    margin: 0;
     padding-bottom: 20px;
     font-family: 'Nunito', sans-serif;
     /* color: white; */
     background-image: linear-gradient(270deg, #00d4ff 0%,  #bf8d5c 100%);
}

.homebtn {
    background-image: linear-gradient(270deg, #00d4ff 0%,  #bf8d5c 100%);
    border-radius: 15px;
    color: #000;
    font-size: 1rem;
    padding: 10px;
    margin-top: 20px;
    width: 100%;
}
</style>
<?php

include("connection/connect.php"); 

$email=$_GET['email'];
$sql="SELECT * FROM `userinfo` WHERE email='$email';";
$uresult=mysqli_query($db,$sql);
$row=mysqli_fetch_array($uresult);
$ootp=$row['otp'];


if($_SERVER["REQUEST_METHOD"]=="POST"){

    $otp=$_POST['otp'];
    if($ootp==$otp){

        $sql2="UPDATE `userinfo` SET `verify` = '1' WHERE `userinfo`.`email` = '$email'";
        $result2=mysqli_query($db,$sql2);

        
        
        echo '<div class="alert alert-success" role="alert">
        Registration successful. visit home page to login
        <a href="index.php" title=""><button type="button" class="btn btn-success">Home</button></a>
      </div>';

    }

}



 echo ' <form method="post">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <h3 class="mb-5">OTP Verification</h3>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: An Email has been sent to your email id. Please enter the OTP below to verify.
                </span>
                <div class="container-fluid">
    
          <div class="form-group" style="margin: 15px;>
            <label for="exampleInputPassword1">Enter OTP</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="OTP" name="otp" required>
          </div>
        
        <div style="margin: 15px;">
        <button type="submit" class="btn btn-warning homebtn">Submit</button>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
      </form>
      



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">


    </script>
</body>
</html>';?>
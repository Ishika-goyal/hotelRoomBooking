<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
  <style>
        .card{
        background-color:white;
        height:52vh;
        width:50vw;
      }
      .box1{
        position: absolute;
        left:35%;
        top:20%;
      }
      .mcbtn{
        text-align: center;
      }
    
    </style>
</style>
<body>
<?php
            include "adminHeader.php";
            include "sidebar.php";
           
            include_once "connection/connect.php";
        ?>
<br><br>


  <?php 
error_reporting(0);
$sno=$_GET['sno'];

include("connection/connect.php");
$sql="Select * from userinfo where sno= $sno";
    $result=mysqli_query($db,$sql);


    while($row = mysqli_fetch_array($result)){
        $name=$row['name'];
        $age=$row['age'];
        $email=$row['email'];
        $pass = $row['password'];
        $verify=$row['verify'];
        

        
        
}

if(isset($_POST['submit'])){
   
   
    $sno=$_GET['sno'];
    $nname=$_POST['nname'];
    $nage=$_POST['nage'];
    $npass=$_POST['npass'];
    $nemail=$_POST['nemail'];
    $nverify=$_POST['nverify'];
    
    $sql2="UPDATE `userinfo` SET `name` = '$nname', `age` = '$nage', `email` = '$nemail', `password` = '$npass', `verify` = '$nverify' WHERE `userinfo`.`sno` = $sno";
    $result2=mysqli_query($db,$sql2);
    header("Refresh:0");

  }

  if(isset($_POST['submitt'])){
   
    
    $sno=$_GET['sno'];
    $sql3="DELETE FROM `userinfo` WHERE `userinfo`.`sno` = $sno";
    $result3=mysqli_query($db,$sql3);
    header('Refresh: 0; url=adminacc.php');
  }
  

  echo '<div class="box1"><div class="card mx-4 my-4">
  <div class="card-header">
    Selected:
  </div>
  <div class="card-body">
    <h5 class="card-title">User Account</h5>
    <p class="card-text">
    Name : '.$name.' <br>
    Email : '.$email.'  <br>
    Age : '.$age.' <br>
    Password : '.$pass.' <br>
    Verification status : '.$verify.'
    </p>
    
    <div class="mcbtn">
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Modify
</button>
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Delete
</button>
</div>
  </div>
  </div>
</div>';

?>


  
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="mb-3">
    Name: <input type="text" value="<?php echo"$name"?>" name="nname">
  </div>
  <div class="mb-3">
    Age: <input type="number" value="<?php echo"$age"?>" name="nage">
  </div>
  <div class="mb-3">
    Email: <input type="email" value="<?php echo"$email"?>" name="nemail">
  </div>
  <div class="mb-3">
    Password: <input type="password" value="<?php echo"$pass"?>" name="npass">
  </div>
  <div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Verification status</label>
  <select class="form-select" id="inputGroupSelect01" name="nverify">
    <option value="1">1 (pass)</option>
    <option value="0">0 (fail)</option>
    
  </select>
</div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-warning" name="submit"></form>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
        Are you sure, you want to delete this user account?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
        <input type="submit" class="btn btn-warning" name="submitt" value="YES"></form>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   

<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
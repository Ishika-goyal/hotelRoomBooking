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
    <style>
      /* .tableheader{
        background-color:black;
      } */
    </style>
  </head>
<body>
<?php
            include "adminHeader.php";
            include "sidebar.php";
           
            include_once "connection/connect.php";
        ?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
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
  <table class="table text-center">
  <thead class="thead-dark" >
    <tr class="tableheader">
      <th class="tableheader" scope="col">S.No.</th>
      <th class="tableheader" scope="col">Email</th>
      <th class="tableheader" scope="col">Room</th>
      <th class="tableheader" scope="col">Price</th>
      <th class="tableheader" scope="col">No of Rooms</th>
      <th class="tableheader" scope="col">Checkin</th>
      <th class="tableheader" scope="col">Checkout</th>
      <th class="tableheader" scope="col">Action</th>
      </tr>
  </thead>
  <tbody>
  <?php 
// error_reporting(0);
$count=1;
include("connection/connect.php");
$sql="Select * from mb";
    $result=mysqli_query($db,$sql);


    while($row = mysqli_fetch_array($result)){
        $name=$row['name'];
        $room=$row['room'];
        $price=$row['price'];
        $eb = $row['eb'];
        $sno=$row['sno'];
        $email=$row['email'];
        $no_rooms=$row['no_rooms'];
        $checkin=$row['checkin'];
        $checkout=$row['checkout'];
        
        echo ' <tr>
        <td>'.$count.'</td>
        
        <td>'.$email.'</td>
        <td>'.$room.'</td>
        <td>'.$price.'</td>
        <td>'.$no_rooms.'</td>
        <td>'.$checkin.'</td>
        <td>'.$checkout.'</td>
        <td>
        <a href="admincancel.php?sno='.$sno.'"><button type="button" class="btn btn-warning"><i class="bi bi-cursor-fill"></i></button></a>
      ';
        echo '</td>
      </tr>';
      
      
        $count = $count + 1;
}


?>
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  <table class="table text-center">
  <thead class="thead-dark">
    <tr  class="tableheader">
      <th scope="col">S.No.</th>
      <th scope="col">Type</th>
      <th scope="col">Email</th>
      <th scope="col">Pickup address</th>
      <th scope="col">Dropoff address</th>
      <th scope="col">Pickup date</th>
      <th scope="col">Dropoff date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
error_reporting(0);
$count=1;
include("connection/connect.php");
$sql2="Select * from cb";
    $result2=mysqli_query($db,$sql2);


    while($row2 = mysqli_fetch_array($result2)){
        $ctype=$row2['cabtype'];
        $pickadd=$row2['pickadd'];
        $dropadd=$row2['dropadd'];
        $pickdate = $row2['pickdate'];
        $dropdate=$row2['dropdate'];
        $email=$row2['email'];
        $cid=$row2['cab_id'];
        
        echo ' <tr>
        <td>'.$count.'</td>
        <td>'.$ctype.'</td>
        <td>'.$email.'</td>
        <td>'.$pickadd.'</td>
        <td>'.$dropadd.'</td>
        <td>'.$pickdate.'</td>
        <td>'.$dropdate.'</td>
        
        <td>
        <a href="admincancel.php?cab_id='.$cid.'"><button type="button" class="btn btn-warning"><i class="bi bi-cursor-fill"></i></button></a>
      ';
        echo '</td>
      </tr>';
      
      
        $count = $count + 1;
}

?>
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
  <table class="table text-center">
  <thead >
    <tr  class="tableheader">
      <th scope="col">S.No.</th>
      <th scope="col">Type</th>
      <th scope="col">Email</th>
      <th scope="col">Price</th>
      <th scope="col">No of guests</th>
      <th scope="col">Departure date</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
error_reporting(0);
$count=1;
include("connection/connect.php");
$sql3="Select * from pb";
    $result3=mysqli_query($db,$sql3);


    while($row3 = mysqli_fetch_array($result3)){
        $pname=$row3['name'];
        $pprice=$row3['price'];
        $pguest=$row3['no_guest'];
        $pdate = $row3['dep_date'];
        
        $email=$row3['email'];
        $pid=$row3['pb_id'];
        
        echo ' <tr>
        <td>'.$count.'</td>
        <td>'.$pname.'</td>
        <td>'.$email.'</td>
        <td>'.$pprice.'</td>
        <td>'.$pguest.'</td>
        <td>'.$pdate.'</td>
        
        
        <td>
        <a href="admincancel.php?pb_id='.$pid.'"><button type="button" class="btn btn-warning"><i class="bi bi-cursor-fill"></i></button></a>
      ';
        echo '</td>
      </tr>';
      
      
        $count = $count + 1;
}


?>
  </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   

<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </div>
  
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <style>
      
      </style>
  </head>

<body>
<?php
            include "adminHeader.php";
            include "sidebar.php";
           
            include_once "connection/connect.php";
        ?>
    
<br><br>

<table class="table text-center">
  <thead class="thead-dark">
    <tr  class="tableheader">
      <th scope="col">S.No.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Account</th>
      <th scope="col">Phone</th>
      <th scope="col">Card No.</th>
      <th scope="col">Card Brand</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Cancel</th>
    </tr>
  </thead>
  <tbody>
  <?php 
error_reporting(0);
$count=1;
include("connection/connect.php");
$sql="Select * from detail";
    $result=mysqli_query($db,$sql);


    while($row = mysqli_fetch_array($result)){
        $fname=$row['fname'];
        $lname=$row['lname'];
        $em=$row['email'];
        $phn = $row['phone'];
        $card=$row['cardno'];
        $brand=$row['brand'];
        $month=$row['emonth'];
        $year=$row['eyear'];
        $id=$row['user_id'];
        echo ' <tr>
        <td>'.$count.'</td>
        <td>'.$fname.'</td>
        <td>'.$lname.'</td>
        <td>'.$em.'</td>
        <td>'.$phn.'</td>
        <td>'.$card.'</td>
        <td>'.$brand.'</td>
        <td>'.$month.'</td>
        <td>'.$year.'</td>
        
        <td>
        <a href="tcancel.php?sno='.$id.'"><button type="button" class="btn btn-warning">Delete</button></a>
      ';
        echo '</td>
      </tr>';
      
      
        $count = $count + 1;
}
if(isset($_POST['submit'])){
    echo $_GET['sno'];
  }

?>
  </tbody>
</table>
<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>



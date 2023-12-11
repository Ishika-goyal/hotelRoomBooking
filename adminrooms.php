<?php
include("connection/connect.php");




if(isset($_POST['submit'])){
    // echo "he";
    $nprice=$_POST['nprice'];
    $navail=$_POST['navail'];
    $ntext=$_POST['ntext'];
    $r_id=$_POST['r_id'];
    $sql11="UPDATE `room_info` SET `price` = '$nprice', `available` = '$navail', `text` = '$ntext' WHERE `room_info`.`r_id` = '$r_id'";
    $result11=mysqli_query($db,$sql11);
    header("Refresh:0");

}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <style>
      
      .editcenter {
        margin: 0;
        position: absolute;
        left: 50%;
        bottom:5%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
      }
      .card{
        background-color:white;
        height:35vw;
      }
    </style>
</head>
<body>

<?php
            include "adminHeader.php";
            include "sidebar.php";
           
            include_once "connection/connect.php";
        ?>
        <div class="container row d-flex justify-content-center">
<h3>Please select the City</h3> <br>
<ul class="nav nav-tabs " id="myTab" role="tablist">
  <li class="nav-item mx-4" role="presentation">
    <input class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="radio" role="tab" aria-controls="home-tab-pane" aria-selected="true" name="cabtype" value="pickup">Delhi</input>
  </li>
  <li class="nav-item mx-4" role="presentation">
    <input class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="radio" role="tab" aria-controls="profile-tab-pane" aria-selected="false" name="cabtype" value="dropoff">Mumabi</input>
  </li>
  <li class="nav-item mx-4" role="presentation">
    <input class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="radio" role="tab" aria-controls="contact-tab-pane" aria-selected="false" name="cabtype" value="round">Goa</input>
  </li>
  <li class="nav-item mx-4" role="presentation">
    <input class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#jaipur-tab-pane" type="radio" role="tab" aria-controls="contact-tab-pane" aria-selected="false" name="cabtype" value="round">jaipur</input>
  </li>
  
</ul>
</div>
<div class="tab-content " id="myTabContent">
  <div class="tab-pane fade py-4" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
  <div class="row row-cols-1 row-cols-md-4 g-4">
 <?php  

 $sql1="SELECT * FROM room_info WHERE city = 'delhi'";
 $result1=mysqli_query($db,$sql1);
 while($row = mysqli_fetch_array($result1)){

    $r_id=$row['r_id'];
    $r_type=$row['r_type'];
    $price=$row['price'];
    $text=$row['text'];
    $image=$row['image'];
    $available=$row['available'];
    
    
    echo '
    <div class="col">
      <div class="card">
        <img src="images/resources/'.$image.'.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$r_type.'</h5>
          <p class="card-text">'.$text.'</p>
          <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning editcenter" data-bs-toggle="modal" data-bs-target="#exampleModal'.$r_id.'">
      Edit
    </button>
        </div>
      </div>
    </div>
    
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal'.$r_id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form method="post">
          <div class="mb-3">
      Price: <input type="number" value="'.$price.'" name="nprice">
    </div>
    <div class="mb-3">
      Available rooms: <input type="number" value="'.$available.'" name="navail">
    </div>
    <div class="mb-3">
      Available rooms: <input type="text" value="'.$text.'" name="ntext">
      <input type="hidden"  name="r_id" value="'.$r_id.'" >
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-warning" name="submit" value="submit"></form>
          </div>
          
        </div>
      </div>
    </div>

  ';

 }
 
 ?>
 </div>
  </div>
  <div class="tab-pane fade py-4" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  <div class="row row-cols-1 row-cols-md-4 g-4">
 <?php  
 
 $sql2="SELECT * FROM room_info WHERE city = 'mumbai'";
 $result2=mysqli_query($db,$sql2);
 while($row2 = mysqli_fetch_array($result2)){

    $r_id=$row2['r_id'];
    $r_type=$row2['r_type'];
    $price=$row2['price'];
    $text=$row2['text'];
    $image=$row2['image'];
    $available=$row2['available'];
    
    
    echo '
    <div class="col">
      <div class="card">
        <img src="images/resources/'.$image.'.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$r_type.'</h5>
          <p class="card-text">'.$text.'</p>
          <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning editcenter" data-bs-toggle="modal" data-bs-target="#exampleModal'.$r_id.'">
      Edit
    </button>
        </div>
      </div>
    </div>
    
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal'.$r_id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form method="post">
          <div class="mb-3">
      Price: <input type="number" value="'.$price.'" name="nprice">
    </div>
    <div class="mb-3">
      Available rooms: <input type="number" value="'.$available.'" name="navail">
    </div>
    <div class="mb-3">
      Available rooms: <input type="text" value="'.$text.'" name="ntext">
      <input type="hidden"  name="r_id" value="'.$r_id.'" >
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-warning" name="submit" value="submit"></form>
          </div>
          
        </div>
      </div>
    </div>

  ';

 }
 
 ?>
 </div>
  
</div>
  
  
  <div class="tab-pane fade py-4" id="contact-tab-pane"  role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
  <div class="row row-cols-1 row-cols-md-4 g-4">
 <?php  
 
 $sql3="SELECT * FROM room_info WHERE city = 'goa'";
 $result3=mysqli_query($db,$sql3);
 while($row3 = mysqli_fetch_array($result3)){

    $r_id=$row3['r_id'];
    $r_type=$row3['r_type'];
    $price=$row3['price'];
    $text=$row3['text'];
    $image=$row3['image'];
    $available=$row3['available'];
    
    
    echo '
    <div class="col">
      <div class="card">
        <img src="images/resources/'.$image.'.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$r_type.'</h5>
          <p class="card-text">'.$text.'</p>
          <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning editcenter" data-bs-toggle="modal" data-bs-target="#exampleModal'.$r_id.'">
      Edit
    </button>
        </div>
      </div>
    </div>
    
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal'.$r_id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form method="post">
          <div class="mb-3">
      Price: <input type="number" value="'.$price.'" name="nprice">
    </div>
    <div class="mb-3">
      Available rooms: <input type="number" value="'.$available.'" name="navail">
    </div>
    <div class="mb-3">
      Available rooms: <input type="text" value="'.$text.'" name="ntext">
      <input type="hidden"  name="r_id" value="'.$r_id.'" >
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-warning" name="submit" value="submit"></form>
          </div>
          
        </div>
      </div>
    </div>

  ';

 }
 
 ?>
 </div>
  </div>
  <div class="tab-pane fade py-4" id="jaipur-tab-pane"  role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
  <div class="row row-cols-1 row-cols-md-4 g-4">
 <?php  
 
 $sql4="SELECT * FROM room_info WHERE city = 'jaipur'";
 $result4=mysqli_query($db,$sql4);
 while($row4 = mysqli_fetch_array($result4)){

    $r_id=$row4['r_id'];
    $r_type=$row4['r_type'];
    $price=$row4['price'];
    $text=$row4['text'];
    $image=$row4['image'];
    $available=$row4['available'];
    
    
    echo '
    <div class="col">
      <div class="card">
        <img src="images/resources/'.$image.'.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$r_type.'</h5>
          <p class="card-text">'.$text.'</p>
          <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning editcenter" data-bs-toggle="modal" data-bs-target="#exampleModal'.$r_id.'">
      Edit
    </button>
        </div>
      </div>
    </div>
    
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal'.$r_id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form method="post">
          <div class="mb-3">
      Price: <input type="number" value="'.$price.'" name="nprice">
    </div>
    <div class="mb-3">
      Available rooms: <input type="number" value="'.$available.'" name="navail">
    </div>
    <div class="mb-3">
      Available rooms: <input type="text" value="'.$text.'" name="ntext">
      <input type="hidden"  name="r_id" value="'.$r_id.'" >
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-warning" name="submit" value="submit"></form>
          </div>
          
        </div>
      </div>
    </div>

  ';

 }
 
 ?>
 </div>
  </div>
  
</div>

<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
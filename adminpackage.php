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
</head>
<style>
      
      .editcenter {
        margin: 0;
        position: absolute;
        left: 50%;
        bottom:3%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
      }
      .card{
        background-color:white;
        height:25vw;
        width:20vw;
      }
      .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
    </style>
<body>
<?php
            include "adminHeader.php";
            include "sidebar.php";
           
            include_once "connection/connect.php";
        ?>
<br>

<section>
        
        <div class="row row-cols-1 row-cols-md-4 g-4 ">
        <?php 
        include("connection/connect.php");
        $sql="SELECT * FROM `package`";
        $result=mysqli_query($db,$sql);

        if(isset($_POST['submit'])){
            // echo "he";
            $nprice=$_POST['nprice'];
            $nptext=$_POST['nptext'];
            $npstops=$_POST['npstops'];
            $p_id=$_POST['p_id'];
            $sql11="UPDATE `package` SET `price` = '$nprice', `text` = '$nptext', `stops` = '$npstops' WHERE `package`.`p_id` = $p_id;";
            $result11=mysqli_query($db,$sql11);
            header("Refresh:0");
        
        }

	while($row = mysqli_fetch_array($result)){
        $pname=$row['name'];
        $ptext=$row['text'];
        $pid=$row['p_id'];
        $pimg=$row['image'];
        $pprice=$row['price'];
        $pstops=$row['stops'];


        echo '
  <div class="col">
    <div class="card">
      <img src="images/resources/package/'.$pimg.'.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">'.$pname.'</h5>
        <p class="card-text">'.$ptext.'</p>
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning editcenter" data-bs-toggle="modal" data-bs-target="#exampleModal'.$pid.'">
      Edit
    </button>
      </div>
    </div>
  </div>
 
  <!-- Modal -->
  <div class="modal fade modal-xl" id="exampleModal'.$pid.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="post">
        <div class="mb-3">
    Price: <input type="number" value="'.$pprice.'" name="nprice" class="form-control">
  </div>
  <div class="mb-3">
    Text: <input type="text" value="'.$ptext.'" name="nptext" class="form-control">
  </div>
  <div class="mb-3">
    Stops (seperated by "-"): <input type="text" value="'.$pstops.'" name="npstops" class="form-control">
    <input type="hidden"  name="p_id" value="'.$pid.'" >
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

</section>



<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
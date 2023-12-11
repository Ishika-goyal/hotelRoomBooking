<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <style>
        .card{
        background-color:white;
        height:52vh;
        width:35vw;
      }
      .box1{
        position: absolute;
        left:30%;
        top:20%;
      }
      .mcbtn{
        text-align: center;
      }
    
    </style>
</head>
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
$cab_id=$_GET['cab_id'];
$pb_id=$_GET['pb_id'];

// echo "sno=$sno <br> cab-id=$cab_id <br> pbid=$pb_id";

include("connection/connect.php");

//  room submit 

if(isset($_POST['submit'])){
    $sno=$_GET['sno'];
    $nname=$_POST['nname'];
    $nroom=$_POST['nroom'];
    $nprice=$_POST['nprice'];
    $neb=$_POST['neb'];
    $nno_rooms=$_POST['nno_rooms'];
    $ncheckin=$_POST['ncheckin'];
    $ncheckout=$_POST['ncheckout'];
    
    $sql2="UPDATE `mb` SET `name` = '$nname', `room` = '$nroom', `price` = '$nprice', `eb` = '$neb', `no_rooms` = '$nno_rooms', `checkin` = '$ncheckin', `checkout` = '$ncheckout' WHERE `mb`.`sno` = $sno;";


    $result2=mysqli_query($db,$sql2);
    header("Refresh:0");

  }

  if(isset($_POST['submitt'])){
    $sno=$_GET['sno'];

    $sql4="Select * from mb where sno= $sno";
    $result4=mysqli_query($db,$sql4);
    $row4 = mysqli_fetch_array($result4);
    $rooms=$row4['no_rooms'];
    $r_id=$row4['r_id'];

    $sql5="Select * from room_info where r_id= $r_id";
    $result5=mysqli_query($db,$sql5);
    $row5 = mysqli_fetch_array($result5);
    $available=$row5['available'];
   $navailable=$available+$rooms;

   $sql6="UPDATE `room_info` SET `available` = '$navailable' WHERE `room_info`.`r_id` = $r_id;";
   $result6=mysqli_query($db,$sql6);
   

    $sql3="DELETE FROM `mb` WHERE `mb`.`sno` = $sno";
    $result3=mysqli_query($db,$sql3);
    header('Refresh: 0; url=adminbookings.php');
  }

// room display 
  if($sno!=""){

    $sql="Select * from mb where sno= $sno";
    $result=mysqli_query($db,$sql);


    while($row = mysqli_fetch_array($result)){
        $name=$row['name'];
        $room=$row['room'];
        $price=$row['price'];
        $eb = $row['eb'];
        // $sno=$row['sno'];
        $email=$row['email'];
        $no_rooms=$row['no_rooms'];
        $checkin=$row['checkin'];
        $checkout=$row['checkout'];
        
        
    }
    

    echo '<div class="box1"><div class="card mx-4 my-4">
    <div class="card-header">
      Booking Selected:
    </div>
    <div class="card-body">
      <h5 class="card-title">Room</h5>
      <p class="card-text">
      Name : '.$name.' <br>
      Email : '.$email.'  <br>
      Room : '.$room.' <br>
      Price : '.$price.' <br>
      Extra bed : '.$eb.' <br>
      No of Rooms : '.$no_rooms.' <br>
      Checkin : '.$checkin.' <br>
      Checkout : '.$checkout.'
      </p>
      <!-- Button trigger modal -->
  <div class="mcbtn">
  <button type="button" class="btn btn-warning mx-4 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Modify
      </button>
  
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        Delete
      </button>
      </div>
      
      </div>
      
    </div>
  </div>
  
  
  
  
      
      <!-- Modal 1-->
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
      Name: <input type="text" value="'.$name.'" name="nname">
    </div>
    <div class="mb-3">
    <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01" >Room</label>
    <select class="form-select" id="inputGroupSelect01" name="nroom">
      
      <option value="single room">single room</option>
      <option value="double room">double room</option>
      <option value="premium room">premium room</option>
      <option value="delux room">delux room</option>
    </select>
  </div>
    </div>
    <div class="mb-3">
    Price: <input type="number" value="'.$price.'" name="nprice">
    </div>
    <div class="mb-3">
    <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Extra bed</label>
    <select class="form-select" id="inputGroupSelect01" name="neb">
      <option value="none">none</option>
      <option value="single">single</option>
      <option value="double">double</option>
      
    </select>
  </div>
    </div>
    <div class="mb-3">
    No of rooms: <input type="number" value="'.$no_rooms.'" name="nno_rooms">
    </div>
    <div class="mb-3">
    Check-in: <input type="date" value="'.$checkin.'" name="ncheckin">
    </div>
    <div class="mb-3">
    Check-out: <input type="date" value="'.$checkout.'" name="ncheckout">
    </div>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
              <input type="submit" class="btn btn-warning" name="submit"></button>
            </div></form>
          </div>
        </div>
      </div>
  
  
  
  
      <!-- Modal 2-->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post">
    
      Are you sure, you want to delete this booking entry?
    
    
    
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
              <input type="submit" class="btn btn-warning" name="submitt" value="YES"></button>
            </div></form>
          </div>
        </div>
      </div>';
  }

// cab submit 
  if(isset($_POST['csubmit'])){
    $cab_id=$_GET['cab_id'];
    $ncabtype=$_POST['ncabtype'];
    $npickadd=$_POST['npickadd'];
    $ndropadd=$_POST['ndropadd'];
    $npickdate=$_POST['npickdate'];
    $ndropdate=$_POST['ndropdate'];
    
    
    $sql2="UPDATE `cb` SET `cabtype` = '$ncabtype', `pickadd` = '$npickadd', `dropadd` = '$ndropadd', `pickdate` = '$npickdate', `dropdate` = '$ndropdate' WHERE `cb`.`cab_id` =$cab_id;";


    $result2=mysqli_query($db,$sql2);
    header("Refresh:0");

  }

  if(isset($_POST['csubmitt'])){
    $cab_id=$_GET['cab_id'];
    $sql3="DELETE FROM `cb` WHERE `cb`.`cab_id` = $cab_id";
    $result3=mysqli_query($db,$sql3);
    header('Refresh: 0; url=adminbookings.php');
  }

  // cab display 
  if($cab_id!=""){

    $sql2="Select * from cb where cab_id= $cab_id";
    $result2=mysqli_query($db,$sql2);


    while($row2 = mysqli_fetch_array($result2)){
        $cabtype=$row2['cabtype'];
        $cemail=$row2['email'];
        $pickadd=$row2['pickadd'];
        $dropadd = $row2['dropadd'];
        $pickdate=$row2['pickdate'];
        $dropdate=$row2['dropdate'];
       
        
        
    }

    echo '<div class="box1"><div class="card mx-4 my-4">
    <div class="card-header">
      Booking Selected:
    </div>
    <div class="card-body">
      <h5 class="card-title">Cab</h5>
      <p class="card-text">
      Cab type : '.$cabtype.' <br>
      Email : '.$cemail.'  <br>
      Pickup address : '.$pickadd.' <br>
      Dropoff address : '.$dropadd.' <br>
      Pickup date : '.$pickdate.' <br>
      Dropoff date : '.$dropdate.'
      </p>
      
  <div class="mcbtn">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-warning mx-4 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Modify
      </button>
  
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        Delete
      </button>
      </div>
      </div>
    </div>
    
  </div>
  
  
      
      <!-- Modal 1-->
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
    <div class="input-group mb-3">
      Cab type: <select class="form-select" id="inputGroupSelect01" name="ncabtype">
      
      <option value="round">round</option>
      <option value="pickup">pickup</option>
      <option value="dropoff">dropoff</option>
      
    </select></div>
    </div>
    
    <div class="mb-3">
    Pickup Address: <input type="text" value="'.$pickadd.'" name="npickadd">
    </div>
    <div class="mb-3">
    Dropoff Address: <input type="text" value="'.$dropadd.'" name="ndropadd">
    </div>
    <div class="mb-3">
    Pickup Date: <input type="date" value="'.$pickdate.'" name="npickdate">
    </div>
    <div class="mb-3">
    Dropoff Date: <input type="date" value="'.$dropdate.'" name="ndropdate">
    </div>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
              <input type="submit" class="btn btn-warning" name="csubmit"></button>
            </div></form>
          </div>
        </div>
      </div>
  
  
  
  
      <!-- Modal 2-->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post">
    
      Are you sure, you want to delete this booking entry?
    
    
    
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
              <input type="submit" class="btn btn-warning" name="csubmitt" value="YES"></button>
            </div></form>
          </div>
        </div>
      </div>';



  }

// package submit 
      if(isset($_POST['psubmit'])){
        $pb_id=$_GET['pb_id'];
        $npname=$_POST['npname'];
        $npprice=$_POST['npprice'];
        $npguest=$_POST['npguest'];
        $npdate=$_POST['npdate'];
       
        
        
        $sql2="UPDATE `pb` SET `name` = '$npname', `price` = '$npprice', `no_guest` = '$npguest', `dep_date` = '$npdate' WHERE `pb`.`pb_id` =$pb_id;";
    
    
        $result2=mysqli_query($db,$sql2);
        header("Refresh:0");
    
      }
    
      if(isset($_POST['psubmitt'])){
        $pb_id=$_GET['pb_id'];
        $sql3="DELETE FROM `pb` WHERE `pb`.`pb_id` = $pb_id";
        $result3=mysqli_query($db,$sql3);
        header('Refresh: 0; url=adminbookings.php');
      }
    
// package display 

      if($pb_id!=""){
    
        $sql2="Select * from pb where pb_id= $pb_id";
        $result2=mysqli_query($db,$sql2);
    
    
        while($row2 = mysqli_fetch_array($result2)){
            $pname=$row2['name'];
            $pemail=$row2['email'];
            $pprice=$row2['price'];
            $pguest = $row2['no_guest'];
            $pdate=$row2['dep_date'];
            
           
            
            
        }
    
        echo '<div class="box1"><div class="card mx-4 my-4">
        <div class="card-header">
          Booking Selected:
        </div>
        <div class="card-body">
          <h5 class="card-title">Package</h5>
          <p class="card-text">
          Package : '.$pname.' <br>
          Email : '.$pemail.'  <br>
          Price : '.$pprice.' <br>
          No. of guests : '.$pguest.' <br>
          Departure date : '.$pdate.'
          </p>
          <!-- Button trigger modal -->
          <div class="mcbtn">
          <button type="button" class="btn btn-warning mx-4 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Modify
              </button>
          
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Delete
              </button>
              </div>
              </div>
        </div>
      </div>
      
      
      
   
          
          <!-- Modal 1-->
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
        <div class="input-group mb-3">
          Package: <select class="form-select" id="inputGroupSelect01" name="npname">
          <option value="Goa Tour">Goa Tour</option>
          <option value="Delhi Tour">Delhi Tour</option>
          <option value="Mumabi Tour">Mumabi Tour</option>
          <option value="Jaipur Tour">Jaipur Tour</option>
          
        </select></div>
        </div>
        
        <div class="mb-3">
        Price: <input type="numbre" value="'.$pprice.'" name="npprice">
        </div>
        <div class="mb-3">
        No. of guests: <input type="text" value="'.$pguest.'" name="npguest">
        </div>
        <div class="mb-3">
        Departure Date Date: <input type="date" value="'.$pdate.'" name="npdate">
        </div>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                  <input type="submit" class="btn btn-warning" name="psubmit"></button>
                </div></form>
              </div>
            </div>
          </div>
      
      
      
      
          <!-- Modal 2-->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="post">
        
          Are you sure, you want to delete this booking entry?
        
        
        
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                  <input type="submit" class="btn btn-warning" name="psubmitt" value="YES"></button>
                </div></form>
              </div>
            </div>
          </div>';

  }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   

<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>



      
  






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
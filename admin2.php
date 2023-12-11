<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
       <style>
        a{
          color:#bf8d5c;
        }
        .row div{
          max-width:12vw;
          margin:auto;
        height: 20vh;
        }
       </style>
  </head>

<body >
    
        <?php
            include "adminHeader.php";
            include "sidebar.php";
           
            include_once "connection/connect.php";
        ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3-lg-12"> 
            <a href="adminbookings.php" class="link-warning"><div class="card" >
                    <i class="fa fa-users  " style="font-size: 70px;"></i>
                    <h4 style="color:white;">Bookings</h4>
                    <h5 style="color:white;"></h5></a>
                </div>
            </div>
            <div class="col-sm-3-lg-12">
            <a href="adminrooms.php" class="link-warning"><div class="card" >
                    <i class="fa fa-bed" style="font-size: 70px;"></i>
                    <h4 style="color:white;">&nbsp; Rooms&nbsp; </h4>
                    <h5 style="color:white;">
                   </h5></a>
                </div>
            </div>
            <div class="col-sm-3-lg-12">

            <a href="admintrans.php" class="link-warning"><div class="card" >
                    <i class="fa fa-credit-card" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Transaction</h4>
                    <h5 style="color:white;">
                   </h5></a>
                </div>
            </div>
            <div class="col-sm-3-lg-12">
            <!-- <i class=""></i> -->
            <a href="adminpackage.php" class="link-warning"><div class="card" >
                    <i class="fa fa-plane" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Packages</h4>
                    <h5 style="color:white;">
                   </h5></a>
                </div>
            </div>
            <div class="col-sm-3-lg-12">
                <a href="adminacc.php" class="link-warning"><div class="card" >
                    <i class="fa fa-user" style="font-size: 70px;"></i>
                    <h4 style="color:white;">User Accounts</h4>
                    <h5 style="color:white;">
                   </h5></a>
                </div>
            </div>
        </div>
        
    </div>
       
            
       

    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
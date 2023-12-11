<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
          color:#bf8d5c;
        }
       .logout{
        position: absolute;
        left: 90%;
        top:35%;
       }
    </style>
</head>
<body>

<?php
   session_start();
   include_once "connection/connect.php";

?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">
    
    <a class="navbar-brand ml-5" href="admin2.php">
        <img src="images/lolo.png" width="80" height="80" alt="Swiss Collection">
    </a>
    <a href="#" >BookIt Adminstrator</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['username'])){
          ?>
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <div class="logout">
            <a href="admin.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>
            </div>

            <?php
        } ?>
    </div>  
</nav>

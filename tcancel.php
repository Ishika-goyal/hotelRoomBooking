<?php
$sno=$_GET['sno'];
include("connection/connect.php");
$sql="DELETE FROM `detail` WHERE `detail`.`user_id` = $sno";
$result=mysqli_query($db,$sql);
header('Refresh: 0; url=admintrans.php');
?>
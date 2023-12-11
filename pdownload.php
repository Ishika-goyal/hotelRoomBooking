<?php 

require("library/fpdf.php");
include("connection/connect.php");
$pdf= new FPDF('p', 'mm', 'A4');

$name=$_GET['name'];
$room=$_GET['room'];
$eb=$_GET['eb'];
$price=$_GET['price'];
$email=$_GET['email'];
$sno=$_GET['sno'];
$no_rooms=$_GET['no_rooms'];
$checkin=$_GET['checkin'];
$checkout=$_GET['checkout'];
$city=$_GET['city'];
$sql="Select * from userinfo where email='$email'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result);
$uname=$row['name'];
$uage=$row['age'];



$pdf-> AddPage();
$pdf->SetFont('Arial', 'BU', 18);       
$pdf->Cell(0, 10, 'BookIt', 0, 1, 'C');     //title
$pdf->SetFont('Arial', 'U', 12);
$pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');        //invoice



$pdf->Cell(0, 10, 'User Information', 0, 1, 'L'); 
$pdf->SetFont('Arial', '', 12);       //main text------User info
$pdf->Cell(50, 10, 'Name : '.$uname, 0, 1, 'L');
$pdf->Cell(50, 10, 'Age : '.$uage, 0, 1, 'L');
$pdf->Cell(50, 10, 'Email : '.$email, 0, 1, 'L');
$pdf->Cell(50, 10, '', 0, 1, 'L');


$pdf->SetFont('Arial', 'U', 12);
$pdf->Cell(0, 10, 'Booking Information', 0, 1, 'L');    //booking information
$pdf->SetFont('Arial', '', 12);


$pdf->Image('https://t3.ftcdn.net/jpg/02/55/97/94/360_F_255979498_vewTRAL5en9T0VBNQlaDBoXHlCvJzpDl.jpg', null, null, 50, 10, 'JPG');
$pdf->Cell(50, 10, '', 0, 1, 'L');


$pdf->Cell(40, 10, 'Name', 1, 0, 'C');
$pdf->Cell(40, 10, 'Room', 1, 0, 'C');
$pdf->Cell(35, 10, 'Extra bed', 1, 0, 'C');
$pdf->Cell(50, 10, 'Transaction number', 1, 0, 'C');
$pdf->Cell(30, 10, 'Price', 1, 1, 'C');

$pdf->Cell(40, 10, $name, 1, 0, 'C');
$pdf->Cell(40, 10, $room, 1, 0, 'C');
$pdf->Cell(35, 10, $eb, 1, 0, 'C');
$pdf->Cell(50, 10, '..............', 1, 0, 'C');

$pdf->Cell(30, 10, 'Rs. '.$price, 1, 1, 'C');

$pdf->Cell(50, 10, '', 0, 1, 'L');
$k=0;
switch ($eb) {
    case "double":
      $k=2000;
      break;
    case "single":
      $k=1000;
      break;
  }


switch ($room) {
    case "Double Room":
      $baseprice=3500;
      break;
    case "Single Room":
        $baseprice=2321;
      break;
    case "Premium Room":
        $baseprice=7500;
      break;
    case "Delux Room":
        $baseprice=9998;
      break;
}


$pdf->Cell(50, 10, 'check-in date           : '.$checkin, 0, 1, 'L');
$pdf->Cell(50, 10, 'check-out date         : '.$checkout, 0, 1, 'L');
$pdf->Cell(50, 10, 'Hotel branch            : BookIt '.$city, 0, 1, 'L');
$pdf->Cell(50, 10, '', 0, 1, 'L');


$tax = (int)((18/100)*($baseprice+$k));

$pdf->SetFont('Arial', 'U', 12);
$pdf->Cell(0, 10, 'Price break-up', 0, 1, 'L'); 
$pdf->SetFont('Arial', '', 12);       //main text------User info
$pdf->Cell(50, 10, 'Base price          : '.$baseprice, 0, 1, 'L');
$pdf->Cell(50, 10, 'Extra bed price   : '.($k), 0, 1, 'L');
$pdf->Cell(50, 10, 'Tax                     : '.$tax, 0, 1, 'L');
$pdf->Cell(50, 10, 'No of rooms       : '.$no_rooms, 0, 1, 'L');
$pdf->Cell(50, 10, 'Total                   : '.$price, 0, 1, 'L');

// $pdf->Cell(50, 10, 'Name : '.$name, 0, 1, 'L');
// $pdf->Cell(50, 10, 'Room : '.$room, 0, 1, 'L');
// $pdf->Cell(50, 10, 'Extra bed : '.$eb, 0, 1, 'L');
// $pdf->Cell(50, 10, 'Transaction number : ......................', 0, 1, 'L');
// $pdf->Cell(50, 10, 'Price : Rs.'.$price, 0, 1, 'L');
$pdf->Cell(0, 10, '---------- END ----------', 0, 1, 'C');
$pdf->OutPut('mb'.$sno.'.pdf','I');

?>
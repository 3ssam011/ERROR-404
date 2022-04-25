<?php
include_once "orderDetail.php";
$Fullname=$_POST['FullName'];
$id=$_POST['NationalID'];
$dob=$_POST['Date'];
$email=$_POST['Email'];
$phone=$_POST['PhoneNum'];
$Grade=$_POST['Grade'];


$order=new orderDetails();
$order->Detail($Fullname,$id,$Grade,$email,$dob,$phone);
?>
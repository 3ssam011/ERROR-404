<?php
include_once "orderDetail.php";
$Fullname=$_POST['FullName'];
$id=$_POST['NationalID'];
$dob=$_POST['Date'];
$email=$_POST['Email'];
$phone=$_POST['PhoneNum'];
$Grade=$_POST['Grade'];
$BirthCertificatee=$_POST['BC'];
$Age=$_POST['Age'];

$order=new orderDetails();
$order->fullname=$Fullname;
$order->id=$id;
$order->date=$dob;
$order->email=$email;
$order->phoneNumber=$phone;
$order->Grade=$Grade;
$order->BirthCertificate=$BirthCertificatee;
$order->age=$Age;
$order->Detail($order);
?>
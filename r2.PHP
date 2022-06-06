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
$courses=$_POST['Course'];

$order=new orderDetails();
$order->fullname=$Fullname;
$order->id=$id;
$order->date=$dob;
$order->email=$email;
$order->phoneNumber=$phone;
$order->Grade=$Grade;
$order->BirthCertificate=$BirthCertificatee;
$order->age=$Age;
$order->courses=$courses;
$order->Detail($order);
$x=new file();
 $x->filename="order.txt";
 echo '<table border=1>';
 $x->drawtable();
?>
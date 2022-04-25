<?php
$Fullname=$_POST['FullName'];
$dob=$_POST['Date'];
$email=$_POST['Email'];
$pass="Ihf".$dob;
$type=$_POST['type'];
$check=$_POST['choose'];
if($check=="H")
{
    $pt=new manager();
    $pt->HireUser($type,$Fullname,$pass,$email,$DOB);
}
?>

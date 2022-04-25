<?php
include_once"manager.php";
$Fullname=$_POST['FullName'];
$id=$_POST['ID'];
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
if($check=="F")
{
    $pt= new manager();
    $pt->FiresUser($type,$Fullname,$pass,$email,$DOB,$id);
}
if($check=="U")
{
    $pt= new manager();
    $pt->UpdateUser($type,$Fullname,$pass,$email,$DOB,$id);
}
?>

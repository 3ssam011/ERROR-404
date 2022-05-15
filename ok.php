<?php
include_once "manager.php";
$Fullname=$_POST['FullName'];
$id=$_POST['ID'];
$dob=$_POST['Date'];
$email=$_POST['Email'];
$pass="Ihf".$dob;
$type=$_POST['type'];
$check=$_POST['choose'];
$pt=new manager();
$pt->Fullname=$Fullname;
$pt->email=$email;
$pt->ID=$id;
$pt->DOB=$dob;
$pt->Password=$pass;
$pt->type=$type;
if($check=="H")
{    
    $pt->HireUser($pt);
}
if($check=="F")
{    
    $pt->FiresUser($type,$Fullname,$pass,$email,$dob,$id);
}
if($check=="U")
{
    
    $pt->UpdateUser($type,$Fullname,$pass,$email,$dob,$id);
}
?>

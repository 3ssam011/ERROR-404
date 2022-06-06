<?php
include_once "manager.php";
include_once "CRUD.php";
$Fullname=$_POST['FullName'];
$id="1";
//$_POST['ID'];
$dob=$_POST['Date'];
$email=$_POST['Email'];
$pass="Ihf".$dob;
$password=Encrypt($pass,1);
$type=$_POST['type'];
//$_POST['choose'];
$check="H";
$pt=new manager();
$pt->Fullname=$Fullname;
$pt->email=$email;
$pt->ID=$id;
$pt->DOB=$dob;
$pt->Password=$password;
$pt->type=$type;
if($check=="H")
{    
    $pt->HireUser($pt);
    echo "done";
}
?>

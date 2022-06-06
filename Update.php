<?php
include_once "manager.php";
$Fullname=$_POST['FullName'];
$id="1";
//$_POST['ID'];
$dob=$_POST['Date'];
$email=$_POST['Email'];
$pass="Ihf".$dob;

$type=$_POST['type'];
//$_POST['choose'];
$check="U";
$pt=new manager();
$pt->Fullname=$Fullname;
$pt->email=$email;
$pt->ID=$id;
$pt->DOB=$dob;
$pt->Password=$pass;
$pt->type=$type;
if($check=="F")
{    
    $pt->UpdateUser($pt);
    echo "Updated";
}
?>

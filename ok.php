<?php
$Fullname=$_POST['FullName'];
$dob=$_POST['Date'];
$email=$_POST['Email'];
$pass="Ihf".$dob;
$type=$_POST['type'];
$check=$_POST['choose'];
if($check=="F")
{
    $pt= new manager ();
    $pt->FiresUser($name,$pass,$email,$DOB,$id)

}
?>

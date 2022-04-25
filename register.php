<?php
include_once"manager.php";
$type,$name,$pass,$email,$DOB
$do;

if($do=="Hire" || $do=="hire")
{
    HireUser($type,$name,$pass,$email,$DOB);
}

if($do=="Fire"|| $do=="fire")
{
    FiresUser($type,$name,$pass,$email,$DOB);
}
?>
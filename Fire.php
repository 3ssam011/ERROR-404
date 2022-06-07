<?php
include_once "manager.php";
$Fullname=$_POST['FullName'];
$id=$_POST['ID'];
$type=$_POST['type'];
$check="F";
$pt=new manager();
$pt->Fullname=$Fullname;
$pt->ID=$id;
$pt->type=$type;
if($check=="F")
{    
    $pt->FiresUser($pt);
    echo "Fire";
}
?>

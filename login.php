<?php
include_once"manager.php";
$ID=$_POST['ID'];
$password=$_POST['Password'];
//$type=$_POST['type'];
$type='M';
if($type=='M')
{
    $filename="manager.txt";
    $manager=new manager();
    $manager->log($filename,$ID,$password);
}
if($type=='S')
{
    $x=new manager;
    $x->id=2;
    
}
if($type=='T')
{
   
}
?>
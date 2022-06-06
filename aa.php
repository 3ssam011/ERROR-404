<?php
include_once"CRUD.php";
include_once"Student2.php";
include_once"course.php";
$ID=$_POST['id'];   
$filename="Notification.txt";            
$Klam="your payment by visa has been accepted";
$myfile = fopen("student.txt", "r+") or die("Unable to open file!");
while(!feof($myfile))
{
    $Separator='~';
    $line = fgets($myfile);
    $ArrayLine = explode($Separator, $line);
    if($ID==$ArrayLine[0])
    {
        $name=$ArrayLine[1];
        ad($filename,$name,$Klam);
    }
}    
?>
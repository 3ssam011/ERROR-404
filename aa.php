<?php
include_once"CRUD.php";
$ID=$_POST['id'];
$filename="Notification.txt";            
$Klam="your payment has been accepted";
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
    else
    {
        echo"No ID like that";
        break;
    }
}    
?>
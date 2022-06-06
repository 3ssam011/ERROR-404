<?php
include_once "uploadassig.html";

$id=$_POST['id'];   
$filename="Notification.txt";            
$Klam="your assignment has been uploaded";
$myfile = fopen("uploadassig.txt", "r+") or die("Unable to upload file!");
while(!feof($myfile))
{
    $Separator='~';
    $line = fgets($myfile);
    $ArrayLine = explode($Separator, $line);
    if($ID==$ArrayLine[0])
    {
        $name=$ArrayLine[1];
        ad($filename,$ID,$Klam);
    }
}
?>


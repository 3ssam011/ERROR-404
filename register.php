<?php
session_start(); 
echo $_SESSION['IDM'];
$IDS=$_POST['IDS'];
$math="";
$physics="";
$chemistry="";
$english="";
$arabic="";
$history="";
$socialStudies="";
if(isset($_POST['math']))
 {
    $math=$_POST['math'];
}
if(isset($_POST['physics']))
 {
    $physics=$_POST['physics'];
}
if(isset($_POST['chemistry']))
 {
    $chemistry=$_POST['chemistry'];
}
if(isset($_POST['english']))
 {
    $english=$_POST['english'];
}
if(isset($_POST['arabic']))
 {
    $arabic=$_POST['arabic'];
}
if(isset($_POST['history']))
 {
    $history=$_POST['history'];
}
if(isset($_POST['socialStudies']))
{
   $socialStudies=$_POST['socialStudies'];
}

?>
<?php
include_once "Secretary.php";
session_start(); 
$IDM= $_SESSION['IDM'];
$IDS=$_POST['IDS'];
$math="";
$physics="";
$chemistry="";
$english="";
$arabic="";
$history="";
$socialStudies="";
$line="";
if(isset($_POST['math']))
 {
    $math=$_POST['math'];
    $line.=$math.'~';
}
if(isset($_POST['physics']))
 {
    $physics=$_POST['physics'];
    $line.=$physics.'~';
}
if(isset($_POST['chemistry']))
 {
    $chemistry=$_POST['chemistry'];
    $line.=$chemistry.'~';
}
if(isset($_POST['english']))
 {
    $english=$_POST['english'];
    $line.=$english.'~';
}
if(isset($_POST['arabic']))
 {
    $arabic=$_POST['arabic'];
    $line.=$arabic.'~';
}
if(isset($_POST['history']))
 {
    $history=$_POST['history'];
    $line.=$history.'~';
}
if(isset($_POST['socialStudies']))
{
   $socialStudies=$_POST['socialStudies'];
   $line.=$socialStudies;
}
$x=new secretary();
$x->idstudent=$IDS;
$x->idmanger=$IDM;
$x->date=date("Y/m/d");
$x->time=date("l");
$ArrayLine = explode('~', $line);
$x->RegisterInfo($x,$ArrayLine);


//echo "done";
?>
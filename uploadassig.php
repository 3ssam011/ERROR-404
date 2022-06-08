<?php 
include_once "Student.php";
$coursename=$_POST['CN'];
$path=$_POST['myf'];
$x=new student();
$x->courses=$coursename;
$x->subject=$path;
session_start(); 
$ids=$_SESSION['IDM'];
$x->Uploadassignment($x,$ids)

   
?>
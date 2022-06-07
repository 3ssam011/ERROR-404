<?php
include_once "Student.php";
session_start(); 
$ids=$_SESSION['IDM'];
$x=new student();
$x->SeeNotification($ids);
?>
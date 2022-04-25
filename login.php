<?php
include_once"manager.php";
include_once"teacher.php";
include_once"Student.php";
$ID=$_POST['ID'];
$password=$_POST['Password'];
$type=$_POST['type'];
$ct;
if($type=='M')
{
    $filename="manager.txt";
    $manager=new manager();
    $manager->ID=$ID;
    $manager->Password=$password;
    $ct=$manager->log($filename,$manager->ID,$manager->Password);
    if($ct==1)
    {
    include_once("register.php");
    }
    else
    {
    include_once"errorlogin.php";
    }
    
}
if($type=='S')
{
    $filename="student.txt";
    $student=new student();
    $student->ID=$ID;
    $student->Password=$password;
    $ct=$student->log($filename,$student->ID,$student->Password);
    if($ct==1)
    {
    echo'hi Student';
    }
    else
    {
    include_once"errorlogin.php";
    }
}
if($type=='T')
{
    $filename="teacher.txt";
    $teacher=new teacher();
    $teacher->ID=$ID;
    $teacher->Password=$password;
    $ct=$teacher->log($filename,$teacher->ID,$teacher->Password);
    if($ct==1)
    {
    echo'hi Teacher';
    }
    else
    {
    include_once"errorlogin.php";
    }
}

?>
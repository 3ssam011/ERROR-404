<?php
include_once "manager.php";
include_once "teacher.php";
include_once "Student.php";
$ID=$_POST['ID'];
$password=$_POST['Password'];
$ct;

    $filename="manager.txt";
    $manager=new manager();
    $manager->ID=$ID;
    $manager->Password=$password;
    $ct=$manager->log($filename,$manager);
    if($ct==1)
    {
    include_once("MCrud2.html");
    }
    else
    {
        $filename="student.txt";
        $student=new student();
        $student->ID=$ID;
        $student->Password=$password;
        $ct=$student->log($filename,$student);
        if($ct==1)
        {            
        include_once("SCrud.html");
        }
        else
        {
            $filename="teacher.txt";
             $teacher=new teacher();
            $teacher->ID=$ID;
             $teacher->Password=$password;
            $ct=$teacher->log($filename,$teacher);
            if($ct==1)
            {
            echo"hi teacher";
            //include_once("register.php");
            }
            else
            {
                
                echo'<div class="c">ERROR USerName or Password</div>';
                include_once"index.php";
                
                //include_once"errorlogin.php";
            }
        }
    }
?>
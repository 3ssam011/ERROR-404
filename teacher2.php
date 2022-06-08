<?php
include_once "teacher.php";
include_once "CRUD.php";
$id=$_POST['ID']; 
$r=getRowById("student.txt",'~',$id);
$filename="student.txt";

$x=fopen("student.txt","r")or die("Unable to open file!");
while(!feof($x))
{
  
         $line = fgets($x);
        $ArrayLine = explode('~', $line);

        if ($ArrayLine[0] == $id)
        {
            $ct= 1;
        }
    $ct=0 ;
        
}
if($ct==1)
{
    echo "this student already corrected";    
}
else{
    echo "no id like that";
}
?>
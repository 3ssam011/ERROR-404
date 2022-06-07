<?php
include_once "user.php";
include_once "Interfaces.php";
include_once "CRUD.php";
include_once "fileTable.php";
class student extends user implements StudentInterFace
{
    public $courses;
    public $subject;
   
    public function SeeGrades($subject,$id)
    {
        $x=new file();
        $x->filename="student.txt";
        echo '<table border=1>';
        $x->drawtable();
    }
    public function SolveQuiz($subject,$id)
    {
        echo "good";
    }
    public function SeeNotification($id)
    {
        $x=new file();
        $x->filename="Notification.txt";
        echo '<table border=1>';
        $x->showSN($id,$x);
        
    }
    
    public function Uploadassignment($x,$ids)
    {
        $fileName="uploadassig.txt";
        $id = getLastId($fileName, "~") + 1;
        $line="";
        $line=searchUser("courses.txt",$x->courses);
        if($line=="")
        {
            echo"Enter your CourseName correctly";
            return false;
        }
        else
        {
            $arraylien=explode('~',$line);
            $rec = $id . "~"  . $ids. '~'. $arraylien[0] . "~".$x->subject;       
            StoreRecord($fileName, $rec);
            echo"your assignment has been Uploded";
            return true;   
        }            
    }
    
	/**
	 */	
}
?>
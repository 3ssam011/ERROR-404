<?php
include_once "user.php";
include_once "Interfaces.php";
class student extends user implements StudentInterFace
{
    public $courses;
    public $subject;
   
    public function SeeGrades($subject,$id)
    {
        
    }
    public function SolveQuiz($subject,$id)
    {

    }
    
    
}
?>
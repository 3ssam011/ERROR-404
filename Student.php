<?php
include_once "user.php";
include_once "Interfaces.php";
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
    
    
	/**
	 */
	function __construct() {
	}
}
?>
<?php
include_once "Subject.php";
include_once "teacher.php";
include_once "student.php";
include_once "fileTable.php";
class Cources implements SubjectInterface{
    public $name;
    private $Availablity;
    public $idSemester;

    private $observerList=array();

    public function __construct($name){
        $this->name=$name;
    }

    public function getAvailability(){
        return $this->Availablity;
    }

    public function setAvailability($Availablity){
        $this->Availablity=$Availablity;
        $this->NotifyAll();
    }
    
    public function subscribe($observer){
        array_push($this->observerList,$observer);
    }

    public function Unsubscribed($observer){
        unset($this->observerList[$observer]);
    }

    public function NotifyAll(){
        foreach($this->observer as $obs){
        
           $obs->update($this->Availablity);                      
        }
    }
     
}
$sub=1;
$id=1;
$y=new student();
$y->SeeGrades($sub,$id);
echo "<br>";
$x=new teacher();
$x->CorrectQuiz();
echo "<br>";
$x->TakeStudentAttend();
echo "<br>";
$x->GiveFeed();
echo "<br>";
$x->Evaluate();
echo "<br>";
$x->Documents();
?>
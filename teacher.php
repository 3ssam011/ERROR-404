<?php
include_once "user.php";
include_once "Interfaces.php";
class teacher extends user implements TeacherInterFace
{
    public function CorrectQuiz()
    {
        echo "20/20";
    }

    public function TakeStudentAttend()
    {
        echo "done";
    }

    public function Evaluate()
    {
        echo "done";
    }

    public function Documents()
    {
        echo "excellent";
    }
    public function GiveFeed()
    {
        echo "excellent";
    }
}

?>
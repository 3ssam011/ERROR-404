<?php
interface AccountantInterFace{
    public function DocumentsFees();
}

interface HRInterFace{
    public function MakeReport();
    public function  HireUser();
}

interface MangerInterFace{
    public function HireUser($pt);
    public function FiresUser($t,$name,$pass,$email,$DOB,$id);
}


interface SecretaryInterFace{
    public function RegisterInfo();
    public function AddUser();
    public function CreateEmail();
    public function ScheduleMaint();
}

interface StudentInterFace{
    public function SeeGrades();
    public function SolveQuiz();
}

interface TeacherInterFace{
    public function CorrectQuiz();
    public function TakeStudentAttend();
    public function Evaluate();
    public function Documents();
    public function GiveFeed();
}

interface OrderDetailsInterFace{
    public function Detail($name,$id,$Grade,$email,$date,$phoneNumber);
    public function AddDetails();
}

?>
<?php
interface AccountantInterFace{
    public function DocumentsFees();
}

interface HRInterFace{
    public function MakeReport();
    public function HireUser($pt);
    public function FiresUser($pt);
    public function UpdateUser($pt);
}

interface MangerInterFace{
    public function HireUser($pt);
    public function FiresUser($pt);
    public function UpdateUser($pt);
}


interface SecretaryInterFace{
    public function RegisterInfo($x,$ArrayLine);
    public function AddRegisterDeitals($array,$id);
    
    
}

interface StudentInterFace{
    public function SeeGrades($subject,$id);
    public function SolveQuiz($subject,$id);
    public function SeeNotification($id);
    public function Uploadassignment($x,$ids);
}

interface TeacherInterFace{
    public function CorrectQuiz();
    public function TakeStudentAttend();
    public function Evaluate();
    public function Documents();
    public function GiveFeed();
}

interface OrderDetailsInterFace{
    public function Detail($order);
    public function AddDetails();
}

?>
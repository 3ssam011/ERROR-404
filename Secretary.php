<?php
include_once "user.php";
include_once "CRUD.php";
include_once "Interfaces.php";
class secretary  implements  SecretaryInterFace
{
    public $idstudent;
    public $idmanger;
    public $date;
    public $time;
    public function RegisterInfo($x)
    {
     $this->idstudent=$x->idstudent;
     $this->idmanger=$x->idmanger;
     $this->date=$x->date;
     $this->time=$x->time;
     ADDReg("register.txt",$this->idstudent,$this->idmanger,$this->date,$this->time);   
    }
    public function AddRegisterDeitals()
    {

    }
    public function CreateEmail()
    {

    }
    public function ScheduleMaint()
    {

    }
    

}
?>
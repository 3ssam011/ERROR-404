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
    public function RegisterInfo($x,$ArrayLine)
    {
     $id=getLastId("register.txt",'~')+1;
     $line=getRowById("student.txt",'~',$x->idstudent);
     if($line!=null)
     {
        $al=explode("~",$line);
        $this->idstudent=$al[0];   
     }
     else
     {
         echo"sorry no ID like That";
         return false;
     }    
     $this->idmanger=$x->idmanger;
     $this->date=$x->date;
     $this->time=$x->time;
     ADDReg("register.txt",$this->idstudent,$this->idmanger,$this->date,$this->time);
          
    $this->AddRegisterDeitals($ArrayLine,$id);
    }
    public function AddRegisterDeitals($array,$id)
    {
        foreach ($array as $val)
        {
            $line=searchUser("courses.txt",$val);        
            $arrayline=explode("~",$line);            
            ADDReg("registerdetials.txt",$id,$arrayline[0],$arrayline[1],$arrayline[2]);
        }
    }
    public function CreateEmail()
    {

    }
    public function ScheduleMaint()
    {

    }
    

}
?>
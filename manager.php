<?php
include_once"user.php";
include_once"CRUD.php";
class manager extends user
{
    public function HireUser($t,$name,$pass,$email,$DOB)
    {
        if($t=="teacher")
        {
            $filename="teacher.txt";
            $this->Fullname=$name;
            $this->ID=getLastId($filename, '~')+1;
            $this->Password=$pass;
            $this->type=$t;
            $this->email=$email;
            $this->DOB=$DOB;
            ADD($filename,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }
    }
    public function FiresUser($t,$name,$pass,$email,$DOB,$id)
    {
        if($t=="teacher")
        {
            $filename="teacher.txt";
            $this->Fullname=$name;
            $this->ID=$id;
            $this->Password=$pass;
            $this->type=$t;
            $this->email=$email;
            $this->DOB=$DOB;
            $record= $this->ID.'~'.$this->Fullname.'~'.$this->Password.'~'. $this->email.'~'. $this->DOB;
            DeleteRecord($filename, $record);
        }
    }

}
?>
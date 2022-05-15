<?php
include_once "user.php";
include_once "CRUD.php";
include_once "Interfaces.php";
class manager extends user implements MangerInterFace
{
    public function HireUser($pt)
    {
         $this->Fullname=$pt->Fullname;           
         $this->Password=$pt->Password;
         $this->type=$pt->type;
         $this->email=$pt->email;
         $this->DOB=$pt->DOB;
        if($pt->type=="T")
        {
            $filename="teacher.txt";
            $this->ID=getLastId($filename, '~')+1;
            ADD($filename,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }

        if($pt->type=="S")
        {
            $filename="student.txt";
            $this->ID=getLastId($filename, '~')+1;
            ADD($filename,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }
        if($pt->type=="HR")
        {
            $filename="HR.txt";
            $this->ID=getLastId($filename, '~')+1;
            ADD($filename,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }
    }
    public function FiresUser($pt)
    {
        $this->Fullname=$pt->Fullname;           
         $this->Password=$pt->Password;
         $this->type=$pt->type;
         $this->email=$pt->email;
         $this->DOB=$pt->DOB;
         $this->ID=$pt->ID;
        if($pt->type=="T")
        {
            $filename="teacher.txt";
            
            $record= $this->ID.'~'.$this->Fullname.'~'.$this->Password.'~'. $this->email.'~'. $this->DOB;
            DeleteRecord($filename, $record);
        }
        if($pt->type=="S")
        {
            $filename="student.txt";
            $record= $this->ID.'~'.$this->Fullname.'~'.$this->Password.'~'. $this->email.'~'. $this->DOB;
            DeleteRecord($filename, $record);
        }
        if($pt->type=="HR")
        {
            $filename="HR.txt";
            $record= $this->ID.'~'.$this->Fullname.'~'.$this->Password.'~'. $this->email.'~'. $this->DOB;
            DeleteRecord($filename, $record);
        }
    }

    public function UpdateUser($pt)
    {
        $this->Fullname=$pt->Fullname;           
        $this->Password=$pt->Password;
        $this->type=$pt->type;
        $this->email=$pt->email;
        $this->DOB=$pt->DOB;
        $this->ID=$pt->ID;
        if($pt->type=="T")
        {
            $filename="teacher.txt";
           
            UpdateUser($filename,$this->ID,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }
        

        if($pt->typet=="S")
        {
            $filename="student.txt";
           
            UpdateUser($filename,$this->ID,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }

        if($pt->type=="HR")
        {
            $filename="HR.txt";
           
            UpdateUser($filename,$this->ID,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }
    }
}
?>
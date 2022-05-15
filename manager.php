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
    public function FiresUser($t,$name,$pass,$email,$DOB,$id)
    {
        if($t=="T")
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
        if($t=="S")
        {
            $filename="student.txt";
            $this->Fullname=$name;
            $this->ID=$id;
            $this->Password=$pass;
            $this->type=$t;
            $this->email=$email;
            $this->DOB=$DOB;
            $record= $this->ID.'~'.$this->Fullname.'~'.$this->Password.'~'. $this->email.'~'. $this->DOB;
            DeleteRecord($filename, $record);
        }
        if($t=="HR")
        {
            $filename="HR.txt";
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

    public function UpdateUser($t,$name,$pass,$email,$DOB,$id)
    {
        if($t=="T")
        {
            $filename="teacher.txt";
            $this->Fullname=$name;
            $this->ID=$id;

            $this->Password=$pass;
            $this->type=$t;
            $this->email=$email;
            $this->DOB=$DOB;

            UpdateUser($filename,$this->ID,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }
        

        if($t=="S")
        {
            $filename="student.txt";
            $this->Fullname=$name;
            $this->ID=$id;
            $this->Password=$pass;
            $this->type=$t;
            $this->email=$email;
            $this->DOB=$DOB;
            UpdateUser($filename,$this->ID,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }

        if($t=="HR")
        {
            $filename="HR.txt";
            $this->Fullname=$name;
            $this->ID=$id;
            $this->Password=$pass;
            $this->type=$t;
            $this->email=$email;
            $this->DOB=$DOB;
            UpdateUser($filename,$this->ID,$this->email,$this->Password, $this->Fullname,$this->DOB);
        }
    }
}
?>
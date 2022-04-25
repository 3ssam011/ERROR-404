<?php
 include_once "order.php";
 include_once "Interfaces.php";
 
class orderDetails extends order implements OrderDetailsInterFace
{
    public $date;
    public $email;
    public $phoneNumber;
    public $Grade;
    
    public function orderDetails($name,$id,$Grade,$email,$date,$phoneNumber)
    {
            $filename="orderDetails.txt";
            $this->Fullname=$name;
            $this->id=$id;
            $this->Grade=$Grade;
            $this->email=$email;
            $this->date=$date;
            $this->phoneNumber=$phoneNumber;
            ADD($filename,$this->email,$this->id, $this->Fullname,$this->date);
            $filename="order.txt";
            ADD($filename,"",$this->id,$this->Fullname,"");
    }
}
?>
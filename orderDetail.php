<?php
 include_once"order.php";
class orderDetails extends order{
    public $date;
    public $email;
    public $phoneNumber;
    public $Grade;
    public function orderDetails($name,$id,$Grade,$email,$date)
    {
            $filename="orderDetails.txt";
            $this->Fullname=$name;
            $this->id=$id;
            $this->Grade=$Grade;
            $this->email=$email;
            $this->date=$date;
            ADD($filename,$this->email,$this->id, $this->Fullname,$this->date);
            $filename="order.txt";
            ADD($filename,"",$this->id,$this->Fullname,"");
    }
}
?>
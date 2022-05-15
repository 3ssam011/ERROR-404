<?php
 include_once "order.php";
 include_once "Interfaces.php";
 include_once "CRUD.php";
class orderDetails extends order implements OrderDetailsInterFace
{
    public $date;
    public $email;
    public $phoneNumber;
    public $Grade;    
    public $BirthCertificate;
    public $age;
    
    public function Detail($order)
    {
        
            $filename="orderDetails.txt";
            $this->Fullname=$order->fullname;
            $this->id=$order->id;
            $this->Grade=$order->Grade;
            $this->email=$order->email;
            $this->date=$order->date;
            $this->phoneNumber=$order->phoneNumber;
            $this->BirthCertificate=$order->BirthCertificate;
            $this->age=$order->age;
            AddDetails($filename,$this->email,$this->id, $this->Fullname,$this->date,$this->BirthCertificate,$this->age);  
            $filename="order.txt";
            AddDetails($filename,"",$this->id,$this->Fullname,"","","","","");
    }
	/**
	 *
	 * @return mixed
	 */
	function AddDetails() {
	}
}
?>
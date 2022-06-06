<?php
 include_once "order.php";
 include_once "Interfaces.php";
 include_once "CRUD.php";
 include_once "fileTable.php";
class orderDetails extends order implements OrderDetailsInterFace
{
    public $date;
    public $email;
    public $phoneNumber;
    public $Grade;    
    public $BirthCertificate;
    public $age;
    public $courses;
    
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
            $this->courses=$order->courses;
            addDDDD($this->filename,$this->email,$this->id, $this->Fullname,$this->date,$this->BirthCertificate,$this->age,$this->courses);                 
            $filename="order.txt";
            addDDDD($filename,"",$this->id,$this->Fullname,"","","","","",$this->courses);
    }
	/**
	 *
	 * @return mixed
	 */
	function AddDetails() {
	}
}

?>
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
    public $Salary;
    
    public $SalaryOfBus;

    public $age;
    
    public function Detail($name,$id,$Grade,$email,$date,$phoneNumber,$BirthCertificate,$Salary,$SalaryOfBus,$age)
    {
        
            $filename="orderDetails.txt";
            $this->Fullname=$name;
            $this->id=$id;
            $this->Grade=$Grade;
            $this->email=$email;
            $this->date=$date;
            $this->phoneNumber=$phoneNumber;
            $this->BirthCertificate=$BirthCertificate;
            $this->age=$age;
            AddDetails($filename,$this->email,$this->id, $this->Fullname,$this->date,$BirthCertificate,$Salary,$SalaryOfBus,$age);      
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
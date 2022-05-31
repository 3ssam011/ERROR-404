<?php
include_once "Subject.php";
class Cources implements SubjectInterface{
    public $name;
    private $Availablity;
    private $observerList=array();

    public function __construct($name){
        $this->name=$name;
    }

    public function getAvailability(){
        return $this->Availablity;
    }

    public function setAvailability($Availablity){
        $this->Availablity=$Availablity;
        $this->NotifyAll();
    }
    
    public function subscribe($observer){
        array_push($this->observerList,$observer);
    }

    public function Unsubscribed($observer){
        unset($this->observerList[$observer]);
    }

    public function NotifyAll(){
        foreach($this->observer as $obs){
           $obs->update($this->Availablity);                      
        }
    }

}

?>
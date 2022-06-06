<?php
include_once "Observer.php";
class student22 implements Observer{
    private $name;
    
    public function update($message){
        echo($this->name + " has new notification " + $message);
    }
}

?>
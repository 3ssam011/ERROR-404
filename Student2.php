<?php
include_once "Observer.php";
class student2 implements Observer{
    private $name;

    public function student2($name){
        $this->name=$name;
    }

    public function update($message){
        echo($this->name + " has new notification " + $message);
    }
}

?>
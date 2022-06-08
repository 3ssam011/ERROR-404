<?php

class Fess{
    public $strategy;
    public function SeeFess($x,$y)
    {
        
    }

    public function __construct($strategy)
    {
        $this->strategy=$strategy;
    }

    public function PayMyFess()
    {
        return $this->strategy->PayFess();
    }
}

?>
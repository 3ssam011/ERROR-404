<?php
include_once"interfacePayFess.php";

class BusFees implements MyFess{
    public function PayFess()
    {
        return 5000;
    }

    public function Details()
    {
        return "UniformFess for the year";
    }
}

?>
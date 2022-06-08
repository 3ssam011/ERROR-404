<?php
include_once"interfacePayFess.php";

class UniformFess implements MyFess{
    public function PayFess()
    {
        return 2000;
    }

    public function Details()
    {
        return "UniformFess for the year";
    }
}

?>
<?php
include_once"interfacePayFess.php";

class YearFess implements MyFess{
    public function PayFess()
    {
        return 10000;
    }

    public function Details()
    {
        return "BusFess for the year";
    }
}

?>
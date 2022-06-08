<?php
include_once"interfacePayFess.php";

class BusFees implements MyFess{
    public function PayFess()
    {
        return 1000;
    }

    public function Details()
    {
        return "BookFess for the year";
    }
}

?>
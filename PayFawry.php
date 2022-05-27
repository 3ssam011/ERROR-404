<?php
include_once "payMethodInterface.php";

class PayFawry implements PayMethod
{
    public function IPay()
    {
        echo 'pay by Fawry';
    }
}
?>
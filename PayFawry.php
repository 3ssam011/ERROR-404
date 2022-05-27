<?php
include_once "payMethod.php";

class PayFawry implements PayMethod
{
    public function IPay()
    {
        echo 'pay by Fawry';
    }
}
?>
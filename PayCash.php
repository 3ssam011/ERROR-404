<?php
include_once "payMethod.php";

class PayCash implements PayMethod
{
    public function IPay()
    {
        echo 'pay by Fawry';
    }
}
?>
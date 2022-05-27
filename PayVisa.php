<?php
include_once "payMethod.php";

class PAyVisa implements PayMethod
{
    public function IPay()
    {
        echo 'pay by Fawry';
    }
}
?>
<?php
include_once "payMethodInterface.php";

class PAyVisa implements PayMethod
{
    public function IPay()
    {
        echo 'pay by Visa';
    }
}
?>
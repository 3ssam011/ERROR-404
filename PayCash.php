<?php
include_once "payMethodInterface.php";

class PayCash implements PayMethod
{
    public function IPay()
    {
        echo 'pay by Cash';
    }
}
?>
<?php
 interface SubjectInterface{
     public function subscribe($observer);
     public function Unsubscribed( $observer);
     public function NotifyAll();
 }

?>
<?php
 include_once "fileTable.php";
 session_start(); 
 $xx=$_SESSION['IDM'];
 $x=new file();
 $x->filename="orderDetails.txt";
 $x->DrawScedule($x,$xx);
?>
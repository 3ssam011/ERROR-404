<?php
include_once "fileTable.php";
$x=new file();
$x->filename="registerdetials.txt";
echo '<table border=1>';
$x->drawtable();
?>
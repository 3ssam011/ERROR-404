<?php
 include_once "fileTable.php";
 $x=new file();
 $x->filename="student.txt";
 echo '<table border=1>';
 $x->drawtable();
?>
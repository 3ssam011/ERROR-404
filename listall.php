<?php
 include_once "fileTable.php";
 $x=new file();
 $x->filename="student.txt";
 echo '<table border=1>';
 $x->drawtable();
 echo'<br>';
 echo '<form action="register.html">';
 echo '<button  id="register" value="R" name="Register">Register for student</button>';
?>
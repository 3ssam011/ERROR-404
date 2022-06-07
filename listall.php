<?php
 include_once "fileTable.php";
 $x=new file();
 $x->filename=$_POST['Register'];
 echo '<table border=1>';
 $x->drawtable();
 echo'<br>';
 echo '<form action="register.html">';
 echo '<button  id="register" value="R" name="Register">Register for student</button>';
?>
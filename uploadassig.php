<?php 
    if( isset($_POST['submit']) )
    {
        $name = "\r\n".$_POST['name'];
        $file = fopen("uploadassig.txt",'+r');
        fwrite($file,$name);
        fclose($file);
        echo "the has been uploaded";
    }
?>
<?php
class file{
    public $filename;
    public function drawtable()
    {
        $myfile=fopen($this->filename,"r") or die("sorry cannot be opened");
        while(!feof($myfile))
        {
            $line=fgets($myfile);
            echo "<tr>";
            $array=explode("~",$line);
            for($i=0;$i<count($array);$i++)
            {
                echo "<td>".$array[$i]."</td>";
            }
            echo"</tr>";
        }
        fclose($myfile);
        
    }
	/**
	 */
	function __construct() {
	}
}
?>
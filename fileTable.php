<?php
include_once"CRUD.php";
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

    public function DrawScedule($x,$xx)
    {
        $ss=0;
        $this->filename=$x->filename;
        $myfile=fopen($this->filename,"r") or die("sorry cannot be opened");
        $linee= getRowById("student.txt", '~', $xx);
        $arrayline=explode('~',$linee);
        $record= $arrayline[1];
        while(!feof($myfile))
        {
            $line=fgets($myfile);            
            $array=explode("~",$line);
            for($i=0;$i<count($array);$i++)
            { 
                if($array[1]==$record)
                {
                    if($i+1==count($array))   
                    {
                        echo "Your cources are: ";
                        echo $array[$i];
                        $ss=1;
                    }
                }                     
            }
        }
        if($ss==0)
        {
            echo "No student with the same name";
        }
        fclose($myfile);
    }

	/**
	 */
	function __construct() {
	}
}
?>
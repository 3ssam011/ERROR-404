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
    public function showSN($id,$x)
    {
        $this->filename=$x->filename;        
        $myfile=fopen($this->filename,"r") or die("sorry cannot be opened");
        while(!feof($myfile))
        {
            $line=fgets($myfile);
            $array=explode("~",$line);            
            $line2=searchUser("student.txt",$array[1]);            
            $array2=explode("~",$line2);
            if($id==$array2[0])
            {
                for ($i=0;$i<count($array2);$i++)
                {
                    if($i+1==count($array2))
                    {                                       
                         echo "<tr>";           
                        for($ii=0;$ii<count($array);$ii++)
                        {
                            echo "<td>".$array[$ii]."</td>";
                        }
                        echo"</tr>";
                 
                    }
                }                
            }
            else
            {
                break;
            }
            
                     
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
                if($array[1]==$record)
                {
                    for($i=0;$i<count($array);$i++)
                    {
                        if($i+1==count($array))   
                        {
                            echo "Your cources are: ";
                            echo $array[$i];
                            $ss=1;
                            
                        }
                    }
                    break;               
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
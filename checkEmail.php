<?php
    class checkEmail{
        
    	/**
	 */
	function __construct() {
	}
    public function checkEmail($fileName,$email)
    {       
        $myfile=fopen($fileName,"r") or die("sorry cannot be opened");
        
        while(!feof($myfile))
        {
            $line=fgets($myfile);    
            $array=explode("~",$line);
            
            for ($i=0;$i<count($array);$i++)
            {
                if ($i+1==count($array))
                {
                    break;
                }
                if($array[3]==$email)
                {
                    echo "this email already exist";
                    echo'<br>';
                    include_once "R.php";
                    return 1;
                }  

            }
          
            
                         
        }
        fclose($myfile);
        return 0;
    }
}
?>
<?php
function Encrypt($Word, $Key)
{
    $Result = "";
    for ($i = 0; $i < strlen($Word); $i++) {
        $c = chr(ord($Word[$i]) + $Key + $i);
        $Result .= $c;
    }
    return $Result;
}
function Decrypt($Word, $Key)
{
    $Result = "";
    for ($i = 0; $i < strlen($Word); $i++) {
        $c = chr(ord($Word[$i]) - $Key - $i);
        $Result .= $c;
    }
    return $Result;
}
function StoreRecord($fileName, $record)
{
    $myfile = fopen($fileName, "a+");
    fwrite($myfile, $record . "\r\n");
    fclose($myfile);
}

function searchUser($fileName, $Search)
{
    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    while (!feof($myfile)) {
        $line = fgets($myfile);
        $i = strpos($line, $Search);
        

        if ($i >= 0 && $i != null) {

            //echo $line;
            return $line;
        }
    }
    fclose($myfile);
    return false;

}


function getLastId($fileName, $Separator)
{

    if (!file_exists($fileName)) 
    {
        return 0;
    }

    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    $LastId = 0;
    while (!feof($myfile)) {
        $line = fgets($myfile);
        $ArrayLine = explode($Separator, $line);

        if ($ArrayLine[0] != "") {
            $LastId = $ArrayLine[0];
            
            
        }
    }
    return $LastId;
}
function ADDReg($fileName,$idstudent, $idmanger, $date,$time)  
{
    $id = getLastId($fileName, "~") + 1;
    $rec = $id . "~"  . $idstudent. '~'. $idmanger . "~".$date . "~" .$time ;
    StoreRecord($fileName, $rec);
        return true;
        
}


function ADD($fileName,$Email, $Password, $FullName,$DOB)
{
    $id = getLastId($fileName, "~") + 1;
    $rec = $id . "~"  . $FullName. '~'. $Password . "~".$Email . "~" .$DOB ;
    if (searchUser($fileName, $FullName) == false)
    {
        StoreRecord($fileName, $rec);
        return true;
    } else 
    {
        return false;
    }

}
function AddOrder($fileName,$id, $FullName, $course,$IdOrder)
{
    $id = getLastId($fileName, "~") + 1;
    $rec =  $id. '~'. $FullName . "~".$course . "~" .$IdOrder ;
    if (searchUser($fileName, $FullName) == false)
    {
        StoreRecord($fileName, $rec);
        return true;
    } else 
    {
        return false;
    }

}
function addDDDD($fileName,$Email, $Password, $FullName,$DOB,$BirthCertificate,$age,$courses)
{
    $id = getLastId($fileName, "~") + 1;
    $rec = $id . '~'  . $FullName. '~'. $Password . '~'.$Email . '~' .$DOB .'~'.$BirthCertificate.'~'.$age.'~'.$courses;
    if (searchUser($fileName, $FullName) == false)
    {
        echo"ADD";

        StoreRecord($fileName, $rec);
        return true;
    } else 
    {
        return false;
    }

}

function ad($fileName,$name,$Klam)
{
    $id = getLastId($fileName, "~") + 1;
    $rec = $id . '~' . $name. '~' .$Klam;
    StoreRecord($fileName, $rec);
}

function DeleteRecord($fileName, $record)
{
    $contents = file_get_contents($fileName);
    $contents = str_replace($record, '', $contents);
    file_put_contents($fileName, $contents);
}

function getRowById($fileName, $Separator, $id)
{

    if (!file_exists($fileName)) {
        return 0;
    }

    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    $LastId = 0;
    while (!feof($myfile)) {
        $line = fgets($myfile);
        $ArrayLine = explode($Separator, $line);

        if ($ArrayLine[0] == $id)
        {
            return $line;
        }
    }
    return false;
}

function UpdateRecord($fileName, $Newrecord, $OldRecord)
{
    $contents = file_get_contents($fileName);
    $contents = str_replace($OldRecord, $Newrecord, $contents);
    file_put_contents($fileName, $contents);
}

function UpdateUser($fileName,$id, $Email, $Password, $FullName, $DOB)
{
    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    $record = $id . "~" . $FullName . "~" . $Password . "~" . $Email . "~" . $DOB . "\r\n";
    echo$record;
    $r = getRowById($fileName, "~", $id);
    echo$r;
    UpdateRecord($fileName, $record, $r);
}

?>
<?php
include_once"CRUD.php";
class user
{
  public  $Fullname;
  public $ID;
  public $Password;
  public $type;
  public $email;
  public $DOB;
  public function log($filename,$id,$pass)
  {
    $line=getRowById($filename, '~', $id);
    $line2=searchUser($filename,$pass);
    if($line==$line2)
    {
      $ArrayLine = explode('~', $line);
      if($pass==$ArrayLine[2])
      {
        return $line;
      }
      else{
        echo$line;
        echo'no';
      }
    }
    else{
      echo'no';
    }
  }
}
?>
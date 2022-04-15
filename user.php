<?php
include_once"CRUD.php";
class user
{
  private  $Fullname;
  private $ID;
  private $Password;
  private $type;
  private $email;
  private $DOB;
  public function log($filename,$id,$pass)
  {
	  
    $line=getRowById($filename, '~',$id);
    $line2=searchUser($filename,$pass);
    if($line==$line2)
    {
      $ArrayLine = explode('~', $line);
      if($pass==$ArrayLine[2])
      {
		  
        return 1;
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
	/**
	 * 
	 * @return mixed
	 */
	function getDOB() {
		return $this->DOB;
	}
	
	/**
	 * 
	 * @param mixed $DOB 
	 * @return user
	 */
	function setDOB($DOB): self {
		$this->DOB = $DOB;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getFullname() {
		return $this->Fullname;
	}
	
	/**
	 * 
	 * @param mixed $Fullname 
	 * @return user
	 */
	function setFullname($Fullname): self {
		$this->Fullname = $Fullname;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getID() {
		return $this->ID;
	}
	
	/**
	 * 
	 * @param mixed $ID 
	 * @return user
	 */
	function setID($ID): self {
		$this->ID = $ID;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getPassword() {
		return $this->Password;
	}
	
	/**
	 * 
	 * @param mixed $Password 
	 * @return user
	 */
	function setPassword($Password): self {
		$this->Password = $Password;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getType() {
		return $this->type;
	}
	
	/**
	 * 
	 * @param mixed $type 
	 * @return user
	 */
	function setType($type): self {
		$this->type = $type;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getEmail() {
		return $this->email;
	}
	
	/**
	 * 
	 * @param mixed $email 
	 * @return user
	 */
	function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
}
?>
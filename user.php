<?php
include_once "CRUD.php";
class user
{
  public  $Fullname;
  public $ID;
  public $Password;
  public $type;
  public $email;
  public $DOB;
  public function log($filename,$user)
  {
	$u=Encrypt($user->Password,1);	
    $line=getRowById($filename, '~',$user->ID);
    $line2=searchUser($filename,$u);
	if($line!=null&&$line2!=null)
	{
		if($line==$line2)
		{
		  $ArrayLine = explode('~', $line);
		  if($u==$ArrayLine[2])
		  {
			return 1;
		  }
		}
		else{
			return 0;
		}
	}
	else
	{
		return 0;
	}
    
  }
	public function getDOB() {
		return $this->DOB;
	}
	

	public function setDOB($DOB): self {
		$this->DOB = $DOB;
		return $this;
	}

	public function getFullname() {
		return $this->Fullname;
	}
	

	public function setFullname($Fullname): self {
		$this->Fullname = $Fullname;
		return $this;
	}

	public function getID() {
		return $this->ID;
	}
	
	
	public function setID($ID): self {
		$this->ID = $ID;
		return $this;
	}

	public function getPassword() {
		return $this->Password;
	}
	
	
	public function setPassword($Password): self {
		$this->Password = $Password;
		return $this;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type): self {
		$this->type = $type;
		return $this;
	}

	public function getEmail() {
		return $this->email;
	}
	
	
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
}
?>
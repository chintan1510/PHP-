<?php 


class User
{
	private $fname,$lname,$email,$mob,$address,$dob,$uname;

	function __construct($fname,$lname,$email,$mob,$address,$dob,$uname)
	{
		$this->fname = $fname;
		$this->lname = $lname;
		$this->email = $email;
		$this->mob = $mob;
		$this->address = $address;
		$this->dob = $dob;
		$this->uname = $uname;
		
	}
	function getUser()
	{
		return [$this->fname,$this->lname,$this->email,$this->mob,$this->address,$this->dob,$this->uname];
	}

}

/*$user = new User("A","B","a.b@gmail.com","9892222495","ABC","10-11-92","ABCD");
var_dump($user->getUser()); */

 ?>
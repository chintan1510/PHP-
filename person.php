<?php 
class Person
{
	private $fname,$lname,$email,$mob,$address,$dob;
	function __construct($fname,$lname,$email,$mob,$address,$dob)
	{
		$this->fname = $fname;
		$this->lname = $lname;
		$this->email = $email;
		$this->mob = $mob;
		$this->address = $address;
		$this->dob = $dob;
		
	}
	function getPerson()
	{
		return ["Firstname" => $this->fname,"Lastname" => $this->lname,"Email" => $this->email,"Mobile num" => $this->mob,"Address" => $this->address,"Date of birth" => $this->dob];
	}
	/*static function testFn()
	{
		echo "test";
	}*/
}
/*$user = new User("A","B","a.b@gmail.com","9892222495","ABC","10-11-92","ABCD");
var_dump($user->getUser()); */
 ?>
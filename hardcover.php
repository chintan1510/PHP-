<?php 
class Hardcover
{
	var $abc;
	var $def;
	function __construct($abc)
	{
		echo $this->abc = $abc;
		echo "1";
	} 
	
}


	$obj1 = new Hardcover(5);
	//$user2 = new Hardcover(5);


 ?>
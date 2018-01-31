<?php
include './config_mysqli.php';

$str = $_GET['q'];

$fetch_users = "select email from register_user";
$result = mysqli_query($conn,$fetch_users);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if($str == $row['email'])
		{
			echo "Email id already exists";	
			break;
		}
	}
}
?>
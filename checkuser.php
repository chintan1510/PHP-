<?php
include './config_mysqli.php';

$str = $_GET['q'];

$fetch_users = "select email,uname from register_user";
$result = mysqli_query($conn,$fetch_users);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if($str == $row['email'])
		{
			echo "Already a user";
			break;
		}
		if($str == $row['uname'])
		{
			echo "Username already exists";
			break;
		}
	}
}
?>

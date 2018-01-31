<?php
include './config_mysqli.php';

$str = $_GET['q'];

$fetch_mob_num = "select mob from register_user";
$result = mysqli_query($conn,$fetch_mob_num);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if($str == $row['mob'])
		{
			echo "Mobile number already exists";	
			break;
		}
	}
}
?>
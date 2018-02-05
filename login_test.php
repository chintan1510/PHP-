<?php 

include "./config_mysqli.php";


if(isset($_POST['submit']))
{

$uname = $_POST['uname'];
$pwd = md5($_POST['pwd']);	
$query = "SELECT * from register_user where uname='{$uname}'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
	while ($row = mysqli_fetch_assoc($result)) {
		$db_uname = $row['uname'];
		$db_pwd = $row['pwd'];
	}
	echo $db_uname;


		if($db_uname === $uname && $db_pwd === $pwd)
	{
		echo "Success";
	}
	else
	{
		echo "unsuccessful";
	}
	
	
}
}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login test</title>
</head>
<body>
	<form action="" method="POST">
		Uname <input type="text" name="uname">
		Pwd	<input type="password" name="pwd">
		<input type="submit" name="submit">
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="">
	Uname:<input type="text" name="uname">
	PWD :<input type="password" name="pwd">
	<input type="submit" name="submit">
</form>

<?php

if($_REQUEST['submit'])
{
	print_r($_GET);
}
?>

</body>
</html>
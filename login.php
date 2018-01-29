<?php include './config_mysqli.php' 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>

	<h1 style="text-align: center;margin-top: 10px;">Login</h1><br><br>

	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" style="text-align: center;">
	Username : <input type="text" name="uname"/><br><br>
	Password : <input type="password" name="pwd"/><br><br>
	<input class="btn btn-info" type="submit" name="login" value="Login"/>
	</form><br><br>

<?php
session_start();
$uname=$pwd="";
if(isset($_POST["login"]))
{
	$uname = $_POST['uname'];
	$pwd = md5($_POST['pwd']);
	$u_det_query = "SELECT * FROM register_user";
	$query_exec = mysqli_query($conn,$u_det_query);
	if(mysqli_num_rows($query_exec) > 0)
	{
		while($row = mysqli_fetch_assoc($query_exec))
		{
			if($row['uname']==$uname && $row['pwd']==$pwd)//&&row['status']==0)
			{
				$_SESSION['id'] = $row['id'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['uname'] = $row['uname'];
				/*$_SESSION['email'] = $row['email'];
				$_SESSION['mob'] = $row['mob'];
				$_SESSION['dob'] = $row['dob'];
				$_SESSION['uname'] = $row['uname'];*/
				$_SESSION['status'] = $row['status'];
				header('Location:index2.php');
			}
			/*elseif($row['uname']==$uname && $row['pwd']==$pwd)//&&row['status']==1)
			{
				while($row1 = mysqli_fetch_array($query_exec))
				{
					for ($i=0; $i < sizeof($row1); $i++) { 
						$session_array = array(("User".$i)=>
							array($_SESSION['fname']=$row1[1],
								  $_SESSION['lname']=$row1[2],
								  $_SESSION['email']=$row1[3],
							      $_SESSION['mob']=$row1[4],
							      $_SESSION['dob']=$row1[5],
							      $_SESSION['uname']=$row1[6]));
					}

				}		
			}*/
			else
			{
				echo "Invalid username or password";
			}
		}
	}	
}
?>


<p style="text-align: center;"><label>Don't have an account?&nbsp;&nbsp;</label><a class="btn btn-info" href="register.php">Signup</a></p>

</body>
</html>
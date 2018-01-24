<?php session_start();?>
<?php include './config_mysqli.php';?>

<?php 
		
		$fname=$lname=$email=$mob=$dob=$uname=$pwd="";
		$status = 0;
		if (isset($_POST['register']))
		{
			$fname = $_POST["fname"];	
			$lname = $_POST["lname"];	
			$email = $_POST["email"];
			$mob = $_POST["mob"];
			$dob = $_POST["dob"];
			$uname = $_POST["uname"];
			$pwd = $_POST["pwd"];
			$regex = '/^[6-9]\d{9}$/';
			$error = [

				'fname'	=> '',
				'email' => '',
				'mob'   => '',
				'uname'	=> '',
				'pwd'   => ''
			];

			if(empty($fname))
			{
				$error['fname'] = "First name is required";
			}
			if (empty($email)) {
				$error['email'] = "Email id required";
			}
			if (empty($mob)) {
				$error['mob'] = "Mobile number is required";
			}
			elseif(!preg_match($regex,$mob))
			{
				$error['mob'] = "Enter a valid mobile number";
			}
			if (empty($uname)) {
				$error['uname'] = "Username is required";
			}
			if (empty($pwd)) {
				$error['pwd'] = "Password is required";
			}
			else{
			
			$pwd = md5($pwd);
			$fetch_admin_details = "SELECT mob FROM admin_details";
			echo "test1";
			$fetch_exec = mysqli_query($conn,$fetch_admin_details);
			echo "test2";
			if(mysqli_num_rows($fetch_exec) >0)
			{
				echo "test3";
			while($row = mysqli_fetch_assoc($fetch_exec))
				{
					echo "test4";
					if($row['mob'] == $mob)
						{
							echo "test5";
							echo $row['mob'];
							$status = 1;
							break;
						}
				}

			}	
		$sql = "INSERT INTO register_user (fname,lname,email,mob,dob,uname,pwd,status) VALUES ('{$fname}', '{$lname}', '{$email}', '{$mob}', '{$dob}', '{$uname}', '{$pwd}','{$status}')";
		$query = mysqli_query($conn, $sql);	
		header('Location:login.php');	
			}
			
	}

	 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<style type="text/css">
		span
		{
			color:red;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>

<?php

// $fnameError = $lnameError = "";
// if($_SERVER['REQUEST_METHOD'] == "POST")
// {
// 	if(empty($_POST['fname']))
// 	{
// 		$fnameError = "First name is required";
// 	}
// 	if(empty($_POST['lname']))
// 	{
// 		$lnameError = "Last name is required";
// 	}
// }

?>	
	
	
	<h3 style="text-align: center;margin-top: 10px;">REGISTER HERE</h3><br>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" style="text-align: center;">
		First Name : <input type="text" name="fname" value="<?php echo isset($fname) ? $fname : ''; ?>" >
		<span class="error"><?php
		if (isset($error['fname'])) {
			echo $error['fname'];
		}
		?></span>
		<br><br>
		Last Name :  <input type="text" name="lname" value="<?php echo isset($lname) ? $lname : ''; ?>"/><br><br>
		Email Id :   <input type="emailfnameErr" name="email" value="<?php echo isset($email) ? $email : ''; ?>"/>
		<span class="error"><?php
		if (isset($error['email'])) {
			echo $error['email'];
		}
		?></span>
		<br><br>
		Mobile number : <input type="text" name="mob"/ value="<?php echo isset($mob) ? $mob : ''; ?>">
		<span class="error"><?php
		if (isset($error['mob'])) {
			echo $error['mob'];
		}
		?></span>
		<br><br>
		Date of birth : <input type="date" name="dob" value="<?php echo isset($dob) ? $dob : ''; ?>" /><br><br>
		Username : <input type="text" name="uname" value="<?php echo isset($uname) ? $uname : ''; ?>"/>
		<span class="error"><?php
		if (isset($error['uname'])) {
			echo $error['uname'];
		}
		?></span>
		<br><br>
		Password : <input type="password" name="pwd" />
		<span class="error"><?php
		if (isset($error['pwd'])) {
			echo $error['pwd'];
		}
		?></span>
		<br><br>
		<input class="btn btn-info" type="submit" name="register" value="Register" />
		<br><br>
		<h4>Already a user?<h4><a class="btn btn-info" href="login.php">Login</a> 
	</form>
	</body>
</html>







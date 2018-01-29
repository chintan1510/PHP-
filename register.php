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
				'pwd'   => '',
				'f_ext' => '',
				'f_size' => ''
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
			if(!preg_match($regex,$mob))
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


			// if (empty($error)) {
			

			/*$fetch_users = "SELECT email from register_user";
			$result = mysqli_query($conn,$fetch_users);
			if(mysqli_num_rows($result)>0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					if($email == $row['email'])
					{
							echo "<script type='text/javascript'>";
							echo	"window.alert('Already a user');";
							echo	"window.location = 'login.php';";
							echo "</script>";	
							break;
					}
				}
			}*/
			
			
			if(isset($_FILES['uploadimage']))
			{
				//$upload_errors = array();
				$file_name = $_FILES['uploadimage']['name'];
				$file_size = $_FILES['uploadimage']['size'];
				$file_tmp  = $_FILES['uploadimage']['tmp_name'];
				$file_type = $_FILES['uploadimage']['type'];
				$file_ext  = strtolower(end(explode('.',$_FILES['uploadimage']['name'])));
				$file_dest = "../task1/images/".$file_name;
				$extensions = array("jpg","jpeg","png","gif");
				if(in_array($file_ext,$extensions) === false)
				{
					echo $error['f_ext'] = "File extension not allowed.Use either of .jpg,.jpeg,.png,.gif extensions";
				}
				if($file_size > 10000000) 
				{
      			   echo $error['f_size']='File size must be less than 10 MB';
      			}
      			if($error['f_ext'] == "" && $error['f_size'] == "")
      			{
      				if(move_uploaded_file($file_tmp,$file_dest))
      				{
      					echo "success";
      				}
      				else
      				{
      					echo "File not uploaded";
      				}
      			}
			}
			else
			{
				$file_name = "default.png"; }

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



		$sql = "INSERT INTO register_user (fname,lname,email,mob,dob,photo,uname,pwd,status) VALUES ('{$fname}', '{$lname}', '{$email}', '{$mob}', '{$dob}','{$file_name}','{$uname}', '{$pwd}','{$status}')";
		$query = mysqli_query($conn, $sql);
		if (!$query) {
				//die(mysqli_error($conn));
				echo "<script type='text/javascript'>";
							echo	"window.alert('Already a user');";
							echo	"window.location = 'login.php';";
							echo "</script>";
			}
			else{

				echo "<script type='text/javascript'>";
							echo	"window.alert('Registered successfully');";
							echo	"window.location = 'login.php';";
							echo "</script>";	
			} 	
			}
				
				
			}

	 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<script type="text/javascript" src="/js/validate.js"></script>
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
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" style="text-align: center;" enctype="multipart/form-data">
		First Name : <input type="text" name="fname" value="<?php echo isset($fname) ? $fname : ''; ?>" >
		<span class="error"><?php
		if (isset($error['fname'])) {
			echo $error['fname'];
		}
		?></span>
		<br><br>
		Last Name :  <input type="text" name="lname" value="<?php echo isset($lname) ? $lname : ''; ?>"/><br><br>
		Email Id :   <input type="emailfnameErr" name="email" value="<?php echo isset($email) ? $email : ''; ?>" onkeyup="check_email(this.value)" />
		<span id="email" class="error"><?php
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
		<input type="file" name="uploadimage">
		<span class="error"><?php
		if (isset($error['f_ext'])) {
			echo $error['f_ext'];
		}
		elseif(isset($error['f_size'])) {
			echo $error['f_size'];
		}
		?></span>
		<br><br>
		Username : <input type="text" name="uname" value="<?php echo isset($uname) ? $uname : ''; ?>" onkeyup="check_user(this.value)"/>
		<span id="uname" class="error"><?php
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
		<h4>Already a user?<h4><a class="btn btn-info" href="login.php">Login</a></h4> 
	</form>
	</body>
</html>







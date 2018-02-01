<?php 
	include './config_mysqli.php'; 
	include './functions.php';
	session_start();	
?>


<?php

update_user_details();
if(isset($_SESSION['uname']))
{
	echo "<h3 style='display:inline;'>Welcome</h3>";
    echo "<a style='float:right;margin-right:20px;' href='logout.php' >Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;";	
    echo "<p>".$_SESSION['fname']." ".$_SESSION['lname']."</p>";  

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update User details</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/	bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<script type="text/javascript" src="/js/validate.js"></script>
</head>
<body>

<h3 style="text-align: center">EDIT DETAILS</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' enctype='multipart/form-data'>
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
	<input type="hidden" name="img" value="<?php echo $_GET['image']; ?>" >	
	<table class="table">
		<tbody>
			<tr>
				<td>
					<label>First Name</label>
				</td>
				<td>
					<input class='form-control' type="text" name="fname" value="<?php echo $_GET['fname']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Last Name</label>
				</td>
				<td>
					<input class='form-control' type="text" name="lname" value="<?php echo $_GET['lname']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Email Id</label>
				</td>
				<td>
					<input class='form-control' type="text" name="email" value="<?php echo $_GET['email']; ?>" onblur="check_updated_email(this.value)"><span id='email' class='error'></span>
				</td>
			</tr>
			<tr>
				<td>
					<label>Mobile No.</label>
				</td>
				<td>
					<input class='form-control' type="text" name="mob" value="<?php echo $_GET['mob']; ?>"  onblur="check_updated_mob(this.value)"><span id='mob' class='error'></span>
				</td>
			</tr>
			<tr>
				<td>
					<label>Date of birth</label>
				</td>
				<td>
					<input class='form-control' type="date" name="dob" value="<?php echo $_GET['dob']; ?>">
				</td>
			</tr>
			<tr>
				<td>
				<label>Upadte profile picture</label>
				</td>
				<td><input type="file" name="update_image">
				</td>
			</tr>
			<tr>
				<td  colspan='2' style="text-align: center;">
					<input style="margin-right: 5px;" class='btn btn-info' type="submit" name="submit" value="Update">
					<a class='btn btn-info' href='index2.php'>Back</a>
				</td>
			</tr>
		</tbody>

	</table>

</form>

<?php
}
else
{
	header('Location:register.php');
}

?>

</body>
</html>




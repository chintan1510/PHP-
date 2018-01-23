<?php include './config_mysqli.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>User details</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>
<?php

session_start();

if(isset($_SESSION['uname']))
{

$status = $_SESSION['status'];
echo "<h3 style='display:inline;'>Welcome</h3>";
echo "<a style='float:right;margin-right:20px;' href='logout.php' >Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;";	
echo "<p>".$_SESSION['fname']." ".$_SESSION['lname']."</p>";
//$uri = $_SERVER['REQUEST_URI'];
//echo $uri;

if (isset($_GET['user'])) {
	$uname = $_GET['user'];
	//echo $uname;
	//echo "test1";
}

$query = "SELECT * FROM register_user where uname='{$uname}'";
//echo "test2";
$result = mysqli_query($conn,$query);
//echo "test3";
if(mysqli_num_rows($result)>0)
{
	//echo "test4";
	?>

	<table class="table">
    <thead>
      <tr>
      	<th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Mobile no.</th>
        <th>Date of birth</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>

    	<?php

	while($row = mysqli_fetch_assoc($result))
	{
		echo '<tr>';
		$id = $row['id'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$mob = $row['mob'];
		$dob = $row['dob'];
		$uname = $row['uname'];
		
		echo "<td>$id</td>";
		echo "<td>$fname</td>";
		echo "<td>$lname</td>";
		echo "<td>$email</td>";
		echo "<td>$mob</td>";
		echo "<td>$dob</td>";
		echo "<td>$uname</td>";
		echo "</tr>";
		echo "</tbody>";
		echo "</table>";
			
	}

}

echo "<a class='btn btn-info' href='index.php'>Back</a>";

}
else
{
	header('Location:register.php');
}

?>

</body>
</html>
<?php include './config_mysqli.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>


	
      <?php

session_start();
$status = $_SESSION['status'];

echo "<h3>Welcome</h3>".$_SESSION['fname']." ".$_SESSION['lname'];

if($status == 1)
{
	echo "<form action='index2.php' method='POST'>";
	echo "<input type=submit value='View User Details' name='submit'>";
	echo "</form>";

	
	$query = "SELECT fname,lname,email FROM register_user";
	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result)>0)
	{
		?>

		<table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

    	<?php

		while($row = mysqli_fetch_assoc($result))
		{

			echo '<tr>';
			$first_name = $row['fname'];
			$last_name = $row['lname'];
			$email = $row['email'];

			echo "<td>$first_name</td>";
			echo "<td>$last_name</td>";
			echo "<td>$email</td>";

			echo '</tr>';
		}
	}

}
else
{
	echo "<h1>Your details are:</h1>";
}

?>
    </tbody>
  </table>



</body>
</html>
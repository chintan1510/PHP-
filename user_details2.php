<?php include './config_mysqli.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>User details</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/responsive_grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

?>

<div class='row'>

<div class='col-6'>

<?php

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
	
	while($row = mysqli_fetch_assoc($result))
	{
		
		/*$id = $row['id'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$mob = $row['mob'];
		$dob = $row['dob'];
		$uname = $row['uname'];*/
		$image = $row['photo'];
		
		echo "<img src='images/600x600/$image'><br>";
			
	}
}	

?>
</div>

<div class="col-6">

	<?php

		$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($result))
	{

		$id = $row['id'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$mob = $row['mob'];
		$dob = $row['dob'];
		$uname = $row['uname'];
    $image = $row['photo'];

	?>

		<table class="table">
    <tbody>
      <tr>
      	<th>ID</th>

    <?php
    
    	echo "<td>$id</td>"; 	
    ?>  	
      </tr>
      <tr>
        <th>Firstname</th>
       <?php
    
    	echo "<td>$fname</td>";  	
    ?> 
      </tr>
      <tr>  
        <th>Lastname</th>
         <?php
    
    	echo "<td>$lname</td>";  	
    ?> 
      </tr>  
      <tr>  
        <th>Email</th>
        <?php
    
    	echo "<td>$email</td>";  	
    ?>
      </tr>  
      <tr>  
        <th>Mobile no.</th>
       <?php
    
    	echo "<td>$mob</td>";  	
    ?>
      </tr>  
      <tr>  
        <th>Date of birth</th>
        <?php
    
    	echo "<td>$dob</td>";  	
    ?>
      </tr>  
      <tr>  
        <th>Username</th>
        <?php
    
    	echo "<td>$uname</td>";  }	
    ?>
      </tr>
      <?php
      echo "<td colspan='2' style='text-align: center;'><a style='margin-right:5px;' class='btn btn-info' href='update_user_data.php?id=$id&fname=$fname&lname=$lname&email=$email&mob=$mob&dob=$dob&image=$image'>Edit</a><a class='btn btn-info' href='index2.php'>Back</a></td>";
      ?>
      </tr>
    </tbody>
</table>
</div>

</div>

<?php



}

else
{
	header('Location:register.php');
}

?>

</body>
</html>
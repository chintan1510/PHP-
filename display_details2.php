<!DOCTYPE html>
<html>
<head>
	<title>Display User details</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/	bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/responsive_grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php



	include './config_mysqli.php' ; 
	session_start();

	if(isset($_SESSION['uname']))
	{
	if(isset($_GET['page']))
	{

	echo "<h3 style='display:inline;'>Welcome</h3>";
    echo "<a style='float:right;margin-right:20px;' href='logout.php' >Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;";	
    echo "<p>".$_SESSION['fname']." ".$_SESSION['lname']."</p>";	
	}
	$results_per_page = 6;

	// find out the number of results stored in database
	$sql='SELECT * FROM register_user';
	$result = mysqli_query($conn, $sql);
	$number_of_results = mysqli_num_rows($result);
	// determine number of total pages available
	$number_of_pages = ceil($number_of_results/$results_per_page);

	// determine which page number visitor is currently on
	if (!isset($_GET['page'])) {
  		$page = 1;
	} 
	else {
  		 $page = $_GET['page'];
	}

	// determine the sql LIMIT starting number for the results on the displaying page
	
	$this_page_first_result = ($page-1)*$results_per_page;

	?>

	<!-- <div class="row">

		<div class="col-4">    
		<ul style="display: inline-block;list-style: none;">
 -->
	<?php		
	$query = 'SELECT fname,lname,email,photo,uname FROM register_user LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
	$result = mysqli_query($conn,$query);

	?>
	<div class="container">
	<ul class="floating-box">
	<?php	
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{

			$uname = $row['uname'];
			$first_name = $row['fname'];
			$last_name = $row['lname'];
			$email = $row['email'];
			$image = $row['photo'];
			//echo "<div class='container'>";
			//echo "<ul>";
			echo "<li>";
			echo "<img src='images/100x100/$image'><br>";
			//echo "</li>";
			//echo "<li>";
			echo $first_name." ".$last_name."<br>";
			//echo "</li>";
			//echo "<li>";
			echo $email."<br>";
			//echo "</li>";
			//echo "<li>";
			echo "<a href='user_details2.php?user=$uname' class='btn btn-info'>Other info</a>";
			echo "</li>";
			//echo "</ul>";
			//echo "</div>";

			//echo "</li>";
			//echo "<br>";
			
		}

?>

</ul>
</div>

<!-- 	</ul>
</div>
</div> -->



<?php
		
	}


		

	// display the links to the pages
	for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<br><div style="display:inline-flex;margin-right:3px;"><a style="" href="display_details2.php?page=' . $page . '" class="btn btn-info">' . $page . '</a> ';
}
//echo "<br><br>";
?>
<a  class="btn btn-info" href="index2.php">Back</a>
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
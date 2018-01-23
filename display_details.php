<!DOCTYPE html>
<html>
<head>
	<title>Display user details</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>



<?php

	include './config_mysqli.php' ; 
	session_start();


	
	$results_per_page = 2;

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
	$page;
	$this_page_first_result = ($page-1)*$results_per_page;

	echo $query = 'SELECT * FROM register_user LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
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
        <th></th>
      </tr>
    </thead>
    <tbody>

    	<?php

		while($row = mysqli_fetch_assoc($result))
		{

			echo '<tr>';
			$uname = $row['uname'];
			$first_name = $row['fname'];
			$last_name = $row['lname'];
			$email = $row['email'];

			echo "<td>$first_name</td>";
			echo "<td>$last_name</td>";
			echo "<td>$email</td>";
			echo "<td><a href='user_details.php?user=$uname' class='btn btn-info'>Other info</a></td>";
			echo '</tr>';
		}

		
	}

	// display the links to the pages



for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="index.php?page=' . $page . '" class="btn btn-info">' . $page . '</a> ';
}

echo "<br><br>";
?>



</body>
</html>
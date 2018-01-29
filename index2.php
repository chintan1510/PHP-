<?php include './config_mysqli.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="">

	<script type="text/javascript">
		function loadDoc() {
				
    				 if (window.XMLHttpRequest) {
            
            			xmlhttp = new XMLHttpRequest();
        				}	

        		 		else 
        		 		{
                      		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        				}
    			
				//var xhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){

				if(this.readyState == 4 && this.status == 200)
				{
					document.getElementById("display_user_details").innerHTML = this.responseText;
				}
			};

			xmlhttp.open("GET","display_details2.php",true);
			xmlhttp.send();	
		}
	
	</script>

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

if($status == 1)
{

	/*$results_per_page = 2;

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

	$query = 'SELECT * FROM register_user LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
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

echo "<br><br>";*/




	// echo "<form action='index.php?page={$_GET['page']}' method='POST'>";
	// echo "<input type='submit' name='submit'>";
	// echo "</form>";

?>


<button type="button" onclick="loadDoc()">View user details</button><br><br>	

<div id="display_user_details"></div>
<?php


} else
{
	echo "<h1>Your details are:</h1>";
	$query1 = "SELECT * FROM register_user where uname='{$_SESSION['uname']}'";
	$result1 = mysqli_query($conn,$query1);
	if(mysqli_num_rows($result1)>0)
	{
		?>

		<table class="table">
    <thead>
      <tr>
      	<th>Profile photo</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

    	<?php

		while($row = mysqli_fetch_assoc($result1))
		{	
			echo '<tr>';
			$id = $row['id'];
			$first_name = $row['fname'];
			$last_name = $row['lname'];
			$email = $row['email'];
			$uname = $row['uname'];
			$image = $row['photo'];
 			echo "<td>";
 			echo "<img src='/images/$image' width='100' height='100'>";
 			echo "</td>";
			echo "<td>$first_name</td>";
			echo "<td>$last_name</td>";
			echo "<td>$email</td>";
			echo "<td><a href='user_details.php?user=$uname' class='btn btn-info'>Other info</a></td>";
			echo '</tr>';
		}
	}


}

//if (isset($_POST['submit'])) {

	// define how many results you want per page


}
else
{
	header('Location:register.php');
}
?>
</body>
</html>
<?php 
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 20; 
$servername="localhost";
    $username="root";
	$password="compaqv45";
    $connection=  mysql_connect($servername,$username,$password)or die(mysql_error());
mysql_select_db("test_db",$connection);

$sql = "SELECT * FROM employee ORDER BY emp_id ASC LIMIT $start_from, 20"; 
$rs_result = mysql_query ($sql,$connection); 

while($row=mysql_fetch_assoc($rs_result))
{
	echo $row["emp_name"];
	echo $row["emp_address"];
}
?> 
<table>
<tr><td>Name</td><td>Address</td><td>Salary</td></tr>
<?php 
while ($row = mysql_fetch_assoc($rs_result)) { 

           print "<tr>";
           print "<td>". $row["emp_name"]. "</td>";
		   print "<td>". $row["emp_address"]."</td>";
		   print "<td>". $row["emp_salary"]."</td>";

		   print "</tr>";

}; 
?> 
</table>
<?php 
$servername="localhost";
    $username="root";
	$password="compaqv45";
    $connection=  mysql_connect($servername,$username,$password)or die(mysql_error());
mysql_select_db("test_db",$connection);
$sql = "SELECT COUNT(emp_id) FROM employee"; 
$rs_result = mysql_query($sql,$connection); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 20); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='pagination.php?page=".$i."'>".$i."</a> "; 
}; 

?>
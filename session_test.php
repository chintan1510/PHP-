<?php
include './config_mysqli.php';
session_start();
echo "test1";
$u_det_query = "SELECT * FROM register_user";
$query_exec = mysqli_query($conn,$u_det_query);
//print_r($query_exec);
print_r(mysqli_fetch_array($query_exec));
if(mysqli_num_rows($query_exec) > 0)
	{
		$no_of_rows = mysqli_num_rows($query_exec);
		echo $no_of_rows."   ";	
		echo "test2  ";
		while($row1 = mysqli_fetch_array($query_exec))
				{
					echo "test3  "; 
					echo sizeof($row1[0]."  ");
					for($i=0;$i<$no_of_rows;$i++)
					{
					for ($j=0; $j < sizeof($row1[0]); $j++) {
						//echo "test for loop"; 
						$session_array = array(("User".$j)=>
							array($_SESSION['fname']=$row1[1],
								  $_SESSION['lname']=$row1[2],
								  $_SESSION['email']=$row1[3],
							      $_SESSION['mob']=$row1[4],
							      $_SESSION['dob']=$row1[5],
							      $_SESSION['uname']=$row1[6]));
					}
					}					
				}
}
$sample_array = array(
    'foo' => 1500,
    5     => 'Hello World!',
    'baz' => array(1, 2, 3, 5, 8, 13),
);

echo $sample_array['baz'][3]."  ";
echo sizeof(array_keys($session_array));
for ($i=0; $i < sizeof(array_keys($session_array)); $i++)
{
	for($j=0;$j<sizeof($session_array['User0']);$j++)

 { 
	echo "  ".$session_array['User'.$i][$j]."  Hello";
}
}
?>
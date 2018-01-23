<?php

$names = array("Firstname"=>array("A","b"),"Lastname"=>array("z","y"));
print_r($names);
for($i=0;$i<sizeof($names['Firstname']);$i++)
{
	echo $names['Firstname'][$i];
	echo "<span style='color:blue';>".$names['Lastname'][$i]."</span>";
	
}


?>
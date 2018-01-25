<?php

/*echo "<form action='sample.php' method='POST'>";
echo "<input type=submit value='View User Details' name='submit'>";
echo "</form>";*/

$names = array("Chintan","Ankush","Parth","Clinton","Brij",1,2);

//sort($names,1);
$alength = count($names);
for($i=0;$i<$alength;$i++)
{
	echo $names[$i]." ";
}

list($a,$b) = $names;
echo $a;

echo array_sum($names);


for($j=0;$j<$alength;$j++)
{
echo "<h1 style='display:inline;'>Hello</h1>";
}

?>

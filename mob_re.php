<?php

$mob = "7892222495";
$regex = '/^[6-9]\d{9}$/';
if(preg_match($regex,$mob))
{
	echo 'hello';
}else {
	echo 'error bro';
}


?>
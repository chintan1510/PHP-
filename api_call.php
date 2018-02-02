<?php

if(isset($_POST['submit']))
{
	$base = $_POST['base'];
	$amount = $_POST['amount'];
	$converted_into = $_POST['convert_into'];
	$curl = curl_init();
	curl_setopt_array($curl,array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => "https://api.fixer.io/latest?base=$base"
	));
	$resp = curl_exec($curl);
	//var_dump($resp);
	$response_array = json_decode($resp,true);
	//var_dump($response_array);
	$converted_value = $amount * $response_array['rates'][$converted_into];

	echo $converted_value;
}



?>

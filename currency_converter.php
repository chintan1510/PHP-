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

	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Currency converter</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>
	<h3>Currency Converter</h3>
	<form action='' method=POST>
		Base:		 <input class="form-control" type="text" name="base">
		Amount: 	 <input class="form-control" type="text" name="amount">
		Convert into:<input style="margin-bottom: 10px;" class="form-control" type="text" name="convert_into">
		<input class="btn btn-info" type="submit" name="submit" value="submit">
	</form><br><br>



<table class="table">
	<thead>
		<td>Base</td>
		<td>Amount</td>
		<td>Convert into</td>
		<td>Converted value</td>
	</thead>
	<tbody>
		<tr>
		<td><?php echo $base; ?></td>
		<td><?php echo $amount; ?></td>
		<td><?php echo $converted_into; ?></td>
		<td><?php echo $converted_value; ?></td>
		</tr>	
	</tbody>	
</table>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Add books</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	

</head>
<body>

<div class='container'>

<div class="form-group">
	<label for="book_type">Select a book type</label>
		<select class="form-control" id="book_type">
			<option value="hardcover">Hardcover</option>
			<option value="paperback">Paperback</option>
			<option value="digital">Digital</option>
			<option value="audio">Audio</option>
		</select>

</div>

<div id="display_form">

</div>



<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

<script type="text/javascript" src="../view/js/booktype.js"></script>
</body>
</html>
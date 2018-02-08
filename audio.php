<!DOCTYPE html>
<html>
<head>
	<title>Digital book</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<form action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Book title</label>
				<input class="form-control" type="text" name="title">
			</div>
			<div class="form-group">
				<label for="cost">Cost</label>
				<input class="form-control" type="text" name="cost">
			</div>
			<div class="form-group">
				<label for="publ_year">Publication year</label>
				<input class="form-control" type="text" name="publ_year">
			</div>
			<div class="form-group">
				<label for="num_pages">Number of pages</label>
				<input class="form-control" type="text" name="num_pages">
			</div>
			<div class="form-group">
				<label for="book_image">Book image</label>
				<input class="form-control" type="file" name="book_image">
			</div>
			<div class="form-group">
				<label for="file_size">File size</label>
				<input class="form-control" type="text" name="file_size">
			</div>
			<div class="form-group">
				<label for="default_reading_speed">Default reading speed</label>
				<input class="form-control" type="text" name="default_reading_speed">
			</div>
			<div class="form-group">
				<label for="file_format">File format</label>
				<input class="form-control" type="text" name="file_format">
			</div>
			<div class="form-group">
				<label for="file_upload">Upload file</label>
				<input class="form-control" type="file" name="file_upload">
			</div>
			<div class="form-group">
				<label>Author details :</label>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="afname">First name</label>
						<input class="form-control" type="text" name="afname">
					</div>
					<div class="form-group">
						<label for="amob">Mobile number</label>
						<input class="form-control" type="text" name="amob">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="alname">Last name</label>
						<input class="form-control" type="text" name="alname">
					</div>
					<div class="form-group">
						<label for="a_address">Address</label>
						<input class="form-control" type="text" name="a_address">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="aemail">Email id</label>
						<input class="form-control" type="text" name="aemail">
					</div>
					<div class="form-group">
						<label for="adob">Date of birth</label>
						<input class="form-control" type="text" name="adob">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="abooks_count">Total books written</label>
						<input class="form-control" type="text" name="abooks_count">
					</div>
				</div>
				<div class=col-6>
					<div class="form-group">
						<label for="publications">Number of publications</label>
						<input class="form-control" type="text" name="publications">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Editor details :</label>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="efname">First name</label>
						<input class="form-control" type="text" name="efname">
					</div>
					<div class="form-group">
						<label for="emob">Mobile number</label>
						<input class="form-control" type="text" name="emob">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="elname">Last name</label>
						<input class="form-control" type="text" name="elname">
					</div>
					<div class="form-group">
						<label for="eaddress">Address</label>
						<input class="form-control" type="text" name="eaddress">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="e_email">Email id</label>
						<input class="form-control" type="text" name="e_email">
					</div>
					<div class="form-group">
						<label for="edob">Date of birth</label>
						<input class="form-control" type="text" name="edob">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="e_books_count">Total books edited</label>
						<input class="form-control" type="text" name="e_books_count">
					</div>
				</div>
				<div class=col-4>
					<div class="form-group">
						<label for="num_publishers">Number of publishers</label>
						<input class="form-control" type="text" name="num_publishers">
					</div>
				</div>
				<div class=col-4>
					<div class="form-group">
						<label for="books_edited">Books edited</label>
						 <select multiple class="form-control" id="books_edited" name="books_edited">
	        				<option>Sherlock Holmes</option>
					       	<option>Harry Potter</option>
	     				 </select>
					</div>
				</div>
			</div>	
			<div class="form-group">
				<label>Illustrator details :</label>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="ifname">First name</label>
						<input class="form-control" type="text" name="ifname">
					</div>
					<div class="form-group">
						<label for="imob">Mobile number</label>
						<input class="form-control" type="text" name="imob">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="ilname">Last name</label>
						<input class="form-control" type="text" name="ilname">
					</div>
					<div class="form-group">
						<label for="iaddress">Address</label>
						<input class="form-control" type="text" name="iaddress">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="i_email">Email id</label>
						<input class="form-control" type="text" name="i_email">
					</div>
					<div class="form-group">
						<label for="idob">Date of birth</label>
						<input class="form-control" type="text" name="idob">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="i_books_count">Total books illustrated</label>
						<input class="form-control" type="text" name="i_books_count">
					</div>
				</div>
				<div class=col-6>
					<div class="form-group">
						<label for="illustration_tools">Illustration tools</label>
						 <select multiple class="form-control" id="illustration_tools" name="illustration_tools">
	        				<option>Adobe Illustrator</option>
					       	<option>Adobe Photoshop</option>
					        <option>Corel Draw</option>
	     				 </select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Publisher details :</label>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label for="pfname">First name</label>
						<input class="form-control" type="text" name="pfname">
					</div>
					<div class="form-group">
						<label for="pmob">Mobile number</label>
						<input class="form-control" type="text" name="pmob">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="plname">Last name</label>
						<input class="form-control" type="text" name="plname">
					</div>
					<div class="form-group">
						<label for="paddress">Address</label>
						<input class="form-control" type="text" name="paddress">
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="p_email">Email id</label>
						<input class="form-control" type="text" name="p_email">
					</div>
					<div class="form-group">
						<label for="pdob">Date of birth</label>
						<input class="form-control" type="text" name="pdob">
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="p_books_count">Total books published</label>
						<input class="form-control" type="text" name="p_books_count">
					</div>
				</div>
				<div class=col-6>
					<div class="form-group">
						<label for="publ_house">Publication house</label>
						<input class="form-control" type="text" name="publ_house">
					</div>
				</div>
			</div>
			<div class="form-group">
					<input class="btn btn-info btn-block" type="submit" name="submit">
			</div>
		</form>
	</div>

</body>
</html>
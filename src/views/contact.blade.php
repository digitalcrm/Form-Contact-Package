<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body>
	<div class="style2">
		<h1>Contact Us Form</h1>
	</div>
	<div class="style3">
		<form action="{{ route('contact') }}" method="POST" class="style1">
			@csrf

			<div class="form-group">
				<label for="text">Name</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">    
			</div>

			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">    
			</div>

			<div class="form-group">
				<textarea name="message" cols="50" rows="10" placeholder="Enter texts"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>
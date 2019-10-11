<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
	<div class="col-md-9 mb-md-0 mb-5">
		<form action="{{ route('contact') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<div class="md-form mb-0">
					<label for="text">Name</label><br>
					<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">    
				</div>
			</div>
			<div class="col-md-6">
				<div class="md-form mb-0">
					<label for="email">Email address</label><br>
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">    
				</div>
			</div>
			<div class="col-md-6">
				<div class="md-form mb-0">
					<label name="message">Message</label><br>
					<textarea name="message" cols="50" rows="10" placeholder="Enter texts"></textarea>
				</div>
			</div>
			<div class="col-md-6">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title>Contact Detail</title>
</head>

<body>
		<div class="container">
		<h1>Contact Us</h1>

		<form action="{{route('contact')}}" method="post">
			@csrf
				<div class="form-group">
					<lable for="name">Enter Name</lable>
					<input class="form-control" type="text" name="name" placeholder="Enter Your Name"/>
				</div>

				<div class="form-group">
					<lable for="number">Enter Number</lable>
					<input class="form-control" type="number" name="number" placeholder="Enter Your Number"/>
				</div>

				<div class="form-group">
					<label for="point">Enter Your Discussion</label>
					<textarea class="form-control" name="description" placeholder="Enter Your Point here"></textarea>
				</div>

				<div class="form-group">
					<input class="btn-primary" type="submit" value="Submit"/>
				</div>

		</form>
		</div>
</body>
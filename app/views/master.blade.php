<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pet Shop</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h2>Pet Shop <small>Adopt a pet</small></h2>
				@yield('header')
			</div>
			<div class="content">
				@yield('content')
			</div>
			<a href="{{URL::to('/')}}">Show All Pets</a><br>
			<a href="{{URL::to('/dogs')}}">Show only Dogs</a><br>
			<a href="{{URL::to('/orderby')}}">Order by age</a><br>
			
			<div style="width:100%; text-align:center">
				Thanks for visiting!
			</div>
		</div>
		
	</body>
</html>
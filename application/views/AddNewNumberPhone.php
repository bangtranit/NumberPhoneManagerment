<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">  
		<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
	</head>
	<body>

		<?php require('Header_numberphone.php') ?>

		<div class="container-center">
			<h1>Hello, world!</h1>
		</div>

		<div class="div col-sm-8 push-sm-2">
			<div class="form-group">
			<form action="NumberPhoneController/addNewNumberPhone" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input name ="number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input name = "price" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			
		</div>
		</div>
	</body>
</html>
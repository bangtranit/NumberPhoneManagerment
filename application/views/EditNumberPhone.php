<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Edit NumberPhone</title>
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
			<h1>Edit</h1>
		</div>

		<div class="cointainer">
			<div class="row">
				<?php foreach ($detail as $key => $value): ?>
					<div class="div col-sm-8 push-sm-2">
						<div class="form-group">
						<form action="../editNumberPhone" method="post" enctype="multipart/form-data">

							<div class="form-group">
							    <label for="exampleInputEmail1"></label>
							    <input name ="id" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $value['id'] ?>">
						  	</div>

						 	 <div class="form-group">
							    <label for="exampleInputEmail1">Number phone</label>
							    <input name ="number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $value['number'] ?>">
						 	</div>
						  
						  	<div class="form-group">
							    <label for="exampleInputPassword1">Price</label>
							    <input name = "price" type="text" class="form-control" id="exampleInputPassword1" placeholder="price" value="<?php echo $value['price'] ?>">
						  	</div>
						  <button type="submit" class="btn btn-primary">Edit</button>
						</form>
						
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</body>
</html>
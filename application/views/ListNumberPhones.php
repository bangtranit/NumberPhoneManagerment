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

		<div class="container">
			<div class="row">
				<?php foreach ($numberphones as $key => $value): ?>
					<div class="col-sm-4">
						<div class="card card-block">
							<h4 class="card-title">Number <?php echo $value['number'] ?></h4>
							<p class="number">Price <?php echo $value['price'] ?></p>
							<p class="number">ID <?php echo $value['id'] ?></p>
							<a href="ListNumberPhoneController/delete/<?= $value['id'] ?>">Delete</a>

							<!-- <button type="submit" id="button1" name="button1" formaction='@Url.Action("delete", "ListNumberPhoneController")'>Delete</button> -->

							<!-- <button type="button" class="btn btn-outline-danger" onclick="location.href='Url.Action("delete", "ListNumberPhoneController")'">
								Delete
							</button> -->

							 <!-- <button type="button" onclick="location.href='@Url.Action("MyAction", "MyController")'" ></button> -->



						</div>
					</div>
				<?php endforeach ?>
			</div>
			<button type="button" class="btn btn-outline-primary" onclick="location.href='<?php echo base_url(); ?>/index.php/NumberPhoneController'">Add new number phone</button> 
		</div>
	</body>
</html>
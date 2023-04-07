<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="assets/boot_Min_boot_Js/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

	<div class="container container-fluid">
		<div class="col-md-12">
			<div class="d-grid gap-2 mx-auto">
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#signInModal" type="button">Sign In</button>
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addEmployeeModal" type="button">Singn Up</button>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<?php include 'views/includes/user_modal_signIn.php' ?>
	<?php include 'views/includes/user_modal_add.php' ?>

	<!-- Pour index -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/boot_Min_boot_Js/bootstrap.min.js"></script>
	<!-- <script src="assets/js/bootstrap.min.js"></script> -->
	<script src="assets/js/scripts.js"></script>
</body>
</html>    
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<!-- Les link -->
	<?php include 'includes/link.php' ?>

</head>
<body>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Users</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-user-plus"></i><span>Add New User</span></a>
						<!-- <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="fa fa-trash"></i><span>Delete</span></a>						 -->
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover" id="uer_data">
                <thead>
                    <tr>
						<th>SL NO</th>
						<!-- <th><i class="bi bi-person bi-10x"></i></th> -->
                        <th>NAME</th>
                        <th>EMAIL</th>
						<th>PHONE</th>
                        <th>CITY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
				<tbody class="table" id="table">
                    <!-- body table -->
				</tbody>
			</table>

			
        </div>
    </div>
	
	<!-- Les modals -->
	<?php 
		include 'includes/user_modal_add.php'; 
		include 'includes/user_modal_edit.php';
		include 'includes/user_modal_delete.php' 
	?>

	<!-- Scripts -->
	<?php include 'includes/script.php' ?>
</body>
</html>                                		                            
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="update_form">
				<div class="modal-header">						
					<h4 class="modal-title">Edit User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<input type="hidden" id="id_u" name="id_u" class="form-control">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" id="name_u" name="name_u" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" id="email_u" name="email_u" class="form-control">
					</div>
					<div class="form-group">
						<label>PHONE</label>
						<input type="phone" id="phone_u" name="phone_u" class="form-control">
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="city" id="city_u" name="city_u" class="form-control">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="hidden" value="2" name="type">
					<!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->
					<button type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"><i class="fa fa-close"></i> Cancel</button>
					<button type="button" class="btn btn-info" id="update"><i class="fa fa-save"></i> Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Add Modal HTML -->
<div id="signInModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="user_form">
				<div class="modal-header">						
					<h4 class="modal-title">Sign In User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>NAME</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>EMAIL</label>
						<input type="email" id="email" name="email" class="form-control">
					</div>			
				</div>
				<div class="modal-footer">
					<!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->
					<button type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"><i class="fa fa-close"></i> Cancel</button>
					<button type="button" class="btn btn-success" id="sign-in"><i class="fa fa-plus"></i> Sign In</button>
				</div>
			</form>
		</div>
	</div>
</div>

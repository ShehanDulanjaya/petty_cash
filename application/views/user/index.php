<div class="animated">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<strong class="card-title">Users List</strong>
				</div>
				<div class="card-body">
					<button class="btn btn-success pull-right" onclick="add_user()" ><i class="glyphicon glyphicon-plus"></i> Add User</button>
					<br />
					<br />
					<table id="users-list" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Full Name</th>
								<th>Email</th>
								<th>Date of Birth</th>
								<th>Phone Number</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
	        				<?php foreach($users as $user){?>
					     		<tr>
									<td><?php echo $user->id;?></td>
									<td><?php echo $user->full_name;?></td>
									<td><?php echo $user->email;?></td>
									<td><?php echo $user->date_of_birth;?></td>
									<td><?php echo $user->phone_number;?></td>
									<td>
										<?php if (in_array('user_view', $this->session->userdata('permissions'))) { ?>
											<button class="btn btn-info" onclick="view_user(<?php echo $user->id;?>)"><i class="fa fa-file-text-o"></i></button>
										<?php } ?>
										<?php if (in_array('user_edit', $this->session->userdata('permissions'))) { ?>
											<button class="btn btn-warning" onclick="edit_user(<?php echo $user->id;?>)"><i class="fa fa-edit"></i></button>
										<?php } ?>
										<?php if (in_array('user_delete', $this->session->userdata('permissions'))) { ?>
											<button class="btn btn-danger" onclick="delete_user(<?php echo $user->id;?>)"><i class="fa fa-trash-o"></i></button>
										<?php } ?>
									</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap modal -->
<div class="modal fade show" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">User Form</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body form">
				<form action="#" id="form" class="form-horizontal">
					<input type="hidden" value="" name="id"/>
					<div class="form-body">
						<div class="row form-group">
							<label class="control-label col-md-3">User Role</label>
							<div class="col col-md-9">
								<select name="user_role" class="form-control" id="role">
									<?php 
										foreach ($roles as $row) {
									?>
										<option value="<?= $row->id ?>"><?= $row->name ?></option>
									<?php
										}
									?>
								</select>
							</div>
						</div>
						<input name="user-id" id="user-id" hidden/>
						<div class="row form-group">
							<label class="control-label col-md-3">Full Name</label>
							<div class="col col-md-9">
								<input name="full_name" placeholder="Full Name" class="form-control" type="text">
							</div>
						</div>
						<div class="row form-group">
							<label class="control-label col-md-3">Email</label>
							<div class="col col-md-9">
								<input name="email" placeholder="Email ID" class="form-control" type="text">
							</div>
						</div>
						<div class="row form-group">
							<label class="control-label col-md-3">Password</label>
							<div class="col col-md-9">
								<input name="password" placeholder="Password" class="form-control" type="text">
							</div>
						</div>
						<div class="row form-group">
							<label class="control-label col-md-3">Date of Birth</label>
							<div class="col col-md-9">
								<input name="date_of_birth" placeholder="Date of Birth" class="form-control" type="text">
							</div>
						</div>
						<div class="row form-group">
							<label class="control-label col-md-3">Phone Number</label>
							<div class="col col-md-9">
								<input name="phone_number" placeholder="Phone Number" class="form-control" type="text">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
<div class="sufee-login d-flex align-content-center flex-wrap">
	        <div class="container">
            <div class="col-sm-12">
            <?php
                $message = '';
                $message_type = '';
                $msg_highlight = '';
                if($this->session->flashdata('error_msg')){
                    $message = $this->session->flashdata('error_msg');
                    $message_type = 'danger';
                    $msg_highlight = 'Warning';
                }else if($this->session->flashdata('success_msg')){
                    $message = $this->session->flashdata('success_msg');
                    $message_type = 'success';
                    $msg_highlight = 'Success';
                }   
            ?>
                <div class="alert  alert-<?= $message_type ?> alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-<?= $message_type ?>"><?= $msg_highlight ?></span> <?= $message ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
	            <div class="login-content">
	                <div class="login-form">
                        <form method="post" action="<?php echo base_url('user/add'); ?>">
                            <div class="form-group">
                                <label>User Role</label>
                                <select name="user_role" class="form-control">
                                    <?php 
                                        foreach ($roles as $row) {
                                    ?>
                                        <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
	                        <div class="form-group">
	                            <label>User Name</label>
	                            <input type="text" class="form-control" placeholder="User Name" name="full_name">
	                        </div>
	                        <div class="form-group">
	                            <label>Email address</label>
	                            <input type="email" class="form-control" placeholder="Email" name="email">
	                        </div>
	                        <div class="form-group">
	                            <label>Password</label>
	                            <input type="password" class="form-control" placeholder="Password" name="password">
	                        </div>
	                         <div class="form-group">
								<input class="form-control" placeholder="Date of Birth" name="date_of_birth" type="date" value="">
							</div> 
	                        <div class="form-group">
	                        	<label>Mobile Number</label>
								<input class="form-control" placeholder="Mobile No" name="phone_number" type="text" value="">
							</div>	                   
                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Add User</button>
                            
							<?php echo validation_errors(); ?>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
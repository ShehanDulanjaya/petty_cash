<!-- Bootstrap modal -->
<div class="modal fade show" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Transition the Request</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body form">
				<form action="#" id="transition_form" class="form-horizontal">
					<input type="hidden" id="trans_req_id" name="trans_req_id"/>
					<div class="form-body">
						<div class="row form-group">
							<label class="control-label col-md-3">Current Status</label>
							<div class="col col-md-9">
								<?php echo $current_status; ?>
							</div>
						</div>
						<div class="row form-group">
							<label class="control-label col-md-3">Status</label>
							<div class="col col-md-9">
								<select name="status" placeholder="Status" class="form-control">
									<option value="reject">Reject</option>
									<option value="approve">Approve</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="transition_request()" class="btn btn-primary">Transition</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<script type="text/javascript">
	function transition_request(requestId) {
		formEl = $('#transition_form');
		var formData = $(formEl).serialize();
		$.ajax({
			url : '<?php echo site_url('/request/transitOperation')?>',
			type: "POST",
			data: formData,
			dataType: "JSON",
			success: function(data)
			{
				
				location.reload();// for reload a page
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
			
				alert('Error in Request Submission.');
			}
		});
	}
</script>
<div class="animated">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<strong class="card-title">Requests List <?php print_r($this->session->userdata('role')) ?></strong>
				</div>
				<div class="card-body">
					<table id="request-list" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th style="width: 120px;">Request Date</th>
								<th>Item</th>
								<th>Details</th>
								<th>Quantity</th>
								<th>Unit Cost</th>
								<th>Total Cost</th>
								<th>Status</th>
								<th>Settle Ammount</th>
								<th style="width: 160px;">Actions</th>
							</tr>
						</thead>
						<tbody>
	        				<?php foreach($requests as $request){?>
					     		<tr>
					     			<td><?php echo $request->id;?></td>
					     			<td><?php echo $request->request_date;?></td>
									<td><?php echo $request->title;?></td>
									<td><?php echo $request->details;?></td>
									<td><?php echo $request->quantity;?></td>
									<td><?php echo $request->cost_per_unit;?></td>
									<td><?php echo $request->total_cost;?></td>
									<td><?php echo $request->workflow_status;?></td>
									<td><?php echo $request->settle_ammount;?></td>
									<td>
										<?php if (in_array('request_transition', $this->session->userdata('permissions'))) { ?>
											<button class="btn btn-sm btn-info" onclick="transition_request(<?php echo $request->id;?>)">
												<i class="fa fa-exchange" aria-hidden="true"></i>
											</button>
										<?php } ?>
										<!-- <?php if (in_array('request_view', $this->session->userdata('permissions'))) { ?>
											<button class="btn btn-sm btn-info" onclick="view_request(<?php echo $request->id;?>)"><i class="fa fa-file-text-o"></i></button>
										<?php } ?> -->
										<?php if (in_array('request_edit', $this->session->userdata('permissions'))) { ?>
											<button class="btn btn-sm btn-warning" onclick="edit_request(<?php echo $request->id;?>, '<?php $segments = $this->uri->segment_array(); echo end($segments); ?>')"><i class="fa fa-edit"></i></button>
										<?php } ?>
										<?php if (in_array('request_delete', $this->session->userdata('permissions'))) { ?>
											<button class="btn btn-sm btn-danger" onclick="delete_request(<?php echo $request->id;?>, '<?php $segments = $this->uri->segment_array(); echo end($segments); ?>')"><i class="fa fa-trash-o"></i></button>
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

<script type="text/javascript">
	function view_request(requestId) {		
		$('.page-loader').show();
		$.ajax({
			url : '<?php echo site_url('/request/view_ajax')?>/'+ requestId,
			type: "GET",
			success: function(data)
			{
				$('.page-loader').hide();
				$('.modal-container').empty();
				$('.modal-container').html(data);
				$('.modal', '.modal-container').modal('show');
				location.reload();// for reload a page
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				$('.page-loader').hide();
				alert('Error in Request Submission.');
			}
		});
	}

	function edit_request(requestId, page) {
		console.log('New Edit');
		var url = 'request/';
		var type = '';
		 if(page==='my_requests'||page==='submitted')
		 {
         	url += 'edit_ajax';
         }else if(page==='new' || page==='unsubmitted'){
         	url += 'edit_unsubmitted_ajax';
         }    
		$('.page-loader').show();
        $.ajax({
            url : '<?php echo site_url()?>'+url+'/'+requestId+'?type='+page,
            type: "GET",
            success: function(data)
            {
                $('.page-loader').hide();
                $('.modal-container').empty();
                $('.modal-container').html(data);
                $('.modal', '.modal-container').modal('show');
                //location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('.page-loader').hide();
                alert('Error in Request Submission.');
            }
        });
	}

	function delete_request(requestId, type) {		
		$('.page-loader').show();
		$.ajax({
			url : '<?php echo site_url('/request/delete')?>/'+ requestId +'?type=' + type,
			type: "GET",
			success: function(data)
			{
				location.reload();// for reload a page
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				$('.page-loader').hide();
				alert('Error in Request Submission.');
			}
		});
	}

	function transition_request(requestId) {		
		$('.page-loader').show();
		$.ajax({
			url : '<?php echo site_url('/request/transition_ajax')?>/'+ requestId,
			type: "GET",
			success: function(data)
			{
				$('.page-loader').hide();
				$('.modal-container').empty();
				$('.modal-container').html(data);
				$('.modal', '.modal-container').modal('show');
				$('#trans_req_id').val(requestId);
				//location.reload();// for reload a page
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				$('.page-loader').hide();
				alert('Error in Request Submission.');
			}
		});
	}

	function update_total_price() {
		var quantity = $('input[name="quantity"]', '#requestForm').val();
		var cost_per_unit = $('input[name="cost_per_unit"]', '#requestForm').val();
		var total = quantity * cost_per_unit;
		if(total >0)
			$('input[name="total_cost"]', '#requestForm').val(total);
		else
			$('input[name="total_cost"]', '#requestForm').val(0);
	}

	function saveForm(type){
		var object = $("#requestFormEdit").serialize();
		var url = "<?= base_url() ?>request/update?type=unsubmitted";
		if(type=='my_requests'){
			url = "<?= base_url() ?>request/update?type=submitted";
		}
		console.log(object);
		$.ajax({
			type: "POST",
			url: url,
			data: object,
			dataType: "json",
			success: function (response) {
				if(response.status){
					location.reload();
				}
			},
			error: function(e){
				console.log(e);
			}
		});
		
	}

</script>
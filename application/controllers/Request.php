<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Hameedullah Pardess <hameedullah.pardess@gmail.com>
*
*/

class Request extends CI_Controller {
 
	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('isLoggedIn')) {
			redirect('login');
		}

		$this->load->model('request_model');
		$this->load->model('drafted_request_model');
		$this->load->model('request_transition_model');
	}

	public function index()
	{
		$view_data['requests']=$this->request_model->get_all();

		$data['css'] = $this->load->view('request/index_css', '', true);;
		$data['js'] = $this->load->view('request/index_js', '', true);;
		$data['breadcrumbs'] = $this->load->view('request/index_breadcrumb', '', true);
		$data['content'] = $this->load->view('request/index', $view_data, true);
		$this->load->view('default_layout', $data);
	}

	public function list($type)
	{
		$view_data = array();
		if ($type == 'unsubmitted') {
			$view_data['requests']=$this->drafted_request_model->get_by_user($this->session->userdata('user_id'));
		} else if ($type == 'my_requests') {
			$view_data['requests']=$this->request_model->get_by_user($this->session->userdata('user_id'));
		} else if ($type == 'submitted') {
			$view_data['requests']=$this->request_model->get_by_status($type);
		} else if ($type == 'rejected') {
			$view_data['requests']=$this->request_model->get_by_status($type);
		}  else if ($type == 'approved') {
			$view_data['requests']=$this->request_model->get_by_status($type);
		} else {
			$view_data['requests']=$this->request_model->get_all();
		}

		$data['css'] = $this->load->view('request/index_css', '', true);;
		$data['js'] = $this->load->view('request/index_js', $type, true);;
		$data['breadcrumbs'] = $this->load->view('request/index_breadcrumb', '', true);
		$data['content'] = $this->load->view('request/index', $view_data, true);
		$this->load->view('default_layout', $data);
	}

	public function new()
	{
		$view_data['drafted_requests']=$this->drafted_request_model->get_by_user($this->session->userdata('user_id'));

		$data['css'] = $this->load->view('request/index_css', '', true);;
		$data['js'] = $this->load->view('request/index_js', '', true);;
		$data['breadcrumbs'] = $this->load->view('request/index_breadcrumb', '', true);
		$data['content'] = $this->load->view('request/new_view', $view_data, true);
		$this->load->view('default_layout', $data);
	}

	public function create()
	{
		$data = array(
				'request_date' => $this->input->post('request_date'),
				'title' => $this->input->post('title'),
				'details' => $this->input->post('details'),
				'quantity' => $this->input->post('quantity'),
				'cost_per_unit' => $this->input->post('cost_per_unit'),
				'total_cost' => (double)$this->input->post('quantity') * (double)$this->input->post('cost_per_unit'),
				'user_id' => $this->session->userdata('user_id'),
				'project_code'=>$this->input->post('project_code')
			);

		//save it as draft
		$insert = $this->drafted_request_model->create($data);
		echo json_encode(array("status" => TRUE));
	}

	// submit the request from draft to be processed by next authority
	public function submit($request_id)
	{
		$draft_request = $this->drafted_request_model->get_by_id($request_id);
		$data = array(
				'request_date' => $draft_request->request_date,
				'title' => $draft_request->title,
				'details' => $draft_request->details,
				'quantity' => $draft_request->quantity,
				'cost_per_unit' => $draft_request->cost_per_unit,
				'total_cost' => $draft_request->cost_per_unit,
				'workflow_status' => 'Submitted',
				'user_id' => $draft_request->user_id
			);

		$this->drafted_request_model->delete_by_id($request_id);

		//save it as actual request
		$insert = $this->request_model->create($data);
		echo json_encode(array("status" => TRUE));
	}

	public function submitAll(){
		$draft_request = $this->drafted_request_model->get_by_user($this->session->userdata('user_id'));
		$data_set = array();

		foreach ($draft_request as $row) {
			$data = array(
				'request_date' => $row->request_date,
				'title' => $row->title,
				'details' => $row->details,
				'quantity' => $row->quantity,
				'cost_per_unit' => $row->cost_per_unit,
				'total_cost' => $row->cost_per_unit,
				'workflow_status' => 'Submitted',
				'user_id' => $row->user_id
			);
			
			$data_set[] = $data;
		}
		$this->drafted_request_model->delete_by_user_id($this->session->userdata('user_id'));
		foreach ($data_set as $value){ 
			$this->request_model->create($value);
		}
		echo json_encode(array("status" => TRUE));
	}

	public function view_ajax($request_id)
	{
		$data['request'] = $this->request_model->get_by_id($request_id);
		
		echo $this->load->view('request/view_ajax_view', $data, true);
	}

	public function edit_unsubmitted_ajax($request_id)
	{
		$data['request'] = $this->drafted_request_model->get_by_id($request_id);
		$data['type'] = $_GET["type"];
		echo $this->load->view('request/edit_ajax_view', $data, true);
	}

	// edit the request aftr submission
	public function edit_ajax($request_id)
	{
		$data['request'] = $this->request_model->get_by_id($request_id);
		$data['type'] = $_GET["type"];
		echo $this->load->view('request/edit_ajax_view', $data, true);
	}

	public function delete_request($request_id)
	{
		if($_GET["type"]=="unsubmitted" || $_GET["type"]=="new"){
			$this->request_model->delete_by_id($request_id);
		}else{
			$this->drafted_request_model->delete_by_id($request_id);
		}
		
		echo json_encode(array("status" => TRUE));
	}

	public function transition_ajax($request_id)
	{
		$data['current_status'] = $this->request_model->get_by_id($request_id)->workflow_status;
		$data['transitions'] = $this->request_transition_model->get_by_request($request_id);
		echo $this->load->view('request/transition_ajax_view', $data, true);
	}
 
	public function update()
	{
		$data = array(
			'request_date' => $this->input->post('request_date'),
			'title' => $this->input->post('title'),
			'details' => $this->input->post('details'),
			'quantity' => $this->input->post('quantity'),
			'total_cost' => (double)$this->input->post('quantity') * (double)$this->input->post('cost_per_unit'),
			'cost_per_unit' => $this->input->post('cost_per_unit'),
		);

		// $insert = 
		if($_GET["type"]=="submitted"){
			$this->request_model->update($this->input->post('id'), $data);
		}else{
			$this->drafted_request_model->update($this->input->post('id'), $data);
		}
		//save it as draft
		// $insert = '';
		// if($_GET["type"]=='submitted'){
		// 	$insert = $this->request_model-->update($this->input->post('id'), $data);
		// }else{
			
		// }
		
		echo json_encode(array("status" => TRUE));
	}


	public function delete($id){
		$result = $this->request_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	public function deleteDrafted($id){
		$result = $this->drafted_request_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	public function updateRequest()
	{
		$data = array(
			'request_date' => $this->input->post('request_date'),
			'title' => $this->input->post('title'),
			'details' => $this->input->post('details'),
			'quantity' => $this->input->post('quantity'),
			'total_cost' => (double)$this->input->post('quantity') * (double)$this->input->post('cost_per_unit'),
			'cost_per_unit' => $this->input->post('cost_per_unit'),
		);

		//save it as draft
		$insert = $this->drafted_request_model->update($this->input->post('id'), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function transitOperation(){
		$request_id = $this->input->post('trans_req_id');
		$operation = $this->input->post('status');
		$settle_ammount = $this->input->post('settle_ammount');
		$status = '';
		$request = $this->request_model->get_by_id($request_id);

		if($operation == 'reject'){
			$status = 'rejected';
		}else{
			$status = 'approved';
		}
		
		// while($row = mysqli_fetch_assoc($request)){
		// 	print_r($row);
		// }
		$request->workflow_status = $status;
		$request->settle_ammount = $settle_ammount;
		$this->request_model->update($request_id ,$request);
	
		echo json_encode(array("status" => TRUE));
	}
}
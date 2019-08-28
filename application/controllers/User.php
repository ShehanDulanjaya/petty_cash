<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Hameedullah Pardess <hameedullah.pardess@gmail.com>
*
*/

class User extends CI_Controller {
 
	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('isLoggedIn')) {
			redirect('login');
		}

		$this->load->model('user_model');
		$this->load->model('role_model');
		$this->load->model('user_has_role');

	}

	public function index()
	{
		$view_data['users']=$this->user_model->get_all();
		$view_data['roles'] = $this->role_model->get_all();

		$this->db->select('user.full_name, user.email, user.date_of_birth, user.phone_number, user_has_role.role_id');
		$this->db->from('user');
		$this->db->join('user_has_role','user_has_role.user_id= user.id','inner');
		$query=$this->db->get();

		$data['css'] = $this->load->view('user/index_css', '', true);;
		$data['js'] = $this->load->view('user/index_js', '', true);;
		$data['breadcrumbs'] = $this->load->view('user/index_breadcrumb', '', true);
		$data['content'] = $this->load->view('user/index', $view_data, true);
		$this->load->view('default_layout', $data);
	}

	public function register_user(){

		$user=array(
			'full_name'=>$this->input->post('full_name'),
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password')),
			'date_of_birth'=>$this->input->post('date_of_birth'),
			'phone_number'=>$this->input->post('phone_number')
		);
		print_r($user);

		$email_check=$this->user_model->email_check($user['email']);

		if($email_check){
			$this->user_model->register_user($user);
			$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
			redirect('user/login');

		}
		else{

			$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
			redirect('user');
		}

	}

	public function login(){

		$this->load->view("user/login.php");

	}

	function login_user(){
		$user_login=array(
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password'))
		);

		$data=$this->user_model->login_user($user_login['email'],$user_login['password']);
		if($data)
		{
			
			$this->session->set_userdata('id',1);
			$this->session->set_userdata('user_id',1);
			$this->session->set_userdata('email',$data['email']);
			$this->session->set_userdata('full_name',$data['full_name']);
			$this->session->set_userdata('date_of_birth',$data['date_of_birth']);
			$this->session->set_userdata('phone_number',$data['phone_number']);
			$this->session->set_userdata('isLoggedIn', 1);

			redirect('welcome', 'refresh');
			//$this->load->view('welcome_message.php');

		}
		else{
			$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
			$this->load->view("user/login.php");

		}


	}

	function user_profile(){

		$this->load->view('user/user_profile.php');

	}

	public function user_logout(){

		$this->session->sess_destroy();
		redirect('user/login', 'refresh');
	}

// ========================================================

	// public function index()
	// {

	// 	$data['users']=$this->user_model->get_all();
	// 	$this->load->view('view',$data);
	// }


	public function add()
	{
		$userData = array(
				'full_name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'password'=>md5($this->input->post('password')),
				'date_of_birth' => $this->input->post('date_of_birth'),
				'phone_number' => $this->input->post('phone_number'),
			);

		$roleData = array(
			'role_id' => $this->input->post('user_role')
		);
		

		$email_check=$this->user_model->email_check($userData['email']);

		if($email_check){
			$user_result = $this->user_model->add($userData);
			$roleData = array(
				'role_id' => $this->input->post('user_role'),
				'user_id' => $user_result
			);
			$this->user_has_role->create($roleData);
			echo json_encode(array("status" => TRUE));
		}
		else{
			echo json_encode(array("status" => false));
		}
		//redirect('user');
	}

	public function edit_ajax($id)
	{
		$this->db->select('user.full_name, user.email, user.date_of_birth, user.phone_number, user_has_role.role_id');
		$this->db->from('user');
		$this->db->join('user_has_role','user_has_role.user_id= user.id','inner');
		$this->db->where('user.id', $id);
		$query=$this->db->get();
		$data=$query->result_array();

		echo json_encode($data[0]);

		// $data = $this->user_model->get_by_id($id);

		// echo json_encode($data);
	}
 
	public function update()
	{
		$data = array(
				'full_name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'date_of_birth' => $this->input->post('date_of_birth'),
				'phone_number' => $this->input->post('phone_number'),
			);
		$roleData = array(
			'role_id' => $this->input->post('user_role'),
			'user_id' => $this->input->post('user-id')
		);
		$this->user_has_role->update(array('user_id' => $this->input->post('user-id')), $roleData);
		$this->user_model->update(array('id' => $this->input->post('user-id')), $data);
		echo json_encode(array("status" => TRUE));
	}
 
	public function delete($id)
	{
		$this->user_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
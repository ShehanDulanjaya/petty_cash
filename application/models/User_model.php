<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Hameedullah Pardess <hameedullah.pardess@gmail.com>
*
*/

class User_model extends CI_model{

	public $table = 'user';

	public function register_user($user){
		//$this->load->database();  
		
		$this->db->insert('user', $user);
	}

	public function login_user($email,$pass){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$email);
		$this->db->where('password',$pass);

		if($query=$this->db->get())
		{
			log_message('DEBUG', 'User_model>login_user(): ' . $this->db->last_query());
			return $query->row_array();
		}
		else{
			return false;
		}
	}
	public function email_check($email){

		// $this->db->select('*');
		// $this->db->from('user');
		// $this->db->where('email',$email);
		// $query=$this->db->get();

		$this->db->where('email',$email);
		$query = $this->db->get('user');

		log_message('DEBUG', 'User_model>email_check(): ' . $this->db->last_query());

		if($query->num_rows()>0){
			return false;
		}else{
			return true;
		}

	}


// ============================================

	public function get_all()
	{
		$this->db->from($this->table);
		$query=$this->db->get();
		log_message('DEBUG', 'User_model>get_all(): ' . $this->db->last_query());
		return $query->result();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
 		log_message('DEBUG', 'User_model>get_by_id(): ' . $this->db->last_query());
		return $query->row();
	}

	public function add($data)
	{
		$this->db->insert($this->table, $data);
		$result = $this->db->insert_id();
		log_message('DEBUG', 'User_model>add(): ' . $this->db->last_query());
		return $result;
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		$result = $this->db->affected_rows();
		log_message('DEBUG', 'User_model>update(): ' . $this->db->last_query());
		return $result;
	}
 
	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
		log_message('DEBUG', 'User_model>delete_by_id(): ' . $this->db->last_query());
	}

	public function getUserRoll($id){
		$this->db->select('role.name');
		$this->db->from('user_has_role');
		$this->db->join('role', 'user_has_role.role_id=role.id','inner');
		$this->db->where('user_has_role.user_id', $id);
		return $this->db->get();
	}

}
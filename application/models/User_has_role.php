<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Hameedullah Pardess <hameedullah.pardess@gmail.com>
*
*/

class User_has_role extends CI_model{

	public $table = 'user_has_role';
	
	public function get_all()
	{
		$this->db->from($this->table);
		$query=$this->db->get();
		log_message('DEBUG', 'Request_model>get_all(): ' . $this->db->last_query());
		return $query->result();
	}

	public function get_by_role_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('role_id',$id);
		$query = $this->db->get();
 		log_message('DEBUG', 'Request_model>get_by_id(): ' . $this->db->last_query());
		return $query->row();
	}


	public function get_by_user_id($user_id)
	{
		$this->db->from($this->table);
		$this->db->where('user_id',$user_id);
		$query=$this->db->get();
		log_message('DEBUG', 'Request_model>get_all(): ' . $this->db->last_query());
		return $query->result();
	}

	public function create($data)
	{
		$this->db->insert($this->table, $data);
		$result = $this->db->insert_id();
		log_message('DEBUG', 'Request_model>add(): ' . $this->db->last_query());
		return $result;
	}

	public function delete_by_user_id($user_id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete($this->table);
		log_message('DEBUG', 'Request_model>delete_by_id(): ' . $this->db->last_query());
    }
    
    public function delete_by_role_id($role_id)
	{
		$this->db->where('role_id', $id);
		$this->db->delete($this->table);
		log_message('DEBUG', 'Request_model>delete_by_id(): ' . $this->db->last_query());
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		$result = $this->db->affected_rows();
		log_message('DEBUG', 'Request_model>update(): ' . $this->db->last_query());
		return $result;
	}

}
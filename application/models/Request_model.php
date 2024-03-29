<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Hameedullah Pardess <hameedullah.pardess@gmail.com>
*
*/

class Request_model extends CI_model{

	public $table = 'request';
	
	public function get_all()
	{
		$this->db->from($this->table);
		$query=$this->db->get();
		log_message('DEBUG', 'Request_model>get_all(): ' . $this->db->last_query());
		return $query->result();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
 		log_message('DEBUG', 'Request_model>get_by_id(): ' . $this->db->last_query());
		return $query->row();
	}

	public function get_by_status($status)
	{
		$this->db->from($this->table);
		$this->db->where('lower(workflow_status)',$status);
		$query = $this->db->get();
 		log_message('DEBUG', 'Request_model>get_by_id(): ' . $this->db->last_query());
		return $query->result();
	}

	public function get_by_user($user_id)
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

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
		log_message('DEBUG', 'Request_model>delete_by_id(): ' . $this->db->last_query());
	}

	public function get_all_with_permissions()
	{
		$this->db->select('role.id, role.name, group_concat(permission.name order by permission.name SEPARATOR \', \') as permissions');
		$this->db->from($this->table);
		$this->db->join('role_has_permission', 'role_has_permission.role_id=role.id', 'inner');
		$this->db->join('permission', 'permission.id=role_has_permission.permission_id', 'inner');
		$this->db->group_by('role.id');
		$query=$this->db->get();
		log_message('DEBUG', 'Request_model>get_all_with_permissions(): ' . $this->db->last_query());
		return $query->result();
	}


	public function update($where, $data)
	{
		$this->db->where('id', $where);
    	$result = $this->db->update($this->table, $data);
		log_message('DEBUG', 'Request_model>update(): ' . $this->db->last_query());
		return $result;
	}
 
}
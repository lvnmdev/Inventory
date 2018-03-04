<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerAcc extends CI_Model {
    public function __construct(){
		parent::__construct();
	}

	public function isAccountExist($data){
		$this->db->select('*');
		$this->db->from('tblcustomers');
		$this->db->where('custusername', $data['username']);
		$this->db->where('custpassword', $data['password']);

		$result[0] =  $this->db->get();
		
		if($result[0]->num_rows() == 1){
			$result[0] = $result[0]->row();
			$result[1] = true;
			return $result;
		}else{
			$result[1] = false;
			return $result;
		}
	}

	public function create($table, $data){
	    return $this->db->insert($table, $data);
	}

	// public function read($data = null){
	// 	if($data != null){
	// 		return $this->db->select('*')->from('tblaccounts')->where('schoolid', $data)->get()->result();
	// 	}

	// 	return $this->db->select('*')->from('tblaccounts')->get()->result(); 
	// }	

	// public function update(){

	// }

	// public function delete(){

	// }
}
?>
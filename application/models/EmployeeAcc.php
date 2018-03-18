<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeAcc extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public $title;
	public $password;

	// public function isAccountExist($data){
	// 	$this->db->select('*');
	// 	$this->db->from('tblaccounts');
	// 	$this->db->where('', $data['username']);
	// 	$this->db->where('password', $data['password']);

	// 	$result[0] =  $this->db->get();
		
	// 	if($result[0]->num_rows() == 1){
	// 		$result[0] = $result[0]->row();
	// 		$result[1] = true;
	// 		return $result;
	// 	}else{
	// 		$result[1] = false;
	// 		return $result;
	// 	}
	// }

// 	AJAX STARTS HERE
	//Show
	public function showAllEmployee(){
		$query = $this->db->get('tblemployee');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function editEmployee(){
		$id = $this->input->get('id');
		$this->db->where('empid', $id);
		$query = $this->db->get('tblemployee');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function updateEmployee(){
		$id = $this->input->post('txtId');
		$field = array(
			'empid'			=>$this->security->xss_clean($this->input->post('txtEmployeeID')),
			'empfname'		=>$this->security->xss_clean($this->input->post('txtEmployeeFirstName')),
			'empmname'		=>$this->security->xss_clean($this->input->post('txtEmployeeMiddleName')),
			'emplname'		=>$this->security->xss_clean($this->input->post('txtEmployeeLastName')),
			'empemail'		=>$this->security->xss_clean($this->input->post('txtEmployeeEmail')),
			'emppassword'	=>$this->security->xss_clean($this->input->post('txtEmployeePassword')),
			'empsex'		=>$this->security->xss_clean($this->input->post('txtEmployeeSex')),
			'empposition'	=>$this->security->xss_clean($this->input->post('txtEmployeePosition')),
		);
		if($field['empsex'] && $field['empposition'] != null){
			$this->db->where('empid', $id);
			$this->db->update('tblemployee', $field);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}
	}

	public function addEmployee(){
		$field = array(
			'empid'			=>$this->security->xss_clean($this->input->post('txtEmployeeID')),
			'empfname'		=>$this->security->xss_clean($this->input->post('txtEmployeeFirstName')),
			'empmname'		=>$this->security->xss_clean($this->input->post('txtEmployeeMiddleName')),
			'emplname'		=>$this->security->xss_clean($this->input->post('txtEmployeeLastName')),
			'empemail'		=>$this->security->xss_clean($this->input->post('txtEmployeeEmail')),
			'emppassword'	=>$this->security->xss_clean($this->input->post('txtEmployeePassword')),
			'empsex'		=>$this->security->xss_clean($this->input->post('txtEmployeeSex')),
			'empposition'	=>$this->security->xss_clean($this->input->post('txtEmployeePosition')),
		);
		if($field['empsex'] && $field['empposition'] != null){
			$this->db->insert('tblemployee', $field);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}
	}

	public function deleteEmployee(){
		$id = $this->input->get('id');
		$this->db->where('empid', $id);
		$this->db->delete('tblemployee');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
// 	AJAX ENDS HERE

}
?>
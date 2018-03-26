<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeAcc extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

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
			'username'		=>$this->security->xss_clean($this->input->post('txtEmployeeUsername')),
			'empfname'		=>$this->security->xss_clean($this->input->post('txtEmployeeFirstName')),
			'empmname'		=>$this->security->xss_clean($this->input->post('txtEmployeeMiddleName')),
			'emplname'		=>$this->security->xss_clean($this->input->post('txtEmployeeLastName')),
			'empemail'		=>$this->security->xss_clean($this->input->post('txtEmployeeEmail')),
			'empsex'		=>$this->security->xss_clean($this->input->post('txtEmployeeSex')),
			'empposition'	=>$this->security->xss_clean($this->input->post('txtEmployeePosition'))
		);
		
		$field2 = array(
				'username' => $this->input->post('txtEmployeeUsername'),
				'userpass' => $this->input->post('txtEmployeePassword'),
				'usertype' => 'Employee'
		);

		if(($field['empsex'] != null && $field['empposition'] != null) && ($field2['username'] != null && $field2['userpass'] != null)){
			$this->db->where('empid', $id);
			$q1 = $this->db->update('tblemployee', $field);
			$this->db->where('userid', $id);
			$q2 = $this->db->update('tblusers',$field2);
			if($q1 && $q2){
				return true;
			}else{
				return false;
			}
		}

		// if($field['empsex'] != null && $field['empposition'] != null){
		// 	$this->db->where('empid', $id);
		// 	$this->db->update('tblemployee', $field);
		// 	if($this->db->affected_rows() > 0){
		// 		return true;
		// 	}else{
		// 		return false;
		// 	}
		// }
	}

	public function addEmployee(){
		$field = array(
			'empid'			=>$this->security->xss_clean($this->input->post('txtEmployeeID')),
			'username'		=>$this->security->xss_clean($this->input->post('txtEmployeeUsername')),
			'empfname'		=>$this->security->xss_clean($this->input->post('txtEmployeeFirstName')),
			'empmname'		=>$this->security->xss_clean($this->input->post('txtEmployeeMiddleName')),
			'emplname'		=>$this->security->xss_clean($this->input->post('txtEmployeeLastName')),
			'empemail'		=>$this->security->xss_clean($this->input->post('txtEmployeeEmail')),
			'empsex'		=>$this->security->xss_clean($this->input->post('txtEmployeeSex')),
			'empposition'	=>$this->security->xss_clean($this->input->post('txtEmployeePosition')),
		);

		$field2 = array(
				'username' => $this->input->post('txtEmployeeUsername'),
				'userpass' => $this->input->post('txtEmployeePassword'),
				'usertype' => 'Employee'
		);

		if(($field['empsex'] != null && $field['empposition'] != null) && ($field2['username'] != null && $field2['userpass'] != null)){
			$q1 = $this->db->insert('tblemployee', $field);
			$q2 = $this->db->insert('tblusers',$field2);
			if($q1 && $q2){
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
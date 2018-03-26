<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {
    public function __construct(){
		parent::__construct();
	}
	public function isAccountExist(){
		$username = $this->input->post('username');
		$this->db->select('*');
		$this->db->from('tblusers');
		$this->db->where('username', $username);

		$result =  $this->db->get();
		
		if($result->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	public function loginUser(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$sql = "SELECT * FROM tblusers WHERE username='$user' && userpass='$pass';";
		$query = $this->db->query($sql);

		if($query->num_rows()>0){
			$result[0] = $query->row();
			$result[1] = true;
			if($query->row('usertype')=="Customer"){
				$getdata = $this->db->select('*')->from('tblcustomers')->where('username', $user)->get();
				$result[2] = $getdata->row();
				$result[3] = "Customer";
			}else{
				$getdata = $this->db->select('*')->from('tblemployee')->where('username', $user)->get();
				$result[2] = $getdata->row();
				$result[3] = "Employee";
			}
			return $result;
		}else{
			$result[1] = false;
			return $result;
		}


	}
	public function addCustomer(){
		$field = array(
				'custemail' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'custsex' => $this->input->post('sex'),
				'custfname' => $this->input->post('name'),
				'custlname' => $this->input->post('surname'),
				'billadd' => $this->input->post('bill-add'),
				'deliveradd' => $this->input->post('deliver-add')
			);
		$field2 = array(
				'username' => $this->input->post('username'),
				'userpass' => $this->input->post('password')
			);
		$q1 = $this->db->insert('tblusers',$field2);
		$q2 = $this->db->insert('tblcustomers',$field);

		if ($q1&&$q2){
			return true;
		}else{
			return false;
		}

	}
	public function editCustomer(){
		$username = $this->session->userdata('username');
		$field = array(
				'custemail' => $this->input->post('custemail'),
				'username' => $this->input->post('username'),
				'custsex' => $this->input->post('custsex'),
				'custfname' => $this->input->post('custfname'),
				'custlname' => $this->input->post('custlname'),
				'billadd' => $this->input->post('billadd'),
				'deliveradd' => $this->input->post('deladd')
			);
		$field2 = array(
				'username' => $this->input->post('username'),
				'userpass' => $this->input->post('password')
			);
		

		$this->db->where('username',$username);
		$this->db->update('tblusers',$field2);
		$this->db->where('username',$username);
		$this->db->update('tblcustomers',$field);
		
		if($this->db->affected_rows() > 0){
			$user = $field['username'];
			$this->db->where('username', $field['username']);
			$query = $this->db->get('tblusers');

			if($query->num_rows()==1){
				$getdata = $this->db->select('*')->from('tblcustomers')->where('username', $user)->get();
				$result[0] = $query->row();
				$result[1] = true;
				$result[2] = $getdata->row();
				return $result;
			}else{
				$result[1] = false;
				return $result;
			}
		}else{
			return false;
		}

	}

}
?>